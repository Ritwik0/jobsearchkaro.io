<?php
session_start();
?>
<html>
 <head>
 <title>
     Welcome To The Job Portal
 </title>
 <meta name="viewport" content="width=device-width,initial-scale=1.0">
 <link rel="stylesheet" href="part.css">
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>  
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css"> 
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
 </head> 
 <body>
<!-----------header-->

<section id="header">
<div class="menu-bar">
<nav class="navbar navbar-expand-lg navbar-light">
<a class="navbar-brand" href="#"><img src="image/job-seeker.jpg"></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNav">
<ul class="navbar-nav ml-auto">
<li class="nav-item">
<a class="nav-link" href="#">Home</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#">Jobs</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#">About</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#">Contact Us</a>
</li>
<li class="nav-item">
  <a class="nav-link" href="login.php">Login</a>
  </li>
</ul>
</div>
</nav>
</div>
<div class="banner text-center">
    <h1>JOBS NEAR ME</h1>
    <p>Subscribe To Web Page and Desiging Youtube Channels</p>
</div>
</section>
<div class="search-job text-center">
  <select name="cars" id="cars" class="form-control">
    <option value="0">Select State</option>
    <option value="1">WEST BENGAL</option>
    <option value="2">ANDHRA PRADESH</option>
    <option value="3">ARUNACHAL PRADESH</option>
  </select>
  <select name="cars" id="cars" class="form-control">
    <option value="0"> Select Company</option>
    <option value="1">TCS</option>
    <option value="2">Yazaki Pvt Ltd</option>
    <option value="3">Hella Automative Pvt Ltd</option>
  </select>

  <select name="cars" id="cars"  class="form-control">
    <option value="0">Select Location</option>
    <option value="1">Kolkata</option>
    <option value="2">Malda</option>
    <option value="3">South 24 Parganas</option>
  </select>
<input type="button" class="btn btn-primary" value="Find Jobs">
</div>
<!------top recuriters----->

<section id="recruiters">
    <div class="conatiner text-center">
    <h3>TOP RECRUITERS</h3>
    <div>
        <img src="image/dell.png">   
        <img src="image/oracle.png">
        <img src="image/cisco.png">
        <img src="image/netfliex.png">
        <img src="image/affect.png">
        <img src="image/amazon.png">
       </div>
       <div>
        <img src="image/Infosys.png">   
        <img src="image/byju.png">
        <img src="image/indeed.png">
        <img src="image/tnw.png">
        <img src="image/DANONE.png">
        <img src="image/IBM.png">
       </div>
       <div>
        <img src="image/adobe.png">   
        <img src="image/IDC.png">
        <img src="image/fedex.png">
        <img src="image/walmart.png">
        <img src="image/microsoft.png">
        <img src="image/forbes.png">
       </div>
    </div>
