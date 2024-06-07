<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "restaurantdb";

    // Create connection
    $conn = new mysqli($hostname, $username, $password, $database);


    // Check connection
    if ($conn->connect_error) {
        die("Connection Field " . $conn->connect_error);
    }
?>