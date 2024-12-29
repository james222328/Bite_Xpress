<?php
 
 session_start();
 include "connect.php";

 if(isset($_POST['edit']))
 {
    $id=$_SESSION['user_id'];

    $name=$_POST['name'];
    $gender=$_POST['gender'];
    $email=$_POST['email'];
    $phono=$_POST['phono'];
    $passwrd=$_POST['passwrd'];
    $addr=$_POST['address'];


$sql = "UPDATE users SET name=?, gender=?, email=?, phono=?, passwrd=?, address=? WHERE id=?";
$stmt= $pdoconn->prepare($sql);
$stmt->execute([$name, $gender, $email, $phono, $passwrd, $addr, $id]);
/*Successful*/
echo'<script>window.location="Cover page.php"</script>';


  if(!isset($stmt))
       { 
           
           /*sorry your profile is not update*/
           echo '<script>alert("Sorry we could not update details as of some error")
           window.location="Cover page.php"</script>';
           
       }
   
    else
    {
        /*sorry your id is not match*/
        echo '<script>alert("Sorry there was some error")
        window.location="Cover page.php"</script>';
    }
}
?>