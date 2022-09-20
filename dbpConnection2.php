<?php
$servername = "mysql-ptuxiakh.alwaysdata.net";
$username = "ptuxiakh";
$password = "1531998aA@";
$dbname = "ptuxiakh_events";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
?>