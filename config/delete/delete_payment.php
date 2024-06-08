<?php
    // include connection db
     include('../database/connection.php');


    // get item
    $payment_id = $_POST['payment_id'];

    // SQL query to select all customers
    mysqli_query($conn, "DELETE FROM tblorderdetail WHERE order_id = $payment_id");

    $sql = "DELETE FROM tblorder WHERE order_id = $payment_id";
    $delete_query = mysqli_query($conn, $sql);

    if ($delete_query > 0){
        echo "1";
    }else{
        echo "-1";
    }
?>