<?php
try {
    // include connection db
    include('../database/connection.php');

    // get item
    $id = $_POST['user_id'];

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
INNER JOIN tblstaff ON tblstaff.staff_id = tbluser.user_id WHERE user_id = $id";

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