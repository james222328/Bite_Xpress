
<!-- Navbar -->
<nav id="navbar" class="navbar navbar-expand-lg bg-dark py-5 fixed-top ">
  <div class="container">
    <a href="#" class="navbar-brand"><div class="logo-image"><img src="MLGO.jpg" class="img-fluid "/></div></a>

    <button
      class="navbar-toggler"
      type="button"
      data-bs-toggle="collapse"
      data-bs-target="#navmenu">
      <span class="navbar-toggler-icon" style="color: yellow;"></span>
    </button>

    <div class="collapse navbar-collapse" id="navmenu ">
      <ul class="navbar-nav ms-auto" type="none">
        <li class="nav-item my-4 mx-3">
          <a href="Cover Page.php" class="nav-link"><span style="color: orange; font-size: 180%;"> Home </span></a>
        </li>
        <li class="nav-item my-4 mx-3">
          <a href="Menu.php" class="nav-link"><span style="color: orange; font-size: 180%;">Menu </span></a>
        </li>
        <li class="nav-item my-4 mx-3">
          <a href="services.php" class="nav-link"><span style="color: orange; font-size: 180%;">Services</span></a>
        </li>
        <li class="nav-item my-4 mx-3">
            <a href="abtus.php" class="nav-link margin-top"><span style="color: orange; font-size: 180%;">About</span></a>
          </li>
        <li class="nav-item my-4 mx-3">
            <a href="fdb.php" class="nav-link"><span style="color: orange; font-size: 180%;">Feedback</span></a>
        </li>


        <?php

		        	if (isset($_SESSION['user'])){ 
              
              $uid = $_SESSION['user_id'];

global $pdoconn;
$sql = "SELECT name FROM users WHERE id= '$uid' ";
$stmt = $pdoconn->query($sql);


$user = $stmt;

   if($user->rowCount() > 0){
  
    foreach($user as $item){
              
               ?>
		        		<li class="nav-item">
                <a href="cart.php" name="cart" class="nav-link" style="color:orange; font-size: 35px; margin-top: 15%; margin-left: 10%;" data-bs-toggle="modal" data-bs-target="#cartmod" ><i class="bi bi-cart-fill my-3"></i>
                <span class="badge blue" style="font-size: 12px; background-color: black; color: orange; margin-left: -20%;">
                <?php
        if(isset($_SESSION["cart"])){
        $count = count($_SESSION["cart"]); 
        echo "$count"; 
          }
        ?></span>
        </a>
            </li>
                <li class="nav-item my-3 mx-3">
                <a href="profmod.php"  data-bs-toggle="modal" data-bs-target="#profmod"  class="nav-link">
                <button class="btn btn-warning" >
               <?php echo '<b><span class="navbut" style="font-size: medium;">Hi, '.$item["name"].'</span></b>  ';?></button></a></li>
		        		<li class="nav-item my-3"><a href="logout.php" class="nav-link"><button class="btn btn-warning">
                <b><span class="navbut" style="font-size: medium;">Logout</span></b></button></a></li>';
		        <?php	} } }
              else { ?>
		        		<li class="nav-item my-3 mx-3">
                <a href="#smodal" class="nav-link"><button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#smodal">
                    <b><span class="navbut" style="font-size: medium;">Sign-up</span></b>
                  </button></a>
              </li>
              <li class="nav-item my-3 mx-3">
                <a href="#logmodal" class="nav-link"><button
                    class="btn btn-warning"
                    data-bs-toggle="modal" data-bs-target="#logmodal"><b><span class="navbut mb-3" style="font-size: medium;">Login</span></b>
                  </button></a>
              </li>';
		        <?php	} ?>


        
      </ul>
    </div>
  </div>
</nav><br><br><br><br>

<script>
  var prevScrollpos = window.pageYOffset;
    window.onscroll = function() {
    var currentScrollPos = window.pageYOffset;
    if (prevScrollpos > currentScrollPos) {
    document.getElementById("navbar").style.top = "0";
    } else {
    document.getElementById("navbar").style.top = "-130px";
    }
    prevScrollpos = currentScrollPos;
    }

</script>