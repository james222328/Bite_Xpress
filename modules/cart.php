

<div class="modal" id="cartmod" tabindex="-1" aria-labelledby="cartmod" aria-hidden="true">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div style="display: inline;">
            <b><div style="margin-left: 42%; font-size: xx-large;">Your Cart
              <button style="margin-left: 60%; font-size:smaller;" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button></div></b>
          </div>
                <br>
          <div class="modal-body">
<style>
	table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  text-align: center;
  font-size: 15px;
} 
</style>

		  <div class="content">
	<div class="container-fluid">		
		
		<div class='row'>		
		<?php
		if(!empty($_SESSION["cart"])){
		?>      
			<table class="table table-bordered">
			<thead class="thead-dark">
			<tr>
			<th width="20%">Food Name</th>
			<th width="10%">Quantity</th>
			<th width="15%">Price Details</th>
			<th width="15%">Order Total</th>
			<th width="5%">Action</th>
			</tr>
			</thead>
			<?php
			$total = 0;
			foreach($_SESSION["cart"] as $keys => $values){
			?>
				<tr>
				<td style="text-align: left;"><?php echo $values["item_name"]; ?></td>
				<td class="text-center"><?php echo $values["item_quantity"] ?></td>
				<td class="text-end">Rs. <?php echo $values["item_price"]; ?></td>
				<td class="text-end">Rs. <?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?></td>
				<td><a href="cart-process.php?action=delete&id=<?php echo $values["food_id"]; ?>" onclick="if(confirm('Are you sure to remove this item from the cart ?') === false) { event.preventDefault() }"><span class="text-danger text-decoration-none">Remove</span></a></td>
				</tr>
				<?php 
				$total = $total + ($values["item_quantity"] * $values["item_price"]);
			}
			?>
			<tr>
			<td colspan="3" class="text-end">Total</td>
			<td class="text-end">Rs. <?php echo number_format($total, 2); ?></td>
			<td></td>
			</tr>
			</table>
			<div style="margin-left: 35%; font-size: 15px; margin-bottom: 5%;">
				<a href="cart-process.php?action=empty"><button class="rounded-0 btn btn-danger" style="font-size: 15px;"><span class="fa fa-trash"></span> Empty Cart</button></a>
				<a href="Menu.php"><button class="rounded-0 btn btn-warning" style="font-size: 15px;">Add more items</button></a>
				<a href="checkout.php"><button class="rounded-0 btn btn-success" style="font-size: 15px;"><span class="fa fa-share-alt"></span> Check Out</button></a>
			</div>
		<?php
		} elseif(empty($_SESSION["cart"])){
		   ?>
			<div class="container">
				<div class="jumbotron py-5 my-5">
				<h3 style="margin-left: 35%;">Your cart is empty. Explore <a href="Menu.php" class="text-decoration-none fw-bolder">Menu</a>.</h3>        
				</div>      
			</div>    
		<?php
		}
		?>		
		</div>		   
	</div> 	
</div>


		  </div> 
          </div>

        </div>
      </div>
 













