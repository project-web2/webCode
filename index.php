<?php
require "scripts/session.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>CPUber | Home</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="css/mdb.min.css">
    <!-- Your custom styles (optional) -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<!-- Start your project here-->
<div class="mask rgba-gradient">
    <!--Navbar -->
    <nav class="mb-1 navbar navbar-expand-lg navbar-dark ">
        <a class="navbar-brand" href="#"> <img src="img/cpuberlogo.png" alt="logo" height="100px">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
                aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">

                </li>
                <?php
                if (isset($_SESSION)) {
                    if (isset($_SESSION["user"])) {
                        ?>
                        <li class="nav-item">
                            <a class="nav-link" href="logout.php">
                                <i class="fas fa-sign-out-alt"></i> Logout</a>
                        </li>
                        <?php
                    } else {
                        ?>
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">
                                <i class="fas fa-sign-in-alt"></i> Login</a>
                        </li>
                        <?php
                    }
                } else {
                    ?>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">
                            <i class="fas fa-sign-in-alt"></i> Login</a>
                    </li>
                    <?php
                }
                ?>

            </ul>
        </div>
    </nav>
    <!--/.Navbar -->

    <div class="container">


        <div class="row  align-items-center">
            <div class="col-sm-4">
                <h3>Intrested?</h3> <br>
                <button class="btn aqua-gradient"><a href="signup.php">Join Us!</a></button>
            </div>
            <div class="col-sm-8">
                <img class="computer" src="img/home.png" alt="" width="100%">
            </div>
        </div>


    </div>
    <!-- End your project here-->

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
