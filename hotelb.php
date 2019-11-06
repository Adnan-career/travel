<?php
 $tittle = "Hotel Booking";
include("navbar.php");
if (empty($_SESSION['id'])) {
  header("location:index.php");
}


?>


<div class="container-fluid" style="
			position: relative;
			width: 100%;
			height: 600px;
			margin: auto;
			background-image: url(img/nick-fewings-kKV4bLwSc_4-unsplash.jpg);
			background-repeat: no-repeat;
			background-size: cover;
			background-attachment: fixed;">
			<div class="col-lg-12 text-white text-center" style="padding-top: 100px;">
				<div class="col-lg-12 text-white text-center" >
				          <div class="">
        <div class="container-fluid">
  <div class="row">
  

   <?php
  if (isset($_POST['submit'])) {
      $fullname=$_POST['fullname'];
      $fathername=$_POST['fathername'];
      $phone=$_POST['phone'];
      $catagory=$_POST['catagory'];
      $room=$_POST['room'];
      $bed=$_POST['bed'];
     

      $query="INSERT INTO hotelb(fullname , fathername, phone, catagory, room, bed) Values( '$fullname',' $fathername', '$phone', '$catagory','$room','$bed')";

          if (mysqli_query($con, $query)) {
     echo "<h3 style='color: white;text-align:center;padding: 20px;background-color: red;'> Your Hotel Room is Booked </h3>";
          }
          else{
            echo "<h3 style='color: white;text-align:center;padding: 50px;background-color: red;'>Some Error plese Try Again</h3>";
          }
         


  }


?>

                    <!-- Add Transport Area Start Here -->
                    <div class="col-4-xxxl col-12">
                            <div class="card-body">
                                <div class="heading-layout1">
                                    <div class="item-title">
                                        <h1 class="">Find Your Hotel Rome</h1>
                                    </div>
                                </div>
                                <form class="new-added-form" method="POST">
                                    <div class="row">
                                        <div class="col-12-xxxl col-xl-4 col-sm-6 col-12 form-group">
                                            <label>Full-Name</label>
                                            <input type="text" name="fullname" required="" placeholder="Full-Name" class="form-control">
                                        </div>
                                        <div class="col-12-xxxl col-xl-4 col-sm-6 col-12 form-group">
                                            <label>Father Name</label>
                                            <input type="text" name="fathername" required="" placeholder="Father Name" class="form-control">
                                        </div>
                                        <div class="col-12-xxxl col-xl-4 col-sm-6 col-12 form-group">
                                            <label>Phone Number</label>
                                            <input type="text" name="phone" required="" placeholder="Phone Number" class="form-control">
                                        </div>
                                        <div class="col-12-xxxl col-xl-4 col-sm-6 col-12 form-group">
                                            <label>Catagory</label>
                                            <select class="custom-select mr-sm-2" name="catagory" id="inlineFormCustomSelect" required name="city">
        <option selected>Choose...</option>
        <option value="2 Star">2 Star</option>
        <option value="3 Star">3 Star</option>
        <option value="4 Star">4 Star</option>
        <option value="5 Star">5 Star</option>
        
      </select>
                                        </div>
                                         <div class="col-12-xxxl col-xl-4 col-sm-6 col-12 form-group">
                                            <label>Rome Type</label>
                                            <select class="custom-select mr-sm-2" name="room" id="inlineFormCustomSelect" required name="city">
        <option selected>Choose...</option>
        <option value="Small">Small</option>
        <option value="Medium">Medium</option>
        <option value="Big">Big</option>
        
        
      </select>
                                        </div>
                                        <div class="col-12-xxxl col-xl-4 col-sm-6 col-12 form-group">
                                            <label>Number Of Bed</label>
                                            <select class="custom-select mr-sm-2" name="bed" id="inlineFormCustomSelect" required name="city">
        <option selected>Choose...</option>
        <option value="Single">Single</option>
        <option value="Double">Double</option>
        
        
        
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
            <div class="text-center mt-5">
               <a href="https://www.facebook.com/" class="p-2 " style="font-size: 30px;" title="Facebook"><i class="fab fa-facebook-f"></i></a>
              <a href="https://www.instagram.com/" class="p-2" style="font-size: 30px;" title="Instagram"><i class="fab fa-instagram"></i></a>
              <a href="https://twitter.com/" class="p-2" style="font-size: 30px;" title="Twitter"><i class="fab fa-twitter"></i></a>
              
</div>

          </div>
			</div>
			</div>
</div>
