<?php

require "scripts/session.php";
$error = "";
$errorCustomer = "";
if (isset($_GET["error"])) {
    $error = $_GET["error"];
}
if (isset($_GET["errorCustomer"])) {
    $errorCustomer = $_GET["errorCustomer"];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> CPUber | Register</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="css/mdb.min.css">
    <!-- Your custom styles (optional) -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="assets/css/signup.css">


</head>
<body>

<!--Navbar -->
<nav class="mb-1 navbar navbar-expand-lg navbar-dark ">
    <a class="navbar-brand" href="index.php"> <img src="img/cpuberlogo.png" alt="logo" height="100px">
    </a>
</nav>
<!--/.Navbar -->
<div class="hero">
    <div class="form-box">
        <div class="button-box">
            <div id="btn">
            </div>
            <button type="button" class="toggle-btn" onclick="customerForm()">Customer</button>
            <button type="button" class="toggle-btn" onclick="technicianForm()">Technician</button>
        </div>
        <form id="customer" class="input-group" action="scripts/signup_customer_action.php" method="post">
            <?php
            echo $errorCustomer;
            ?>
            <input type="text" name="customerName" class="input-field" placeholder="Name" required/>
            <input type="email" name="email" class="input-field" placeholder="Email" required/>
            <input type="text" name="username" class="input-field" placeholder="User name " required/>
            <input type="password" name="password" class="input-field" placeholder="Enter Password" required/>
            <input type="text" name="address" class="input-field" placeholder="Enter your Address" required/>

            <br><br><br>
            <button type="submit" class="submit-btn">Sign up</button>
            <p class="or">OR</p>
            <div class="login-btn purple-gradient"><a href="login.php">Log in</a></div>
        </form>
        <form id="technician" class="input-group" action="scripts/signup_technician_action.php" method="post">
            <?php
            echo $error;
            ?>
            <input type="text" name="technicianName" class="input-field" placeholder="Name" required style="top: 0"/>
            <input type="email" name="email" class="input-field" placeholder="Email " required/>
            <input type="username" name="username" class="input-field" placeholder="User name " required/>
            <input type="password" name="password" class="input-field" placeholder="Enter Password" required/>
            <input type="tel" class="input-field" id="phone" name="phone" placeholder="Phone number (ex:05xxxx)"
                   required>
            <input type="text" name="address" class="input-field" placeholder="Address" required/><br><br>
            <label id="Spec">Speciality</label>
            <select id="Speciality " name="speciality" class="input-field">
                <option value="MacOS">MacOS</option>
                <option value="iOS">iOS</option>
                <option value="ipadOS">ipadOS</option>
                <option value="Windows 10">Windows 10</option>
                <option value="Android">Android</option>
            </select>
            <input type="number" class="input-field" id="quantity" name="quantity" min="1"
                   placeholder="Years of Experience">
            <textarea name="bio" id="bio" cols="40" rows="3">Bio</textarea>
            <button type="submit" class="submit-btn">Sign up</button>
            <p class="or">OR</p>
            <div class="login-btn purple-gradient"><a href="login.php">Log in</a></div>
        </form>
    </div>
</div>
<script src="assets/singup.js"></script>
</body>
</html>
