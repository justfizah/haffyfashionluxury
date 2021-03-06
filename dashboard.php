<?php

session_start();
if (!isset($_SESSION['username'])) {
	header('location:index.php');
}
?>
<!DOCTYPE html>
<html>
<title>HFL - Shop now</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta http-equiv="X-UA-compatible" content="IE=edge"/>
  <link href="https://meyerweb.com/eric/tools/css/reset/reset.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Economica|Pacifico" rel="stylesheet">
  <link rel="icon" href="https://res.cloudinary.com/hafizah/image/upload/v1575966705/haffyfashion_ntfr8o.jpg" type="image/gif" sizes="16x16" />
  <link rel="stylesheet" href="hfl.css.liquid.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"> 
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/ all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
  
</head>
<body>
   <header class="page-header">
  <div class="fixed-width clearfix">
      <em class="identity"> HaffyFashionLuxury </em>
      <h1>HFL homepage</h1>

      <nav>
        <ul>
          <li> <a href="index.php">HOME</a></li>
          <li> <a href="#">NEW ARRIVALS</a></li>
         
          <li><i class="fa fa-search"></i></li>
          <li style="color:" data-toggle="modal" data-target="#cartt"><i class="fa fa-shopping-cart"></i> (<span class="total-count"></span>)</li>
          <li> <div class="dropdown">
						<div class="Welcome"><h6>Welcome <?php echo $_SESSION['username'];?></h6></div></a>
						<div class="dropdown-content">
    					 <a href="logout.php">LOGOUT</a><br>
   					 	<a href="">Tracking</a><br>
   					 	<a href="#hflcart">Orders</a><br>
   						</div>
					</div></li>
           
          <!-- <li><a href=""><i class="fa fa-shopping-cart w3-margin-right"></i></a></li> -->
        </ul>       
      </nav>
    
  </div>
</header>
<!-- Nav -->
<!-- <nav class="navbar navbar-inverse bg-inverse fixed-top bg-faded">
    <div class="row">
        <div class="col">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#cart">Cart (<span class="total-count"></span>)</button>
          <button class="clear-cart btn btn-danger">Clear Cart</button></div>
    </div>
</nav> -->


<!-- Main -->
<div></div>
<div class="fixed-width">
  

<div class="container">
    <div class="row">
      <div class="col">
        <div class="card" style="width:20em ;">
  <img class="card-img-top" src="https://res.cloudinary.com/hafizah/image/upload/v1575966565/6_zdnexr.jpg" class="rounded" alt="Card image cap">
  <div class="card-block">
    <h4 class="card-title">Cozy Gold Bracelet</h4>
    <p class="card-text">Price: $12.50</p>
    <a href="#" data-name="Cozy Gold Bracelet" data-price="12.50" class="add-to-cart btn btn-primary cta">Add to cart</a>
  </div>
</div>
      </div>
      <div class="col">
        <div class="card" style="width: 20rem;">
  <img class="card-img-top" src="https://res.cloudinary.com/hafizah/image/upload/v1575966561/2_r8dm66.jpg" alt="Card image cap">
  <div class="card-block">
    <h4 class="card-title">Fixar Straight skirt</h4>
    <p class="card-text">Price: $10.22</p>
    <a href="#" data-name="Fixar Straight skirt" data-price="10.22" class="add-to-cart btn btn-primary cta">Add to cart</a>
  </div>
</div>
      </div>
      <div class="col">
        <div class="card" style="width: 20rem;">
  <img class="card-img-top" src="https://res.cloudinary.com/hafizah/image/upload/v1575966561/7_qiwect.jpg" alt="Card image cap">
  <div class="card-block">
    <h4 class="card-title">Black coated Bracelet</h4>
    <p class="card-text">Price: $11.22</p>
    <a href="#" data-name="Fixar Straight skirt" data-price="10.22" class="add-to-cart btn btn-primary cta">Add to cart</a>
  </div>
</div>
      </div>
      <div class="col">
        <div class="card" style="width: 20rem;">
  <img class="card-img-top" src="https://res.cloudinary.com/hafizah/image/upload/v1575966564/8_bxs0vt.jpg" alt="Card image cap">
  <div class="card-block">
    <h4 class="card-title">4-set bracelet</h4>
    <p class="card-text">Price: $20.22</p>
    <a href="#" data-name="Fixar Straight skirt" data-price="10.22" class="add-to-cart btn btn-primary cta">Add to cart</a>
  </div>
</div>
      </div>
      <div class="col">
        <div class="card" style="width: 20rem;">
  <img class="card-img-top" src="https://res.cloudinary.com/hafizah/image/upload/v1575966563/9_yfmjjb.jpg" alt="Card image cap">
  <div class="card-block">
    <h4 class="card-title">Silver Steel Engagement ring</h4>
    <p class="card-text">Price: $10.22</p>
    <a href="#" data-name="Fixar Straight skirt" data-price="10.22" class="add-to-cart btn btn-primary cta">Add to cart</a>
  </div>
</div>
      </div>
       <div class="col">
        <div class="card" style="width: 20rem;">
  <img class="card-img-top" src="https://res.cloudinary.com/hafizah/image/upload/v1575966559/10_lulxsk.jpg" alt="Card image cap">
  <div class="card-block">
    <h4 class="card-title">Cozy rose gold ring</h4>
    <p class="card-text">Price: $1.22</p>
    <a href="#" data-name="Fixar Straight skirt" data-price="10.22" class="add-to-cart btn btn-primary cta">Add to cart</a>
  </div>
</div>
      </div>
      <div class="col">
        <div class="card" style="width: 20rem;">
  <img class="card-img-top" src="https://res.cloudinary.com/hafizah/image/upload/v1575966558/1_olz0u1.jpg" alt="Card image cap">
  <div class="card-block">
    <h4 class="card-title">Titanium Silver ring</h4>
    <p class="card-text">Price: $4.99</p>
    <a href="#" data-name="Titanium Silver ring" data-price="24.99" class=" add-to-cart btn btn-primary cta">Add to cart</a>
  </div>
</div>
      </div>
    </div>
</div>
    </div>

  
 <!-- Modal -->
<div class="modal fade" id="cart" tabindex="-1" role="dialog" aria-labelledby="hflcart" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="hflcart">Cart</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="cartt">
        <table class="show-cart table">
          
        </table>
        <div>Total price: $<span class="total-cart"></span></div>
      </div>
      <div class="modal-footer">
        <button class="clear-cart btn btn-danger">Clear Cart <i class="fa fa-trash "></i></button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>      
    
        <a href="modal.html"><button type="button" class="btn btn-primary">Order now</button></a>
<!-- https://rave.flutterwave.com/pay/haffyfashionluxury -->
      </div>
    </div>
  </div>
</div> 
</body>
<script type="text/javascript" src="shop.js"></script>
</html>

