<?php
    try{
        // include connection db
        include('../database/connection.php');

        // SQL query to select all customers
        $sql = "SELECT * FROM vieworder";

        $fetch_query = mysqli_query($conn, $sql);

        $row = mysqli_num_rows($fetch_query);

        $total = 0;

        if ($row > 0){
            while($result = mysqli_fetch_array($fetch_query)){
               $total ++;
            }
        }

        echo $total;
        $conn->close();
    }catch(Exception $ex){

    }
?>