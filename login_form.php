<?php
    session_start();
    @include 'config.php';
    @include 'functions.php';

    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        if($connection->connect_error){
            die('Connection failed:' .$connection->connect_error);
        }
        else{
            if(!empty($email) && !empty($password)){
                $select = "SELECT * FROM user WHERE email = '$email' limit 1";
                $result = mysqli_query($connection, $select);

                if(mysqli_num_rows($result) > 0){
                    $user_data = mysqli_fetch_assoc($result);
                    if($user_data['password'] == $password){
                        $_SESSION['id'] = $user_data['id'];
                        header("Location: home.php");
                        die;
                    }
                    echo "incorrect user or password";
                }else{
                    echo "incorrect user or password";
                }
            }else{
                echo "Invalid information";
            }
        }
    }
?>