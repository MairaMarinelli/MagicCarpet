<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register form</title>

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

   <div class="form-container">
      <form action="register_form.php" method="post">
         <h3>register</h3>
         <?php
            if(isset($error)){
               foreach($error as $error){
                  echo '<span class="error-msg">'.$error.'</span>';
               };
            };
         ?>
         <input type="email" name="email" required placeholder="enter your email">
         <input type="password" name="password" required placeholder="enter your password">
         <input type="password" name="cpassword" required placeholder="confirm your password">
         <input type="submit" name="submit" value="register now" class="form-btn" onclick="location.href='home.php'">
         <p>already have an account? <a href="login_form.php">login now</a></p>
      </form>
   </div>
</body>
</html>