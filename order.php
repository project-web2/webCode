<?php
require "scripts/db.php";
require "scripts/session.php";
$userid=$_SESSION["user"];
if (!isset($_SESSION["user"])) {
    header("location:login.php");
    die();
  }
global $con;
$con = connect();
?>
<html>
    <html lang="en">
<head>
    <meta charset="UTF-8">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title> CPUber | My Orders</title>
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script>
		$(document).ready(function(){
			$(".hamburger").click(function(){
			   $(".wrapper").toggleClass("collapse");
			});
		});
	</script>
   <script>
function deleteRow(r) {
  var i = r.parentNode.parentNode.rowIndex;
  document.getElementById("myTable").deleteRow(i);
}
</script>


    </head>
    <style>

    @import url('https://fonts.googleapis.com/css?family=Montserrat:400,600,700&display=swap');

*{
  margin: 0;
  padding: 0;
  list-style: none;
  text-decoration: none;
  box-sizing: border-box;
  font-family: 'Montserrat', sans-serif;
}

body{
  background: #e1ecf2;
     background: rgb(2,0,36);
  background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(40,75,105,1) 35%, rgba(35,70,115,0.927608543417367) 100%);
}



.wrapper .top_navbar{
  width: calc(100% - 10px);
  height: 70px;
  display: flex;
  position: fixed;
  top: 0px;
}

.wrapper .top_navbar .hamburger{
  width: 70px;
  height: 100%;
  background:#161c27;
  padding: 15px 17px;
  cursor: pointer;
}

.wrapper .top_navbar .hamburger div{
  width: 30px;
  height: 4px;
  background: #fff;
  margin: 5px 0;

}

.wrapper .top_navbar .top_menu{
 width: 100%;
  display: flex;
  justify-content: space-between;
  align-items: center;
    padding: 0 20px;
  background:linear-gradient(90deg, rgba(2,0,36,1)0%, rgba(40,75,105,1) 25%, rgba(35,70,115,0.927608543417367) 100%);
  box-shadow: 0 1px 1px rgba(0,0,0,0.1);
}

.wrapper .top_navbar .top_menu .logo{
  color: #fff;
  font-size: 24px;
  font-weight: 700;
  letter-spacing: 3px;
}
       img {
  display: inline-block;
}
.wrapper .top_navbar .top_menu ul{
  display: flex;
}

.wrapper .top_navbar .top_menu ul li a{
   display: block;
 margin: 0 10px;
width: 35px;
    height: 35px;
    line-height: 35px;
  text-align: center;
  border: 1px solid #161c27;

  color: #fff;
}

.wrapper .top_navbar .top_menu ul li a:hover{
  background: #161c27;
  color: #fff;
}

.wrapper .top_navbar .top_menu ul li a:hover i{
  color: #fff;
}

.wrapper .sidebar{
  position: fixed;
  background: #161c27;
  width: 200px;
  height: calc(100% - 80px);

}

.wrapper .sidebar ul li a{
    display: block;
    padding: 20px;
    color: #fff;
    position: relative;
    margin-bottom: 1px;
    color: #fff;
    white-space: nowrap;
}

.wrapper .sidebar ul li a:before{
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 3px;
  height: 100%;
  background: #fff;
  display: none;
}

.wrapper .sidebar ul li a span.icon{
  margin-right: 10px;
  display: inline-block;
}

.wrapper .sidebar ul li a span.title{
  display: inline-block;
}

.wrapper .sidebar ul li a:hover,
.wrapper .sidebar ul li a.active{
  background: rgba(40,75,105,1);
  color: #fff;
}

.wrapper .sidebar ul li a:hover:before,
.wrapper .sidebar ul li a.active:before{
  display: block;
}

.wrapper .main_container{
  width: (100% - 200px);
  margin-top: 70px;
  margin-left: 200px;
  padding: 15px;
  transition: all 0.3s ease;
}

.wrapper .main_container .item{
  font-size: 14px;
    color: white;
    padding-left: 22px;
    padding-top: 70px;/* */
}


.wrapper.collapse .sidebar{
  width: 70px;
}

.wrapper.collapse .sidebar ul li a{
  text-align: center;
}

.wrapper.collapse .sidebar ul li a span.icon{
  margin: 0;
}

.wrapper.collapse .sidebar ul li a span.title{
  display: none;
}

.wrapper.collapse .main_container{
  width: (100% - 70px);
  margin-left: 70px;

}



