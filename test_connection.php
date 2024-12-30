<?php
$host = 'localhost'; // Your database host
$username = 'root';  // Your database username
$password = '';      // Your database password
$database = 'atechnologies'; // Your database name

// Create a connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
