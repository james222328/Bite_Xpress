<?php

try {

    if (!file_exists('connect.php' ))
        throw new Exception();
    else
        require_once('connect.php' ); 
        
session_start();
		
} catch (Exception $e) {

    echo"<script>alert('There was some problem in the Server! Try after some time!')
	window.location='Cover page.php'</script>";


	
}
?>

<?php include 'function.php'; 


include 'connect.php'; ?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <script src="https://kit.fontawesome.com/a59b9b09ab.js" crossorigin="anonymous"></script>

  <script src="menu.js"></script>


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous" />

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
  <link href="https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.css" rel="stylesheet" />
  <title>Menu page</title>


  <link rel="stylesheet" href="menu.css">

  <script>
    function scrollL() {
      var left = document.querySelector(".scrollcat");
      left.scrollBy(-350, 0)
    }

    function scrollr() {
      var right = document.querySelector(".scrollcat");
      right.scrollBy(350, 0)
    }
  </script>


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
            <img src="https://c4.wallpaperflare.com/wallpaper/127/626/498/food-lasagna-meal-wallpaper-preview.jpg"
              alt="" class="img-fluid d-flex justify-content-center"
              style="width: 50%; margin:auto; height: fit-content;">
            <div class="carousel-caption">
              <h3>Lasagna</h3>

            </div>
          </div>

          <div class="item">
            <img src="https://c0.wallpaperflare.com/preview/797/1015/608/burrito-chicken-close-up-delicious.jpg" alt=""
              class="img-fluid d-flex justify-content-center" style="width: 50%; margin:auto; height: fit-content;">
            <div class="carousel-caption">
              <h3>Chiken Wrap</h3>
            </div>
          </div>

          <div class="item">
            <img src="https://c4.wallpaperflare.com/wallpaper/789/80/989/food-pizza-wallpaper-preview.jpg"
              alt="New York" class="img-fluid d-flex justify-content-center"
              style="width: 50%; margin:auto; height: fit-content;">
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

  <div style="margin-top: 5%; margin-bottom: 3%;">
    <span style="font-family: Bookman Old Style;">
      <center>
        <h1><b>OUR MENU</b></h1>
      </center>
    </span></div>
  <center>
    <div style="width: 88%; height: 2px; color: black; background-color: black; "></div>
  </center><br><br>

  <h2><b></b><span style="margin-left: 9.5%; font-family: Bookman Old Style;">Select Category</b></h2></span>

  <section class="gallery" id="gallery">

    <div>
      <button class="icon"> <i class="fas fa-angle-double-left" onclick="scrollL()"></i></button>
    </div>

    <div class="cover">

      <div class="box-container">
        <div class="scrollcat">

          <div class="box">
            <img
              src="https://media.istockphoto.com/photos/soup-and-salad-picture-id182497692?k=20&m=182497692&s=612x612&w=0&h=afwM5We-tJj96VynKlM6CqoJGbxRvpffjO_U336yzQA="
              alt="">
            <div class="content">
              <h3>Starters</h3>
              <p>Soups, Salads, and other twisty appetizers</p>
              <a href="#menu" class="btn1" id="starter" data-filter="starter"> Select</a>
            </div>
          </div>
          <div class="box">
            <img
              src="https://assets.cntraveller.in/photos/628f7ec3213f2af0645a407d/4:3/w_1440,h_1080,c_limit/Kolkata-kati-rolls-lead.jpg"
              alt="">
            <div class="content">
              <h3>Sides</h3>
              <p>Wraps, Sandwiches and more !!</p>
              <a href="#menu" class="btn1" id="side" data-filter="sides">Select</a>
            </div>
          </div>
          <div class="box">
            <img
              src="https://previews.123rf.com/images/indianfoodimages/indianfoodimages1810/indianfoodimages181001663/110608169-indian-lunch-dinner-main-course-food-in-group-includes-paneer-butter-masala-dal-makhani-palak-paneer.jpg"
              alt="">
            <div class="content">
              <h3>Main Course</h3>
              <p>Rice, Gravies, Breads, Pizzas and more<br>
                for your main meal !!</p>
              <a href="#menu" class="btn1" id="mcourse" data-filter="mcourse">Select</a>
            </div>
          </div>
          <div class="box">
            <img
              src="https://c4.wallpaperflare.com/wallpaper/220/879/810/frozen-chocolate-vanilla-nuts-wallpaper-preview.jpg"
              alt="">
            <div class="content">
              <h3>Desserts</h3>
              <p>Ice Creams, Cakes and other savouries !!</p>
              <a href="#menu" class="btn1" id="dest" data-filter="dest">Select</a>
            </div>
          </div>
          <div class="box">
            <img src="https://www.goldentours.com/travelblog/wp-content/uploads/2019/12/rsz_cocktail-700x467.jpg"
              alt="">
            <div class="content">
              <h3>Beverages</h3>
              <p>Pulpy fruit juices, Mocktails etc.<br> to quench your thirst :D</p>
              <a href="#menu" class="btn1" id="bvg" data-filter="bvg">Select</a>
            </div>
          </div>


        </div>
      </div>

    </div>
    <div>
      <button class="icon"> <i class="fas fa-angle-double-right" onclick="scrollr()"></i></button>
    </div>

  </section>

  <section>
    <center>
      <div style="width: 88%; height: 2px; color: black; background-color: black; "></div>
    </center><br>
    <h2><b></b><span style="margin-left: 9.5%; font-family: Bookman Old Style;" id="menu">Filter:</b></h2></span>

    <span id="f">
      <b>
        <ul style="display: inline-flex; margin-left: 14%;">
          <li class="nav-item" type="none">
            <button class="custombut" id="veg" data-filter="veg" style="border-radius: 8px;">Veg</button>
          </li>
          <li class="nav-item" type="none">
            <button class="custombut" id="nveg" data-filter="nveg" style="border-radius: 8px;">Non-Veg</button>
          </li>
          <li class="nav-item" type="none">
            <button class="custombut" id="all" data-filter="all" style="border-radius: 8px;">All</button>
          </li>
        </ul>
      </b></span><br><br><br>

    <div class="row col-sm-7 col-md-7 col-lg-7 col-xl-7">
      <div id="filter" style="margin-bottom: 5%;"><b>
          <ul type="none">

            <li class="nav-item">
              <button class="custombut starter soup" data-filter="soup" style="border-radius: 8px;">Soups</button>
            </li>
            <li class="nav-item">
              <button class="custombut starter salad" data-filter="salad" style="border-radius: 8px;">Salads</button>
            </li>
            <li class="nav-item">
              <button class="sides custombut cutlet" data-filter="cutlet" style="border-radius: 8px;">Cutlets</button>
            </li>

            <li class="nav-item">
              <button class="sides custombut fry" data-filter="fry" style="border-radius: 8px;">Fry-item</button>
            </li>
            <li class="nav-item">
              <button class="mcourse custombut w" data-filter="wrap" style="border-radius: 8px;">Wraps</button>
            </li>
            <li class="nav-item">
              <button class="mcourse custombut lsg" data-filter="lsg" style="border-radius: 8px;">Lasagna</button>
            </li>
            <li class="nav-item">
              <button class="mcourse custombut si" data-filter="sushi" style="border-radius: 8px;">Sushi</button>
            </li>

            <li class="nav-item">
              <button class="custombut sides tand" data-filter="tand" style="border-radius: 8px;">Tandoori</button>
            </li>
            <li class="nav-item">
              <button class="custombut sides bbq" data-filter="bbq" style="border-radius: 8px;">BBQ</button>
            </li>
            <li class="nav-item">
              <button class="custombut mcourse nood" data-filter="nood" style="border-radius: 8px;">Noodles</button>
            </li>
            <li class="nav-item">
              <button class="custombut mcourse g" data-filter="gravi" style="border-radius: 8px;">Gravies</button>
            </li>
            <li class="nav-item">
              <button class="custombut mcourse ri" data-filter="rice" style="border-radius: 8px;">Rice</button>
            </li>
            <li class="nav-item">
              <button class="custombut mcourse piz" data-filter="piz" style="border-radius: 8px;">Pizza</button>
            </li>
            <li class="nav-item">
              <button class="custombut mcourse burg" data-filter="burg" style="border-radius: 8px;">Burgers</button>
            </li>


            <li class="nav-item">
              <button class="custombut mcourse bred" data-filter="bred" style="border-radius: 8px;">Breads</button>
            </li>
            <li class="nav-item">
              <button class="custombut mcourse past" data-filter="past" style="border-radius: 8px;">Pasta</button>
            </li>
            <li class="nav-item">
              <button class="custombut dest ic" data-filter="ic" style="border-radius: 8px;">Ice-Creams</button>
            </li>
            <li class="nav-item">
              <button class="custombut dest pstry" data-filter="pstry" style="border-radius: 8px;">Pastries</button>
            </li>
            <li class="nav-item">
              <button class="custombut dest sweet" data-filter="sweet" style="border-radius: 8px;">Sweets</button>
            </li>
            <li class="nav-item">
              <button class="custombut bvg j" data-filter="juice" style="border-radius: 8px;">Juice</button>
            </li>
            <li class="nav-item">
              <button class="custombut bvg mt" data-filter="mojito" style="border-radius: 8px;">Mocktails</button>
            </li>

          </ul>
        </b></div>
    </div>
  </section>