</section>
<section id="jobs">
<div class="container">
<h5>RECENT UPDATES</h5>
<div class="company-details">
<div class="job-update">
<h4><b>Seasoned Senior Python Developer(Fresher)</b></h4>
<p>XYZ Solution Pvt Ltd</p>
<i class="fa fa-briefcase" aria-hidden="true"></i><span> 0-1 yrs</span><br>
<i class="fa fa-rupee-sign" aria-hidden="true"></i><span> 3.50-4.00 Lacks p.a.</span><br>
<i class="fa fa-map-marker" aria-hidden="true"></i><span> Bangalore </span>
<p>Skills: 
<i class="fa fa-angle-double-right"></i><small>java</small><small> Python </small><small> HTML , CSS </small><small> .Net </small></p>
<div class="apply-btn">
<button type="button" class="btn btn-primary">Apply</button>
</div>
<h4><b>Seasoned Senior Python Developer(Fresher)</b></h4>
<p>ABC Solution Pvt Ltd</p>
<i class="fa fa-briefcase" aria-hidden="true"></i><span> 0-1 yrs</span><br>
<i class="fa fa-rupee-sign" aria-hidden="true"></i><span> 3.50-4.00 Lacks p.a.</span><br>
<i class="fa fa-map-marker" aria-hidden="true"></i><span> Chennai </span>
<p>Skills: 
<i class="fa fa-angle-double-right"></i><small>java</small><small> Python </small><small> HTML , CSS </small><small> .Net </small></p>
<div class="apply-btn">
<button type="button" class="btn btn-primary">Apply</button>
</div>
<h4><b>Seasoned Senior Python Developer(Fresher)</b></h4>
<p>EFG Solution Pvt Ltd</p>
<i class="fa fa-briefcase" aria-hidden="true"></i><span> 0-1 yrs</span><br>
<i class="fa fa-rupee-sign" aria-hidden="true"></i><span> 3.50-4.00 Lacks p.a.</span><br>
<i class="fa fa-map-marker" aria-hidden="true"></i><span> Pune </span>
<p>Skills: 
<i class="fa fa-angle-double-right"></i><small>java</small><small> Python </small><small> HTML , CSS </small><small> .Net </small></p>
<div class="apply-btn">
<button type="button" class="btn btn-primary">Apply</button>
</div>
<h4><b>Seasoned Senior Python Developer(Fresher)</b></h4>
<p>IJK Solution Pvt Ltd</p>
<i class="fa fa-briefcase" aria-hidden="true"></i><span> 0-1 yrs</span><br>
<i class="fa fa-rupee-sign" aria-hidden="true"></i><span> 3.50-4.00 Lacks p.a.</span><br>
<i class="fa fa-map-marker" aria-hidden="true"></i><span> Vishakapattanam </span>
<p>Skills: 
<i class="fa fa-angle-double-right"></i><small>java</small><small> Python </small><small> HTML , CSS </small><small> .Net </small></p>
<div class="apply-btn">
<button type="button" class="btn btn-primary">Apply</button>
</div>
</div>
</div>
<ul class="pagelink text-center">
<li class="left-arrow">&#8592;</li>
<li class="active">1</li>
<li>2</li>
<li>4</li>
<li>5</li>
<li class="right-arrow">&#8594;</li>
</ul>
</div>
</section>

<section id="sites-states">
    <div class="container text-center">
      <h3>JOBSEEKER SITE STATES</h3>
      <div class="row">
        <div class="col-md-6">
          <div class="row">
            <div class="col-6">
              <div class="stats-box">
                <i class="fa fa-user"></i><span><small> 100k +</small></span>
                <p>Job Seeker</p>
              </div>
            </div>
            <div class="col-6">
              <div class="stats-box">
                <i class="fa fa-users"></i
                ><span><small> 500 +</small></span>
                <p>Employers</p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-6">
          <div class="row">
            <div class="col-6">
              <div class="stats-box">
                <i class="fa fa-hand-peace"></i><span><small> 10k +</small></span>
                <p>Active Jobs</p>
              </div>
            </div>
            <div class="col-6">
              <div class="stats-box">
                <i class="fa fa-building"></i
                ><span><small> 400 +</small></span>
                <p>Companies</p>
              </div>
            </div>
          </div>
        </div>


      </div>
    </div>
  </section>

<section id="app-banner" class="text-center">
<h1>Find Jobs On Mobile,Download Jobseeker App</h1>
    <img src="image/app-store.png">
    <img src="image/play-store.png">
</section>
<section id="footer" class="text-center">
<img src="image/job-logo.jpg" class="footer-image">
<p>Subscribe To Our Youtube Channels For More Job Update.<br>Press the bell icon to get notification of new video</p>
<a href="#"><img src="image/tw-icon.png"></a>
<a href="#"><img src="image/fb-icon.png"></a>
<a href="#"><img src="image/wp-icon.png"></a>
<a href="#"><img src="image/yb-icon.png"></a>
<hr>
<p>Made With <i class="fa fa-heart"></i>by Web Page and Desiging</p>
</section>
</body>  
</html>