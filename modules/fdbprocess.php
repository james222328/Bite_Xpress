
<?php

try {

    if (!file_exists('connect.php' ))
        throw new Exception();
    else
     include_once 'connect.php'; 
     
		
} catch (Exception $e) {

	echo"<script>alert('There were some problem in the Server! Try after a while!')</script>
	window.location='Cover page.php'";
	
}



if (isset($_POST['submitfdb'])){

    $name = $_POST['cname'];
	$rate = $_POST['rating'];
  $descp = $_POST['description'];


		$sql = "INSERT INTO feedback(Name, rating, description) VALUES(?,?,?)";
	    $query  = $pdoconn->prepare($sql);
	    if ($query->execute([$name, $rate, $descp])) {

        $name = "";
        $rate = "";
		$descp = "";
      
		echo '<script>alert("Your Feedback has been submitted")
		window.location="fdb.php"</script>';
		

	    }
    }