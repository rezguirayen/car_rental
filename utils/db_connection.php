<?php
$servername = "localhost";
$username = "root";
$password = "maher";
$dbname = "car_rental"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    echo "error";
    die("connection failed: " . $conn->connect_error);
}
?>