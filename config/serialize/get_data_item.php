<?php
    try{
        // include connection db
        include('../database/connection.php');

        $count = count($_POST['item_id']);

        if ($count > 0){
            for ($i = 0; $i < $count; $i++){
                if (trim($_POST['item_id'][$i]) != ''){
                    $item_id    = $_POST['item_id'][$i];

                    // SQL query to select all customers
                    $sql = "SELECT * FROM tblitem WHERE item_id = $id";

                    $fetch_query = mysqli_query($conn, $sql);

                    $row = mysqli_num_rows($fetch_query);

                    if ($row > 0){
                        $result = mysqli_fetch_array($fetch_query);
                        echo json_encode($result);
                    }

                    $conn->close();
                }
            }
            
        }else{
            echo "-1";
        }

        $conn->close();
    }catch(Exception $ex){
        
    }
?>