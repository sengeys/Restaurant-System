<?php
ob_start();

$tr = "";
$date = "";
$order_id = "";
$customer = "";
$staff = "";
$table = "";
$status = "";
$total = "";

try {
    include('../config/database/connection.php');

    $id = $_GET['id'];

    // SQL query to select all customers
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

    $fetch_query = mysqli_query($conn, $sql);

    $row = mysqli_num_rows($fetch_query);

    if ($row > 0) {
        $i = 1;
        ?>
        <?php
        while ($result = mysqli_fetch_array($fetch_query)) {
            ?>
            <?php
            $date = $result['date_created'];
            $order_id = $result['order_id'];
            $customer = $result['customer_name'];
            $staff = $result['staff_name'];
            $table = $result['table_name'];
            $status = $result['STATUS'];
            $total = $result['total'];

            $tr .= "<tr>";
            $tr .= "<td> " . $i . " </td>";
            $tr .= "<td> " . $result['item_name'] . " </td>";
            $tr .= "<td> $" . number_format($result['price'], 2, '.', '') . " </td>";
            $tr .= "<td> " . $result['quantity'] . " </td>";
            $tr .= "<td class = 'text-end'> $" . number_format($result['amount'], 2, '.', '') . " </td>";
            $tr .= "</tr>";

            $i = $i + 1;
        ?>
        <?php
        }
        ?>

        <?php
    } else {
        $tr .= "<tr>";
        $tr .= "<td colspan='5' align='center'> No Found</td>";
        $tr .= "</tr>";
    }

    $conn->close();
} catch (Exception $ex) {
    $tr .= "<tr>";
    $tr .= "<td colspan='5' align='center' class='bg-danger'> Connection Database Field.</td>";
    $tr .= "</tr>";
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include '../layouts/link-style.php'; ?>

</head>

<body>
    <div class="invoice-wrapper" id="print-area">
        <div class="invoice">
            <div class="invoice-container">
                <div class="invoice-head">
                    <div class="invoice-head-top">
                        <!-- <div class = "invoice-head-top-left text-start">
                            <img src = "images/logo.png">
                        </div> -->
                        <div class="invoice-head-top-right text-end">
                            <h3>Invoice</h3>
                        </div>
                    </div>
                    <div class="hr"></div>
                    <div class="invoice-head-middle">
                        <div class="invoice-head-middle-left text-start">
                            <p><span class="text-bold">Date</span>:
                                <?php echo date_format(date_create($date), "d-m-Y  h:m A"); ?>
                            </p>
                        </div>
                        <div class="invoice-head-middle-right text-end">
                            <p>
                                <spanf class="text-bold">Order No:</span><?php echo $order_id; ?>
                            </p>
                        </div>
                    </div>
                    <div class="hr"></div>
                    <div class="invoice-head-bottom">
                        <div class="invoice-head-bottom-left">
                            <ul>
                                <li><span class="text-bold">Customer Name</span>: <?php echo $customer; ?></li>
                                <li><span class="text-bold">Staff Name</span>: <?php echo $staff; ?></li>
                            </ul>
                        </div>
                        <div class="invoice-head-bottom-right">
                            <ul class="text-end">
                                <li><span class="text-bold">Table</span>: <?php echo $table; ?></li>
                                <li><span class="text-bold">Stutus</span>: <?php echo $status; ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="overflow-view">
                    <div class="invoice-body">
                        <table>
                            <thead>
                                <tr>
                                    <td class="text-bold">No</td>
                                    <td class="text-bold">Item</td>
                                    <td class="text-bold">Unit Price</td>
                                    <td class="text-bold">Quantity</td>
                                    <td class="text-bold">SubTotal</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php echo $tr; ?>
                                <!-- <tr>
                                    <td>Design</td>
                                    <td>Creating a website design</td>
                                    <td>$50.00</td>
                                    <td>10</td>
                                    <td class = "text-end">$500.00</td>
                                </tr>                                 -->
                            </tbody>
                        </table>
                        <div class="invoice-body-bottom">
                            <div class="invoice-body-info-item">
                                <div class="info-item-td text-end text-bold">Total:</div>
                                <div class="info-item-td text-end">$<?php echo number_format($total, 2, '.', ''); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="invoice-foot text-center">
                    <!-- <p><span class = "text-bold text-center">NOTE:&nbsp;</span>This is computer generated receipt and does not require physical signature.</p> -->

                    <!-- <div class = "invoice-btns">
                        <button type = "button" class = "invoice-btn" onclick="printInvoice()">
                            <span>
                                <i class="fa-solid fa-print"></i>
                            </span>
                            <span>Print</span>
                        </button>
                        <button type = "button" class = "invoice-btn">
                            <span>
                                <i class="fa-solid fa-download"></i>
                            </span>
                            <span>Download</span>
                        </button>
                    </div> -->
                </div>
            </div>
        </div>
    </div>

    <?php include '../layouts/link-script.php'; ?>
</body>

</html>

<?php
ob_end_flush();
?>

<style>
    *,
    *::after,
    *::before {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    :root {
        --blue-color: #0c2f54;
        --dark-color: #535b61;
        --white-color: #fff;
    }

    ul {
        list-style-type: none;
    }

    ul li {
        margin: 2px 0;
    }

    /* text colors */
    .text-dark {
        color: var(--dark-color);
    }

    .text-blue {
        color: var(--blue-color);
    }

    .text-end {
        text-align: right;
    }

    .text-center {
        text-align: center;
    }

    .text-start {
        text-align: left;
    }

    .text-bold {
        font-weight: 700;
    }

    /* hr line */
    .hr {
        height: 1px;
        background-color: rgba(0, 0, 0, 0.1);
    }

    /* border-bottom */
    .border-bottom {
        border-bottom: 1px solid rgba(0, 0, 0, 0.1);
    }

    body {
        font-family: 'Poppins', sans-serif;
        color: var(--dark-color);
        font-size: 20px;
    }

    .invoice-wrapper {
        min-height: 100vh;
        background-color: rgba(0, 0, 0, 0.1);
        padding-top: 20px;
        padding-bottom: 20px;
    }

    .invoice {
        margin-right: auto;
        margin-left: auto;
        background-color: var(--white-color);
        padding: 70px;
        border: 1px solid rgba(0, 0, 0, 0.2);
        border-radius: 5px;
        min-height: 920px;
    }

    .invoice-head-top-left img {
        width: 130px;
    }

    .invoice-head-top-right h3 {
        font-weight: 500;
        font-size: 27px;
        color: var(--blue-color);
    }

    .invoice-head-middle,
    .invoice-head-bottom {
        padding: 16px 0;
    }

    .invoice-body {
        border: 1px solid rgba(0, 0, 0, 0.1);
        border-radius: 4px;
        overflow: hidden;
    }

    .invoice-body table {
        border-collapse: collapse;
        border-radius: 4px;
        width: 100%;
    }

    .invoice-body table td,
    .invoice-body table th {
        padding: 12px;
    }

    .invoice-body table tr {
        border-bottom: 1px solid rgba(0, 0, 0, 0.1);
    }

    .invoice-body table thead {
        background-color: rgba(0, 0, 0, 0.02);
    }

    .invoice-body-info-item {
        display: grid;
        grid-template-columns: 80% 20%;
    }

    .invoice-body-info-item .info-item-td {
        padding: 12px;
        background-color: rgba(0, 0, 0, 0.02);
    }

    .invoice-foot {
        padding: 30px 0;
    }

    .invoice-foot p {
        font-size: 12px;
    }

    .invoice-btns {
        margin-top: 20px;
        display: flex;
        justify-content: center;
    }

    .invoice-btn {
        padding: 3px 9px;
        color: var(--dark-color);
        font-family: inherit;
        border: 1px solid rgba(0, 0, 0, 0.1);
        cursor: pointer;
    }

    .invoice-head-top,
    .invoice-head-middle,
    .invoice-head-bottom {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        padding-bottom: 10px;
    }

    @media screen and (max-width: 992px) {
        .invoice {
            padding: 40px;
        }
    }

    @media screen and (max-width: 576px) {

        .invoice-head-top,
        .invoice-head-middle,
        .invoice-head-bottom {
            grid-template-columns: repeat(1, 1fr);
        }

        .invoice-head-bottom-right {
            margin-top: 12px;
            margin-bottom: 12px;
        }

        .invoice * {
            text-align: left;
        }

        .invoice {
            padding: 28px;
        }
    }

    .overflow-view {
        overflow-x: scroll;
    }

    .invoice-body {
        min-width: 600px;
    }

    @media print {
        .print-area {
            visibility: visible;
            width: 100%;
            position: absolute;
            left: 0;
            top: 0;
            overflow: hidden;
        }

        .overflow-view {
            overflow-x: hidden;
        }

        .invoice-btns {
            display: none;
        }
    }
</style>