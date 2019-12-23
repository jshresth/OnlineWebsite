<?php
    session_start();
    require 'connection.php';
    if(!isset($_SESSION['email'])){
        header('location:index.php');
    }else{
        $user_id=$_GET['id'];
        $confirm_query="update Cart set cartStatus='Ordered' where customerID=$user_id";
        $confirm_query_result=mysqli_query($con,$confirm_query) or die(mysqli_error($con));
        
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
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css">
        <link rel="stylesheet" href="css/index.css" type="text/css">
        <style>
            #errors {
            text-align: center;
            margin: 20px auto;
            width: 450px;
            border-radius: 8px/7px;
            background-color: #ebebeb;
            box-shadow: 1px 2px 5px rgba(0,0,0,.31);
            border: solid 1px #cbc9c9;
            }
            .visible {
                display: block;
            }
        </style>
    </head>
    <body>
        <div>
            <?php
                require 'header.php';
            ?>

            <br>
            <div class="container">
                <div class="row">
                    <div class="col-xs-6 col-xs-offset-3">
                        <div class="panel panel-primary">
                            <div class="panel-heading" style="background-color: #820813">
                                <h3 style="color:white">SHIPPING ADDRESS</h3>
                            </div>
                            <div class="panel-body">
                                <form method="post" action="ship_register.php" id="sampleForm">
                                    <div class="form-group">
                                        <input type="name" class="form-control" name="fullname" placeholder="Full Name">
                                    </div>
                                    <div class="form-group">
                                        <input type="street" class="form-control" name="street" placeholder="street">
                                    </div>
                                    <div class="form-group">
                                        <input type="city" class="form-control" name="city" placeholder="city">
                                    </div>
                                    <div class="form-group">
                                        <input type="state" class="form-control" name="state" placeholder="state">
                                    </div>
                                    <div class="form-group">
                                        <input type="zip" class="form-control" name="zip" placeholder="zip">
                                    </div>
                                    <div class="form-group">
                                        <input type="country" class="form-control" name="country" placeholder="country">
                                    </div>

                             <div class="panel-heading">
                            <h3 id>PAYMENT</h3>
                            </div>
                            <div class="panel-body">
                                    <div class="form-group"> 
                                        <input type="name" class="form-control" name="name" placeholder="Name on card">

                                    </div>
                                    <div class="form-group">
                                        <input type="card number" class="form-control" name="card number" placeholder="card number">
                                    </div>
                                    <div class="form-group">
                                        <input type="Expiration" class="form-control" name="expirationDate" placeholder="MM/YYYY">
                                    </div>
                                    <div class="form-group">
                                        <input type="CVV" class="form-control" name="CVV" placeholder="CVV">
                                    </div>
                                    <img href='#' src="img/Amex.png" height=30px width=40px/>
                                    <img href=# src="img/Discover.png" height=30px width=40px/>
                                    <img href=# src="img/MC.png" height=30px width=40px/>
                                    <img href=# src="img/Visa.png" height=30px width=40px/>
                                    <img href=# src="img/Paypal.png" height=30px width=40px/>

                                    <hr>
                                    
                                    <div class="form-group">
                                        <input type="submit" value="Confirm" class="btn btn-default" style="background-color: #820813; color: white">
                                    </div>
                             </div>
                            </form>
                            </div>    
                </div>      
           </div>
       </div>
       </div>
</div>
<div id="errors" class="visible"> 

    </div>
<script>
    function init() {
    document.getElementById("sampleForm").addEventListener("submit", 
                                                   checkForEmptyFields);    
}
window.addEventListener("load", init);
function checkForEmptyFields(e) {  
    var errorArea = document.getElementById("errors");
    errorArea.className = "hidden";

    var cssSelector = "input[type=name],input[type=zip],input[type=Expiration],input[type=CVV]";
    var fields = document.querySelectorAll(cssSelector);

    var fieldList = [];
    for (i=0; i<fields.length; i++) {
        if (fields[i].value == null || fields[i].value == "") {
                        e.preventDefault();
            fieldList.push(fields[i]);
        }
    }

var msg = "The fields can't be empty. ";
    if (fieldList.length > 0) {
        msg+="Please fill all the fields.";
        errorArea.innerHTML = "<p>" + msg + "</p>";
        errorArea.className = "visible";

    }    
}

</script>

    <footer class="footer">
               <div class="container">
                <center>
                   <?php
                require 'footer.php';
                    ?>
               </center>
               </div>
           </footer>
        
    </body>
</html>
