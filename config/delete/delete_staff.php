<?php
    try{
        // include connection db
        include('../database/connection.php');


        // get item
        $staff_id = $_POST['staff_id'];
    
        // SQL query to select all customers
        $sql1 = "DELETE FROM tbluser WHERE user_id = $staff_id";
        $delete_query1 = mysqli_query($conn, $sql1);
    
        if ($delete_query1 > 0){
            // SQL query to select all customers
            $sql2 = "DELETE FROM tblstaff WHERE staff_id = $staff_id";
            $delete_query2 = mysqli_query($conn, $sql2);
        
            if ($delete_query2 > 0){
                echo "1";
            }
        }else{
            echo "-1";
        }

    }catch(Exception $ex){

    }
?>