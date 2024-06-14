<?php
    // include connection db
    
    try{
        include('../database/connection.php');

        // SQL query to select all customers
        $sql = "SELECT * FROM tblitem ORDER BY tblitem.item_id DESC";

<<<<<<< HEAD
    $items = array();

    if ($result->num_rows > 0) {
        // Fetch all customers data
        while($row = $result->fetch_assoc()) {
            $items[] = $row;
=======
        $fetch_query = mysqli_query($conn, $sql);

        $row = mysqli_num_rows($fetch_query);

        if ($row > 0){
                while($result = mysqli_fetch_array($fetch_query)){
                    ?>
                        <tr>
                            <td> <?php echo $result['item_id'] ?></td>
                            <td> <?php echo $result['item_name'] ?></td>
                            <td> <?php echo "$ " . $result['unit_price'] ?></td>
                        <td> 
                            <button type="button" id="edit_btn" class="btn btn-warning btn-sm" data-id="<?php echo $result['item_id'] ?>">
                                <i class="nav-icon fas fa-edit"></i>
                            Edit
                                </button>
                            <button type="submit" id="delete_btn" class="btn btn-danger btn-sm" data-id="<?php echo $result['item_id'] ?>">
                                <i class="nav-icon fas fa-trash"></i>
                            Delete
                        </button>
                    </td>
                </tr>
            <?php
                }
            }else{
                echo "<tr>";
                echo "<td colspan='4' align='center'> No Found</td>";
                echo "</tr>";
>>>>>>> ff077085cac443833562a1485cd9ae1bec4ac027
        }
        $conn->close();
    }catch(Exception $ex){
        echo "<tr>";
        echo "<td colspan='4' align='center' class='bg-danger'> Connection Database Field</td>";
        echo "</tr>";
    }
<<<<<<< HEAD
    $conn->close();

    // Return the data as JSON
    echo json_encode($items);
?>
=======
?>
>>>>>>> ff077085cac443833562a1485cd9ae1bec4ac027
