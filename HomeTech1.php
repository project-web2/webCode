<?php
require "scripts/session.php";
if (!isset($_SESSION["user"])) {
    header("location:login.php");
    die();
  }
require "scripts/db.php";

$con = connect();

?>

<?php
 $userid = $_SESSION['user'];

 $sql = "SELECT * FROM technician WHERE Tid='$userid'";
 $result = mysqli_query($con, $sql);
 $name = mysqli_fetch_assoc($result);

 $sql2 = "SELECT * FROM Rate WHERE Tech_ID='$userid' ORDER BY Rate_id; ";
 $result2 = mysqli_query($con, $sql2);
 $all_rate = array();
 while($line = mysqli_fetch_assoc($result2)){
 $all_rate[] =$line;}


 $p_array = array_column($all_rate, "Professional");
 $averageP = array_sum($p_array)/count($p_array);

$f_array = array_column($all_rate, "fixed");
$averageF = array_sum($f_array)/count($f_array);

$s_array = array_column($all_rate, "Satisfi");
$averageS =array_sum($s_array)/count($s_array);

function get_pending_orders(){
global $con;
global $userid;
$pend = array();

$sql3 = "SELECT * FROM request WHERE technician_id IS NULL AND device_type=(SELECT speciality FROM technician WHERE Tid='$userid');";
$result3 = mysqli_query($con, $sql3);
while($line2 = mysqli_fetch_assoc($result3)){
$pend[]= $line2;
}
return $pend;
}


function get_completed_orders(){
global $con;
$pend = array();
global $userid;
$sql4 = "SELECT * FROM request WHERE technician_id='$userid';";
$result4 = mysqli_query($con, $sql4);
while($line3 = mysqli_fetch_assoc($result4)){
$pend[]= $line3;
}
return $pend;
}

function insertuponaccept(){
  global $con;
  $sql5 = "UPDATE request SET technician_id = '$userid' WHERE Rid ='$req_id'";
  if ($con->query($sql5) === TRUE){
  } else{
  echo "Error updating record: " . $con->error;}
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    
<title>Technician Home | CPUber</title>
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
<body onload='check_rejects()'>


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
<p class="sm-width-95 sm-margin-auto"><?php echo $name['bio']; ?></p>

</div>
</div>

<div class="col-lg-8 col-md-7">
<div class="team-single-text padding-50px-left sm-no-padding-left">
    <br>
<h4 class="font-size38 sm-font-size32 xs-font-size30"><?php  echo $name['name']; ?></h4>
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
<p><?php echo $name['speciality'];?></p>
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
<p><?php  echo $name['YOE']." years"; ?></p>
</div>
</div>
</li>

<li>
<div class="row">
<div class="col-md-5 col-5">
<i class="fas fa-map-marker-alt text-green"></i>
<strong class="margin-10px-left text-green">address:</strong>
</div>
<div class="col-md-7 col-7">
<p><?php  echo $name['address']; ?></p>
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
<p><?php echo $name['phone']; ?></p>
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
<p><a href="javascript:void(0)"><?php echo $name['email']; ?></a></p>
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
<?php
  $pending_orders = get_pending_orders();
  foreach ($pending_orders as $ap){
  $req_id = $ap['Rid'];
  $device_t = $ap['device_type'];
  $device_pd = $ap['description']; /*the one after details: */
  $req_time = $ap['time'];

?>
  <div class="col-l req1" id="<?php echo $req_id ?>">
  <p class="margin-10px-left text-yellow">#<?php echo $req_id; ?></p>
  <p class="DeviceType1">Device Type: <?php echo $device_t?></p>
  <p class="Pdetails">Details: <?php echo $device_pd?> </p>
  <p class="dates"><?php echo $req_time ?></p>

  <button type="submit" class="btn blue-gradient" onclick="myAjax(this, <?php echo $userid ?>)" id="<?php echo $req_id ?>">Accept</button>

  <button  class="btn purple-gradient" onclick="deny(this)" id="<?php echo $req_id ?>">Deny</button>

  </div>
  <?php
}

 ?>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script>
 var num = 0;
 var rejects = [];

 function deny(ex){
 rejects[num] = ex.id;
 num++;
 localStorage.setItem("rejects", JSON.stringify(rejects));
 check_rejects();
}

function check_rejects(){
var retrievedData = localStorage.getItem("rejects");
var rejects2 = JSON.parse(retrievedData);
for(var i=0; i<rejects2.length; i++){
var ids = rejects2[i];
document.getElementById(ids).style.display = "none";
}
}

function myAjax(dd, tid){
var xmlhttp = new XMLHttpRequest();
var reqtobeupdated = dd.id;
var tidd = tid;
      xmlhttp.onreadystatechange = function() {
          if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
          {
              alert(xmlhttp.responseText);
          }
      };
      xmlhttp.open("GET", "insertuponaccept.php?id=" +reqtobeupdated+"&tid="+tidd, true);
      xmlhttp.send();
}

</script>


</div>

<div class="row justify-content-start Row4">
<h3>Finished Requests:</h3>
<br>
<h3><?php global $counter; echo $counter;?></h3>
</div>


<div class="row justify-content-start Row5">

  <?php
    $pending_orders = get_completed_orders();
    foreach ($pending_orders as $ap){
    $req_id = $ap['Rid'];
    $device_t = $ap['device_type'];
    $device_pd = $ap['description']; /*the one after details: */
    $req_time = $ap['time'];

  ?>
    <div class="col-l req1">
    <p class="margin-10px-left text-yellow">#<?php echo $req_id; ?></p>
    <button  class="btn purple-gradient" id="<?php echo $req_id ?>">View Details</button>

    </div>
    <?php
  }

   ?>

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
