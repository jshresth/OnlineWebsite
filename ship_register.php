<?php
    session_start();
    include 'connection.php';
    $cid= $_SESSION['customerID'];
    $name= mysqli_real_escape_string($con,$_POST['fullname']);
    $street=mysqli_real_escape_string($con,$_POST['street']);
    $city=mysqli_real_escape_string($con,$_POST['city']);
    $state=mysqli_real_escape_string($con,$_POST['state']);
    $zip=mysqli_real_escape_string($con,$_POST['zip']);
    $country=mysqli_real_escape_string($con,$_POST['country']);
    $address = $street . ', '.$city.', '.$state.', '.$zip.', '.$country;

    
        $user_query="insert into Orders(customerID, shipName, orderDate,shippingAddress) values ('$cid', '$name', NOW(), '$address')";
        //die($user_registration_query);
        $user_registration_result=mysqli_query($con,$user_query) or die(mysqli_error($con));
        echo "Order confirmed";
        
      
       echo '<meta http-equiv="refresh" content="3;url=orderConfirm.php" />';
        ?>
    