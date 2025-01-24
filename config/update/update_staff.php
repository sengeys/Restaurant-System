<?php
    try{
        // include connection db
        include('../database/connection.php');


        // get item
        $user_id = $_POST['user_id'];
        $full_name = $_POST['full_name'];
        $gender = $_POST['gender'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $password = $_POST['password'];
    
        // SQL query to select all customers
        $sql = "UPDATE tblstaff SET staff_name = '$full_name', sex = '$gender',phone = '$phone', address = '$address'  WHERE staff_id = $user_id";
        $update_query = mysqli_query($conn, $sql);

        if ($update_query > 0){

            $sql2 = "UPDATE tbluser SET email = '$email', pass_word = '$password' WHERE user_id = $user_id";
            $update_query2 = mysqli_query($conn, $sql2);
        
            if ($update_query2 > 0){
                echo "1";
            }
        }else{
            echo "-1";
        }
    }catch(Exception $ex){

    }
?>