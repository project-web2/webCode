<?php
require "session.php";
require "config.php";
function connect()
{
    $connection = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);
    $error = mysqli_connect_error();
    if ($error != null) {
        $output = "<p>Unable To Connect To database</p>" . $error;
        exit($output);
    }
    return $connection;
}