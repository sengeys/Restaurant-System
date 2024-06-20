<?php
    // include connection db


    try{
        include('../database/connection.php');

        // SQL query to select all customers
        $sql = "SELECT * FROM tblstaff ORDER BY tblstaff.staff_id DESC";

        $fetch_query = mysqli_query($conn, $sql);

        $row = mysqli_num_rows($fetch_query);

        
        if ($row > 0){
            while($result = mysqli_fetch_array($fetch_query)){
                if ($_SESSION['user_id'] == 1){
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
                            <?php
                                if ($result['staff_id'] > 1){
                                    ?>
                                    <button type="submit" id="delete_btn" class="btn btn-danger btn-sm" data-id="<?php echo $result['staff_id'] ?>">
                                        <i class="nav-icon fas fa-trash"></i>
                                        Delete
                                    </button>
                                    <?php
                                }
                            ?>
                        </td>
                    </tr>
                    <?php
                    }else{
                        ?>
                        <tr>
                            <td> <?php echo $result['staff_id'] ?></td>
                            <td> <?php echo $result['staff_name'] ?></td>
                            <td> <?php echo $result['sex'] ?></td>
                            <td> <?php echo $result['phone'] ?></td>
                            <td style='width: 20%;'> <?php echo $result['address'] ?></td>
                        </tr>
                        <?php
                    }
            }
        }else{
            echo "<tr>";
            echo "<td colspan='6' align='center'> No Found</td>";
            echo "</tr>";
        }

        $conn->close();
    }catch(Exception $ex){
        echo "<tr>";
        echo "<td colspan='6' align='center'  class='bg-danger'> Connection Database Field.</td>";
        echo "</tr>";
    }

?>