<?php
    $connection = mysqli_connect('localhost','root','','magiccarpet');

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
            $error[] = 'this user already exists!';
        }else{
            if($password != $cpassword){
                $error[] = 'the passwords dont match';
            }else{
                $x = $connection->prepare("insert into user(email, password) values(?,?)");
                $x->bind_param("ss",$email,$password);
                $x->execute();
                echo "User created...";
                $x->close();
                $connection->close();
            }
        }
    }
?>