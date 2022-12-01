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
    <title>Profile</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" />

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
                    <a href="profile.php">Profile</a>
                    <a href="admin.php">Admin</a>
                </div>
            </div>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>
    </section>

    <section class="profile">
        <h1 class="heading-title">edit your profile!</h1>
        <div class="row">
            <div class="col-md-4 border-right user">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="images/user-icon.png"></div>
            </div>
            <div class="col-md-8">
                <form action="profile_form.php" method="post" class="profile-form">
                    <div class="flex">
                        <div class="inputBox">
                            <span>name :</span>
                            <input type="text" placeholder="enter your name" name="name">
                            <span>surname :</span>
                            <input type="text" placeholder="enter your surname" name="surname">
                        </div>
                        <div class="inputBox">
                            <span>Mobile Number :</span>
                            <input type="number" placeholder="enter your phone" name="mobilenumber">
                            <span>Address :</span>
                            <input type="text" placeholder="enter your address" name="address">
                        </div>
                        <div class="inputBox">
                            <span>State :</span>
                            <input type="text" placeholder="enter your state" name="state">
                            <span>Country :</span>
                            <input type="text" placeholder="enter your country" name="country">
                        </div>
                    </div>
                    <input type="submit" value="submit" class="btn" name="send">
                </form>      
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
                <a href="#"> <i class="fas fa-phone"></i> +123-456-7890 </a>
                <a href="#"> <i class="fas fa-envelope"></i> magic_carpet@gmail.com </a>
                <a href="#"> <i class="fas fa-map"></i> Buenos Aires, Argentina - AA0123RF </a>
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
</body>
</html>