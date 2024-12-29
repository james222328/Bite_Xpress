

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



if (isset($_SESSION['email'])) {
  header("Location: Cover page.php");
}


if (isset($_POST['submit'])){

$reg_email = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
$reg_name = '/^[(A-Z)?(a-z)?\s*]+$/';
$reg_password = '/^[(A-Z)?(a-z)?(0-9)?!?@?#?-?_?%?]+$/';

if (!preg_match($reg_name, $_POST['name']) || !preg_match($reg_email, $_POST['email']) || !preg_match($reg_password, $_POST['passwrd'])) {

	echo"<script>alert('Sorry! Invalid Inputs!')
	window.location='Cover page.php'</script>";

	

} else {

	$name = $_POST['name'];
  $gender = $_POST['gender'];
	$email = $_POST['email'];
  $phono = $_POST['phono'];
  $address = $_POST['address'];
	$passwrd = $_POST['passwrd'];
	$cpassword = $_POST['cpsw'];

  if ($passwrd == $cpassword) {

	$sql = "SELECT * FROM users WHERE email=?";

	$query  = $pdoconn->prepare($sql);
	$query->execute([$email]);
	$arr_login = $query->fetchAll(PDO::FETCH_ASSOC);

	if (count($arr_login) != 0) {
		echo"<script>alert('An account of this email found! Try registering with different email id!')
		window.location='Cover page.php'</script>";
		

	} else {

		$sql = "INSERT INTO users(name,gender,phono,passwrd,email,address) VALUES(?,?,?,?,?,?)";
	    $query  = $pdoconn->prepare($sql);
	    if ($query->execute([$name, $gender, $phono, $passwrd, $email, $address])) {

        $name = "";
		$email = "";
        $addr = "";
        $phno = "";
        $gender = "";
		$_POST['psw'] = "";
		$_POST['cpsw'] = "";
		echo '<script>alert("You have been registered! Please click the Login option for logging in!")
		window.location="Cover page.php"</script>';
		

	    } else {
	    	echo"<script>alert('There was some problem in the server! Please try again after some time!')
			window.location='Cover page.php'</script>";
			
	    }
	}

} else 
{
	echo "<script>alert('Password Not Matched.')
	window.location='Cover page.php'</script>";
	
}

}
}
?>