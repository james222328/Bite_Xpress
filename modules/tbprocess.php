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


if (isset($_POST['tbsubmit'])){
    
        $tbname = $_POST['tbname'];
      $tbnumber = $_POST['tbnumber'];
        $tbtime = $_POST['tbtime'];
      $tbdate = $_POST['tbdate'];
      

        $sql = "INSERT INTO table_booking(Name,Cust_count,Timing,Date) VALUES(?,?,?,?)";
	    $query  = $pdoconn->prepare($sql);
	    if ($query->execute([$tbname, $tbnumber, $tbtime, $tbdate])) {

            $tbname = "";
            $tbnumber = "";
            $tbtime = "";
            $tbdate = "";
		
		echo '<script>alert("Table Booking Complete !! Please Contact us incase of cancellation.")
		window.history.go(-1)</script>';
    }

}