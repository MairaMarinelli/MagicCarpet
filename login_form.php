<?php
    session_start();
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
                    $_SESSION['name'] = $user_data['name'];
                    $_SESSION['surname'] = $user_data['surname'];
                    $_SESSION['mobile'] = $user_data['mobile'];
                    $_SESSION['address'] = $user_data['address'];
                    $_SESSION['state'] = $user_data['state'];
                    $_SESSION['country'] = $user_data['country'];
                    header('location:home.php');
                }
            }else{
                echo "incorrect user or password";
            }
        }
    }
?>