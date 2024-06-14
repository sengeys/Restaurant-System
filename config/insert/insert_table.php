<?php
    // include connection db
     include('../database/connection.php');


    // get item
    $table_name = $_POST['table_name'];

    // SQL query to select all customers
    $sql = "INSERT INTO tbltable SET table_name = '$table_name'";
    $insert_query = mysqli_query($conn, $sql);

    if ($insert_query > 0){
        echo "1";
    }else{
        echo "-1";
    }
?>