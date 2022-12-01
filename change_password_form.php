<?php
    session_start();
    @include 'config.php';

    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $cpassword = $_POST['npassword'];
        $npassword = $_POST['cpassword'];

        if($connection->connect_error){
            die('Connection failed:' .$connection->connect_error);
        }
        else{
            $select = "SELECT * FROM user WHERE email = '$email' limit 1";
            $result = mysqli_query($connection, $select);

            if(mysqli_num_rows($result) > 0){
                $user_data = mysqli_fetch_assoc($result);
                if($user_data['password'] == $password && $npassword == $cpassword){
                    $update = "UPDATE user SET password = '$npassword' WHERE email = '$email'";
                    mysqli_query($connection, $update);
                    echo "password changed successfully";
                    header('location:profile.php');
                }
                echo "incorrect user or password";
            }else{
                echo "incorrect user or password";
            }
        }
    }
?>
