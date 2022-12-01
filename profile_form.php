<?php
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
        // $x = $connection->prepare("insert into user(name, surname, mobilenumber, address, state, country)
        //     values(?,?,?,?,?,?)");
        // $x->bind_param("ssisss",$name,$surname,$mobilenumber,$address,$state,$country);
        // $x->execute();
        // echo "Changes saved...";
        // $x->close();
        // $connection->close();

        $insert = "INSERT INTO user(name, surname, mobilenumber, address, state, country) VALUES('$name','$surname','$mobilenumber','$address','$state','$country')";
        mysqli_query($connection, $insert);
        echo "User updated...";
        header('location:profile.php');
    }
?>
