<?php
    // include connection db
     include('../database/connection.php');

    // Get Data
    $search = $_POST['search'];

    // SQL query to select all customers
    $sql = "SELECT * FROM tblcustomer WHERE customer_id like '{$search}%' OR customer_name like '{$search}%' OR contact like '{$search}%'";

    $fetch_query = mysqli_query($conn, $sql);

    $row = mysqli_num_rows($fetch_query);

    if ($row > 0){
        while($result = mysqli_fetch_array($fetch_query)){
            ?>
                <tr>
                    <td> <?php echo $result['customer_id'] ?></td>
                    <td> <?php echo $result['customer_name'] ?></td>
                    <td> <?php echo $result['contact'] ?></td>
                    <td> 
                        <button type="button" id="edit_btn" class="btn btn-warning btn-sm" data-id="<?php echo $result['customer_id'] ?>">
                            <i class="nav-icon fas fa-edit"></i>
                            Edit
                        </button>
                        <button type="submit" id="delete_btn" class="btn btn-danger btn-sm" data-id="<?php echo $result['customer_id'] ?>">
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
    }

    $conn->close();
?>