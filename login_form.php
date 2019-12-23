<?php
    require 'connection.php';
    session_start();
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
        <link rel="stylesheet" href="css/index.css" type="text/css">
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
        <div>
            <?php
                include 'header.php';
            ?>
            <br><br><br>
           <div class="container">
                <div class="row">
                    <div class="col-xs-6 col-xs-offset-3">
                        <div class="panel panel-default">
                            <div class="panel-heading" style="background-color: #820813">
                                <h3 style="color: white">LOGIN</h3>
                            </div>
                            <div class="panel-body">
                                <p>Login to make a purchase.</p>
                                <form method="post" action="login_page.php">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="password" placeholder="Password(min. 6 characters)" pattern=".{6,}">
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" value="Login" class="btn btn-default" style="background-color: #820813; color: white">
                                    </div>
                                </form>
                            </div>
                            <div class="panel-footer">Don't have an account yet? <a href="signup.php">Register</a></div>
                        </div>
                        
                </div>
           </div>
       </div>
           <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            <footer class="footer">
               <?php
               include 'footer.php';
               ?>
           </footer>
        </div>
    </body>
</html>
