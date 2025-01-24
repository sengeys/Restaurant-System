<?php
    try{
        // include connection db
        include('../database/connection.php');


        // get item
        $itemid = $_POST['item_id'];
        $itemname = $_POST['item_name'];
        $unitprice = $_POST['unit_price'];
    
        // SQL query to select all customers
        $sql = "UPDATE tblitem SET item_name = '$itemname', unit_price = '$unitprice' WHERE item_id = $itemid";
        $update_query = mysqli_query($conn, $sql);
    
        if ($update_query > 0){
            echo "1";
        }else{
            echo "-1";
        }
    }catch(Exception $ex){

    }
?>