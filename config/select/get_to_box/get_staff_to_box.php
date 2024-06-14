<?php
    // include connection db
     include('../../database/connection.php');

    // SQL query to select all customers
    $sql = "SELECT * FROM tblstaff";

    $fetch_query = mysqli_query($conn, $sql);

    $row = mysqli_num_rows($fetch_query);

    if ($row > 0){
        while($result = mysqli_fetch_array($fetch_query)){
            ?>
                <option value="<?php echo $result['staff_id'] ?>"><?php echo $result['staff_name'] ?></option>
            <?php
        }
    }

    $conn->close();
?>