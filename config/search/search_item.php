<?php
    // include connection db
     include('../database/connection.php');

     // get item
    $id = $_POST['item_id'];

    // SQL query to select all customers
    $sql = "SELECT * FROM tblitem WHERE item_id = $id";

    $fetch_query = mysqli_query($conn, $sql);

    $row = mysqli_num_rows($fetch_query);

    if ($row > 0){
        $result = mysqli_fetch_array($fetch_query);
        echo json_encode($result);
    }

    $conn->close();
?>
