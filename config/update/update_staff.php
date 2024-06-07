<?php
    // include connection db
     include('../database/connection.php');


    // get item
    $staff_id = $_POST['staff_id'];
    $staff_name = $_POST['staff_name'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    // SQL query to select all customers
    $sql = "UPDATE tblstaff SET staff_name = '$staff_name', sex = '$gender',phone = '$phone', address = '$address'  WHERE staff_id = $staff_id";
    $update_query = mysqli_query($conn, $sql);

    if ($update_query > 0){
        echo "1";
    }else{
        echo "-1";
    }
?>