<style>
.czysi{
  width: 50rem;
  height: 50rem;
  margin-left: 16%;
}
  </style>

  <!-- Boxes -->
  <div class="all mb-8">


    <section class="p-5" style="margin-bottom: 50%;">



      <div class="container" id="mnu">
        

      
        <?php 
$menu = getAll("food_list");

   if($menu->rowCount() > 0){
  
    foreach($menu as $item){

?>

        <div class="d-flex align-content-stretch justify-content-between flex-wrap float-start ">
          <div class="row text-center g-4">


            <div class="crd <?php echo $item["Category"]; ?> mx-4 mb-5">
              <form method="post" action="cart-process.php?action=add&id=<?php echo $item["id"]; ?>">
              
                <input type="hidden" name="item_name" value="<?php echo $item["Name"]; ?>">
                <input type="hidden" name="item_price" value="<?php echo $item["Price"]; ?>">
                <input type="hidden" name="item_id" value="<?php echo $item["id"]; ?>">
                <div class="card bg-dark text-light crdsty">

                  <div class="card-body text-center">
                    <div class="cont">
                      <img src="<?php echo $item["image"]; ?>" class="fitimg mb-5" />

                      <div class="overlay" href="#mnumod<?php echo $item["id"]; ?>" data-bs-toggle="modal" data-bs-target="#mnumod<?php echo $item["id"]; ?>">
                        <div class="text"><?php echo $item["description"]; ?></div>
                      </div>
                    </div>

                    <h3 class="card-title mb-3"><?php echo $item["Name"]; ?></h3>

                    <h4><span class="card-title mb-3"> Rs.<?php echo $item["Price"]; ?> </span></h4>

                    <?php if (isset($_SESSION['user'])) {
									echo'<div class="input-group" style="margin-left: 14px; width: 140px;">
										<span class="input-group-text rounded-3" style="font-size: 15px;"><b>Qty</b></span>
										<input style="font-size: 15px;" type="number" class="form-control rounded-3 text-center" id="quantity" name="quantity" min="1" max="5" value="1" required>
									</div>
                  <input id="atc" name="add" type="submit" class="cbtn1 mb-3" style="margin-top:5px; width: 140px; font-weight:700; border-radius: 5%;" value="Add to Cart"></input>';
                 }
                 else{
                  echo '<a href="#logmodal" data-bs-toggle="modal" data-bs-target="#logmodal"><button class="obtn">Order</button></a> ';
                 }?>
              </form>

            </div>
          </div>
        </div>

      </div>

  </div>

  <div class="modal" id="mnumod<?php echo $item["id"]; ?>" tabindex="-1" aria-labelledby="mnumod<?php echo $item["id"]; ?>" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <b>
                  <div style="margin-left: 35%; font-size: xx-large;"><?php echo $item["Name"]; ?>
                  </div>
                </b>
              <br>
              <div class="modal-body">
                <img src="<?php echo $item["image"]; ?>" class="czysi " />
              </div>
                <span style="width: 50rem; font-size: 20px; margin-top: 2%; margin-left: 20%; margin-bottom: 3%; font-weight: 500;"><?php echo $item["description"]; ?></span>
             </div>
          </div>
        </div>

  <?php 

          }

        }else{
          echo "Menu items not available";
        }
        ?>


  </div>
  </section>
  </div>



  <!-- Footer -->
  <?php include('footer.php'); ?>







</body>

</html>