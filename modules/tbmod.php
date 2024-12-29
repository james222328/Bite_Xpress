
<style>
label{  
  font-size: 20px;
  margin-left: 5%;
}  

input[type=text]{
    margin-left: 1%;
}

input[type=time], input[type=date]{
  margin-left: 2%;
  width: 20%;
  font-size:medium;
}
select {
  margin-left: 2%;
  width: 20%;
 font-size: large;
}
button:hover{
font-weight: 700;
}

</style>

<div class="modal" id="tbmod" tabindex="-1" aria-labelledby="tbmod" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div >
            <b><div style="margin-left: 35%; font-size: xx-large;">Table Reservation
              <button style="margin-left: 35%; font-size:smaller;" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button></div></b>
            
            
          </div>
          <p style="font-size:medium; margin-left: 5%;">Note: Rs. 100 will be charged for table booking.</p>
                <br>
          <div class="modal-body">
            <form style="font-size:medium;" action="tbprocess.php" method="POST">
              <div class="form-group" >

                <label for="tbname"><b>Name:</b></label>
                <input type="text" id="tbname" placeholder="Enter Name" name="tbname" required><br><br>

                <label for="pplcount">A Table for:</label>
  <select name="tbnumber" id="pplcnt" required>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
  </select>

  <label for="tbtime">Select a time:</label>
  <input type="time" id="tbtime" name="tbtime" step="600" min="11:30" max="23:30" required><br><br>

  <label for="birthday">Date:</label>
<input type="date" id="tbdate" name="tbdate" required><br><br>


  <br><br>
                
        
              </div>
            
          </div>
          <div style="margin-left: 37%; font-size: larger; margin-bottom: 5%;">

          <a href=""><button style="font-size:large;" type="submit" name="tbsubmit" id="tbsubmit" class="btn btn-primary mx-5">Reserve Table</button></a>         
         
          </div>
          </form>

        </div>
      </div>
    </div>