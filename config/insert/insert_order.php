<?php
    // include connection db
     include('../database/connection.php');


    // get item
    $order_date  = $_POST['order_date'];
    $staff_id    = $_POST['staff_id'];
    $customer_id = $_POST['customer_id'];
    $table_id    = $_POST['table_id'];

    // SQL query to select all customers
    $sql = "INSERT INTO tblorder SET order_date = '$order_date', staff_id = $staff_id, customer_id = $customer_id, table_id = $table_id, status = 'No Paid', total = 0";
    
    if ($conn->query($sql) === TRUE) {
        $order_id = $conn->insert_id;
        echo json_encode(["order_id" => $order_id]);
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
?>