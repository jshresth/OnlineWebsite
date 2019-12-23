<?php
    session_start();
    include 'connection.php';
    if(!isset($_SESSION['email'])){
        header('location: login_form.php');
    }
    $user_id=$_SESSION['customerID'];
    $user_products_query="select p.productID, p.pName, p.unitPrice, p.image, c.cartStatus, c.Qty from Products p, Cart c where p.productID=c.productID and customerID='$user_id'";
    $user_products_result=mysqli_query($con,$user_products_query) or die(mysqli_error($con));
    $no_of_user_products= mysqli_num_rows($user_products_result);
    $sum=0;
    if($no_of_user_products==0){
        //echo "Add items to cart first.";
    ?>
        <script>
        window.alert("No items in the cart!!");
        </script>
    <?php
    }else{
        while($row=mysqli_fetch_array($user_products_result)){
            $sum=$sum+$row['unitPrice']; 
       }
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

        <style>
            .space{
                text-align: center;

            }
            .containers{
                width:200px;
                height:120px;
            }
            /*.container img{
                max-height: 50%;
                max-width: 50%;
            }*/
            .containers img{
                width:auto;
                height:60%;
            }
        </style>
    </head>
    <body>
        <div>
            <?php 
               include 'header.php';
            ?>
            <br>
            <div class="container">
                <table class="table table-bordered table-striped">
                    <tbody>
                        <tr>
                            <th class="space">Image</th><th class="space">Item Name</th><th class="space">Price</th><th class="space">Action</th>
                        </tr>
                       <?php 
                        $user_products_result=mysqli_query($con,$user_products_query) or die(mysqli_error($con));
                        $no_of_user_products= mysqli_num_rows($user_products_result);
                        $counter=1;
                       while($row=mysqli_fetch_array($user_products_result)){
                           
                         ?>
                        <tr>
                            <th>
                                <?php 
                                echo '<center>';
                                echo '<div class="containers">';
                                echo '<img src="images/'.$row['image'].'" >';
                                echo '</div>';
                                echo '</center>';
                                ?>
                                    
                                </th>
                                <th class="space"><?php echo $row['pName']?>
                            </th><th class="space"><?php echo $row['unitPrice']?></th>
                          <th><a href='removecart.php?id=<?php echo $row['productID'] ?>'><button type="button" class="btn btn-default btn-lg">
                            <span class="glyphicon glyphicon-trash"></span></button>
                        Remove</a></th> 
                          
                        </tr>
                       <?php $counter=$counter+1;
                            }
                        ?>
                        <tr>
                            <th></th><th><center>Total</center></th><th> <center>$ <?php echo $sum;?>/- </center></th><th><a href="confirm.php?id=<?php echo $user_id?>" class="btn btn-default"style="background-color:#820813; color:white">CheckOut</a></th>
                        </tr>
                    </tbody>
                </table>
                <div>
                    <center>
                    <a href="catalog.php?id=<?php echo$user_id?>" class="btn btn-default" style="background-color:#820813; color:white">Continue Shopping</a>
                </center>
                </div>

            </div>
            <br><br><br><br><br><br><br><br><br><br>
               
                <center>
                  <?php
                  include 'footer.php';
                  ?>
               </center>
        </div>
    </body>
</html>
