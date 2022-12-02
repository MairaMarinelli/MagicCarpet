<?php
    //@include 'login_form.php';
    session_start();
    $connection = mysqli_connect('localhost','root','','magiccarpet');

    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $mobilenumber = $_POST['mobilenumber'];
    $address = $_POST['address'];
    $state = $_POST['state'];
    $country = $_POST['country'];

    if($connection->connect_error){
        die('Connection failed:' .$connection->connect_error);
    }
    else{
        echo $_SESSION['id'];
        $update = "UPDATE `user` SET `name` = '$name', `surname` = '$surname', `mobilenumber` = '$mobilenumber', `address` = '$address', `state` = '$state', `country` = '$country' WHERE `id` = {$_SESSION['id']}";
        mysqli_query($connection, $update);
        header('location:profile.php');
        echo "User updated...";
    }
?>
