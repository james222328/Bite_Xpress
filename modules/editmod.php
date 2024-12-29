<style>
label{  
  font-size: 18px;
  margin-left: 18%;
}  

input[type=text], input[type=number], input[type=password]{
  margin-left: 21%;
  width: 50%;
  font-size:medium;
}

input[type=radio]{
  margin-left: 5%;
}

.ico{
  background-color: orange;
  color: black;
}
</style>


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


<div class="modal" id="editmod" tabindex="-1" aria-labelledby="editmod" aria-hidden="true">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div >
            <b><div style="margin-left: 42%; font-size: xx-large;">Profile Update
              <button style="margin-left: 55%; font-size:smaller;" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button></div></b>
            
            
          </div>
          <p style="font-size:medium; margin-left: 5%;">Please fill all details.</p>
                <br>
          <div class="modal-body">
            <form style="font-size:medium;" action="edit-process.php"  method="POST">
              <div class="form-group" >

                <label for="name"><b>Name:</b></label><br>
                <input type="text" id="name_reg" placeholder="<?php echo $item["name"]; ?>" name="name" required><br><br>

                <label for="gender"><b>Gender:</b></label><br>
                <input style="margin-left: 25%;" type="radio" name="gender" value="female" required><b>Female </b>
                <input type="radio" name="gender" value="male"><b>Male </b>
                <input type="radio" name="gender" value="other"><b>Other</b><br><br>

                <label for="phone.no"><b>Phone. No:</b></label><br>
                <input type="number" placeholder="<?php echo $item["phono"]; ?>" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                maxlength="10" name="phono" required><br><br>

                <label for="email"><b>Email:</b></label><br>
                <input type="text" id="email_reg" placeholder="<?php echo $item["email"]; ?>" name="email" required><br><br>
          
                <label for="psw"><b>Password:</b></label><br>
                <input type="password" id="psw_chg" placeholder="<?php echo $item["passwrd"]; ?>" name="passwrd" required><span class="ib"><i class="fa-solid fa-eye" onclick="showPsw()"></i></span><br><br>

                <label for="address"><b>Address:</b></label><br>
                <textarea placeholder="<?php echo $item["address"]; ?>" name="address" cols="80" rows="5" style="font-size:medium; margin-left: 21%;" required></textarea> <br><br>
                
        
              </div>
            
          </div>
          <div style="margin-left: 35%; font-size: larger; margin-bottom: 5%;">

          <button style="font-size:large; width: 20rem;" type="submit" name="edit" class="btn btn-primary mx-5">Update</button>
          
          </div>
          </form>
    <?php }}} ?>
        </div>
      </div>
    </div>

    <script>
function showPsw() {
  var x = document.getElementById("psw_chg");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  } 
}
</script>

<script>
$('.ib').click(function(){
   $('.ib').toggleClass('ico');
   });

</script>