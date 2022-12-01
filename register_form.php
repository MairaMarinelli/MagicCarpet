<?php
    session_start();
    @include 'config.php';

    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];

        if($connection->connect_error){
            die('Connection failed:' .$connection->connect_error);
        }
        else{
            $select = " SELECT * FROM user WHERE email = '$email' ";
            $result = mysqli_query($connection, $select);
    
            if(mysqli_num_rows($result) > 0){
                echo "Invalid information";
            }else{
                if($password != $cpassword){
                    echo "The passwords dont match";
                }else{
                    $insert = "INSERT INTO user(email, password) VALUES('$email','$password')";
                    mysqli_query($connection, $insert);
                    echo "User created...";
                    header('location:home.php');
                }
            }
        }
    }
?>