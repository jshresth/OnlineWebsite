<?php
    session_start();
    require 'connection.php';
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
        <title>TeleShop Nepal</title>
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

        <style>
        #img{
   width:auto;
   height:250px;
   object-fit:scale-down;
}
.header_bottom_left{
    float:left;
    width:25%;
}
#bgcolor {
    background-color:grey;
    text-shadow: 0px 0px #210606;
    background: url(img/cover2.jpg);
    color: white;
    background-size: cover;

}
.Headings{
    float:left;
    font-weight: bolder;
}
.content_bottom{
    padding:15px 20px;
    border:1px solid #676262;
    box-shadow: 1px;
    border-radius:3px;
    margin-top:2.6%
    background-color: #820813;
}
.see{
    float:right;
    padding-top:18px;
    font-size: 15px;
}
#images { display: flex; }


#featured figcaption { position: absolute; top: 476px; left: 32px; width: 636px; height: 70px; background-color: floralwhite; font-family: 'Open Sans', Verdana, Arial, sans-serif; font-size: 150%; font-weight: bold; opacity: 0; padding: 22px 2px 2px 2px; text-align: center; display: block;}
</style>

    </head>
    <body>
        <?php 
    include 'header.php';
    ?>

     <div class="container" >
                <div class="row">
               <aside class="col-md-4" >
                <div class="panel panel-info">
               
                <div class="panel-heading" style="background: #820000; color: white"> Categories </div>
                <ul class="list-group" >
                <li class="list-group-item" ><a href="#home" style="color: black">Home Appliances</a></li>
                 <li class="list-group-item"><a href="#kitchen" style="color: black">Kitchen appliances</a></li>
                 <li class="list-group-item"><a href="#fitness" style="color: black">Fitness products</a></li>
                <li class="list-group-item"><a href="#hair" style="color: black">Beauty products</a></li>
                 <li class="list-group-item"><a href="#hair" style="color: black">Hair products</a></li>
               </ul>
           </div>
                 
            </aside>


<!-- side -->


            <div class="col-md-8">
            <div class="w3-content w3-display-container">
            <img class="mySlides" src="images/Kitchen-Appliances.jpg" style="width:80%">
            <img class="mySlides" src="images/product.jpg" style="width:85%">
             <img class="mySlides" src="images/beauty-products.jpg" style="width:80%">
           <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
           <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
          </div>
        <script>
            var slideIndex = 1;
            showDivs(slideIndex);

            function plusDivs(n) {
              showDivs(slideIndex += n);
            }

            function showDivs(n) {
              var i;
              var x = document.getElementsByClassName("mySlides");
              if (n > x.length) {slideIndex = 1}
              if (n < 1) {slideIndex = x.length}
              for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";  
              }
              x[slideIndex-1].style.display = "block";  
            }
        </script>
    </div>
</div>
</div>
    

    <div class="container" >
        <div class="row">
            <div class="content_bottom" style="background: #820813">
            <div class="Headings">
                <h3 id="home" style="color: #efe5e5">Home Appliances</h3>
            </div>
            <div class="see">
                <p><a href="Advertisements.html" style="color: white">See Tv Ad for more details</a></p>
            </div>
            <div class="clear"></div>
            </div>
        <?php

            $product_all_query= "select * from Products where productID LIKE 'H%' ";
            $product_all_result=mysqli_query($con,$product_all_query) or die(mysqli_error($con));
             $num_rows=mysqli_num_rows($product_all_result);
             if ($num_rows>0){
                while ($row=mysqli_fetch_assoc($product_all_result)){
                    echo '<div class="col-md-3" id="images">
            <div class="thumbnail">
            <a href="cart.php">';
            echo '<figure id="featured">';
        echo '<img  id="img" . src="images/'.$row['image'].'" '. 'alt="'.$row['pName'].'">';
        
        //echo $row['description'];
    echo '</a>';
    echo '<figcaption>'.$row['description'].'</figcaption>';


    echo '<center>';
        echo '<div class="caption">';
                # code...
                echo '<h3>'.$row['pName'].'</h3>';
                echo '<p>'."$".$row['unitPrice'].'</p>';

                
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
                        echo '<a href="add_to_cart.php?id='.$pid.'" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>';
                    }
                } // main else close
                                        echo '</div>
                            </center>
                        </div>
                    </div>';
                                        }
                                     }
                                    

                                   
                                    ?>
        <!-- </div> -->
        <div class="clear"></div>
                                    <!--  Product 2 ----->

        <div class="content_bottom" style="background: #820813">
            <div class="Headings">
             <h3 id="kitchen" style="color: #efe5e5">Kitchen Appliances</h3>
         </div>
         <div class="see">
            <p><a href="Advertisements.html" style="color: white">See Tv Ad for more details</a></p>
        </div>
      <div class="clear"></div>
    </div>
        
                                    <?php

                                    $Equery= "select * from Products where productID LIKE 'K%' ";
                                    $Eresult=mysqli_query($con,$Equery) or die(mysqli_error($con));
                                     $Erows=mysqli_num_rows($Eresult);
                                     if ($Erows>0){
                                        while ($row=mysqli_fetch_assoc($Eresult)){
                                            echo '<div class="col-md-3" id="images">
                                    <div class="thumbnail">
                                    <a href="cart.php">';
                                echo '<img  id="img" . src="images/'.$row['image'].'" '. 'alt="'.$row['pName'].'">';
                                echo '</a>';
                                echo '<center>';
                                echo '<div class="caption">';
                                        # code...
                                        echo '<h3>'.$row['pName'].'</h3>';
                                        echo '<p>'."$".$row['unitPrice'].'</p>';
                                        
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
                                                echo '<a href="add_to_cart.php?id='.$pid.'" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>';
                                            }
                                        } // main else close
                                        echo '</div>
                            </center>
                        </div>
                    </div>';
                                        }
                                     }
                                    

                                   
                                    ?>
                               
                         <div class="clear"></div>
