<?php
	session_start();
    require 'connection.php';
    
    $item_id=$_GET['id'];
    $user_id=$_SESSION['customerID'];
    $delete_query="delete from Cart where customerID='$user_id' and productID='$item_id'";
    $delete_query_result=mysqli_query($con,$delete_query) or die(mysqli_error($con));
    echo '<meta http-equiv="refresh" content="2;url=cart.php" />';
?>