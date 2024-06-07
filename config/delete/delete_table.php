<?php
    // include connection db
     include('../database/connection.php');


    // get item
    $table_id = $_POST['table_id'];

    // SQL query to select all customers
    $sql = "DELETE FROM tbltable WHERE table_id = $table_id";
    $delete_query = mysqli_query($conn, $sql);

    if ($delete_query > 0){
        echo "1";
    }else{
        echo "-1";
    }
?>