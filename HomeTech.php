<?php
//test git
//3 test 
require "scripts/session.php";
if (!isset($_SESSION)) {
    header("location:login.php");
    die();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">

<title>CPUber | Technician Home </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
<!-- Google Fonts Roboto -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<!-- Material Design Bootstrap -->
<link rel="stylesheet" href="css/mdb.min.css">
<!-- Your custom styles (optional) -->
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/HT.css">

</head>
<body>


    <nav class="mb-1 navbar navbar-expand-lg navbar-dark ">
        <a class="navbar-brand" href="index.php"> <img src="img/cpuberlogo.png" alt="logo" height="100px">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
          aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">

            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-4" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-user"></i> Profile </a>
              <div class="dropdown-menu dropdown-menu-right dropdown-info" aria-labelledby="navbarDropdownMenuLink-4">
                <a class="dropdown-item" href="#">My account</a>
                <a class="dropdown-item" href="logout.php">Log out</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>
      <!--/.Navbar -->








<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
<div class="container">
<div class="team-single">
<div class="row">
<div class="col-lg-4 col-md-5 xs-margin-30px-bottom">

<div class="team-single-img">
<img class="pp" src="img/techimg.jpg" alt="Technician profile picture">
</div>

<div class="bg-light-gray padding-30px-all md-padding-25px-all sm-padding-20px-all text-center">
<h4 class="margin-10px-bottom font-size24 md-font-size22 sm-font-size20 font-weight-600">Technician</h4>
<p class="sm-width-95 sm-margin-auto">I specialize in rebooting phones, Fixing screens, Restoring pictures and anything phone related</p>

<div class="margin-20px-top team-single-icons">
<ul class="no-margin">
<li><a href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a></li>
<li><a href="javascript:void(0)"><i class="fab fa-twitter"></i></a></li>
<li><a href="javascript:void(0)"><i class="fab fa-google-plus-g"></i></a></li>
<li><a href="javascript:void(0)"><i class="fab fa-instagram"></i></a></li>
</ul>
</div>

</div>
</div>

<div class="col-lg-8 col-md-7">
<div class="team-single-text padding-50px-left sm-no-padding-left">
    <br>
<h4 class="font-size38 sm-font-size32 xs-font-size30">Khalid Abdullah</h4>
<br>
<div class="contact-info-section margin-40px-tb">
<ul class="list-style9 no-margin">

<li>
<div class="row">
<div class="col-md-5 col-5">
<i class="fas fa-graduation-cap text-orange"></i>
<strong class="margin-10px-left text-orange">Profession:</strong>
</div>
<div class="col-md-7 col-7">
<p>Mobile Technician</p>
</div>
</div>
</li>

<li>
<div class="row">
<div class="col-md-5 col-5">
<i class="far fa-gem text-yellow"></i>
<strong class="margin-10px-left text-yellow">Experience:</strong>
</div>
<div class="col-md-7 col-7">
<p>4 Years</p>
</div>
</div>
</li>

<li>
<div class="row">
<div class="col-md-5 col-5">
<i class="fas fa-map-marker-alt text-green"></i>
<strong class="margin-10px-left text-green">City:</strong>
</div>
<div class="col-md-7 col-7">
<p>Riyadh</p>
</div>
</div>
</li>

<li>
<div class="row">
<div class="col-md-5 col-5">
<i class="fas fa-mobile-alt text-purple"></i>
<strong class="margin-10px-left xs-margin-four-left text-purple">Phone:</strong>
</div>
<div class="col-md-7 col-7">
<p>(+966) 505 123456</p>
</div>
</div>
</li>

<li>
<div class="row">
<div class="col-md-5 col-5">
<i class="fas fa-envelope text-pink"></i>
<strong class="margin-10px-left xs-margin-four-left text-pink">Email:</strong>
</div>
<div class="col-md-7 col-7">
<p><a href="javascript:void(0)">tech@email.com</a></p>
</div>
</div>
</li>

</ul>
</div>

<h5 class="font-size24 sm-font-size22 xs-font-size20">Current Review state:</h5>

<div class="sm-no-margin">
<div class="progress-text">
<div class="row">
<div class="col-7">Professionalism</div>
<div class="col-5 text-right">90%</div>
</div>
</div>

<div class="custom-progress progress">
<div role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:90%" class="animated custom-bar progress-bar slideInLeft bg-sky"></div>
</div>

<div class="progress-text">
<div class="row">
<div class="col-7">Customer Satisfaction</div>
<div class="col-5 text-right">95%</div>
</div>
</div>

<div class="custom-progress progress">
<div role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:95%" class="animated custom-bar progress-bar slideInLeft bg-orange"></div>
</div>

<div class="progress-text">
<div class="row">
<div class="col-7">Fixed Issues</div>
<div class="col-5 text-right">100%</div>
</div>
</div>

<div class="custom-progress progress">
<div role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:100%" class="animated custom-bar progress-bar slideInLeft bg-green"></div>
</div>

</div>

</div>
</div>

<div class="col-md-12">

</div>
</div>
</div>

<!-- Pending requests-->
<div class="row justify-content-start Row2">
<h3>Pending Requests:</h3>
</div>

<div class="row justify-content-start Row3">

<div class="col-3 req1">
<p class="margin-10px-left text-yellow">#0003</p>
<p class="DeviceType1">Device Type: phone</p>
<p class="DeviceType2">Company: Apple</p>
<p class="Dproblem">The device is not working</p>
<p class="Pdetails">Details: </p>
<p class="dates">5-1-2020</p>
<button class="btn blue-gradient">Accept</button>
<button class="btn purple-gradient">Deny</button>
</div>

<div class="col-3 req2">
<p class="margin-10px-left text-purple">#0004</p>
<p class="DeviceType1">Device Type: phone</p>
<p class="DeviceType2">Company: Samsung</p>
<p class="Dproblem">The device fell into water</p>
<p class="Pdetails">Details: </p>
<p class="dates">4-1-2020</p>
<button class="btn blue-gradient">Accept</button>
<button class="btn purple-gradient">Deny</button>
</div>

<div class="col-3 req3">
<p class="margin-10px-left text-orange">#0005</p>
<p class="DeviceType1">Device Type: phone</p>
<p class="DeviceType2">Company: other</p>
<p class="Dproblem">The screen is broken</p>
<p class="Pdetails">Details: my phone is from Huawei</p>
<p class="dates">3-1-2020</p>
<button class="btn blue-gradient">Accept</button>
<button class="btn purple-gradient">Deny</button>
</div>
</div>

<div class="row justify-content-start Row4">
<h3>Finished Requests:</h3>
</div>


<div class="row justify-content-start Row5">

<div class="col-3 Freq1">
<p class="margin-10px-left text-pink">#0001</p>
<p class="DeviceType1">Device Type: phone</p>
<p class="DeviceType2">Company: apple</p>
<p class="Dproblem">The screen is broken</p>
<p class="Pdetails">Details: it's an iphone 7</p>
<p class="dates">1-1-2020</p>
</div>

<div class="col-3 Freq2">
<p class="margin-10px-left text-green">#0002</p>
<p class="DeviceType1">Device Type: phone</p>
<p class="DeviceType2">Company: Samsung</p>
<p class="Dproblem">The device fell into water</p>
<p class="Pdetails">Details: audio was affected with water damage</p>
<p class="dates">2-1-2020</p>
</div>

</div>

</div>
<!-- jQuery -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="js/mdb.min.js"></script>
<!-- Your custom scripts (optional) -->
<script type="text/javascript"></script>
</body>
<footer class="page-footer font-small unique-color-dark">

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2020 KSU
    </div>
    <!-- Copyright -->

  </footer>
</html>
