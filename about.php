<?php
session_start();
include 'connection.php';
?>
<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
   <link rel="shortcut icon" href="images/loho.jpg" />
   <title>TeleShop Nepal</title>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
   <link rel="stylesheet" href="css/index.css">
   <link rel="stylesheet" href="css/style.css">
   <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

   <style>
   h1 img{
    width: 100%;
   }
   nav img{
    padding-left: 16px;
    height: 50px;
    width: 80px;
    padding-bottom: 16px;
   }
     img{
      height: 360px;
      width: 280px;
     }
     .margin{
      margin: 8px;

     }
     .col-md-8 p{
      font-family: "ambleregular";
      font-weight: bold;
      text-decoration-color: black;
      font-size: 18px;
}

h5{
  font-weight: bold;
  font-family:'ambleregular';
}
#myDiv{
  font-family: "ambleregular";
  
}
.source{
  border: 1pt solid black;
  text-align: center;
}
   </style>

</head>

  <?php
  include 'header.php';
  ?>
  <body> 
<div class="container">
   <div class="row">
      <div class="col-md-3 ">
        <div class="panel panel-default ">
        <div class="panel-heading" style="background-color: #820813">
           <h3 class="panel-title" style="color: white">Developers</h3>
        </div>
        <div class="panel-body">
           <ul class="list-group">
               <li class="list-group-item"><a href="#jyots">Jyoti Shrestha</a></li>
               <li class="list-group-item"><a href="#pratik">Pratiksha Adhikari</a></li>
           </ul>                    
        </div>
     </div>

      </div>
      <div class="col-md-9">
       <div class="jumbotron bg" style="background: url(img/pug.jpg); background-size: cover">
        <center>
        <div id="bannerContent" style="color: white" >
        <p>
        This project is an online retail store. It is a web-based application intended for online customers. The objective of this application is to make the webpage more user-friendly and interactive for the customers. This website contains a search engine so that a user can search for the product easily. The user can view the complete details of each product, view the product advertisements.
        </p>
      </div>
    </center>
    </div>
    <h2>Developers</h2>
    <div class="row">
        <div class="col-md-4">
            <img src="images/jyoti.jpg" id="jyots" alt="Jyoti Shrestha">
            <h5 >
            Jyoti Shrestha
            (Junior, CS), 
             WMU
            </h5>
            <button type="button" class="btn btn-primary">
                <span class="glyphicon glyphicon-envelope" 
                      aria-hidden="true"></span> email
            </button>
            <button type="button" class="btn btn-primary">
                <span class="glyphicon glyphicon-earphone" 
                      aria-hidden="true"></span>+1 682-226-5758
            </button>

          </div>
          <div class="col-md-8">

            <p>Hi!!. I am Jyoti Shrestha. I am from Kathmandu, Nepal. I am currently a junior majoring in Computer Science. I love travelling and reading books. I love web-page designing. You can contact me if you need to make awesome webpages. I am always ready to help.
            </p>
          </div>
            
            <div class="clear"> </div>

      
       
        <div class="col-md-4">
            <img src="images/pratik.jpg" id="pratik" alt="Pratiksha Adhikari">
            <h5 >
            Pratiksha Adhikari
            (Junior, CS),
            WMU
            </h5>
            <button type="button" class="btn btn-primary">
                <span class="glyphicon glyphicon-envelope" 
                      aria-hidden="true"></span> email </button>   
            <button type="button" class="btn btn-primary">
                <span class="glyphicon glyphicon-earphone" 
                      aria-hidden="true"></span> +1 646-409-5933
            </button> 
          </div>
            <div class="col-md-8">
            <p>Hello! I am Pratiksha Adhikari. I am from Chitwan, Nepal. I am currently a junior majoring in Computer Science. I love reading books. I also love web-page designing. 
            </p>
          </div>

            
                     
        </div>                    
    </div> 


    
      </div>
      <br><br>
   <div class="source">
   <button onclick="myFunction()" style="background-color: #820813; color: white">Sources</button>

  <div id="myDIV">
  <div> Image sources and logo: https://www.facebook.com/teleshopnepalofficial/?__tn__=%2Cd%3C-R&eid=ARDgKWbnYCPTDVdG1_xcdmqa20p-qMWlGDf-72AUmdbgbAhIqqqFWJ9sOwSKP3k9q7D3iAxkH_srdmgP</div>
  <div> Video Sources: https://www.facebook.com/teleshopnepalofficial/?__tn__=%2Cd%3C-R&eid=ARDgKWbnYCPTDVdG1_xcdmqa20p-qMWlGDf-72AUmdbgbAhIqqqFWJ9sOwSKP3k9q7D3iAxkH_srdmgP</div>


</div>
</div>
<script>
function myFunction() {
  var x = document.getElementById("myDIV");
  if (x.style.display != "none") {
    x.style.display = "none";
   
  } else {
     x.style.display = "block";

  }
}
</script>
</div>
<br><br><br>
           <?php
            include 'footer.php';
           ?>


</body>
</html>