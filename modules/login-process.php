<?php

try {

    if (!file_exists('connect.php' ))
        throw new Exception();
    else
        require_once('connect.php' ); 
		
} catch (Exception $e) {

    echo"<script>alert('There was some problem in the Server! Try after some time!')
	window.location='Cover page.php'</script>";


	
}
if (isset($_POST['login'])){

$regex_email = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';

$regex_password = '/^[(A-Z)?(a-z)?(0-9)?!?@?#?-?_?%?]+$/';

if (!preg_match($regex_email, $_POST['email']) || !preg_match($regex_password, $_POST['psw'])) {

    echo"<script>alert('Invalid Inputs !!')
	window.location='Cover page.php'</script>";

	

} else {

	$email = $_POST['email'];

	$password = $_POST['psw'];

	$sql = "SELECT * FROM users WHERE email=?";

	$query  = $pdoconn->prepare($sql);
	$query->execute([$email]);
	$arr_login=$query->fetchAll(PDO::FETCH_ASSOC);

	if (count($arr_login) != 0) {
		
		foreach ($arr_login as $key) {
			
			$tmp_pass = $key['passwrd'];
			$tmp_name = $key['name'];
			$tmp_id = $key['id'];
			// $tmp_pn = $key['phono'];
			// $tmp_g = $key['gender'];
			// $tmp_addr = $key['address'];
			// $tmp_mail = $key['email'];

		}

		if ($tmp_pass == $password) {

			session_start();

			$_SESSION['user'] = explode(" ", $tmp_name)[0];
			$_SESSION['user_id'] = $tmp_id;
			
				
        echo'<script>alert("Welcome to BiteXpress!")</script>
		<script>window.location="Cover page.php"</script> ';
		

		} else {
			echo"<script>alert('Wrong Password !')
			window.location='Cover page.php'</script>";
	
		}

	} else {
		echo"<script>alert('No such email was registered, please Sign-Up')
		window.location='Cover page.php'</script>";

	

	}
}
}
?>
