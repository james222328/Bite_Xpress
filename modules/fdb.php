
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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

    <link
      href="https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.css"
      rel="stylesheet"
    />
    <title>Feedback</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  
    <link rel="stylesheet" href="fdb.css">

  </head>
  <body>


<?php include('navigationbar.php'); ?>

<?php include('Sign-up.php'); ?>

<?php include('loginmod.php'); ?>

<?php include('cart.php'); ?>

<?php include('fdbmod.php');
      include('functfdb.php');

      if (isset($_SESSION['user'])) {
      include('profmod.php'); 
      include('editmod.php');
}
    ?>

<style>
.fb{
      margin-top: 10%; 
      width: 180px;
      height: 50px;
      padding: auto;
      background-color: orange;
      border: 0px;
      outline: none;
      font-weight: 500;
      font-size: 18px;
      margin: 4px;
      padding: 4px;
      border-radius: 4%;
      }
      .fb:hover{
        color: white;
      }
</style>


<div id="tr" style="margin-top: 10%;">
  <span style="font-family: Bookman Old Style; font-size: xx-large;"><center><b>FEEDBACK</b></center></span></div>

<section class="p-5 bg-light text-dark border-dark" style="border-style: solid; width: 120rem; margin-top: 3%; margin-bottom: 15%; margin-right: 5%; margin-left: 10%; border-radius: 5rem;">
  
  
  <div class="container">
    <div class="row ">
     
      <div class="col-md">
        <h1 style="margin-top: 20%;"><b>We want to keep you satisfied.<br><br><br><br> 
          What was the best/worst part of your experience with us? <br>
          We value your opinion. Please let us know what you think. <br>
           <br><br>
          <p>
         
          </p>
        </b></h1></p>
        <p>
         
        </p>
      </div>
      

      <div class="col-md p-3">
        <img src="https://previews.123rf.com/images/petr73/petr731401/petr73140100065/25470748-the-paper-with-the-words-we-value-your-opinion.jpg" 
        style="width: 45rem; margin-left: 20%;" class="img-fluid" />
      </div>

    </div>
  </div>

  <?php if (isset($_SESSION['user'])) {
									echo'<center>
                  <button href="fdbmod.php" data-bs-toggle="modal" data-bs-target="#fdbmod" class="fb" style="margin-top: 2.5%;">WRITE A FEEDBACK</button></center>';
                 }
                 else{
                  echo '<center><a href="#logmodal" data-bs-toggle="modal" data-bs-target="#logmodal"><button class="fb" style="margin-top: 2.5%;">WRITE A FEEDBACK</button></a></center> ';
                 }
                 ?>


</section>


<b><div style="margin-left: 12%;"><h1 style="margin-top: 5%; font-family: Bookman Old Style;">Customer Reviews</h1></b></div>
<?php 
$fdb = getfdb("feedback");

   if($fdb->rowCount() > 0){
  
    foreach($fdb as $card){

?>  



<div class="ct">
<div class="wrapper">

  <div class="box">
    
    
    <div class="name"><h1><?php echo $card["Name"]; ?></h1></div>
    
    <h1><b>  Rating - <?php echo $card["rating"]; ?> </b></h1>
    
   
   
    <div class="content">
      <div class="info">
        <h3> <p><?php echo $card["description"]; ?></p></h3>
      </div>
      
    </div>
  </div>

</div>
</div><br>
<?php } 
} ?>



    
        







 <!-- Footer -->
 <?php include('footer.php'); ?>

  </body>
</html>