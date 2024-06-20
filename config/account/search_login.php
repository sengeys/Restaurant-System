<?php
    try{
        // include connection db
        include('../database/connection.php');

        // get data from index.php
        if(isset($_POST['email']) && isset($_POST['password'])){
            $email = $_POST['email'];
            $password = $_POST['password'];

            // SQL query to select all tbluser
            $sql = "SELECT * FROM tbluser WHERE email = '". $email ."' AND pass_word = '". $password ."'";

            $fetch_query = mysqli_query($conn, $sql);

            $row = mysqli_num_rows($fetch_query);

            if ($row > 0){
                $result = mysqli_fetch_array($fetch_query);
                $_SESSION['user_id'] = $result['user_id'];
                
                $data_array = ["status"=>"success", "message"=>"Logged Successfully"];
                echo json_encode($data_array);

            }else{
                $data_array = ["status"=>"error", "message"=>"check email or password"];
                echo json_encode($data_array);
            }
            $conn->close();
        }
    }catch(Exception $ex){

    }
?>