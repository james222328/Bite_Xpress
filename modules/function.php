<?php

include 'connect.php';



function getAll($row){
    global $pdoconn;
    $sql = "SELECT * FROM $row WHERE status='enable'";
    return $stmt = $pdoconn->query($sql);
}


?>