<?php
// Check if a session is already active

session_start();


// Database
$hostname = "mysql";
$username = "admin";
$password = "admin";
$database = "restaurantdb";

// Create MySQLi connection
$conn = new mysqli($hostname, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>