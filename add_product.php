<?php
    //session_start();
    @include 'config.php';

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $image = $_FILES['image'];

        if($connection->connect_error){
            die('Connection failed:' .$connection->connect_error);
        }
        else{
            $insert = "INSERT INTO product(`name`, `description`, `price`, `image`) VALUES('$name','$description','$price','$image')";
            mysqli_query($connection, $insert);
            //echo "Product created...";
            header('location:admin.php');
        }
    }
?>