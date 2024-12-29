<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<style>
label{  
  font-size: 18px;
  margin-left: 5%;
}  

input[type=text], input[type=number], input[type=password]{
  margin-left: 10%;
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



<div class="modal" id="smodal" tabindex="-1" aria-labelledby="smodal" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div >
            <b><div style="margin-left: 42%; font-size: xx-large;">Sign-up
              <button style="margin-left: 60%; font-size:smaller;" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button></div></b>
            
            
          </div>
          <p style="font-size:medium; margin-left: 5%;">Please fill in this form to create an account.</p>
                <br>
          <div class="modal-body">
            <form style="font-size:medium;" action="signup-process.php"  method="POST">
              <div class="form-group" >

                <label for="name"><b>Name:</b></label><br>
                <input type="text" id="name_reg" placeholder="Enter Name" name="name" required><br><br>

                <label for="gender"><b>Gender:</b></label><br>
                <input style="margin-left: 15%;" type="radio" name="gender" value="female" required><b>Female </b>
                <input type="radio" name="gender" value="male"><b>Male </b>
                <input type="radio" name="gender" value="other"><b>Other</b><br><br>

                <label for="phone.no"><b>Phone. No:</b></label><br>
                <input type="number" placeholder="Enter phone number" min="10" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" 
                maxLength="10" name="phono" required><br><br>

                <label for="email"><b>Email:</b></label><br>
                <input type="text" id="email_reg" placeholder="Enter Email" name="email" required><br><br>
          
                <label for="psw"><b>Password:</b></label><br>
                <input type="password" id="password_reg" placeholder="Enter Password" name="passwrd" required><span class="ib"><i class="fa-solid fa-eye" onclick="showPsw()"></i></span><br><br>
          
                <label for="psw-repeat"><b>Repeat Password:</b></label><br>
                <input type="password" id="rep_psw" placeholder="Repeat Password" name="cpsw" required><span class="ibr"><i class="fa-solid fa-eye" onclick="showRpsw()"></i></span><br><br>

                <label for="address"><b>Address:</b></label><br>
                <textarea placeholder="Enter address" name="address" cols="80" rows="5" style="font-size:medium; margin-left: 10%;" required></textarea> <br><br>
                
        
              </div>
            <p style="font-size:medium; margin-left: 5%;"><b>By creating an account you agree to our <input style="width: 15px; height: 15px;" type="checkbox" name="tc" required> <a href="tnc.php" style="color:dodgerblue">Terms & Conditions</a>.</p></b>
          </div>
          <div style="margin-left: 35%; font-size: larger; margin-bottom: 5%;">

          <a href="#!"><button style="font-size:large;" type="submit" name="submit" id="submit_reg" class="btn btn-primary mx-5">Sign Up</button></a>
          
          <button style="font-size:large;" type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button><br><br>
          
          <p style="font-size:medium;"><b>Already have an account ? <a style="color: blue;" href="#logmodal" data-bs-toggle="modal" data-bs-dismiss="modal" data-bs-target="#logmodal">Login</a></b></p>
          </div>
          </form>

        </div>
      </div>
    </div>
    <script>
function showPsw() {
  var x = document.getElementById("password_reg");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  } 
}
</script>

<script>
function showRpsw() {
var y = document.getElementById("rep_psw");
  if (y.type === "password") {
    y.type = "text";
  } else {
    y.type = "password";
  } 
}
</script>

<script>
$('.ib').click(function(){
   $('.ib').toggleClass('ico');
   });

   $('.ibr').click(function(){
   $('.ibr').toggleClass('ico');
   });
</script>

















