<?php
require "scripts/session.php";
if (! isset($_SESSION["user"])) {
    header("location:login.php");
    die();
}
?>
<html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title> CPUber | Customer Home</title>
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script>
        $(document).ready(function () {
            $(".hamburger").click(function () {
                $(".wrapper").toggleClass("collapse");
            });
        });
    </script>

</head>
<style>

    @import url('https://fonts.googleapis.com/css?family=Montserrat:400,600,700&display=swap');

    * {
        margin: 0;
        padding: 0;
        list-style: none;
        text-decoration: none;
        box-sizing: border-box;
        font-family: 'Montserrat', sans-serif;

    }

    body {
        background: rgb(2, 0, 36);
        background: linear-gradient(90deg, rgba(2, 0, 36, 1) 0%, rgba(40, 75, 105, 1) 35%, rgba(35, 70, 115, 0.927608543417367) 100%);
    }


    .wrapper .top_navbar {
        width: calc(200% - 10px);
        height: 70px;
        display: flex;
        position: fixed;
        top: 0px;


    }

    .wrapper .top_navbar .hamburger {
        width: 70px;
        height: 100%;
        background: #161c27;
        padding: 15px 17px;

        cursor: pointer;
    }

    .wrapper .top_navbar .hamburger div {
        width: 30px;
        height: 4px;
        background: #fff;
        margin: 5px 0;

    }

    .wrapper .top_navbar .top_menu {
        width: 100%;


        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0 20px;
        background: linear-gradient(90deg, rgba(2, 0, 36, 1) 0%, rgba(40, 75, 105, 1) 15%, rgba(35, 70, 115, 0.927608543417367) 100%);
        box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
    }

    .wrapper .top_navbar .top_menu .logo {
        color: #fff;
        font-size: 24px;
        font-weight: 700;
        letter-spacing: 3px;


    }

    img {
        display: inline-block;
    }

    .wrapper .top_navbar .top_menu ul {
        display: flex;
    }

    .wrapper .top_navbar .top_menu ul li a {
        display: block;
        margin: 0 10px;
        width: 35px;
        height: 35px;
        line-height: 35px;
        text-align: center;
        border: 1px solid #161c27;

        color: #fff;
    }

    .wrapper .top_navbar .top_menu ul li a:hover {
        background: #161c27;
        color: #fff;
    }

    .wrapper .top_navbar .top_menu ul li a:hover i {
        color: #fff;
    }

    .wrapper .sidebar {
        position: fixed;
        background: #161c27;
        width: 200px;
        height: calc(100% - 80px);


    }

    .wrapper .sidebar ul li a {
        display: block;
        padding: 20px;
        color: #fff;
        position: relative;
        margin-bottom: 1px;
        color: #fff;
        white-space: nowrap;

    }

    .wrapper .sidebar ul li a:before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 3px;
        height: 100%;
        background: #fff;
        display: none;
    }

    .wrapper .sidebar ul li a span.icon {
        margin-right: 10px;
        display: inline-block;
    }

    .wrapper .sidebar ul li a span.title {
        display: inline-block;
    }

    .wrapper .sidebar ul li a:hover,
    .wrapper .sidebar ul li a.active {
        background: rgba(40, 75, 105, 1);
        color: #fff;
    }

    .wrapper .sidebar ul li a:hover:before,
    .wrapper .sidebar ul li a.active:before {
        display: block;
    }

    .wrapper .main_container {
        width: (100% -200px);
        margin-top: 70px;
        margin-left: 200px;
        padding: 15px;
        transition: all 0.3s ease;


    }

    .wrapper .main_container .item {
        font-size: 14px;
        color: white;
        padding-left: 22px;
    }

    .wrapper.collapse .sidebar {
        width: 70px;
    }

    .wrapper.collapse .sidebar ul li a {
        text-align: center;
    }

    .wrapper.collapse .sidebar ul li a span.icon {
        margin: 0;
    }

    .wrapper.collapse .sidebar ul li a span.title {
        display: none;
    }

    .wrapper.collapse .main_container {
        width: (100% -70px);
        margin-left: 70px;
    }

    input[type=text], input[type=password] {
        width: 50%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    input[type=submit] {
        width: 50%;
        background: linear-gradient(40deg, #2096ff, #05ffa3) !important;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type=submit]:hover {
        background-color: rgba(2, 0, 36, 1);
    }

    span {
        padding-bottom: 15px;
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
                <span>Customer Home </span>
            </div>
        </div>
    </div>

    <div class="sidebar">
        <ul>
            <li><a href="homeCust.php" class="active">
                    <span class="icon"><img src="img/prof.png" width="20" height="20"></span>
                    <span class="title">Profile</span>
                </a></li>
            <li><a href="newreq.html">
                    <span class="icon"><img src="img/add.png" width="20" height="20"></span>
                    <span class="title">New Requst</span>
                </a></li>
            <li><a href="order.html">
                    <span class="icon"><img src="img/order2.png" width="20" height="20"></span>
                    <span class="title">Order</span>
                </a></li>
            <li><a href="index.php">
                    <span class="icon"><img src="img/logout.png" width="20" height="20"></span>
                    <span class="title">Logout</span>
                </a></li>

        </ul>
    </div>

    <div class="main_container">
        <div class="item">
            <form>
                <dd><label class="form-label">First name</label> <br>
                    <input id="firstname" value="Latifa " type="text">
                </dd>
                <br>
                <dd><label class="form-label">Last name</label><br>
                    <input id="lastname" value="Alageel" type="text">
                </dd>
                <br>
                <dd><label class="form-label">Address</label><br>
                    <input id="Address" value="Riyadh" type="text"></dd>

                <br>
                <dd><label class="form-label">Email</label><br>
                    <input id="emailAccount" value="example@hotnail.com" type="text"></dd>
                <br>
                <dd><label class="form-label">Telephone</label><br>
                    <input id="phone" value="0507839031" type="text"></dd>
                <br>
                <dd>
                    <label>New Password</label><br>
                    <input type="password" class="input-xlarge">
                </dd>
                <br>
                <dd><input type="submit" value="Save Change"></dd>
            </form>
        </div>


    </div>
</div>


</body>


</html>
