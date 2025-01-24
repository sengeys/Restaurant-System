<?php
try {
    // include connection db
    include('../database/connection.php');

    // get item
    $id = $_POST['payment_id'];

    // SQL query to select all customers
    $sql = "SELECT
    order_id,
    date_created,
    tblstaff.staff_id,
    tblstaff.staff_name,
    tblcustomer.customer_id,
    tblcustomer.customer_name,
    tbltable.table_id,
    tbltable.table_name,
    STATUS,
    total
FROM tblorder
INNER JOIN tblstaff    ON tblstaff.staff_id = tblorder.staff_id
INNER JOIN tblcustomer ON tblcustomer.customer_id = tblorder.customer_id
INNER JOIN tbltable    ON tbltable.table_id = tblorder.table_id WHERE order_id = $id";

    $fetch_query = mysqli_query($conn, $sql);

    $row = mysqli_num_rows($fetch_query);

    if ($row > 0) {
        $result = mysqli_fetch_array($fetch_query);
        echo json_encode($result);
    }

    $conn->close();
} catch (Exception $ex) {

}
?>