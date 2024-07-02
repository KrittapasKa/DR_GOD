<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "shop_crud";

$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";
?>
