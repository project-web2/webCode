<?php
require "db.php";
$conn = connect();
$error = "";
$password = "";
$username = "";
if (!empty($_POST["technicianUsername"])) {
    $username = $conn->real_escape_string($_POST["technicianUsername"]);
} else {
    $error .= "</br> Username Is Required";
}
if (!empty($_POST["technicianPassword"])) {
    $password = $conn->real_escape_string($_POST["technicianPassword"]);
} else {
    $error .= "</br> Password Is Required";
}
if (empty($error)) {
    $salt = uniqid('cpuber', true);
    $sql = "select * from technician where username='$username'";
    $result = $conn->query($sql)->fetch_assoc();
    $tmp =password_verify($password,$result["password"]);
    if ($tmp) {
        $_SESSION["user"] = $result["Tid"];
        $_SESSION["role"] = 'technician';
         header("location:../HomeTech1.php");
    } else {
        header("location:../login.php?errorTechnician=Technician Not Found");
    }
}


?>
