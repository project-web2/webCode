<?php
require "session.php";
require "db.php";
$conn = connect();
$error = "";
$password = "";
if (!empty($_POST["technicianName"])) {
    $name = $conn->real_escape_string($_POST["technicianName"]);
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
if (!empty($_POST["phone"])) {
    $phone = $conn->real_escape_string($_POST["phone"]);
} else {
    $error .= "</br> Phone Is Required";
}
if (!empty($_POST["address"])) {
    $address = $conn->real_escape_string($_POST["address"]);
} else {
    $error .= "</br> Address Is Required";
}
if (!empty($_POST["speciality"])) {
    $speciality = $conn->real_escape_string($_POST["speciality"]);
} else {
    $error .= "</br> Speciality Is Required";
}
if (!empty($_POST["quantity"])) {
    $quantity = $conn->real_escape_string($_POST["quantity"]);
} else {
    $error .= "</br> Quantity Is Required";
}
if (!empty($_POST["bio"])) {
    $bio = $conn->real_escape_string($_POST["bio"]);
} else {
    $error .= "</br> Bio Is Required";
}
if (empty($error)) {
    $sql = "select * from technician where username='$username'";
    $result = $conn->query($sql)->fetch_assoc();
    if ($result == null) {
        $salt = uniqid('cpuber', true);
        $hash = password_hash($password, PASSWORD_BCRYPT, array('cost' => 12));
        $sql = "INSERT INTO technician(username, password, name, email, address, speciality,phone,quantity,bio) VALUES ('$username','$hash','$name','$email','$address','$speciality','$phone','$quantity','$bio')";
        if ($conn->query($sql) == true) {
            $_SESSION["user"] = $username;
            $_SESSION["role"] = 'technician';
            header("location:../HomeTech.php");
        } else {
            $_SESSION["error"] = "Contact Technical Support";
            header("location:../signup.php?error='Contact Technical Support'");
        }
    } else {
        header("location:../signup.php?errorCustomer=Username exist");
    }
} else {
    $_SESSION["error"] = $error;
    header("location:../signup.php?error=" . $error);
}


?>