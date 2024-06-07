<?php
    // include connection db
     include('../database/connection.php');


    // get item
    $table_id = $_POST['table_id'];
    $table_name = $_POST['table_name'];

    // SQL query to select all customers
    $sql = "UPDATE tbltable SET table_name = '$table_name' WHERE table_id = $table_id";
    $update_query = mysqli_query($conn, $sql);

    if ($update_query > 0){
        echo "1";
    }else{
        echo "-1";
    }
?>