<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />



<style>
label{  
  font-size: 15px;
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


<div class="modal" id="logmodal" tabindex="-1" aria-labelledby="logmodal" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div style="display: inline;">
            <b><div style="margin-left: 42%; font-size: xx-large;">Login
              <button style="margin-left: 60%; font-size:smaller;" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button></div></b>
          </div>
                <br>
          <div class="modal-body">
            
            <form action="login-process.php" method="POST">
              <div class="form-group">

                <label style="margin-left: 15%;" for="email"><b>Email:</b></label><br>
                <input style="margin-left: 20%;" id="email_login" type="text" placeholder="Enter Email" name="email" required><br><br>
          
                <label style="margin-left: 15%;" for="psw"><b>Password:</b></label><br>
                <input style="margin-left: 20%;" id="password_login" type="password" placeholder="Enter Password" name="psw" required><span id="ib"><i class="fa-solid fa-eye" style="font-size: medium;" onclick="showPassword()"></i></span><br><br>
          
              </div>
            
            
          </div>
          <div style="margin-left: 35%; font-size: larger; margin-bottom: 5%;">

          <a ><button style="font-size:large;" id="login_btn" type="submit" name="login" class="btn btn-primary mx-5">Login</button></a>
            
          <button style="font-size:large;" type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button><br><br>
          
          <p style="font-size:medium;"><b>Don't have an account ? <a style="color: blue;" href="#smodal" 
            data-bs-toggle="modal" data-bs-target="#smodal" data-bs-dismiss="modal">Sign-Up !!</a></b></p> 
        </div>
        </form>
        </div>
      </div>
    </div>

    <script>
function showPassword() {
  var x = document.getElementById("password_login");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  } 
}

$("#ib").click(function(){
   
  $("#ib").toggleClass('ico');
  });
</script>