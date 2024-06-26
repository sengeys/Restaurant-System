<?php
    try{
        // include connection db
        include('../database/connection.php');
    
        if(isset($_POST['full_name']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['confirm_password']) ){
            $full_name = $_POST['full_name'];
            $email     = $_POST['email'];
            $password      = $_POST['password'];
            $confirm_password      = $_POST['confirm_password'];

            if ($password == $confirm_password){
                $sql0 = "SELECT * FROM tbluser WHERE email = '". $email ."'";
                $fetch_query = mysqli_query($conn, $sql0);
                $row = mysqli_num_rows($fetch_query);
    
                if ($row > 0){
                    $data_array = ["status"=>"error", "message"=>"Email Exsits"];
                    echo json_encode($data_array);
                }else{
                    // SQL query to select all customers
                    $sql = "INSERT INTO tblstaff SET staff_name = '$full_name', sex = '', phone = '', address = ''";
                            
                    $insert_query = mysqli_query($conn, $sql);
    
                    $last_id = $conn->insert_id;
    
                    if ($insert_query > 0){
                        $sql2 = "INSERT INTO tbluser (user_id, email, pass_word) VALUES ($last_id,'$email','$password')";
                        $update_query2 = mysqli_query($conn, $sql2);
    
                        if ($update_query2 > 0){
                            $_SESSION['user_id'] = $last_id;
                            $data_array = ["status"=>"success", "message"=>"Logged Successfully"];
                            echo json_encode($data_array);
                        }
    
                    }else{
                        $data_array = ["status"=>"error", "message"=>"Check password and confirm password"];
                        echo json_encode($data_array);
                    }
                }
            }else{
                $data_array = ["status"=>"error", "message"=>"Check password and confirm password"];
                echo json_encode($data_array);
            }
        }
    }catch(Exception $ex){

    }
?>