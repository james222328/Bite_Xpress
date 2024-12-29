<?php
session_start();
?>



<?php 

include 'connect.php'; 

?>



<div class="content">
	<div class="container-fluid">	
		<div class='row'>

 <?php

  foreach($_SESSION["cart"] as $keys => $values)
  {

	$item_id = $values["item_id"];
	$item_name = $values["item_name"];
	$item_price = $values["item_price"];
	$quantity = $values["item_quantity"];
	$order_date = date('Y-m-d');
	$user_id = $_SESSION['user_id'];
	$user = $_SESSION['user'];
	$orderNumber = $_SESSION['order']; 
	$total = ($values["item_quantity"] * $values["item_price"]);


     $query = "INSERT INTO order_table(order_id, user_id, user_name, item_id, item_name, quantity, order_total, order_date) 
	 VALUES('". $orderNumber ."', '". $user_id ."', '". $user ."', '". $item_id ."', '". $item_name ."', '". $quantity ."', '". $total ."', '". $order_date ."')";
             

     $success = $pdoconn->query($query);         

      if(!$success)
      {
        ?>
        <div class="container">
          <div class="jumbotron">
            <h1>Something went wrong!</h1>
            <p>Try again later.</p>
          </div>
        </div>

        <?php
      }
      
  }

  $query = "INSERT INTO order_table (order_id, user_id, user_name, item_id, item_name, quantity, order_total, order_date) 
  VALUES (NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);";
  $success = $pdoconn->query($query);         

      if(!$success)
      {
        ?>
        <div class="container">
          <div class="jumbotron">
            <h1>Something went wrong!</h1>
            <p>Try again later.</p>
          </div>
        </div>

        <?php
      }



  unset($_SESSION["cart"]);
 ?>

<div class="content">
	<div class="container-fluid">		
		
		<img src="MLGO.jpg"  class="img-fluid " style="margin-left: 35%; width: 20rem; height: 10rem;">
		<div style="margin-top: 2%; margin-left: 15%; font-size: 18px;">
			<div class="card rounded-0 shadow" style="width: 100rem; margin: 10rem;">
				<div class="card-body">
					<div class="container-fluid">

				
					<div class="alert alert-success my-5 py-5">
						<h1 class="text-center"><span class="fa fa-check"></span> Your Order has been Placed Successfully.</h1>
						<p class="text-center"> Thank you for Ordering! The ordering process is now complete. <strong>Your Order Number:</strong> <span style="color: blue;"><?php echo $_GET['order']; ?></span></p>

						<h2 class="text-center">Explore more <a href="Cover page.php" class="text-decoration-none fw-bolder"><b>CLICK HERE</b></a></h2>
					</div>

				</div>
		</div>	  
    </div>	
	</div>	
	</div>	
	</div>	

	