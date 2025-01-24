<?php



try {
    include('../database/connection.php');

    $id = $_POST['id'];

    $sql = "SELECT 
    tblorder.order_id, 
    tblorder.date_created, 
    tblstaff.staff_id, 
    tblstaff.staff_name, 
    tblcustomer.customer_id, 
    tblcustomer.customer_name, 
    tbltable.table_id,
    tbltable.table_name, 
    tblorder.STATUS, 
    tblorder.total, 
    tblitem.item_id, 
    tblitem.item_name, 
    quantity, 
    price, 
    amount
FROM tblorderdetail
INNER JOIN tblorder    ON tblorderdetail.order_id = tblorder.order_id
INNER JOIN tblstaff    ON tblorder.staff_id       = tblstaff.staff_id
INNER JOIN tblcustomer ON tblorder.customer_id    = tblcustomer.customer_id
INNER JOIN tbltable    ON tblorder.table_id       = tbltable.table_id
INNER JOIN tblitem     ON tblorderdetail.item_id  = tblitem.item_id WHERE order_id = $id";
    $result = $conn->query($sql);

    $orders = [];
    $orderDetailsMap = [];

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            if (!isset($orderDetailsMap[$row['order_id']])) {
                $orderDetailsMap[$row['order_id']] = [
                    'order_id' => $row['order_id'],
                    'staff_name' => $row['staff_name'],
                    'customer_name' => $row['customer_name'],
                    'table_name' => $row['table_name'],
                    'status' => $row['STATUS'],
                    'total' => number_format($row['total'], 2, '.', ''),
                    'order_date' => date_format(date_create($row['date_created']), "d-m-Y  h:m A"),
                    'details' => []
                ];
            }

            if ($row['order_id'] !== null) {
                $orderDetailsMap[$row['order_id']]['details'][] = [
                    'item_name' => $row['item_name'],
                    'quantity' => $row['quantity'],
                    'unit_price' => number_format($row['price'], 2, '.', ''),
                    'amount' => number_format($row['amount'], 2, '.', ''),
                ];
            }
        }

        foreach ($orderDetailsMap as $order) {
            $orders[] = $order;
        }
    }

    // Output JSON
    header('Content-Type: application/json');
    echo json_encode($orders);

    $conn->close();
} catch (Exception $e) {
    echo json_encode(['error' => $e->getMessage()]);
}


?>