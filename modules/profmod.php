<?php 

include 'connect.php'; 
include 'login-process.php';
?>

<?php 


if (isset($_SESSION['user'])) { 

$uid = $_SESSION['user_id'];

global $pdoconn;
$sql = "SELECT * FROM users WHERE id= '$uid' ";
$stmt = $pdoconn->query($sql);


$user = $stmt;

   if($user->rowCount() > 0){
  
    foreach($user as $item){

?>

<style>
    label {
        font-size: 18px;
        margin-left: 10%;
    }

    .detail {
        font-size: 17px;
        font-weight: 500;
        position: absolute;
        left: 35%;
    }

  
</style>


<div class="modal" id="profmod" tabindex="-1" aria-labelledby="profmod" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div>
                <b>
                    <div style="margin-left: 39%; font-size: xx-large;">Your Profile
                        <button style="margin-left: 50%; font-size:smaller;" type="button" class="btn-close"
                            data-bs-dismiss="modal" aria-label="Close"></button></div>
                </b>


            </div>

            <br>
            <div class="modal-body">
                <div class="form-group">

                    <label for="name"><b>Name:</b></label>
                    <span class="detail"><?php echo $item["name"]; ?></span><br><br>

                    <label for="gender"><b>Gender:</b></label>
                    <span class="detail"><?php echo $item["gender"]; ?> </span><br><br>

                    <label for="phone.no"><b>Phone. No:</b></label>
                    <span class="detail"><?php echo $item["phono"]; ?></span><br><br>

                    <label for="email"><b>Email:</b></label>
                    <span class="detail"><?php echo $item["email"]; ?></span><br><br>

                    <label for="psw"><b>Password:</b></label>
                    <span class="detail"><?php echo $item["passwrd"]; ?></span><br><br>

                    <label for="address"><b>Address:</b></label>
                    <span class="detail"><?php echo $item["address"]; ?></span><br><br>

                    <?php  } 
                }  
            }  ?>
                </div>

            </div>
            <div style="margin-left: 40%; font-size: larger; margin-bottom: 5%;">

                <a href="editmod.php" data-bs-target="#editmod" data-bs-toggle="modal" data-bs-dismiss="modal"><button style="font-size:large;"
                         class="btn btn-primary mx-5">Edit Profile</button></a>

            </div>

        </div>
    </div>
</div>
</div>

