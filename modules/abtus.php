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
    
      <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"
    />
    <link
      href="https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.css"
      rel="stylesheet"
    />
    <title>About Us</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  

    <link rel="stylesheet" href="abtus.css">
  </head>
  <body>
    
    
<?php include('navigationbar.php'); ?>

<?php include('Sign-up.php'); ?>

<?php include('loginmod.php'); ?>

<?php include('cart.php');

  if (isset($_SESSION['user'])) {
      include('profmod.php'); 
      include('editmod.php');
}
?>


<div style="margin-top: 10%; margin-bottom: 3%;">
<span style="font-family: Bookman Old Style; font-size: xx-large;"><center><b>About Us</b></center></span></div>

<section id="abt" class="p-5 bg-light text-dark border-dark" style="border-style: solid; margin-top: 0%; margin-bottom: 15%; border-radius: 5rem;">
  <div class="container">
    <div class="row align-items-center justify-content-between">
     
      <div class="col-md">
          <h2><b><p>
          Bite Xpress is a restaurant in Bangalore. 
          We offer customers food dine-in and home delivery. We make sure that our customers experience the best 
          food and services from our side, and value their every opinion.
        </b></h2></p>
        <p>
         
        </p>
      </div>

      <div class="col-md p-5">
        <img src="https://media.timeout.com/images/105843871/750/422/image.jpg" class="img-fluid" />
      </div>

    </div>
  </div>
</section><br>

<div style="margin-left: 5%; margin-right: 5%; margin-top: -12%; margin-bottom: 5%; font-weight: 600;">
<h2><b><p>
  Discover Bite Xpress</p> 

  <p>A sense of playfulness is instilled in our dishes, with innovative cooking techniques and unique presentations that we can confidently say will stimulate your mind as well as your senses.</p>

  <p>Bite Xpress is proud that the food served is one that people can have on a daily basis. Through personal interpretations of ingredients and taste, the meticulous cooks have arrived at a scrumptious menu where flavour, texture and harmony are paramount.</p>

  <p>Right from the selection of our raw materials, our meat and poultry, from cooking to our final presentation before our valued customer, every stage is scrutinised and is of utmost importance to us.</p>
</p></b></h2>
</div>






<b><div style="margin-left: 5%;"><h1 style="margin-top: 5%; font-family: Bookman Old Style;">Frequent Customer Comments</h1></b>
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
                      I choose this restaurant over any other.
                    </p>
                  </div>
                </div>
              </div>
        </div>
      </div>
    </section>
</div>











<section class="p-5" style="border-style: solid; margin: 5%; font-family: Bookman Old Style; border-radius: 5rem;">
  <div class="container">
    <div class="row g-4">
      <div class="col-md" >
        <h2 class="mb-8" style="margin-top: 10%; margin-bottom: 10%;">Timings: <br>
          11.30 AM - 11.30 PM</h2><br>
        
         
          
        <p style="margin-bottom: 5%;">

        </p>
        <h2 style="margin-top: 10%;">Address: <br> 83, Nehru Rd, St Thomas Town,<br>
          Kammanahalli, Bengaluru, Karnataka 560084</h2>
        <p style="margin-bottom: 10%;"></p>
        <p></p>
      </div>
      <div class="col-md">
        <div id="map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1943.6598463123028!2d77.63193215848251!3d13.015302301947795!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae17206f00c5a5%3A0x305a700706ff45da!2sSt%20Thomas%20Town%2C%20Kacharakanahalli%2C%20Bengaluru%2C%20Karnataka%20560084!5e0!3m2!1sen!2sin!4v1660334699356!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

        </div>
        
      </div>
    </div>
  </div>
</section>









 <!-- Footer -->
 <?php include('footer.php'); ?>


</body>
</html>
