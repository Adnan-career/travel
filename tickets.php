  
  <?php
$tittle = "Tickets Booking";
include("navbar.php");

?>




<div class="container-fluid" style="
			position: relative;
			width: 100%;
			height: 600px;
			margin: auto;
			background-image: url(img/michal-parzuchowski-xFItahF3CY4-unsplash.jpg);
			background-repeat: no-repeat;
			background-size: cover;
			background-attachment: fixed;">
			<div class="col-lg-12 text-danger font-weight-bold text-center" style="padding-top: 120px;">
				<div class="col-lg-12 text-danger font-weight-bold text-center" >
				          <div class="">
        <div class="container-fluid">
  <div class="row">
  
   <?php
  if (isset($_POST['submit'])) {
      $departure=$_POST['departure'];
      $arrival=$_POST['arrival'];
      $dates=$_POST['dates'];
      $passport=$_POST['passport'];
      $phone=$_POST['phone'];
      $air=$_POST['air'];

      $query="INSERT INTO tickets(departure, arrival, dates, passport, phone, air) values('$departure','$arrival','$dates','$passport', '$phone','$air')";

          if (mysqli_query($con, $query)) {
     echo "<h3 style='color: white;text-align:center;padding: 20px;background-color: red;'> Your Tourticket ditail is Submit</h3>";
          }
          else{
            echo "<h3 style='color: white;text-align:center;padding: 20px;background-color: red;'>Some Error plese Try Again</h3>";
          }
         


  }


?>
                    <!-- Add Transport Area Start Here -->
                    <div class="col-4-xxxl col-12">
                            <div class="card-body">
                                <div class="heading-layout1">
                                    <div class="item-title">
                                        <h1 class="">Find Your Route</h1>
                                    </div>
                                </div>
                                <form class="new-added-form" method="POST">
                                    <div class="row">
                                        <div class="col-12-xxxl col-xl-4 col-sm-6 col-12 form-group">
                                            <label>Departure to</label>
                                            <input type="text" name="departure" required="" placeholder="Faisalabad" class="form-control">
                                        </div>
                                        <div class="col-12-xxxl col-xl-4 col-sm-6 col-12 form-group">
                                            <label>Arrival to</label>
                                            <input type="text" name="arrival" required="" placeholder="Karachi" class="form-control">
                                        </div>
                                        <div class="col-12-xxxl col-xl-4 col-sm-6 col-12 form-group">
                                            <label>Date</label>
                                            <input type="date" name="dates" required="" placeholder="" class="form-control">
                                        </div>
                                        <div class="col-12-xxxl col-xl-4 col-sm-6 col-12 form-group">
                                            <label>Passport Number</label>
                                            <input type="text" name="passport" required="" placeholder="" class="form-control">
                                        </div>
                                        <div class="col-12-xxxl col-xl-4 col-sm-6 col-12 form-group">
                                            <label>Phone Number</label>
                                            <input type="text" name="phone" required="" placeholder="" class="form-control">
                                        </div>
                                        <div class="col-12-xxxl col-xl-4 col-sm-6 col-12 form-group formc">
                                            <label>Air Line</label>
                                            <select class="custom-select mr-sm-2 form-control" name="air" id="inlineFormCustomSelect" required name="city">
        <option selected>Choose...</option>
        <option value="Fly Dubai">Fly Dubai</option>
        <option value="EMIRATES">EMIRATES</option>
        <option value="Fly Nas">Fly Nas</option>
        <option value="Shaheen Air">Shaheen Air</option>
        <option value="Sareen Air">Sareen Air</option>
        <option value="Etihad">Etihad</option>
        <option value="Kuwait">Kuwait</option>
        <option value="Saudi Airline">Saudi Airline</option>
        <option value="PIA">PIA</option>
        <option value="Other">Other</option>
      </select>
                                        </div>
                                        <div class="col-12 form-group mg-t-8">
<button type="submit" name="submit" class="btn-lg btn-secondary badge-pill ">Save</button>
<button type="reset" class="btn-lg btn-secondary badge-pill">Reset</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>






      

    </div>
  </div>
  </div>
           <div class="text-center mt-2">
               <a href="https://www.facebook.com/" class="p-2 " style="font-size: 30px;" title="Facebook"><i class="fab fa-facebook-f"></i></a>
              <a href="https://www.instagram.com/" class="p-2" style="font-size: 30px;" title="Instagram"><i class="fab fa-instagram"></i></a>
              <a href="https://twitter.com/" class="p-2" style="font-size: 30px;" title="Twitter"><i class="fab fa-twitter"></i></a>
              
</div>


          </div>
			</div>
			</div>
</div>
