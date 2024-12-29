<?php

include 'connect.php';



function getfdb($row){
    global $pdoconn;
    $sql = "SELECT * FROM $row WHERE rating='Excellent' OR rating='Good' OR rating='Neutral' ";
    return $stmt = $pdoconn->query($sql);
}


?>