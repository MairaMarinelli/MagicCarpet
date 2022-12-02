<?php
    session_start();
    @include 'config.php';
    @include 'functions.php';

    $user_data = check_login($connection);

    $db= $connection;
    $tableName="product";
    $columns= ['id', 'name','description','price','image'];
    $fetchData = fetch_data($db, $tableName, $columns);

    function fetch_data($db, $tableName, $columns){
        if(empty($db)){
            $msg= "Database connection error";
        }elseif (empty($columns) || !is_array($columns)) {
            $msg="columns Name must be defined in an indexed array";
        }elseif(empty($tableName)){
            $msg= "Table Name is empty";
        }else{
            $columnName = implode(", ", $columns);
            $query = "SELECT ".$columnName." FROM $tableName"." ORDER BY id DESC";
            $result = $db->query($query);
                if($result== true){ 
                    if ($result->num_rows > 0) {
                        $row= mysqli_fetch_all($result, MYSQLI_ASSOC);
                        $msg= $row;
                    } else {
                        $msg= "No Data Found"; 
                    }
                }else{
                    $msg= mysqli_error($db);
                }
        }
    return $msg;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<section class="header">
        <a href="home.php" class="logo-name"><img src="images/magic-carpet.png" class="png"><span class="logo">Magic Carpet</span></a>

        <nav class="navbar d-flex justify-content-right">
            <a href="home.php">home</a>
            <a href="about.php">about</a>
            <a href="package.php">packages</a>
            <div class="dropdown">
                <button class="dropbtn"><img src="images/user-icon.png" alt="" width="32" height="32" class="rounded-circle">
                    <i class="fa fa-caret-down" style="padding-left:5px;"></i>
                </button>
                <div class="dropdown-content">
                    <?php
                        if(isset($_SESSION['id'])){
                            print "<a href='profile.php'>Profile</a>";
                            print "<a href='admin.php'>Admin</a>";
                            print "<a href='order.php'>My orders</a>";
                            print "<a href='logout.php'>Log out</a>";
                        }
                        else{
                            print "<a href='login.php'>Log in</a>";
                        }
                    ?>
                </div>
            </div>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>
    </section>

    <section class="admin">
        <h1 class="heading-title">Dashboard</h1>
        <div class="row">
            <div class="col-md-4 box">
                <p class="unit">Total sales</p>
                <input name="" value="150">
            </div>
            <div class="col-md-4 box">
                <p class="unit">Total income</p>
                <input name="" value="$150.000">
            </div>
            <div class="col-md-4 box">
                <p class="unit">Products</p>
                <input name="" value="9">
            </div>
        </div>

        <div class="product">
            <div class="row">
                <p class="unit" style="font-size: x-large; margin-top: 17px;">Products</p>
                <form action="add_product_form.php" method="post" style="justify-self: right;">
                    <input type="submit" name="submit" value="add product" class="add">
                </form>
            </div>
            <table class="table table-bordered">
                <thead><tr><th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Image</th>
                    <th></th>
                    <!-- <th></th> -->
                </thead>
                <tbody>
                    <?php
                        if(is_array($fetchData)){
                        $sn=1;
                        foreach($fetchData as $data){
                    ?>
                    <tr>
                        <td><?php echo $sn; ?></td>
                        <td><?php echo $data['name']??''; ?></td>
                        <td><?php echo $data['description']??''; ?></td>
                        <td><?php echo $data['price']??''; ?></td>
                        <td><?php echo $data['image']??''; ?></td>
                        <td><a href="#" style="background-color:#ff3333" class="btn-delete-edit"><i class="fa fa-trash"></i>Delete</a><a href="#" style="background-color:#00cc00; margin-top:5px;" class="btn-delete-edit"><i class="fa fa-edit"></i>Edit</a></td>
                    </tr>
                    <?php
                    $sn++;}}else{ ?>
                    <tr>
                        <td colspan="8">
                            <?php echo $fetchData; ?>
                        </td>
                    <tr>
                <?php
                }?>
                </tbody>
            </table>
        </div>

        <!-- <div class="product">
            <div class="box">
                <img src="images/waterfalls.jpg">
                <div class="content row">
                    <div class="col-md-6">
                        <h3>Adventure</h3>
                        <h4>Lorem ipsum dolor sit amet consectetur.</h4>
                        <h4>Price: $400</h4>
                    </div>
                    <div class="col-md-6 btn-delete-edit">
                        <a href="#" style="background-color:#ff3333"><i class="fa fa-trash"></i>Delete</a>
                        <a href="#" style="background-color:#00cc00"><i class="fa fa-edit"></i>Edit</a>
                    </div>
                </div>
            </div>
            <div class="box">
                <img src="images/athenas.jpg">
                <div class="content row">
                    <div class="col-md-6">
                        <h3>Tour</h3>
                        <h4>Lorem ipsum dolor sit amet consectetur.</h4>
                        <h4>Price: $400</h4>
                    </div>
                    <form action="delete.php" method="post" class="btn-delete-edit">
                        <input type="submit" name="submit" value="delete" class="form-btn">
                    </form>
                    <div class="col-md-6 btn-delete-edit">
                        <a href="#" style="background-color:#ff3333"><i class="fa fa-trash"></i>Delete</a>
                        <a href="#" style="background-color:#00cc00"><i class="fa fa-edit"></i>Edit</a>
                    </div>
                </div>
            </div>
            <div class="box">
                <img src="images/relaxing.jpg">
                <div class="content row">
                    <div class="col-md-6">
                        <h3>Relax</h3>
                        <h4>Lorem ipsum dolor sit amet consectetur.</h4>
                        <h4>Price: $400</h4>
                    </div>
                    <div class="col-md-6 btn-delete-edit">
                        <a href="#" style="background-color:#ff3333"><i class="fa fa-trash"></i>Delete</a>
                        <a href="#" style="background-color:#00cc00"><i class="fa fa-edit"></i>Edit</a>
                    </div>
                </div>
            </div>
            <div class="box">
                <img src="images/sightseeing.jpg">
                <div class="content row">
                    <div class="col-md-6">
                        <h3>Sightseeing</h3>
                        <h4>Lorem ipsum dolor sit amet consectetur.</h4>
                        <h4>Price: $400</h4>
                    </div>
                    <div class="col-md-6 btn-delete-edit">
                        <a href="#" style="background-color:#ff3333"><i class="fa fa-trash"></i>Delete</a>
                        <a href="#" style="background-color:#00cc00"><i class="fa fa-edit"></i>Edit</a>
                    </div>
                </div>
            </div>
            <div class="box">
                <img src="images/city.jpg">
                <div class="content row">
                    <div class="col-md-6">
                        <h3>City</h3>
                        <h4>Lorem ipsum dolor sit amet consectetur.</h4>
                        <h4>Price: $400</h4>
                    </div>
                    <div class="col-md-6 btn-delete-edit">
                        <a href="#" style="background-color:#ff3333"><i class="fa fa-trash"></i>Delete</a>
                        <a href="#" style="background-color:#00cc00"><i class="fa fa-edit"></i>Edit</a>
                    </div>
                </div>
            </div>
            <div class="box">
                <img src="images/camping.jpg">
                <div class="content row">
                    <div class="col-md-6">
                        <h3>Camping</h3>
                        <h4>Lorem ipsum dolor sit amet consectetur.</h4>
                        <h4>Price: $400</h4>
                    </div>
                    <div class="col-md-6 btn-delete-edit">
                        <a href="#" style="background-color:#ff3333"><i class="fa fa-trash"></i>Delete</a>
                        <a href="#" style="background-color:#00cc00"><i class="fa fa-edit"></i>Edit</a>
                    </div>
                </div>
            </div>
            <div class="box">
                <img src="images/about.jpg">
                <div class="content row">
                    <div class="col-md-6">
                        <h3>Relax</h3>
                        <h4>Lorem ipsum dolor sit amet consectetur.</h4>
                        <h4>Price: $400</h4>
                    </div>
                    <div class="col-md-6 btn-delete-edit">
                        <a href="#" style="background-color:#ff3333"><i class="fa fa-trash"></i>Delete</a>
                        <a href="#" style="background-color:#00cc00"><i class="fa fa-edit"></i>Edit</a>
                    </div>
                </div>
            </div>
            <div class="box">
                <img src="images/tourists.jpg">
                <div class="content row">
                    <div class="col-md-6">
                        <h3>Tour</h3>
                        <h4>Lorem ipsum dolor sit amet consectetur.</h4>
                        <h4>Price: $400</h4>
                    </div>
                    <div class="col-md-6 btn-delete-edit">
                        <a href="#" style="background-color:#ff3333"><i class="fa fa-trash"></i>Delete</a>
                        <a href="#" style="background-color:#00cc00"><i class="fa fa-edit"></i>Edit</a>
                    </div>
                </div>
            </div>
            <div class="box">
                <img src="images/thailand.jpg">
                <div class="content row">
                    <div class="col-md-6">
                        <h3>Adventure</h3>
                        <h4>Lorem ipsum dolor sit amet consectetur.</h4>
                        <h4>Price: $400</h4>
                    </div>
                    <div class="col-md-6 btn-delete-edit">
                        <a href="#" style="background-color:#ff3333"><i class="fa fa-trash"></i>Delete</a>
                        <a href="#" style="background-color:#00cc00"><i class="fa fa-edit"></i>Edit</a>
                    </div>
                </div>
            </div>
        </div> -->
    </section>
</body>
</html>