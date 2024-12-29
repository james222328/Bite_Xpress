<style>
label{  
  font-size: 20px;
  margin-left: 5%;
}  

input[type=radio]{
  margin-left: 5%;
}

#submit_fdb:hover{
font-weight: 600;
}

</style>



<div class="modal" id="fdbmod" tabindex="-1" aria-labelledby="smodal" aria-hidden="true">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div>
            <b><div style="margin-left: 43%; font-size: xx-large;">FEEDBACK
              <button style="margin-left: 65%; font-size:smaller;" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button></div></b>
            
            
          </div>
          <p style="font-size:large; margin-left: 5%;">We value your opinion.</p>
                <br>
          <div class="modal-body">
            <form style="font-size:20px;" action="fdbprocess.php"  method="POST">
              <div class="form-group" >

                <label for="name"><b>Name:</b></label><br>
                <input type="text" id="cname" placeholder="Enter Name" name="cname" required><br><br>

                <label for="gender">Rate your satisfaction of our service</label><br>
                <input style="margin-left: 22%;" type="radio" name="rating" value="Excellent" required><b>Excellent </b>
                <input type="radio" name="rating" value="Good"><b>Good </b>
                <input type="radio" name="rating" value="Neutral"><b>Neutral </b>
                <input type="radio" name="rating" value="Bad"><b>Bad </b>
                <input type="radio" name="rating" value="Worst"><b>Worst </b><br><br>

                <label for="description">If you have a specific feedback, please write to us.</label><br>
                <textarea placeholder="Discription" name="description" cols="100" rows="5" style="font-size:large; margin-left: 12%;" required></textarea> <br><br>
                
        
              </div>
          </div>
          <div style="margin-left: 45%; font-size: larger; margin-bottom: 5%;">

          <a href="#!"><button style="font-size:large;" type="submit" name="submitfdb" id="submit_fdb" class="btn btn-primary mx-5">Submit</button></a>
              
          </div>
          </form>

        </div>
      </div>
    </div>