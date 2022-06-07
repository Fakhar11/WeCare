<!-- <?php
 require("dbconnection.php")
?> -->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- ===== CSS ===== -->
        <link rel="stylesheet" type="text/css" href="signup.css">
        <!-- <link rel="stylesheet" type="text/css" href="https://cdn.usebootstrap.com/bootstrap/4.1.3/css/bootstrap.min.css"> -->
    
        <!-- ===== BOX ICONS ===== -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

        <title>WeCare Registeration</title>
    </head>
    <body>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="signupbox">
            <img src="avatar.jpg " class="avatar">
            <h1> Sign Up </h1>
    
            <form action="register.php" method="post">
                <p>Username</p>
                <input type="text" name="userName" placeholder="Username" required>
                <p>Email</p>
                <input type="text" name="email" placeholder="Email" required>
                <p>Password</p>
                <input type="Password" name="password" placeholder="Password" required>
                <input type="submit" value="Sign Up" >
                <a href="login.php"><h3>Already have an account? Click here!</h3></a>
            </form>
        </div>

        
        <!--===== MAIN JS =====-->
       <!--  <script src="assets/main.js"></script> -->
    </body>
</html>


