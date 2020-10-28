<?php
require "session.php";
require "db.php";
$conn = connect();
$error = "";
if (!empty($_POST["customerName"])) {
    $name = $conn->real_escape_string($_POST["customerName"]);
} else {
    $error .= "</br> Name Is Required";
}
if (!empty($_POST["email"])) {
    $email = $conn->real_escape_string($_POST["email"]);
} else {
    $error .= "</br> Email Is Required";
}
if (!empty($_POST["username"])) {
    $username = $conn->real_escape_string($_POST["username"]);
} else {
    $error .= "</br> username Is Required";
}
if (!empty($_POST["password"])) {
    $password = $conn->real_escape_string($_POST["password"]);
} else {
    $error .= "</br> Password Is Required";
}
if (!empty($_POST["address"])) {
    $address = $conn->real_escape_string($_POST["address"]);
} else {
    $error .= "</br> Address Is Required";
}
if (empty($error)) {
    $sql = "select * from customer where username='$username' OR email='$email'";
    $result = $conn->query($sql)->fetch_assoc();
    if ($result == null){
        $salt = uniqid('CPUBER', true);
        $hash = password_hash($password, PASSWORD_BCRYPT, array('cost' => 12));
        $sql = "INSERT INTO  customer(username, password, name, email, address) VALUES ('$username','$hash','$name','$email','$address')";
        if ($conn->query($sql) == true) {
            $sql_cus = "select * from customer where username='$username'";
            $cust = $conn->query($sql_cus)->fetch_assoc();

            //$_SESSION["user"] = $username;
            $_SESSION["user"] = $cust["Cid"];
            $_SESSION["role"] = 'customer';
            header("location:../order.php");
        } else {
            $_SESSION["error"] = "Contact Technical Support";
            header("location:../signup.php?errorCustomer='Contact Technical Support'");
        }
    }else{
        header("location:../signup.php?errorCustomer=Username Or Email exist");
    }

} else {
    $_SESSION["error"] = $error;
    header("location:../signup.php?errorCustomer=" . $error);
}


?>
