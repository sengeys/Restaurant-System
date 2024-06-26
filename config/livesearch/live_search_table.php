<?php
    try{
            // include connection db
            include('../database/connection.php');

            // Get Data
            $search = $_POST['search'];

            // SQL query to select all customers
            $sql = "SELECT * FROM tbltable WHERE table_id like '{$search}%' OR table_name like '{$search}%'";

            $fetch_query = mysqli_query($conn, $sql);

            $row = mysqli_num_rows($fetch_query);

            if ($row > 0){
                while($result = mysqli_fetch_array($fetch_query)){
                    ?>
                        <tr>
                            <td> <?php echo $result['table_id'] ?></td>
                            <td> <?php echo $result['table_name'] ?></td>
                            <td> 
                                <button type="button" id="edit_btn" class="btn btn-warning btn-sm" data-id="<?php echo $result['table_id'] ?>">
                                    <i class="nav-icon fas fa-edit"></i>
                                    Edit
                                </button>
                                <button type="submit" id="delete_btn" class="btn btn-danger btn-sm" data-id="<?php echo $result['table_id'] ?>">
                                    <i class="nav-icon fas fa-trash"></i>
                                    Delete
                                </button>
                            </td>
                        </tr>
                    <?php
                }
            }else{
                echo "<tr>";
                echo "<td colspan='3' align='center'> No Found</td>";
                echo "</tr>";
            }

            $conn->close();
    }catch(Exception $ex){
            echo "<tr>";
            echo "<td colspan='3' align='center' class='bg-danger'> Connnection Database Field.</td>";
            echo "</tr>";
    }
?>