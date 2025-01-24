<?php
    try{
        // include connection db
        include('../database/connection.php');


        // get item
        $payment_id = $_POST['payment_id'];
        $status = $_POST['status'];
    
        // SQL query to select all customers
        $sql = "UPDATE tblorder SET status = '$status' WHERE order_id = $payment_id";
        $update_query = mysqli_query($conn, $sql);
    
        if ($update_query > 0){
            echo "1";
        }else{
            echo "-1";
        }
    }catch(Exception $ex){

    }
?>