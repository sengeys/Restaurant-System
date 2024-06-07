<?php
    // include connection db
     include('../database/connection.php');


    // get item
    $staff_id = $_POST['staff_id'];

    // SQL query to select all customers
    $sql = "DELETE FROM tblstaff WHERE staff_id = $staff_id";
    $delete_query = mysqli_query($conn, $sql);

    if ($delete_query > 0){
        echo "1";
    }else{
        echo "-1";
    }
?>