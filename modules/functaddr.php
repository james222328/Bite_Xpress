<?php

include 'connect.php';

              
function getAddr($row){

    if (isset($_SESSION['user'])){

    $uid = $_SESSION['user_id'];

    global $pdoconn;
    $sql = "SELECT email, phono, address FROM $row WHERE id= '$uid' ";
    return $stmt = $pdoconn->query($sql);
    }
}


?>