table {

    background: #fff;
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {background-color: #f2f2f2;}





        .badge-danger-light {
    color: #dc3545;
    background-color: #fbe7e9;
}
.badge {
    display: inline-block;
    padding: .5em .7em;
    font-size: 75%;
    font-weight: 700;
    line-height: 1;
    text-align: center;
    white-space: nowrap;
    vertical-align: baseline;
    border-radius: 5px;
    transition: color 0.15s ease-in-out,
        background-color 0.15s ease-in-out,border-color 0.15s ease-in-out,box-shadow 0.15s ease-in-out;
}

    .badge-success-light {
    color: #28a745;
    background-color: #e5f4e9;
}
.badge {
    display: inline-block;
    padding: .5em .7em;
    font-size: 75%;
    font-weight: 700;
    line-height: 1;
    text-align: center;
    white-space: nowrap;
    vertical-align: baseline;
    border-radius: 5px;
    transition: color 0.15s ease-in-out,background-color 0.15s ease-in-out,border-color 0.15s ease-in-out,box-shadow 0.15s ease-in-out;
}

 .badge-info-light {
    color: #17a2b8;
background-color: #e3f4f6;
}
.badge {
    display: inline-block;
    padding: .5em .7em;
    font-size: 75%;
    font-weight: 700;
    line-height: 1;
    text-align: center;
    white-space: nowrap;
    vertical-align: baseline;
    border-radius: 5px;
    transition: color 0.15s ease-in-out,background-color 0.15s ease-in-out,border-color 0.15s ease-in-out,box-shadow 0.15s ease-in-out;
}


.btn {
 background-color: #fff;
  border: none;
  color: black;


}

    input[type="button"]{
 background-color: #fff;
  border: none;
  color: black;


}

    </style>

<body>


<div class="wrapper">

  <div class="top_navbar">
    <div class="hamburger">
       <div class="one"></div>
       <div class="two"></div>
       <div class="three"></div>
    </div>
    <div class="top_menu">
      <div class="logo">
          <img src="img/cpuberlogo.png" alt="logo" height="60px">
      </div>
    </div>
  </div>

  <div class="sidebar">
     <ul>
        <!--<li><a href="homeCust.php"   >
          <span class="icon"><img src="img/prof.png" width="20" height="20"  ></span>
          <span class="title">Profile</span>
        </a></li>-->
        <li><a href="NewReq.php" >
          <span class="icon"><img src="img/add.png" width="20" height="20" ></span>
          <span class="title">New Requst</span>
          </a></li>
        <li><a href="order.php" class="active">
          <span class="icon"><img src="img/order2.png" width="20" height="20" ></span>
          <span class="title">Order</span>
          </a></li>
        <li><a href="logout.php" >
          <span class="icon"><img src="img/logout.png"width="20" height="20" ></span>
          <span class="title">Logout</span>
          </a></li>

    </ul>
  </div>
  <div class="main_container">
     <div class="item">
<h2>Pending Orders: </h2><br><hr><br>
        <div style="overflow-x:auto;">
  <table id="myTable">
    <tr>
      <th>Order#</th>
      <th>Date/Time</th>
      <th>Price</th>
      <th>Action</th>
    </tr>
        <?php
    $qry="SELECT *
    FROM request
    WHERE technician_id IS NULL AND customer_id='$userid'
    ORDER BY time DESC ";
    $res=mysqli_query($con,$qry);
    $nums = mysqli_num_rows($res);
    while($r= mysqli_fetch_array($res)){
    ?>
    <tr>
      <td><?php  echo $r['Rid']; ?></td>
      <td><?php  echo $r['time']; ?></td>
      <td><?php  echo $r['price']; ?></td>
      <td><a  href="viewPending.php" ><i class="fa fa-eye"></i></a><br><br>
          <a  href="edit.html" ><i class="fa fa-edit"></i></a><br><br>
     <input type="button" value="X" onclick="deleteRow(this)"></td>
    </tr>
   <?php   }
      ?>
  </table>
</div>
        <br><hr>
    </div>



  </div>

    <div class="main_container">
    <div class="item">
<h2>Completed Orders: </h2><br><hr><br>
        <div style="overflow-x:auto;">
  <table>
    <tr>
   <th>Order#</th>
      <th>Date/Time</th>
      <th>Price</th>
      <th>Action</th>
    </tr>
        <?php
    $qry="SELECT *
         FROM request
         WHERE technician_id != 0 AND customer_id='$userid'
        ORDER BY time DESC
         ";

    $res=mysqli_query($con,$qry);
    $nums = mysqli_num_rows($res);
    while($r= mysqli_fetch_array($res)){
    ?>
    <tr>
      <td><?php  echo $r['Rid']; ?></td>
      <td><?php  echo $r['time']; ?></td>
      <td><?php  echo $r['price']; ?></td>
      <td><a  href="viewCo.php" ><i class="fa fa-eye"></i></a></td>

    </tr>
   <?php   }
      ?>
  </table><br><hr><br>
</div>
    </div>
  </div>



</div>


    </body>


</html>
