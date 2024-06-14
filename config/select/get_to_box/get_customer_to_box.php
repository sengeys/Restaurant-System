<?php
    try{
        // include connection db
        include('../../database/connection.php');

        // SQL query to select all customers
        $sql = "SELECT * FROM tblcustomer";
    
        $fetch_query = mysqli_query($conn, $sql);
    
        $row = mysqli_num_rows($fetch_query);
    
        if ($row > 0){
            while($result = mysqli_fetch_array($fetch_query)){
                ?>
                    <option value="<?php echo $result['customer_id'] ?>"><?php echo $result['customer_name'] ?></option>
                <?php
            }
        }
    
        $conn->close();
    }catch(Exception $ex){

    }
?>