<?php
    // include connection db
     include('../database/connection.php');

    // Get Data
    $order_id   = $_POST['order_id'];
    $order_date = $_POST['order_date'];
    $item_id    = $_POST['item_id'];
    $quantity   = $_POST['quantity'];
    $price      = $_POST['price'];
    
    $sql = "INSERT INTO tblorderdetail SET order_id = '$order_id', order_date = $order_date, item_id = $item_id, quantity = $quantity, price = $price, amount = 0";
    
    if ($conn->query($sql) === TRUE) {
        echo "Order detail added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
?>