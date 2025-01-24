<?php
    try{
        // include connection db
        include('../database/connection.php');

        // SQL query to select all customers
        $sql1 = "SELECT * FROM tblorder";

        $fetch_query = mysqli_query($conn, $sql1);

        $row = mysqli_num_rows($fetch_query);

        $last_id;

        if ($row > 0){
            while($result = mysqli_fetch_array($fetch_query)){
                $last_id = $result['order_id'];
            }
        }


        $count = count($_POST['item_id']);

        if ($count > 0){
            for ($i = 0; $i < $count; $i++){
                if (trim($_POST['item_id'][$i]) != ''){
                    $item_id    = $_POST['item_id'][$i];
                    $quantity   = $_POST['quantity'][$i];
                    $price      = $_POST['price'][$i];
                    $total      = $_POST['total'][$i];

                    $sql = "INSERT INTO tblorderdetail SET order_id = $last_id, item_id = $item_id, price = $price, quantity = $quantity, amount = $total";
                    $insert_query = mysqli_query($conn, $sql);
                }
            }
            echo '1';
        }else{
            echo "-1";
        }

        $conn->close();
    }catch(Exception $ex){
        
    }
?>