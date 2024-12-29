<?php 

session_start();

include 'login-process.php';
include 'navigationbar.php';
include 'functaddr.php';
include_once 'connect.php';
include('cart.php'); 

?>
<head>
 <link rel="stylesheet" href="coverpg.css">
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
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

<title>Order Summary </title>

  <link rel="stylesheet" type = "text/css" href =".css">

  <script>function goBack(){
		window.history.back();
	} </script>	

</head>

<div class="content">
	<div class="container-fluid">		
		
		
		<div style="margin: 10%; font-size: 18px;">
			<div class="card rounded-0 shadow" style="width: 100rem; margin: 10rem;">
				<div class="card-body">
					<div class="container-fluid">
						
					<?php 
						$det = getAddr("users");

   						if($det->rowCount() > 0)
  
    					foreach($det as $info)

						?>
						
						<?php $orderTotal = 0;
						foreach($_SESSION["cart"] as $keys => $values){
							$total = ($values["item_quantity"] * $values["item_price"]);
							$orderTotal = $orderTotal + $total;
						}
							?>
						<div class='row'>
							<div class="col-md-6 lh-1" style="font-size: 18px;">
								<h2><b>Delivery Address -</b></h2>
								
								<p class="mb-1"><?php echo $info["address"]; ?></p><br>
								<p class="mb-1"><strong>Phone</strong>: <?php echo $info["phono"]; ?></p>
								<p class="mb-1"><strong>Email</strong>: <?php echo $info["email"]; ?></p>
											
							</div>
							<?php 
							$randNumber1 = rand(100000,999999); 
							$randNumber2 = rand(100000,999999); 
							$orderNumber = $randNumber1.$randNumber2;
							?>
							<div class="col-md-6 lh-1" style="font-size: 18px;">
								<h2><b>Order Summary</b></h2>
								<p class="mb-1"><strong>Items</strong>: Rs. <?php echo $orderTotal; ?></p>
								<p class="mb-1"><strong>Delivery</strong>: Rs. 0</p>
								<p class="mb-1"><strong>Order Total</strong>: Rs.<?php echo $orderTotal; ?></p>
							</div>
						</div>
					</div>
					<?php $_SESSION['order'] = $orderNumber; ?>
					<?php
						$orderDate = date('d-m-Y');
						foreach($_SESSION["cart"] as $keys => $values){
							
							$user_id = $_SESSION['user_id']; 
							$user_name = $_SESSION['user'];
							$item_id = $values["food_id"];
							$item_name = $values["item_name"]; 
							$quantity = $values["item_quantity"];
							$order_date = $orderDate;
						}
						?>
				</div><br><br>
					<div style="margin-left: 30%;">	
  <a href="Menu.php?"><button class="btn btn-warning" style="font-size: 18px;"><span class="glyphicon glyphicon-circle-arrow-left"></span> Go back to Menu</button></a>
  <a href="cardpmt.php?order=<?php echo $orderNumber;?>"><button class="btn btn-success" style="font-size: 18px;"><span class="glyphicon glyphicon-credit-card"></span> Pay Online</button></a>
  <a href="forder.php?order=<?php echo $orderNumber;?>"><button class="btn btn-success" style="font-size: 18px;"><span class="glyphicon glyphicon-"></span> Cash On Delivery</button></a>
					</div>						
						</div>
					</div>
				</div>
			</div>
		</div>
		   
    </div>        
	

<?php include('footer.php');?>