<?php
    include '../connection.php';
    // Enable error reporting
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    try {
        $sql = "SELECT tblorders.order_id, orders.customer_name, orders.order_date,  tblorderdetails.item_id, tblorderdetails.quantity 
            FROM tblorder
            LEFT JOIN tblorderdetails ON tblorders.order_id = tblorderdetails.order_id
            ORDER BY tblorders.order_id";

        $result = $conn->query($sql);

        $orders = [];
        $orderDetailsMap = [];

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                if (!isset($orderDetailsMap[$row['order_id']])) {
                    $orderDetailsMap[$row['order_id']] = [
                        'order_id' => $row['order_id'],
                        'customer_id' => $row['customer_id'],
                        'date_created' => $row['date_created'],
                        'details' => []
                    ];
                }

                if ($row['item_id'] !== null && $row['quantity'] !== null) {
                    $orderDetailsMap[$row['order_id']]['details'][] = [
                        'item_id' => $row['item_id'],
                        'quantity' => $row['quantity']
                    ];
                }
            }

            foreach ($orderDetailsMap as $order) {
                $orders[] = $order;
            }
        }

        // Output JSON
        // header('Content-Type: application/javascript');
        echo json_encode($orders);

    } catch (Exception $e) {
        echo json_encode(['error' => $e->getMessage()]);
    }

    $conn->close();
?>