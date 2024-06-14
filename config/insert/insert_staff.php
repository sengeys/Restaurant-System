<?php
    // include connection db
     include('../database/connection.php');


    // get item
    $staff_name = $_POST['staff_name'];
    $gender     = $_POST['gender'];
    $phone      = $_POST['phone'];
    $address    = $_POST['address'];

    // SQL query to select all customers
    $sql = "INSERT INTO tblstaff SET staff_name = '$staff_name', sex = '$gender', phone = '$phone', address = '$address'";

    $insert_query = mysqli_query($conn, $sql);

    if ($insert_query > 0){
        echo "1";
    }else{
        echo "-1";
    }
?>