
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Orders and Order Details</title>

    <!-- link style -->
    <?php include '../layouts/link-style.php'; ?>
    <!-- link script -->
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
                    url: '../config/get/get_order.php',
                    type: 'POST',
                    dataType: 'json',
                    success: function(response) {
                        try {
                            const obj =JSON.stringify(response);
                            const orders = JSON.parse(obj);
                            console.log(orders); // Log parsed response
                            let html = '<ul>';
                            orders.forEach(order => {
                                html += `<li>Order ID: ${order.order_id}, Customer ID: ${order.customer_id}, Order Date: ${order.date_created}
                                            <ul>`;
                                order.details.forEach(detail => {
                                    html += `<li>Item Name: ${detail.item_id}, Quantity: ${detail.quantity}</li>`;
                                });
                                html += `</ul>
                                        </li>`;
                            });
                            html += '</ul>';
                            $('#ordersContainer').html(html);
                        } catch (error) {
                            console.error('Error parsing JSON:', error);
                            console.error('Raw response:', response);
                        }
                    }
                });
            });
        });
    </script>

</body>
</html>