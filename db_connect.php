<?php
$servername = "localhost";
$username = "root";  // your MySQL username
$password = "12345";  // your MySQL password
$dbname = "elearning_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
