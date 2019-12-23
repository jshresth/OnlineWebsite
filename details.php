<?php
session_start();
include 'connection.php';
?>

<?php
 function check_cart($pid){
        //session_start();    
        include 'connection.php';
        $user_id=$_SESSION['customerID'];
        $product_check_query="select * from Cart where
        productID ='$pid' and customerID='$user_id' and cartStatus='Added to Cart'";
        $product_check_result=mysqli_query($con,$product_check_query) or die(mysqli_error($con));
        $num_rows=mysqli_num_rows($product_check_result);
        if($num_rows>=1)return 1;
        return 0;
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="images/loho.jpg" />
        <title>Tele Shop Nepal</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <link rel="stylesheet" href="css/style.css" type="text/css">
        <link rel="stylesheet" href="css/index.css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <style type="text/css">
        	#text{
        		border: 2px solid;
				 padding: 10px;
				 border-bottom-right-radius: 25px;
				 position: relative;
        		float: right;
        		font-size: 20px;
        		font-family: serif, sans-serif; 
        		box-shadow: 1px 4px #676262;
        	}
        	#img{
			   width:auto;
			   height:280px;
			   object-fit:scale-down;
			}

        </style>
        </head>
        <body>
        	<div>
        		<?php
        		include 'header.php';
        		?>
        	</div>
        	<div class="container">
        	<?php
			$product = $_GET['search'];
		    if(!isset($_SESSION['email'])){
		        echo '<meta http-equiv="refresh" content="2;url=login_form.php" />';
		    }
		    $user_id=$_SESSION['customerID'];
		    $user_products_query="select p.productID, p.pName, p.unitPrice, p.image, p.description from Products p WHERE p.pName LIKE '%$product'";
		    $user_products_result=mysqli_query($con,$user_products_query) or die(mysqli_error($con));
		    $no_of_user_products= mysqli_num_rows($user_products_result);
		    if($no_of_user_products==0){    
		    ?>
		        <script>
		        window.alert("No suggestions!!");
		        </script>

		    <?php
    		}
    		else{
        	while($row=mysqli_fetch_array($user_products_result)){
        	echo '<div class=row>';
            echo '<div class="col-md-4" id="images">
                                    <div class="thumbnail">
                                    <a href="cart.php">';
                                echo '<img  id="img" . src="images/'.$row['image'].'" '. 'alt="'.$row['pName'].'">';
                                echo '</a>';
                                echo '<center>';
                                echo '<div class="caption">';
                                        # code...
                                        echo '<h3>'.$row['pName'].'</h3>';
                                        echo '<p>'."$".$row['unitPrice'].'</p>';

                                        echo '</div>';
                                      echo '</center>';  
                                    echo '</div>';
                                    echo '</div>'; 
                                    echo '<div class="col-md-8" id="text">';
                                    
                                    echo $row['description'];

                                    if(!isset($_SESSION['email']))
                                        {
                                            echo '<p><a href="login_form.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>' ;
                                        }
                                        else{
                                            $pid = $row['productID'];
                                             if(check_cart($pid)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }
                                            else{
                                                echo '<a href="add_to_cart.php?id='.$pid.'" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btn-primary" style="width: 100px">Add to cart</a>';
                                            }
                                        }

                                    echo '</div>';
                                    echo '<div class="clear"></div>'; 
                                    echo '</div>';
                                    echo '<div class="clear"></div>'; 

       		}
    		}
			?>

</div>
<div class="footer">
        	<footer>
        		<?php
        		include 'footer.php';
        		?>
        	</footer>
        </div>
        </body>
        </html>