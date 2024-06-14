<?php
    try{
        // include connection db
        include('../database/connection.php');


        // get item
        $customer_id = $_POST['customer_id'];
        $customer_name = $_POST['customer_name'];
        $contact = $_POST['contact'];
    
        // SQL query to select all customers
        $sql = "UPDATE tblcustomer SET customer_name = '$customer_name', contact = '$contact' WHERE customer_id = $customer_id";
        $update_query = mysqli_query($conn, $sql);
    
        if ($update_query > 0){
            echo "1";
        }else{
            echo "-1";
        }
    }catch(Exception $ex){

    }
?>