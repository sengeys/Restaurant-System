<?php
    // include connection db
     include('../database/connection.php');


    // get item
    $customer_name = $_POST['customer_name'];
    $contact = $_POST['contact'];

    // SQL query to select all customers
    $sql = "INSERT INTO tblcustomer SET customer_name = '$customer_name', contact = '$contact'";
    $insert_query = mysqli_query($conn, $sql);

    if ($insert_query > 0){
        echo "1";
    }else{
        echo "-1";
    }
?>