<?php
    require 'connection.php';
    session_start();
    if(isset($_SESSION['email'])){
        header('location: index.php');
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="images/loho.jpg" />
        <title>TeleShop Nepal</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css">
        <link rel="stylesheet" href="css/index.css" type="text/css">
    </head>
    <body>
        <div>
            <?php
                include 'header.php';
            ?>
            <br><br>
            <div class="container">
                <div class="row">
                    <div class="col-xs-4 col-xs-offset-4">
                        <h1><b>SIGN UP</b></h1>
                        <form method="post" action="userRegister.php">
                            <div class="form-group">
                                <input type="text" class="form-control" name="cName" placeholder="Name" required="true">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" placeholder="Email" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                            </div> 
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" placeholder="Password(min. 6 characters)" required="true" pattern=".{6,}">
                            </div>
                            <div class="form-group"> 
                                <input type="tel" class="form-control" name="phone" placeholder="Phone" required="true">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="street" placeholder="Street" required="true">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="city" placeholder="City" required="true">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="state" placeholder="State" required="true">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="zip" placeholder="ZIP" required="true">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="country" placeholder="Country" required="true">
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-default" value="Sign Up" style="background-color:#820813; color: white">
                            </div>
                        </form>
                        <p> Already a member?
                        <a href="login.php">Login</a> </p>
                    </div>
                </div>
            </div>
            <br><br><br><br><br><br><br><br>
           <footer class="footer">
               <?php
               include 'footer.php';
               ?>
           </footer>

        </div>
    </body>
</html>
