<?php 
session_start();
include 'array.php';

function firstDeals($id, $img, $alt){
  echo '<div class="column">';
  echo '<li class="bottom">';
  echo '<div id="circle">';
  echo '<a href="'.$id.'">';
  echo '<img src="images/icons/'.$img.'" class="img-circle" alt="'.$alt.'" width="120" height="120"/>';      
   echo ' </a> </div> </li>';
   echo '</div>';    
            
        
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link rel="shortcut icon" href="images/loho.jpg" />
	<title>Tele Shop Nepal </title>
	<link rel="stylesheet" href="css/index.css">
	<link rel="stylesheet" href="css/deals.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/style.css" type="text/css">
     

        <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
	<style>
	.logo{
	  padding-top: 20px;
      height: 6px;
      width: 6px;
      padding-bottom: 20px;
     }
     .clearance{
  margin-top: 0px;
}
	</style>


</head>
<body>
	<header>
		
		<div>
    <?php
    include 'header.php';
    ?>  
    </div>
	<!--- round clearance-->
		
			<div style="text-align:center; margin: 15px auto; max-width: 1250px;background:url(img/black2.jpg); background-size: cover" class="jumbotron">
				<div class="clearance" style="background: #820813"> Clearance </div>
				<div class="container">
					<div class="row">
						<ul class="salebox">
              <?php
              foreach ($deals as $key => $value) {
                # code...
                firstDeals($value["id"],$value["img"],$value["alt"]);
              }
              ?>

					</ul>
				 </div>
				<!-- </div> -->	
				</div>	
				</div>	
	</header>
  

	<!-- Deals -->
	<div class="container">
		<h2 id="homeappliances" > Home appliances </h2>
  <div class="row">
    <div class="col-sm-4">
      <figure><img src="images/cover1.jpg" alt="Bed covers" class="responsive">
      	<figcaption><span class="sale">$56.99</span> <span class="oldprice">$70.99</span>
      	<p>20% OFF, Bed Sheets set</p></figcaption>
      </figure>
     
    </div>
    <div class="col-sm-4">
      <figure><img src="images/cover2.jpg" alt="Bed covers" class="responsive">
      	<figcaption><span class="sale">$56.99</span> <span class="oldprice">$70.99</span>
      	<p>20% OFF, Bed Sheets set</p></figcaption>
      </figure>
    </div>
    <div class="col-sm-4">
      <figure><img src="images/cover3.jpg" alt="Bed covers" class="responsive">
      	<figcaption><span class="sale">$56.99</span> <span class="oldprice">$70.99</span>
      	<p>20% OFF, Bed Sheets set</p></figcaption>
      </figure>
    </div>
  </div>
</div>




<div class="container">
	<h2 id="fitness"> Fitness products </h2>
  <div class="row">
    <div class="col-sm-4">
      <figure><img src="images/Ab Rocket Twister.jpg" alt="Ab Rocket Twister" class="responsive">
      	<figcaption><span class="sale">$90.74</span> <span class="oldprice">$120.99</span>
      	<p>25% OFF, Ab Rocket Twister</p></figcaption>
      </figure>
    </div>
    <div class="col-sm-4">
      <figure><img src="images/Body-buldio.jpg" alt="Body builder" class="responsive">
      	<figcaption><span class="sale">$40.79</span> <span class="oldprice">$50.99</span>
      	<p>20% OFF, Body buildo</p></figcaption>
      </figure>
    </div>
    <div class="col-sm-4">
       <figure><img src="images/body-shaper.jpg" alt="Body shaper" class="responsive">
      	<figcaption><span class="sale">$32.79</span> <span class="oldprice">$40.99</span>
      	<p>20% OFF, Body shaper</p></figcaption>
      </figure>
    </div>
  </div>
</div>

<div class="container">
	<h2 id="beauty"> Beauty products </h2>
  <div class="row">
    <div class="col-sm-4">
      <figure><img src="images/annai-bamboo.jpg" alt="Annai Bamboo" class="responsive">
      	<figcaption><span class="sale">$42.63</span> <span class="oldprice">$60.99</span>
      	<p>30% OFF, Annai Bamboo</p></figcaption>
      </figure>
    </div>
    <div class="col-sm-4">
       <figure><img src="images/proactive.jpg" alt="Pro active" class="responsive">
      	<figcaption><span class="sale">$64.79</span> <span class="oldprice">$80.99</span>
      	<p>20% OFF, Pro active</p></figcaption>
      </figure>
    </div>
    
  </div>
</div>

<div class="container">
	<h2 id="kitchen"> Kitchen products </h2>
  <div class="row">
    <div class="col-sm-4">
      <figure><img src="images/blender.jpg" alt="Magic blender" class="responsive">
      	<figcaption><span class="sale">$54.99</span> <span class="oldprice">$74.99</span>
      	<p>25% OFF, Magic blender</p></figcaption>
      </figure>
    </div>
    <div class="col-sm-4">
      <figure><img src="images/hot-lunch.jpg" alt="Hot lunch" class="responsive">
      	<figcaption><span class="sale">$24.99</span> <span class="oldprice">$30.99</span>
      	<p>30% OFF, Hot Lunch box</p></figcaption>
      </figure>
    </div>
    <div class="col-sm-4">
      <figure><img src="images/Rice-cooker.jpg" alt="Rice-cooker" class="responsive">
      	<figcaption><span class="sale">$26.99</span> <span class="oldprice">$40.99</span>
      	<p>20% OFF, Rice Cooker</p></figcaption>
      </figure>
    </div>
  </div>
</div>

<div class="container">
	<h2 id="hair"> Hair products </h2>
  <div class="row">
    <div class="col-sm-4">
      <figure><img src="images/Hair-Building fiber.jpg" alt="Hair Building Fiber" class="responsive">
      	<figcaption><span class="sale">$48.74</span> <span class="oldprice">$64.99</span>
      	<p>25% OFF, Hair Building Fiber</p></figcaption>
      </figure>
    </div>
    <div class="col-sm-4">
      <figure><img src="images/hair.jpg" alt="Simply Straight brush" class="responsive">
      	<figcaption><span class="sale">$55.99</span> <span class="oldprice">$65.99</span>
      	<p>20% OFF, Simply Straight Brush</p></figcaption>
      </figure>
    </div>
    <div class="col-sm-4">
      <figure><img src="images/shampoo.jpeg" alt="Black hair shampoo" class="responsive">
      	<figcaption><span class="sale">$58.99</span> <span class="oldprice">$64.99</span>
      	<p>35% OFF, Black hair shampoo</p></figcaption>
      </figure>
    </div>
  </div>
</div>


<br><br> <br><br>
<?php
include 'footer.php';
?>

</body>
</html>