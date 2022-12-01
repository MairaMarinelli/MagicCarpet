<?php
    session_start();
    @include 'config.php';
    @include 'functions.php';

    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];

        if($connection->connect_error){
            die('Connection failed:' .$connection->connect_error);
        }
        else{
            if(empty($email) && empty($password) && empty($cpassword)){
                $error[] = 'Invalid information';
                
            }else{
                $select = " SELECT * FROM user WHERE email = '$email' ";
                $result = mysqli_query($connection, $select);
        
                if(mysqli_num_rows($result) > 0){
                    $error[] = 'Invalid information';
                }else{
                    if($password != $cpassword){
                        $error[] = 'The passwords dont match';
                    }else{
                        $x = $connection->prepare("insert into user(email, password) values(?,?)");
                        $x->bind_param("ss",$email,$password);
                        $x->execute();
                        echo "User created...";
                        $x->close();
                        $connection->close();

                        //header("Location: login.php");
                        //die;
                    }
                }
            }
        }
        echo "Invalid information";
    }
?>