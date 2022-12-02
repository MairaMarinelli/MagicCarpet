<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add product</title>

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
                        session_start();
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
    
    <div class="form-container">
        <form action="add_product.php" method="post">
            <h3>add product</h3>

            <input type="text" name="name" required placeholder="enter the name">
            <input type="text" name="description" required placeholder="enter the description">
            <input type="int" name="price" required placeholder="price">
            <input type="file" name="image">
            <input type="submit" name="submit" value="add" class="form-btn">
        </form>
    </div>
</body>
</html>