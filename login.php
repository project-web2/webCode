<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> CPUber | Login</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="css/mdb.min.css">
    <!-- Your custom styles (optional) -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="assets/css/login.css">


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
        <form id="customer" class="input-group" action="scripts/login_customer_action.php" method="post">
            <?php
            if (isset($_GET["errorCustomer"])) {
                echo $_GET["errorCustomer"];
            }
            ?>
            <input type="text" name="customerUsername" class="input-field" placeholder="User name" required/>
            <input type="password" class="input-field" name="customerPassword" placeholder=" Password" required/>
            <br>
            <br><br><br>
            <button type="submit" class="submit-btn"> Log in</button>
        </form>

        <form id="technician" class="input-group" action="scripts/login_technician_action.php" method="post">
            <?php
        
            if (isset($_GET["errorTechnician"])) {
                echo $_GET["errorTechnician"];
            }
            ?>
            <input type="text" name="technicianUsername" class="input-field" placeholder="User name" required/>
            <input type="password" class="input-field" name="technicianPassword" placeholder=" Password" required/>
            <br>
            <br><br><br>
            <button type="submit" class="submit-btn"> Log in</button>
        </form>
    </div>
</div>
<script src="assets/login.js"></script>
</body>

</html>
