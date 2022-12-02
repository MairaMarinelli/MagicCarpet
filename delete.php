<?php
    // session_start();
    // @include 'config.php';

    // if(isset($_POST['submit'])){
    //     $email = $_POST['email'];
    //     $password = $_POST['password'];

    //     if($connection->connect_error){
    //         die('Connection failed:' .$connection->connect_error);
    //     }
    //     else{
    //         $select = "SELECT * FROM user WHERE email = '$email' limit 1";
    //         $result = mysqli_query($connection, $select);

    //         if(mysqli_num_rows($result) > 0){
    //             $user_data = mysqli_fetch_assoc($result);
    //             if($user_data['password'] == $password){
    //                 $_SESSION['id'] = $user_data['id'];
    //                 header('location:home.php');
    //             }
    //         }else{
    //             echo "incorrect user or password";
    //         }
    //     }
    // }
    // if(isset($_POST['submit'])){
    //     $select = "SELECT * FROM `product` WHERE `id` = {$_SESSION['id']}";
    //     $result = mysqli_query($connection, $select);
    //     if(mysqli_num_rows($result) > 0){
    //         print "<span>name : {$user_data['name']}</span>";
    //         print "<span>surname : {$user_data['surname']}</span>";
    //         print "<span>mobile number : {$user_data['mobilenumber']}</span>";
    //         print "<span>address : {$user_data['address']}</span>";
    //         print "<span>state : {$user_data['state']}</span>";
    //         print "<span>country : {$user_data['country']}</span>";
    //     }

    //     if($connection->connect_error){
    //         die('Connection failed:' .$connection->connect_error);
    //     }
    //     else{
    //         $select = "SELECT * FROM user WHERE email = '$email' limit 1";
    //         $result = mysqli_query($connection, $select);

    //         if(mysqli_num_rows($result) > 0){
    //             $user_data = mysqli_fetch_assoc($result);
    //             if($user_data['password'] == $password){
    //                 $_SESSION['id'] = $user_data['id'];
    //                 header('location:home.php');
    //             }
    //         }else{
    //             echo "incorrect user or password";
    //         }
    //     }
    // }
?>