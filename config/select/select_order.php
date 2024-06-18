<?php
    // include connection db
     include('../database/connection.php');

    // SQL query to select all customers
    $sql = "SELECT * FROM tblitem";

    $fetch_query = mysqli_query($conn, $sql);

    $row = mysqli_num_rows($fetch_query);

    if ($row > 0){
        echo "<option value=''>--Select--</option>";

        while($result = mysqli_fetch_array($fetch_query)){
            echo "<option value='". $result['item_id'] ."'> " . $result['item_name'] . " </option>";
        }
    }

    $conn->close();
?>