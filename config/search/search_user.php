<?php
    try{
        // include connection db
        include('../database/connection.php');

        // get item
        $id = $_POST['user_id'];

        // SQL query to select all customers
        $sql = "SELECT * FROM viewuser WHERE user_id = $id";

        $fetch_query = mysqli_query($conn, $sql);

        $row = mysqli_num_rows($fetch_query);

        if ($row > 0){
            $result = mysqli_fetch_array($fetch_query);
            echo json_encode($result);
        }

        $conn->close();
    }catch(Exception $ex){

    }
?>
