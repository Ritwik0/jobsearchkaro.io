<?php

include 'dbcon.php';
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    //Check if username is empty
    if (empty(trim($_POST["username"]))) {
        $username_err = "Username cannot be blank";
    } else {
        $sql = "SELECT id FROM signup WHERE username =?";
        $stmt = mysqli_prepare($conn, $sql);
        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            //Set the value param username
            $param_username = trim($_POST['username']);

            if (mysqli_stmt_execute($stmt)) {
                mysqli_stmt_store_result($stmt);
                if (mysqli_stmt_num_rows($stmt) == 1) {
                    $username_err = "This username is already exists";
                } else {
                    $username = trim($_POST['username']);
                }
            } else {
                echo "something went wrong";
            }
        }
    }
    //mysqli_stmt_close($stmt);
}

//Check for password
if (empty(trim($_POST["password"]))) {
    $password_err = "Password cannot be blank";
} elseif (strlen(trim($_POST['password'])) < 9) {
    $password_err = "Password cannot be less than 9 characters";
} else {
    $password = trim($_POST["password"]);
}
//Check for confirm password
if (trim($_POST["confirm_password"]) != trim($_POST["confirm_password"])) {
    $password_err = "Password cannot be matched";
}

//If there was no error
if (empty($username_err) && empty($password_err) && empty($confirm_password_err)) {
    $t = date("Y-m-d H:i:s", time());
    $sql = "INSERT INTO signup(username,password,created) VALUES(?,?,'$t')";
    $stmt = mysqli_prepare($conn, $sql);
    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);
        $param_username = $username;
        $param_password = password_hash($password, PASSWORD_DEFAULT);

        //Try to execute the query
        if (mysqli_stmt_execute($stmt)) {
            header("location:login.php");
        } else {
            echo "Something went wrong... cannot redirect!";
        }
    }
     mysqli_stmt_close($stmt);
}
mysqli_close($conn);



?>
<!DOCTYPE html>
<html>

<head>
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="signup.css">
</head>

<body>
    <form action="signup.php" method="POST">
        <h1>Register</h1>
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="password" placeholder="Password">
        <input type="password" name="confirm_password" placeholder="Confirm Password">
        <button type="submit">Register Here</button>
        <div class="signin_link">
            Already a User? <a href="login.php">Signin</a>
        </div>
    </form>
</body>

</html>