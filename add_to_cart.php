<?php
  session_start();
    include 'connection.php';
    
    
    $item_id=$_GET['id'];
    $email= $_SESSION['email'];
   
    $user_query="select * from Customers where email='$email'";
   $user= mysqli_query($con,$user_query);
   $user_ID= mysqli_fetch_array($user);

  $cus_ID= $user_ID['customerID'];
   
   $price_query="select * from Products where productID='$item_id'";
   $priceq = mysqli_query($con, $price_query);
   $pr_price = mysqli_fetch_array($priceq);
   $price = $pr_price['unitPrice'];
    
   	
    //$user_id=$_SESSION['customerID'];
    $add_to_cart_query="insert into Cart(productID, cartStatus, Qty, customerID) values ('$item_id','Added to cart',1,'$cus_ID')";
    $add_to_cart_result=mysqli_query($con,$add_to_cart_query) or die(mysqli_error($con));
    header('location: catalog.php');

?>

