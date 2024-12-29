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
    <title>Services</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  

    <link rel="stylesheet" href="service.css">

  </head>
  <body>
    


<?php include('navigationbar.php'); ?>

<?php include('Sign-up.php'); ?>

<?php include('loginmod.php'); 

if (isset($_SESSION['user'])) {
      include('profmod.php'); 
      include('editmod.php');
}
 ?>

<?php include('cart.php'); ?>

<?php include('tbmod.php'); ?>



<span style="font-family: Bookman Old Style; font-size: xx-large; margin-top: 5%; margin-bottom: 5%; margin-left: 43%; position: absolute;"><b>OUR SERVICES</b></span>
<section style="margin-top: 10%; margin-left: 15%; margin-right: 10%;">
<div class="row ">
  
  <div class="col-md">
<div class="mbox">
  <img src="https://i0.wp.com/digital-photography-school.com/wp-content/uploads/2019/10/MG_3869.jpg?fit=1500%2C1011&ssl=1" alt="">
  <span class="lb" style="position:absolute; left: 6em; top: 5em;">Order Online</span>
  <div class="cont">
  
    <a href="#oo" class="btn1">KNOW MORE</a>
  </div>
  </div>
</div>


 <div class="col-md">
<div class="mbox">
  <img src="https://media.timeout.com/images/105843871/750/422/image.jpg" alt="">
  <span class="lb" style="position:absolute; left: 5.5em; top: 5em;">Table Booking</span>
  <div class="cont">
  
    <a href="#tr" class="btn1">KNOW MORE</a>
  </div>
  </div>
</div>


<div class="col-md">
<div class="mbox">
  <img src="https://i.pinimg.com/originals/9f/b0/f0/9fb0f04d3b303378dedb9b245145f915.jpg" alt="">
  <span class="lb" style="position:absolute; left: 7em; top: 5.2em;">Dine-In</span>
  <div class="cont">
    <a href="#di" class="btn1">KNOW MORE</a>
  </div>
  </div></div>


</div>
</section>






<div id="o" style="margin-top: 10%;">
  <span style="font-family: Bookman Old Style; font-size: xx-large;"><center><b>ORDER ONLINE</b></center></span></div>

<section id="oo" class="p-5 bg-light text-dark border-dark" style="border-style: solid; margin-top: 3%; margin-bottom: 15%; border-radius: 5rem;">
  
  <div class="row g-4">
   <div class="col-md">
  <h2 class="mb-8" style="margin-top: 2%; margin-bottom: 5%; margin-left: 5%;"><b>Timings: <br>
    11 AM - 11.30 PM</h2><br></b></div></div>
  
  <div class="container">
    <div class="row ">
     
      <div class="col-md">
        <div class="box mb-3">
          <img src="./images/step-1.jpg" alt="">
          <h3>Choose your favorite food</h3>
      </div>
      </div>

      <div class="col-md">
        <div class="box mb-3">
          <img src="./images/step-2.jpg" alt="">
          <h3>Free and fast delivery</h3>
      </div>
      </div>

      <div class="col-md">
        <div class="box mb-3">
          <img src="./images/step-3.jpg" alt="">
          <h3>Easy payments</h3>
      </div>
      </div>

      <div class="col-md">
        <div class="box mb-3">
          <img src="./images/step-4.jpg" alt="">
          <h3>Enjoy your food</h3>
      </div>
      </div>
      

    </div>
  </div>

  <center><a href="Menu.php"><button class="cb" style="margin-top: 5%;"><b>ORDER NOW</b></button> </a></center>
</section>


<div id="tr" style="margin-top: 10%;">
  <span style="font-family: Bookman Old Style; font-size: xx-large;"><center><b>TABLE RESERVATION</b></center></span></div>

<section class="p-5 bg-light text-dark border-dark" style="border-style: solid; margin-top: 3%; margin-bottom: 15%; margin-right: 5%; margin-left: 5%; border-radius: 5rem;">
  
  
  <div class="container">
    <div class="row ">
     
      <div class="col-md">
        <h2 style="margin-top: 20%;"><b>Timings: <br>
          11.30 AM - 11.30 PM <br><br>
          <p>
         
          </p>
          <p>
         
          </p><br>
          <p>
          Book a table in Bite Xpress at your convinience. <br>
          We offer table reservation for customers. We make sure you don't have to wait to be seated.
        </b></h2></p>
        <p>
         
        </p>
      </div>
      

      <div class="col-md p-5">
        <img src="./images/trad.jpg" class="img-fluid" />
      </div>

    </div>
  </div>


  <?php if (isset($_SESSION['user'])) {
									echo'<center>
                  <button href="tbmod.php" data-bs-toggle="modal" data-bs-target="#tbmod" class="cb" style="margin-top: 5%;">BOOK NOW</button></center>';
                 }
                 else{
                  echo '<center><a href="#logmodal" data-bs-toggle="modal" data-bs-target="#logmodal"><button class="cb" style="margin-top: 5%;">BOOK NOW</button></a></center> ';
                 }?>
</section>




<span id="di" style="font-family: Bookman Old Style; font-size: xx-large;"><center><b>DINE-IN</b></center></span>
<section class="p-5 mb-5" style="border-style: solid; margin-left: 5%; margin-top: 3%; margin-right: 5%; font-family: Bookman Old Style; border-radius: 5rem;">
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