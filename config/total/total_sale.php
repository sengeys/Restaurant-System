<?php
try {
    // include connection db
    include('../database/connection.php');

    // SQL query to select all customers
    $sql = "SELECT
    tbluser.user_id,
    tbluser.email,
    tbluser.pass_word,

    tblstaff.staff_name,
    tblstaff.sex,
    tblstaff.phone,
    tblstaff.address

FROM tbluser
INNER JOIN tblstaff ON tblstaff.staff_id = tbluser.user_id";

    $fetch_query = mysqli_query($conn, $sql);

    $row = mysqli_num_rows($fetch_query);

    $total = 0;

    if ($row > 0) {
        while ($result = mysqli_fetch_array($fetch_query)) {
            $total += $result['total'];
        }
    }

    echo $total;
    $conn->close();
} catch (Exception $ex) {

}
?>