<?php
    // Session
    session_start();

    // Database
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "restaurantdb";

    $conn = new mysqli($hostname, $username, $password, $database);
?>