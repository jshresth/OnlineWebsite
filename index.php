<?php
session_start();
include 'connection.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="images/loho.jpg" />       
        <title>Tele Shop Nepal</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/style.css" type="text/css">
        <link rel="stylesheet" href="css/index.css">

        <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
        <style>
        	.user{
        		background-image: 60%;
        		position: relative;
        		font-size: 22px;
        		color: white;
        		
        	}
          #bannerImage{
            margin-top: 20px;
          }
        </style>
    </head>
    <body>
        <div>
           <?php
            include 'header.php';
           ?>
           <div id="bannerImage">
               <div class="container">
                   <center>

                   	<?php  
                    if(isset($_SESSION['email'])){
                        $cid = $_SESSION['customerID'];
                    $query="select * from Customers where customerID='$cid'";
            $result=mysqli_query($con,$query) or die(mysqli_error($con));
            $name= mysqli_fetch_array($result);
                   
                   echo '<div id="bannerContent">';
                   echo '<h3>Hello, '.$name['cName']. '! Welcome to Our site.</h3>';

                    }       	
                   	else{
                   echo '<div id="bannerContent">';
                   echo '<h3>Hello! Welcome to Our site.</h3>';
                 }
                       echo '<h1>We sell everything.</h1>
                       <h4>BLACK FRIDAY DEALS.</h4>
                       <a href="catalog.php" class="btn btn-danger">Shop Now</a>
                   </div>';
                 
                   	?>


                   </center>
               </div>
           </div>
<!-- clearance deals ---->
           <div style="background-image: url('img/christ.jpeg');" style="text-align:center; margin: 15px auto;" class="jumbotron">
           	
				<div class="clearance"> MERRY CHRISTMAS </div>
			
	</div>
</div>
<!-- clearance deals ---->
<?php

$home = array();
$home["salebox1"] = array("description"=> "We have large varieties of Home appliances.");
$home["salebox2"] = array("description"=> "We have large varieties of Kitchen appliances.");
$home["salebox3"] = array("description"=> "We have large varieties of Fitness products.");
$home["salebox4"] = array("description"=> "We have large varieties of Beauty and Hair products.");

foreach ($home as $key => $value) {
	# code...
	echo  '<div class="'.$key.'" >';
              echo '<div class="container">
                   <center>
                  
                      <div id="bannerContent">';

                      echo  '<h1>'.$value['description'].'</h1>
                       <h4>SHOP WITH US.</h4>
                       <a href="catalog.php" class="btn btn-danger">Shop Now</a>
                   </div>
               
                   </center>
               </div>
           </div>';
}

?>


<!----  NEXT ------>


            <br><br> <br><br>
           <?php
           	include 'footer.php';
           ?>
        </div>
    </body>
</html>