<?php
    try{
        // include connection db
        include('../database/connection.php');

        // get item
        $order_date  = date("Y-m-d H:i:s", strtotime($_POST['order_date']));
        $staff_id    = $_POST['staff_id'];
        $customer_id = $_POST['customer_id'];
        $table_id    = $_POST['table_id'];
        $total    = $_POST['total'];

        // SQL query to select all customers
        $sql = "INSERT INTO tblorder SET date_created = '$order_date', staff_id = '$staff_id', customer_id = '$customer_id', table_id = '$table_id', status = 'No Paid', total = $total";
        
        $insert_query = mysqli_query($conn, $sql);
    
        if ($insert_query > 0){
            echo $last_id = $conn->insert_id;
        }else{
            echo "-1";
        }

        $conn->close();
    }catch(Exception $ex){
       
    }
?>
