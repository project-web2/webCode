<?php
require "scripts/session.php";
if (!isset($_SESSION["user"])) {
    header("location:login.php");
    die();
  }
require "scripts/db.php";
$con = connect();


$userid = $_SESSION['user'];//(isset($_GET['uid']) ? $_GET['uid'] : NULL);

 $sql = "SELECT * FROM technician WHERE Tid='$userid'";
 $result = mysqli_query($con, $sql);
 $name = mysqli_fetch_assoc($result);

 $sql2 = "SELECT * FROM Rate WHERE Tech_ID='$userid' ORDER BY Rate_id; ";
 $result2 = mysqli_query($con, $sql2);
 $all_rate = array();
 while($line = mysqli_fetch_assoc($result2)){
   $all_rate[] =$line;
 }

 $p_array = array_column($all_rate, "Professional");
 $averageP = array_sum($p_array)/count($p_array);

$f_array = array_column($all_rate, "fixed");
$averageF = array_sum($f_array)/count($f_array);

$s_array = array_column($all_rate, "Satisfi");
$averageS =array_sum($s_array)/count($s_array);
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">

<title>Technician Profile | CPUber</title>
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
                <a class="dropdown-item" href="HomeTech1.php">My account</a>
                <a class="dropdown-item" href="index.php">Log out</a>
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
<p class="sm-width-95 sm-margin-auto"><?php echo $name['tech_bio']; ?></p>


</div>
</div>

<div class="col-lg-8 col-md-7">
<div class="team-single-text padding-50px-left sm-no-padding-left">
    <br>

    <h4 class="font-size38 sm-font-size32 xs-font-size30">
    <?php  echo $name['name']; ?>
    </h4>

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
<p>
  <?php echo $name['speciality'];?></p>
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
<p><?php  echo $name['YO']." years"; ?></p>
</div>
</div>
</li>

<li>
<div class="row">
<div class="col-md-5 col-5">
<i class="fas fa-map-marker-alt text-green"></i>
<strong class="margin-10px-left text-green">Address:</strong>
</div>
<div class="col-md-7 col-7">
<p><?php  echo $name['address']; ?></p>
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
<div class="col-5 text-right"><?php echo $averageP.'%'; ?></div>
</div>
</div>

<div class="custom-progress progress">
<div role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $averageP; ?>%" class="animated custom-bar progress-bar slideInLeft bg-sky"></div>
</div>

<div class="progress-text">
<div class="row">
<div class="col-7">Customer Satisfaction</div>
<div class="col-5 text-right"><?php echo $averageS.'%'; ?></div>
</div>
</div>

<div class="custom-progress progress">
<div role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $averageS; ?>%" class="animated custom-bar progress-bar slideInLeft bg-orange"></div>
</div>

<div class="progress-text">
<div class="row">
<div class="col-7">Fixed Issues</div>
<div class="col-5 text-right"><?php echo $averageF.'%'; ?></div>
</div>
</div>

<div class="custom-progress progress">
<div role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $averageF; ?>%" class="animated custom-bar progress-bar slideInLeft bg-green"></div>
</div>


<button class="btn peach-gradient" onclick="location.href='reveiw.html'"> Rate Technician</button>
</div>
<br>
<br>

</div>
</div>


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
</div>
</body>
<footer class="page-footer font-small unique-color-dark">

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2020 KSU
    </div>
    <!-- Copyright -->

  </footer>
</html>
