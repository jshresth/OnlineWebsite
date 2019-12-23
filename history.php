<?php
session_start();

include 'connection.php';
    if(!isset($_SESSION['email'])){
        header('location: login.php');
    }

    $user_id=$_SESSION['customerID'];
    $userquery="select p.image, p.unitPrice, c.customerID, c.cartStatus, c.productID, c.Qty, o.shipName, o.shippingAddress, o.orderDate from Cart c, Orders o, Products p where o.customerID=c.customerID and p.productID=c.productID AND o.customerID='$user_id'";
    $orderresult=mysqli_query($con,$userquery) or die(mysqli_error($con));

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
        <style>
        	.user{
        		background: 60%;
        		position: relative;
        		font-size: 20px;
        		color: white;
        		padding-left: 15px;
        		margin-bottom:none;
        		padding-top: 4px;

        	}
        	body {
        		background-image: url("img/cover.jpg");
        	}
        	
        	.order{
        		height:20%;
        		width:20%;
        		
        	}
            footer{
                position: relative;
                bottom: 0;
            }
        </style>
    </head>
     <?php
            include 'header.php';
           ?>
    <body>
        <div>
          
    <?php 
    echo '<h3 class="header" style= "color:white">';
    		echo '<center> Order history: ';
    		echo '</center></h3>';

    if(mysqli_num_rows($orderresult)>0){
    	while ($row = mysqli_fetch_assoc($orderresult)) {
    		# code...
    	
    		echo '<center>';
    		echo '<div class="container">   
             <div id="content" class="user">';

             
             echo 'Product ID:   '.$row['productID'].'<br/>'.'<br/>';
             
            echo '<img src = "images/'.$row['image'].'" class="order">'.'<br/>'.'<br/>';
            echo 'Shipped to:   '.$row['shipName'].'<br/>';
            echo 'Ordered date: '.$row['orderDate'].'<br/>';
            echo 'Shipping Address: '.$row['shippingAddress'].'<br/>';
                      
                      echo  '<br/><center> <a href="catalog.php" class="btn btn-danger">Continue Shopping</center></a>
                   </div>
               
                   
               </div>';
               echo '</center>';
               echo '</div>';

    	}
    }
    else{
        echo '<div class="user" style="text-align:center">';
        echo 'Your order history is empty.';
        echo '</div>';
    }
	?>

	<br><br> <br><br><br><br><br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br>
    <footer>
           <?php
            echo '<div>';
           	include 'footer.php';
             echo '</div>';
           ?>
           </footer>
</div>
</body>
</html>





