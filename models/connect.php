<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "php12_qlbh";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset("utf8");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>