<?php
include 'dbcon.php';
session_start();
if(isset($_SESSION['username']))
{
    header("location:index.php");
    exit;
}

$username = $password = "";
$err = $password_err = "";
if($_SERVER['REQUEST_METHOD'] == "POST"){
    if(empty(trim($_POST["username"])) || empty(trim($_POST["password"])))
    {
        $err = "Please enter username+password";
    }
    else{
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
    }
    if(empty($err))
    {
        $sql = "SELECT id,username,password FROM signup WHERE username = ?";
        $stmt = mysqli_prepare($conn,$sql);
        mysqli_stmt_bind_param($stmt,"s",$param_username);
        $param_username = $username;
        if(mysqli_stmt_execute($stmt)){
            mysqli_stmt_store_result($stmt);
            if (mysqli_stmt_num_rows($stmt) == 1) {
                mysqli_stmt_bind_result($stmt,$id,$username,$hashed_password);
                if(mysqli_stmt_fetch($stmt))
                {
                    if(password_verify($password,$hashed_password))
                    {
                        session_start();
                        $_SESSION["username"] = $username;
                        $_SESSION["id"] = $id;
                        $_SESSION["loggedin"] = true;
                        
                        header("location:index.php");
                    }
                }
            }
        }
    }
}


?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Login Form</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="center">
        <h1>Login</h1>
        <form  action ="login.php" method="POST">
            <div class="txt_field">
                <input type="text" name="username" >
                <span></span>
                <label>Username</label>
            </div>
            <div class="txt_field">
                <input type="password" name="password">
                <span></span>
                <label>Password</label>
            </div>
            <div class="pass">Forgot Password?</div>
            <input type="submit" value="Login">
            <div class="signup_link">
                Not a member? <a href="signup.php">Signup</a>
            </div>
        </form>
    </div>
</body>
</html>