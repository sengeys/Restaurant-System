<?php
    try{
        // include connection db
        include('../database/connection.php');


        // get item
        $itemid = $_POST['item_id'];
    
        // SQL query to select all customers
        $sql = "DELETE FROM tblitem WHERE item_id = $itemid";
        $delete_query = mysqli_query($conn, $sql);
    
        if ($delete_query > 0){
            echo "1";
        }else{
            echo "-1";
        }
    }catch(Exception $ex){

    }
?>