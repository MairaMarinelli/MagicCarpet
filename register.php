<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register form</title>

   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   <div class="form-container">
      <form action="register_form.php" method="post">
         <h3>register</h3>

         <input type="email" name="email" required placeholder="enter your email">
         <input type="password" name="password" required placeholder="enter your password">
         <input type="password" name="cpassword" required placeholder="confirm your password">
         <input type="submit" name="submit" value="register now" class="form-btn" onclick="location.href='home.php'">
         <p>already have an account? <a href="login_form.php">login now</a></p>
      </form>
   </div>
</body>
</html>