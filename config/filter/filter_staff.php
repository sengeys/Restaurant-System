<?php
    // include connection db
     include('../database/connection.php');

     // Get Data
    $search_gender = $_POST['search_gender'];
    $search_address = $_POST['search_address'];

    // SQL query to select all customers

    $sql = "SELECT * FROM tblstaff WHERE 1=1";

    if ($search_gender != '') {
        $sql .= " AND sex = '$search_gender'";
    }

    if ($search_address != '') {
        $sql .= " AND address = '$search_address'";
    }

    $fetch_query = mysqli_query($conn, $sql);

    $row = mysqli_num_rows($fetch_query);

    if ($row > 0){
        while($result = mysqli_fetch_array($fetch_query)){
            ?>
                <tr>
                    <td> <?php echo $result['staff_id'] ?></td>
                    <td> <?php echo $result['staff_name'] ?></td>
                    <td> <?php echo $result['sex'] ?></td>
                    <td> <?php echo $result['phone'] ?></td>
                    <td> <?php echo $result['address'] ?></td>
                    <td> 
                        <button type="button" id="edit_btn" class="btn btn-warning btn-sm" data-id="<?php echo $result['staff_id'] ?>">
                            <i class="nav-icon fas fa-edit"></i>
                            Edit
                        </button>
                        <button type="submit" id="delete_btn" class="btn btn-danger btn-sm" data-id="<?php echo $result['staff_id'] ?>">
                            <i class="nav-icon fas fa-trash"></i>
                            Delete
                        </button>
                    </td>
                </tr>
            <?php
        }
    }else{
        echo "<tr>";
        echo "<td colspan='6' align='center'> No Found</td>";
        echo "</tr>";
    }

    $conn->close();
?>