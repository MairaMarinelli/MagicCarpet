<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>

    <!-- swiper css link  -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
    <!-- <script language="javascript">
        var x = 0;

        function hola(x){
            if(x == 0) {
                document.getElementById("cont1").style.visibility="hidden";
                document.getElementById("cont2").style.visibility="hidden";
            }

            if(x == 1) {
                document.getElementById("cont1").style.visibility="visible";
                document.getElementById("cont2").style.visibility="hidden"; 
            }

            if(x == 2)  {
                document.getElementById("cont1").style.visibility="hidden";
                document.getElementById("cont2").style.visibility="visible"; 
            }
        }
    </script> -->
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
                        session_start();
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

    <section class="home">
        <div class="swiper home-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide" style="background:url(images/home-slide-5.jpg) no-repeat">
                    <div class="content">
                    <span>explore, discover, travel</span>
                    <h3>travel arround the world</h3>
                    <a href="package.php" class="btn">discover more</a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background:url(images/home-slide-7.jpg) no-repeat">
                    <div class="content">
                    <span>explore, discover, travel</span>
                    <h3>travel arround the world</h3>
                    <a href="package.php" class="btn">discover more</a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background:url(images/home-slide-3.jpg) no-repeat">
                    <div class="content">
                    <span>explore, discover, travel</span>
                    <h3>travel arround the world</h3>
                    <a href="package.php" class="btn">discover more</a>
                    </div>
                </div>
            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>

    <section class="services">
        <h1 class="heading-title"> our services </h1>

        <div class="box-container">
            <div class="box">
                <img src="images/services-campervan.png" alt="">
                <h3>adventure</h3>
            </div>

            <div class="box">
                <img src="images/services-maps.png" alt="">
                <h3>tour guide</h3>
            </div>

            <div class="box">
                <img src="images/services-vacations.png" alt="">
                <h3>relaxing</h3>
            </div>

            <div class="box">
                <img src="images/services-sightseeing.png" alt="">
                <h3>sightseeing</h3>
            </div>

            <div class="box">
                <img src="images/services-cityscape.png" alt="">
                <h3>city</h3>
            </div>

            <div class="box">
                <img src="images/services-tent.png" alt="">
                <h3>camping</h3>
            </div>
        </div>
    </section>

    <section class="home-packages">
        <h1 class="heading-title"> our packages </h1>

        <div class="box-container">
            <div class="box">
                <div class="image">
                    <img src="images/waterfalls.jpg" alt="">
                </div>
                <div class="content">
                    <h3>adventure</h3>
                    <p>Come join us on this amazing journey!</p>
                    <div class="btn-book"><a href="book.php" class="btn">book now</a></div>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/athenas.jpg" alt="">
                </div>
                <div class="content">
                    <h3>sightseeing</h3>
                    <p>Discover places your have never been before!</p>
                    <div class="btn-book"><a href="book.php" class="btn">book now</a></div>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/relaxing.jpg" alt="">
                </div>
                <div class="content">
                    <h3>relax</h3>
                    <p>Come and forget about all your worries!</p>
                    <div class="btn-book"><a href="book.php" class="btn">book now</a></div>
                </div>
            </div>
        </div>

        <div class="load-more"> <a href="package.php" class="btn">view more</a> </div>
    </section>

    <section class="home-about">
        <div class="image">
            <img src="images/about.jpg" alt="">
        </div>

        <div class="content">
            <h3>about us</h3>
            <p>Magic Carpet is a small enterprise that specializes in adventure travel planning, tour guiding and travel management and provide a unique opportunity for our clients to merge with the beauty of nature and allow them to focus on positive things, make friends, make resolutions, and relive themselves from stress.</p>
            <a href="about.php" class="btn">read more</a>
        </div>
    </section>

    <section class="form-container-contact">
        <form action="" method="post">
            <h3>contact us</h3>
            <input type="email" name="email" placeholder="enter your email" required maxlength="50">
            <input type="subject" name="subject" placeholder="enter the subject">
            <textarea class="textarea" name="body" placeholder="enter your message" cols="30" rows="10"></textarea>
            <input type="send" name="send" value="send" class="form-btn">
        </form>
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

    <!-- swiper js link  -->
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>
    
</body>
</html>