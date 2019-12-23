<?php
    include 'connection.php';
    session_start();

    ?>
<!DOCTYPE html>
    <html>
    <head>
        <link rel="shortcut icon" href="images/loho.jpg" />
        <title>TeleShop Nepal</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/style.css" type="text/css">
        <link rel="stylesheet" href="css/index.css" type="text/css">
    </head>
    <style>
        .write{
            font-size: 14px;
            font-weight: bolder;
        }
    </style>

    <body>


<?php
    include 'header.php';
    $name= mysqli_real_escape_string($con,$_POST['cName']);
    $email=mysqli_real_escape_string($con,$_POST['email']);
    $regex_email="/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[_a-z0-9-]+)*(\.[a-z]{2,3})$/";
    if(!preg_match($regex_email,$email)){
        echo "Incorrect email. Please signup again.";
        ?>
        <meta http-equiv="refresh" content="2;url=signup.php" />
       <!--<a href="signup.php"></a>  -->
        <?php
    }
    $password=md5(md5(mysqli_real_escape_string($con,$_POST['password'])));
    if(strlen($password)<6){
        echo "Password should have atleast 6 characters. Redirecting you back to registration page...";
        ?>
        <meta http-equiv="refresh" content="2;url=signup.php" />
        <?php
    }
    $city=mysqli_real_escape_string($con,$_POST['city']);
    $street=mysqli_real_escape_string($con,$_POST['street']);
    $state=mysqli_real_escape_string($con,$_POST['state']);
    $zip=mysqli_real_escape_string($con,$_POST['zip']);
    $country=mysqli_real_escape_string($con,$_POST['country']);
    $phone=mysqli_real_escape_string($con,$_POST['phone']);
    $duplicate_user_query="select customerID from Customers where email='$email'";
    $duplicate_user_result=mysqli_query($con,$duplicate_user_query) or die(mysqli_error($con));
    $rows_fetched=mysqli_num_rows($duplicate_user_result);
    if($rows_fetched>0){
        //duplicate registration
        //header('location: signup.php');
        ?>
        <script>
            window.alert("Email already exists in our database!");
        </script>
        <meta http-equiv="refresh" content="1;url=signup.php" />
        <?php
    }else{
        $user_registration_query="insert into Customers(cName, street, city, state, zip, country, phone, email, password) values ('$name','$street','$city','$state','$zip','$country', '$phone', '$email', '$password')";
        //die($user_registration_query);
        $user_registration_result=mysqli_query($con,$user_registration_query) or die(mysqli_error($con));


        echo '<div class="container">
                <div class="row">
                    <div class="col-xs-6 col-xs-offset-3">
                        <div class="panel panel-primary">
                            <div class="panel-heading" style="background-color:#820813"></div>
                            <div class="panel-body">
                                <p class="write">User successfully registered</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>';

            echo '<br><br><br><br><br><br><br><br>';
        include 'footer.php';
        $_SESSION['email']=$email;
        //The mysqli_insert_id() function returns the id (generated with AUTO_INCREMENT) used in the last query.
        $_SESSION['customerID']=mysqli_insert_id($con); 
        //header('location: products.php');  //for redirecting
        ?>
        <meta http-equiv="refresh" content="3;url=index.php" />
        <?php
    }
    
?>
</body>
</html>