<?php
	session_start();
try {

    if (!file_exists('connect.php' ))
        throw new Exception();
    else
        require_once('connect.php' ); 
		
} catch (Exception $e) {

    echo"<script>alert('There was some problem in the Server! Try after some time!')
	window.location='Cover page.php'</script>";

  include('login-process.php');
	
}
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
      crossorigin="anonymous" />
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"></script>
      <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"
    />
    <link
      href="https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.css"
      rel="stylesheet"
    />
    <title>Cover page</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" href="coverpg.css">
  
  </head>
  <body>

  <?php include('navigationbar.php'); ?>

  <?php include('Sign-up.php'); ?>

  <?php include('loginmod.php'); ?>

  <?php include('cart.php');

  if (isset($_SESSION['user'])) {
      include('profmod.php'); 
      include('editmod.php');
      include('edit-process.php');
}
  
  ?>

  


    <!-- Showcase -->
    <section
      class="text-dark p-5 p-lg-0 pt-lg-5 text-center text-sm-start" style="margin-top: 7%">
      <div class="container py-5">
        <span style="font-size: 25px;" id="mtf"><b>MORE THAN FASTER</b></span><br>
        <div class="d-sm-flex align-items-center justify-content-between">
            <div>
            <span style="font-size: 38px; font-weight: 500;">Instant Food, for Instant Hunger</span>
            <p class="lead my-4" style="font-weight: 500; font-size: 13px;">
              A restaurant that offers services of table booking, online ordering and delivers food to the customer.
            </p>

            
            <?php if (isset($_SESSION['user'])) {
									echo'<a href="services.php"><button class="cbut">GET STARTED</button></a>';
                 }
                 else{
                  echo '<a href="#logmodal" data-bs-toggle="modal" data-bs-target="#logmodal"><button class="cbut">GET STARTED</button></a> ';
                 }?>


          </div>
          <img
            class="img-fluid w-50 d-none d-sm-block rounded"
            src="https://thumbs.dreamstime.com/b/restaurant-chef-cooking-noodles-website-menu-177765247.jpg"
            alt=""
          />
        </div>
      </div>
    </section><br><br><br>

    <!-- Slideshow container -->
    <section style="margin-top: 7%">
      
      <div class="container">
        <h2 style="margin-bottom: 3%;"><b>Top Picks</b></h2>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>
      
          <!-- Wrapper for slides -->
          <div class="carousel-inner">
      
            <div class="item active" style="margin: auto;">
              <img src="https://c4.wallpaperflare.com/wallpaper/127/626/498/food-lasagna-meal-wallpaper-preview.jpg" alt="" class="img-fluid d-flex justify-content-center" style="width: 50%; margin:auto">
              <div class="carousel-caption">
                <h3>Lasagna</h3>
               
              </div>
            </div>
      
            <div class="item">
              <img src="https://c4.wallpaperflare.com/wallpaper/830/985/182/cake-cherry-delicious-dessert-wallpaper-preview.jpg" alt="" class="img-fluid d-flex justify-content-center" style="width: 50%; margin:auto">
              <div class="carousel-caption">
                <h3>Hot Fudge Sundae</h3>
              </div>
            </div>
          
            <div class="item">
              <img src="https://c4.wallpaperflare.com/wallpaper/789/80/989/food-pizza-wallpaper-preview.jpg" alt="New York" class="img-fluid d-flex justify-content-center" style="width: 50%; margin:auto">
              <div class="carousel-caption">
                <h3>BBQ Pizza</h3>
              </div>
            </div>
        
          </div>
      
          <!-- Left and right controls -->
          <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
    </section>
    
    <br>
    <br>


    <center><b><span style="font-family: Bookman Old Style"><h1 style="margin-top: 15%;">Our Excellent Services</h1></span></b></center>
    <center><h5>For your best experience !!</h5></center>
  


    <section class="p-5">
        <div class="container">
          <div class="row text-center g-4">
            
            <div class="col-sm">
              <div class="card bg-dark text-white border-dark" style="height: 25rem">
                <div class="card-body text-center">
                  <div class="h1 mb-3" style="margin-top: 10%;">
                    <i class="bi bi-bag-check-fill"></i>
                  </div>
                  <h2 class="card-title mb-3" style="font-size: 20px;">Easy To Order</h2><br><br><br>
                  <p class="card-text text-light" style="font-size: 15px;">

                    Simple to place your orders
                  </p>
                  <p></p><br>
                  <p></p>
                </div>
              </div>
            </div>

            <div class="col-sm">
                <div class="card bg-dark text-white border-dark" style="height: 25rem">
                  <div class="card-body text-center">
                    <div class="h1 mb-3" style="margin-top: 10%;">
                      <i class="bi bi-box-arrow-in-right"></i>
                    </div>
                    <h2 class="card-title mb-3" style="font-size: 20px;">Fastest Delivery</h2><br><br><br>
                    <p class="card-text text-light" style="font-size: 15px;">
                      Food at your door step in no time
                    </p>
                    <p></p><br>
                  <p></p>
                  </div>
                </div>
              </div>

              <div class="col-sm">
                <div class="card bg-dark text-white border-dark" style="height: 25rem">
                  <div class="card-body text-center">
                    <div class="h1 mb-3" style="margin-top: 10%;">
                      <i class="bi bi-bar-chart-line-fill"></i>
                    </div>
                    <h2 class="card-title mb-3" style="font-size: 20px;">Best Quality</h2><br><br><br>
                    <p class="card-text text-light" style="font-size: 15px;">
                      The Taste you always wanted
                    </p>
                    <p></p><br>
                  <p></p>
                  </div>
                </div>
              </div>

              <div class="col-sm">
                <div class="card bg-dark text-white border-dark" style="height: 25rem">
                  <div class="card-body text-center">
                    <div class="h1 mb-3" style="margin-top: 10%;">
                      <i class="bi bi-lock-fill"></i>
                    </div>
                    <h2 class="card-title mb-3" style="font-size: 20px;">Secured Payment</h2><br><br><br>
                    <p class="card-text text-light" style="font-size: 15px;">
                      Your wallet is safe :)
                    </p>
                    <p></p><br>
                  <p></p>
                  </div>
                </div>
              </div>

            </div>
        </div>
    </section><br><br><br><br>

    <center><b><span style="font-family: Bookman Old Style"><h1 style="margin-top: 15%;">Customer Reviews</h1></span></b></center>
    <center><h5>Comments from frequent customers</h5></center>
    <center><h5></h5></center><br>

    <section id="test" class="p-5 bg-light" >
        <div class="container">
          <div class="row g-4">

            <div class="col-sm-6 col-md-3">
              <div class="card bg-light border-dark">
                <div class="card-body text-center">
                  <img
                    src="https://randomuser.me/api/portraits/men/12.jpg"
                    class=" mb-3"
                    alt=""
                  />
                  <h2 class="card-title align-text-bottom mb-3" >David</h2>
                  <p class="align-text-bottom mb-5" style="font-size: 15px;">
                    Tastiest Food you can ask for !!
                  </p>
                </div>
              </div>
            </div>

            <div class="col-sm-6 col-md-3">
                <div class="card bg-light border-dark">
                  <div class="card-body text-center">
                    <img
                      src="https://randomuser.me/api/portraits/women/11.jpg"
                      class=" mb-3"
                      alt=""
                    />
                    <h2 class="card-title align-text-bottom mb-3">Rachel</h2>
                    <p class="card-text align-text-bottom mb-5" style="font-size: 15px;">
                      Got my food in no time :D .
                    </p>
                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-md-3">
                <div class="card bg-light border-dark">
                  <div class="card-body text-center">
                    <img
                      src="https://randomuser.me/api/portraits/men/11.jpg"
                      class=" mb-3"
                      alt=""
                    />
                    <h2 class="card-title align-text-bottom mb-3">James</h2>
                    <p class="card-text align-text-bottom mb-5" style="font-size: 15px;">
                      The food taste, quality is so good !!
                    </p>
                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-md-3">
                <div class="card bg-light border-dark">
                  <div class="card-body text-center">
                    <img
                      src="https://randomuser.me/api/portraits/men/56.jpg"
                      class=" mb-3"
                      alt=""
                    />
                    <h2 class="card-title align-text-bottom mb-3">Ben</h2>
                    <p class="card-text align-text-bottom mb-5" style="font-size: 15px;">
                      I choose this over anything else.
                    </p>
                  </div>
                </div>
              </div>
        </div>
      </div>
    </section>

    <section id="learn" class="p-5 bg-dark text-light" style="margin-top: 15%; margin-bottom: 5%;">
      <div class="container">
        <div class="row align-items-center justify-content-between">
          <div class="col-md p-5">
            <img src="https://media.istockphoto.com/photos/pan-fried-duck-picture-id1081422898?k=20&m=1081422898&s=612x612&w=0&h=YkfQqtV3nN1gB_HaehyvjcTEye7w9FBPkG-PIKdDzPo=" class="img-fluid" alt="" />
          </div>
          <div class="col-md">
            <h1><span style="font-family: Bookman Old Style">We provide the best quality</span></h1>
            <p class="lead">
             <h3>All of our services, is made sure that, it best satisfies the customer.</h3> 
            </p>
            <p><h4>
              We make sure to use the right amount of ingredients and in its right proportion,
              such that it does not harm the customer's health in any way.
              All of our food and ingredients are fresh and tender.</h4>
            </p>
            <a href="abtus.php"><button
              class="btn btn-warning btn-lg">
              Read More
            </button></a>
          </div>
        </div>
      </div>
    </section>



    <?php include('footer.php'); ?>

   



    <script
	  src="https://code.jquery.com/jquery-3.4.1.min.js"
	  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
	  crossorigin="anonymous"></script>

    <!-- <script src="togclass.js"></script>
    <script src="err-suces.js"></script> -->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

  </body>
</html>