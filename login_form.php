<?php
    session_start();
    //$_SESSION['Sesion'] = array();
    @include 'config.php';

    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        if($connection->connect_error){
            die('Connection failed:' .$connection->connect_error);
        }
        else{
            $select = "SELECT * FROM user WHERE email = '$email' limit 1";
            $result = mysqli_query($connection, $select);

            if(mysqli_num_rows($result) > 0){
                $user_data = mysqli_fetch_assoc($result);
                if($user_data['password'] == $password){
                    $_SESSION['id'] = $user_data['id'];
                    header('location:home.php');
                }
            }else{
                echo "incorrect user or password";
            }
        }
    }
?>