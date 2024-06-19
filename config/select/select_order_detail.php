<?php



try {
    include('../database/connection.php');

    $id = $_POST['id'];

    $sql = "SELECT * FROM vieworderdetail WHERE order_id = $id";
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
                    'total' => number_format( $row['total'], 2, '.', ''),
                    'order_date' => date_format(date_create( $row['date_created']),"d-m-Y  h:m A"),
                    'details' => []
                ];
            }

            if ($row['order_id'] !== null) {
                $orderDetailsMap[$row['order_id']]['details'][] = [
                    'item_name' => $row['item_name'],
                    'quantity' => $row['quantity'],
                    'unit_price' => number_format( $row['price'], 2, '.', ''),
                    'amount' => number_format( $row['amount'], 2, '.', ''),
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
