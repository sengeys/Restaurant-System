<?php
    try{
        // include connection db
        include('../database/connection.php');
    
        if(isset($_POST['staff_name']) && isset($_POST['email']) && isset($_POST['password'])){
            $staff_name = $_POST['staff_name'];
            $gender     = $_POST['gender'];
            $phone     = $_POST['phone'];
            $address     = $_POST['address'];
            $email     = $_POST['email'];
            $password      = $_POST['password'];

            $sql0 = "SELECT * FROM tbluser WHERE email = '". $email ."'";
            $fetch_query = mysqli_query($conn, $sql0);
            $row = mysqli_num_rows($fetch_query);

            if ($row > 0){
                $data_array = ["status"=>"error", "message"=>"Email Exsits"];
                echo json_encode($data_array);
            }else{
                // SQL query to select all customers
                $sql = "INSERT INTO tblstaff SET staff_name = '$staff_name', sex = '$gender ', phone = '$phone', address = '$address'";
                        
                $insert_query = mysqli_query($conn, $sql);

                $last_id = $conn->insert_id;

                if ($insert_query > 0){
                    $sql2 = "INSERT INTO tbluser (user_id, email, pass_word) VALUES ($last_id,'$email','$password')";
                    $update_query2 = mysqli_query($conn, $sql2);

                    if ($update_query2 > 0){
                        echo "1";
                    }

                }else{
                    echo "-1";
                }
            }
        }
    }catch(Exception $ex){

    }
?>