<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<body>
    <section class="header">
        <a href="home.php" class="logo-name"><img src="images/magic-carpet.png" class="png"><span class="logo">Magic Carpet</span></a>

        <nav class="navbar">
        <a href="home.php">home</a>
        <a href="about.php">about</a>
        <a href="package.php">package</a>
        <a href="login_form.php" class="login"><span>log in</span></a>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>
    </section>


    <!-- <div class="container rounded bg-white mt-5 mb-5">
        <div class="row">
            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="images/user-icon.png"></div>
            </div>
            <div class="col-md-5 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Profile Settings</h4>
                    </div>
                    <div class="row mt-2">
                        <form action="" method="post" class="form-control">
                            <div class="col-md-6"><label class="labels">Name</label><input type="name" name="name" placeholder="enter your name" required maxlength="20" class="box"></div>
                            <div class="col-md-6"><label class="labels">Name</label><input type="surname" name="surname" placeholder="enter your surname" required maxlength="50" class="box"></div>
                        </form>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6"><label class="labels">Mobile Number</label><input type="mobilenumber" name="mobilenumber" placeholder="enter your mobile number" class="box"></div>
                        <div class="col-md-6"><label class="labels">Address</label><input type="address" name="address" placeholder="enter your address" required maxlength="20" class="box"></div>
                        <div class="col-md-6"><label class="labels">Postal Code</label><input type="postalcode" name="postalcode" placeholder="enter your postal code" required maxlength="20" class="box"></div>
                        <div class="col-md-6"><label class="labels">State</label><input type="state" name="state" placeholder="enter your state" required maxlength="20" class="box"></div>
                        <div class="col-md-6"><label class="labels">Country</label><input type="country" name="country" placeholder="enter your country" required maxlength="20" class="box"></div>
                    </div>
                    <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button">Save Profile</button></div>
                </div>
            </div>
        </div>
    </div> -->
    <section class="profile">
        <h1 class="heading-title">edit your profile!</h1>
        <form action="profile_form.php" method="post" class="profile-form">
            <div class="flex">
                <div class="inputBox">
                    <span>name :</span>
                    <input type="text" placeholder="enter your name" name="name">
                    <span>surname :</span>
                    <input type="text" placeholder="enter your surname" name="surname">
                </div>
                <div class="inputBox">
                    <span>dni :</span>
                    <input type="number" placeholder="enter your dni" name="dni">
                </div>
                <div class="inputBox">
                    <span>how many :</span>
                    <input type="number" placeholder="number of guests" name="guests">
                </div>
                <div class="inputBox">
                    <span>Payment data :</span>
                    <input type="number" placeholder="enter your card numbers" name="cardnumber">
                    <input type="number" placeholder="enter the card owner's dni" name="dni">
                    <input type="number" placeholder="enter your card code" name="code">
                </div>
            </div>

            <input type="submit" value="submit" class="btn" name="send">
        </form>
    </section>

    <section class="booking">
        <h1 class="heading-title">book your trip!</h1>

        <form action="book_form.php" method="post" class="book-form">
            <div class="flex">
                <div class="inputBox">
                    <span>name :</span>
                    <input type="text" placeholder="enter your name" name="name">
                </div>
                <div class="inputBox">
                    <span>dni :</span>
                    <input type="number" placeholder="enter your dni" name="dni">
                </div>
                <div class="inputBox">
                    <span>how many :</span>
                    <input type="number" placeholder="number of guests" name="guests">
                </div>
                <div class="inputBox">
                    <span>Payment data :</span>
                    <input type="number" placeholder="enter your card numbers" name="cardnumber">
                    <input type="number" placeholder="enter the card owner's dni" name="dni">
                    <input type="number" placeholder="enter your card code" name="code">
                </div>
            </div>

            <input type="submit" value="submit" class="btn" name="send">
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
                <h3>extra links</h3>
                <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
                <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
                <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
                <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
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