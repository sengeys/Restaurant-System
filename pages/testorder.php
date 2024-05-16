
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "orders_db";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Enable error reporting
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    try {
        $sql = "SELECT orders.order_id, orders.customer_name, orders.order_date,  order_details.product_name, order_details.quantity 
            FROM orders
            LEFT JOIN order_details ON orders.order_id = order_details.order_id
            ORDER BY orders.order_id";

        $result = $conn->query($sql);

        $orders = [];
        $orderDetailsMap = [];

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                if (!isset($orderDetailsMap[$row['order_id']])) {
                    $orderDetailsMap[$row['order_id']] = [
                        'order_id' => $row['order_id'],
                        'customer_name' => $row['customer_name'],
                        'order_date' => $row['order_date'],
                        'details' => []
                    ];
                }

                if ($row['product_name'] !== null && $row['quantity'] !== null) {
                    $orderDetailsMap[$row['order_id']]['details'][] = [
                        'product_name' => $row['product_name'],
                        'quantity' => $row['quantity']
                    ];
                }
            }

            foreach ($orderDetailsMap as $order) {
                $orders[] = $order;
            }
        }

        // Output JSON
        // header('Content-Type: application/json');
        echo json_encode($orders);

    } catch (Exception $e) {
        echo json_encode(['error' => $e->getMessage()]);
    }

    $conn->close();
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Orders and Order Details</title>
    <!-- jQuery -->
    <script src="../plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="../plugins/jquery-ui/jquery-ui.min.js"></script>
</head>
<body>
    <h1>Orders and Order Details</h1>
    <button type="button" id="fetchOrders">Fetch Orders</button>
    <div id="ordersContainer"></div>
    <script>
        $(document).ready(function() {
            $('#fetchOrders').click(function() {
                $.ajax({
                    url: 'testorder.php',
                    type: 'GET',
                    success: function(response) {
                        console.log(response);
                        const orders = JSON.parse(response);
                        let html = '<ul>';
                        orders.forEach(order => {
                            html += `<li>Order ID: ${order.order_id}, Customer Name: ${order.customer_name}, Order Date: ${order.order_date}
                                        <ul>`;
                            order.details.forEach(detail => {
                                html += `<li>Product Name: ${order_details.product_name}, Quantity: ${order_details.quantity}</li>`;
                            });
                            html += `</ul>
                                    </li>`;
                        });
                        html += '</ul>';
                        $('#ordersContainer').html(html);
                    }
                });
            });
        });
    </script>
</body>
</html>

