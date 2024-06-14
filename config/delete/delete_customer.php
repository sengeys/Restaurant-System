<?php
    // include connection db
     include('../database/connection.php');


    // get item
    $customer_id = $_POST['customer_id'];

    // SQL query to select all customers
    $sql = "DELETE FROM tblcustomer WHERE customer_id = $customer_id";
    $delete_query = mysqli_query($conn, $sql);

    if ($delete_query > 0){
        echo "1";
    }else{
        echo "-1";
    }
?>