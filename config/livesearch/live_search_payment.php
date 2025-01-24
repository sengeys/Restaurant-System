<?php
try {
    // include connection db
    include('../database/connection.php');

    // Get Data
    $search = $_POST['search'];

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
INNER JOIN tbltable    ON tbltable.table_id = tblorder.table_id WHERE order_id like '{$search}%' OR customer_name like '{$search}%' ORDER BY order_id DESC";

    $fetch_query = mysqli_query($conn, $sql);

    $row = mysqli_num_rows($fetch_query);

    if ($row > 0) {
        while ($result = mysqli_fetch_array($fetch_query)) {
            ?>
<tr>
    <td> <?php echo $result['order_id'] ?></td>
    <td> <?php echo $result['date_created'] ?></td>
    <td> <?php echo $result['customer_name'] ?></td>
    <td> <?php echo "$ " . $result['total'] ?></td>

    <?php
                if ($result['STATUS'] == "Paid") {
                    echo '<td class="pt-3"><span class="p-1 pl-2 pr-2 rounded bg-success"> ' . $result['STATUS'] . ' </span></td>';
                } else {
                    echo '<td class="pt-3"><span class="p-1 pl-2 pr-2 rounded bg-danger"> ' . $result['STATUS'] . ' </span></td>';
                }
                ?>

    <td>
        <button type="button" id="print_btn" class="btn btn-primary btn-sm" data-id="<?php echo $result['order_id'] ?>">
            <i class="nav-icon fas fa-print"></i>
            Print
        </button>
        <button type="button" id="show_detail_btn" class="btn btn-info btn-sm"
            data-id="<?php echo $result['order_id'] ?>">
            <i class="nav-icon fas fa-eye"></i>
            Show Detail
        </button>
        <button type="button" id="edit_btn" class="btn btn-warning btn-sm" data-id="<?php echo $result['order_id'] ?>">
            <i class="nav-icon fas fa-edit"></i>
            Edit
        </button>
        <button type="submit" id="delete_btn" class="btn btn-danger btn-sm" data-id="<?php echo $result['order_id'] ?>">
            <i class="nav-icon fas fa-trash"></i>
            Delete
        </button>
    </td>
</tr>
<?php
        }
    } else {
        echo "<tr>";
        echo "<td colspan='6' align='center'> No Found</td>";
        echo "</tr>";
    }

    $conn->close();
} catch (Exception $ex) {
    echo "<tr>";
    echo "<td colspan='6' align='center' class='bg-danger'> Connnection Database Field.</td>";
    echo "</tr>";
}
?>