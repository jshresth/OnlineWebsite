<nav class="navbar navbar-inverse">
  <div class="container">
<a href="index.php" id="box"><img src="images/loho.jpg" style="width: 4%; height: 10%; float: left;margin-left: -60px;position: relative;"></a>
    <div class="navbar-header">
         <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         </button>
        
      <a href="index.php" class="white navbar-brand">Home</a>
      <a href="catalog.php" class="white navbar-brand">Catalog</a>
      <a href="deals.php" class="white navbar-brand">Deals</a>
      <a href="Advertisements.php" class="white navbar-brand">Advertisements</a>
    
    <form class="navbar-form navbar-left" action="details.php?search=">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search" name="search" style="width: 330px">
      </div>
      <button type="submit" class="btn btn-default btn-sm">Submit</button>
    </form>
    </div>
    
    <div class="collapse navbar-collapse" id="myNavbar">
                       <ul class="nav navbar-nav navbar-right">
                           <?php
                           include 'connection.php';
                           if(isset($_SESSION['email'])){
                            $cid = $_SESSION['customerID'];
                        $query="select * from Customers where customerID='$cid'";
                        $result=mysqli_query($con,$query) or die(mysqli_error($con));
                        $name= mysqli_fetch_array($result);
                           ?>
                           <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
                        
                           <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>

                           <?php
                           echo '<li><a href="history.php"><span class="glyphicon glyphicon-user"></span>'. ' '.$name['cName'].'</a></li>';
                           }else{
                            ?>
                            <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                           <li><a href="login_form.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                           <?php
                           }
                           ?>
                           
                       </ul>
                   </div>
  </div>
</nav>