<!--- Product 3 ---->

<div class="content_bottom" style="background: #820813">
            <div class="Headings">
             <h3 id="fitness" style="color: #efe5e5">Fitness Products </h3>
         </div>
         <div class="see">
            <p><a href="Advertisements.html" style="color: white">See Tv Ad for more details</a></p>
        </div>
      <div class="clear"></div>
    </div>
        
                                    <?php

                                    $Gquery= "select * from Products where productID LIKE 'F%' ";
                                    $Gresult=mysqli_query($con,$Gquery) or die(mysqli_error($con));
                                     $Grows=mysqli_num_rows($Gresult);
                                     if ($Grows>0){
                                        while ($row=mysqli_fetch_assoc($Gresult)){
                                            echo '<div class="col-md-3" id="images">
                                    <div class="thumbnail">
                                    <a href="cart.php">';
                                echo '<img  id="img" . src="images/'.$row['image'].'" '. 'alt="'.$row['pName'].'">';
                            echo '</a>';
                            echo '<center>';
                                echo '<div class="caption">';
                                        # code...
                                        echo '<h3>'.$row['pName'].'</h3>';
                                        echo '<p>'."$".$row['unitPrice'].'</p>';
                                        
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
                                                echo '<a href="add_to_cart.php?id='.$pid.'" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>';
                                            }
                                        } // main else close
                                        echo '</div>
                            </center>
                        </div>
                    </div>';
                                        }
                                     }
                                   
                                    ?>
                               
                                    <div class="clear"></div>
                <!-- Product 4 ---->
                


                                    <!-- Product 5 ---->
                <div class="content_bottom" style="background: #820813">
            <div class="Headings">
             <h3 id="hair" style="color: #efe5e5">Hair and Beauty Products</h3>
         </div>
      <div class="clear"></div>
    </div>
        
                                    <?php

                                    $Wquery= "select * from Products where productID LIKE 'B%' ";
                                    $Wresult=mysqli_query($con,$Wquery) or die(mysqli_error($con));
                                     $Wrows=mysqli_num_rows($Wresult);
                                     if ($Wrows>0){
                                        while ($row=mysqli_fetch_assoc($Wresult)){
                                            echo '<div class="col-md-3" id="images">
                                    <div class="thumbnail">
                                    <a href="cart.php">';
                                echo '<img  id="img" . src="images/'.$row['image'].'" '. 'alt="'.$row['pName'].'">';
                            echo '</a>';
                            echo '<center>';
                                echo '<div class="caption">';
                                        # code...
                                        echo '<h3>'.$row['pName'].'</h3>';
                                        echo '<p>'."$".$row['unitPrice'].'</p>';
                                        
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
                                                echo '<a href="add_to_cart.php?id='.$pid.'" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>';
                                            }
                                        } // main else close
                                        echo '</div>
                            </center>
                        </div>
                    </div>';
                                        }
                                     }
                                   
                                    ?>
                                
                                <div class="clear"></div>
                    </div>
            <br><br><br><br><br><br>
           </div>
                <?php
                include 'footer.php'
                ?>
    </body>
    
</html>