<?php
require "db.php";
$conn = connect();
$error = "";
$password = "";
$username = "";
if (!empty($_POST["customerUsername"])) {
    $username = $conn->real_escape_string($_POST["customerUsername"]);
} else {
    $error .= "</br> Username Is Required";
}
if (!empty($_POST["customerPassword"])) {
    $password = $conn->real_escape_string($_POST["customerPassword"]);
} else {
    $error .= "</br> Password Is Required";
}
if (empty($error)) {
    $salt = uniqid('cpuber', true);
    $sql = "select * from customer where username='$username'";
    $result = $conn->query($sql)->fetch_assoc();
    $tmp =password_verify($password,$result["password"]);
    if ($tmp) {
        $_SESSION["user"] = $result["id"];
        $_SESSION["role"] = 'customer';
        header("location:../order.html");
    } else {
        header("location:../login.php?errorCustomer=Customer Not Found");
    }
}


?>
