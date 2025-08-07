<?php
$host = "localhost";
$user = "root";  // Default user in XAMPP
$password = "";  // Leave empty in XAMPP
$dbname = "travel_agency";

// Create connection
$conn = new mysqli($host, $user, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
