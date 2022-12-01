<?php
    session_start();
    @include 'config.php';
    @include 'functions.php';

    $user_data = check_login($connection);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order</title>

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
                    <a href="login.php">Log in</a>
                    <a href="register.php">Sign up</a>
                    <a href="order.php">My orders</a>
                    <?php
                        if(isset($_SESSION['id'])){
                            print "<a href='profile.php'>Profile</a>"; 
                            print "<a href='logout.php'>Log out</a>"; 
                            print "<a href='admin.php'>Admin</a>";
                        }
                    ?>
                </div>
            </div>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>
    </section>

    <!-- <div class="heading" style="background:url(images/header-bg-1.png) no-repeat">
        <h1>My orders</h1>
    </div> -->

    <section class="myorders">
        <h1 class="heading-title" style="background-color:#60DBCD;">My orders</h1>
        <div class="product">
            <div class="shop">
                <div class="box">
					<img src="images/camping.jpg">
					<div class="content">
						<h3>Camping</h3>
						<h4>Price: $400</h4>
						<p class="unit">People: <input name="" value="1"></p>
						<p class="btn-area"><i aria-hidden="true" class="fa fa-trash"></i> <span class="btn2">Delete</span></p>
					</div>
				</div>
                <div class="box">
					<img src="images/tourists.jpg">
					<div class="content">
						<h3>Tour</h3>
						<h4>Price: $500</h4>
						<p class="unit">People: <input name="" value="1"></p>
						<p class="btn-area"><i aria-hidden="true" class="fa fa-trash"></i> <span class="btn2">Delete</span></p>
					</div>
				</div>
                <div class="box">
					<img src="images/athenas.jpg">
					<div class="content">
						<h3>sightseeing</h3>
						<h4>Price: $700</h4>
						<p class="unit">People: <input name="" value="1"></p>
						<p class="btn-area"><i aria-hidden="true" class="fa fa-trash"></i> <span class="btn2">Delete</span></p>
					</div>
				</div>
            </div>

            <div class="side-bar">
				<p><span>Subtotal</span> <span>$1600</span></p>
				<hr>
				<p><span>Total</span> <span>$1600</span></p><a href="#"><i class="fa fa-shopping-cart"></i>Checkout</a>
			</div>
        </div>
    </section>

    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>quick links</h3>
                <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
                <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
                <a href="package.php"> <i class="fas fa-angle-right"></i> package</a>
                <a href="book.php"> <i class="fas fa-angle-right"></i> book</a>
            </div>

            <div class="box">
                <h3>quick links</h3>
                <a href="#"> <i class="fas fa-angle-right"></i> contact</a>
                <a href="about.php"> <i class="fas fa-angle-right"></i> terms of use</a>
                <a href="profile.php"> <i class="fas fa-angle-right"></i> profile</a>
                <a href="order.php"> <i class="fas fa-angle-right"></i> orders</a>
            </div>

            <div class="box">
                <h3>contact info</h3>
                <a href="#"><i class="fas fa-phone"></i> +123-456-7890 </a>
                <a href="#"><i class="fas fa-envelope"></i> magic_carpet@gmail.com </a>
                <a href="#"><i class="fas fa-map"></i> Buenos Aires, Argentina - AA0123RF </a>
            </div>

            <div class="box">
                <h3>follow us</h3>
                <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
                <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
                <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
                <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
            </div>
        </div>

        <div class="credit"><span>Magic Carpet enterprise</span> | all rights reserved </div>
    </section>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>
    
</body>
</html>