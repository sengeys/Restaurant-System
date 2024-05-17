<?php
    // include connection db
     include('../connection.php');

    // SQL query to select all customers
    $sql = "SELECT order_id, date_created, tblstaff.staff_id, staff_name, tblcustomer.customer_id, customer_name, total, status
            FROM tblorder
            INNER JOIN tblstaff ON tblorder.staff_id = tblstaff.staff_id
            INNER JOIN tblcustomer ON tblorder.customer_id = tblcustomer.customer_id
            ORDER BY tblorder.order_id";
    $result = $conn->query($sql);

    $customers = array();

    if ($result->num_rows > 0) {
        // Fetch all customers data
        while($row = $result->fetch_assoc()) {
            $customers[] = $row;
        }
    } else {
        echo "0 results";
    }
    $conn->close();

    // Return the data as JSON
    echo json_encode($customers);
?>