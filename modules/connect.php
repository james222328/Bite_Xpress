<?php 

// session_start();

    $server = "localhost";
    $user = "root";
    $pass = "";
    $database = "prj_db";

try {
    $pdoconn = new PDO("mysql:host=$server; dbname=$database", $user, $pass, array( PDO::ATTR_PERSISTENT => true ));
    $pdoconn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
    throw new Exception();
    
}
   
    



?>



