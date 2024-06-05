<?php
    // include connection db
     include('../connection.php');


    // get item
    $itemname = $_POST['item_name'];
    $unitprice = $_POST['unit_price'];

    // SQL query to select all customers
    $sql = "INSERT INTO tblitem SET item_name = '$itemname', unit_price = $unitprice";
    $insert_query = mysqli_query($conn, $sql);

    if ($insert_query > 0){
        echo "1";
    }else{
        echo "-1";
    }
?>