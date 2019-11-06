<?php
$tittle = "Discount Booking";
include("navbar.php");
if (empty($_SESSION['id'])) {
  header("location:index.php");
}


?>

<!-- nav end -->

<!-- nav end -->








 <?php 
$query = "select * from discountmenu ";
$select = mysqli_query($con, $query);
($row = mysqli_fetch_assoc($select))

 //    echo $row['id'] . " " . $row['fname'] . " " .$row['lname']." ". $row['email']." ".$row['pass']." ".$row['pnum']." ".$row['dob']." ".$row['maritalStatus']." ".$row['gender'] . " <br>";
 // }
?>




        <div class="container-fluid mt-4">
  <div class="row" style=" background-image: url(img/anders-jilden-307322-unsplash.jpg); background-size: 100% 100%;min-height: 577px;">
    <div class="col-12">
      <?php

if (isset($_POST['submit'])) {
  

  $tname = $_POST['tname'];
  $disprice = $_POST['disprice'];
  $duration = $_POST['duration'];
  $email = $_POST['email'];
  $country = $_POST['country'];
  $city = $_POST['city'];
  $num = $_POST['num'];
  $date= $_POST['date'];
  $query = "insert into discountb(tname,disprice,duration,email,country,city,num,date,status) values('$tname','$disprice','$duration','$email','$country','$city','$num','$date','unapproved')";

  
  if (mysqli_query($con, $query)) {
       echo "<h3 style='color: white;text-align:center;padding: 20px;background-color: red;'> Your tour is Booked </h3>";
  }

}

?>

      <form method="POST">
  <div class="form-row">
    <div class="col-12 text-center text-white">
    <h1 class="text-uppercase">Discount Package</h1>
    </div>
    <div class="col-md-4 mb-3 text-white">
      <label for="validationDefault01"><b>Tour Name</b></label>
      <input type="text" class="form-control" id="validationDefault01"  placeholder='<?php echo $row['name'] ?>' readonly="" required name="tname">
    </div>
    <div class="col-md-4 mb-3 text-white">
      <label for="validationDefault02"><b>Discount Price</b></label>
      <input type="text" class="form-control" id="validationDefault02" placeholder='<?php echo $row['price'] ?>--<?php echo $row['discount'] ?>' readonly="" required name="disprice">
    </div>
    <div class="col-md-4 mb-3 text-white">
      <label for="validationDefaultUsername"><b>Duration</b></label>
       <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" required name="duration">
        <option value="">Choose...</option>
        <option value="1-7 Days Tour">1-7 Days Tour</option>
        <option value="1-15 Days Tour">1-15 Days Tour</option>
        <option value="1 Month Tour">1 Month Tour</option>
        <option value="3 Month Tou">3 Month Tour</option>
      </select>
    </div>
  </div>
  <div class="form-row">


    <div class="col-md-4 mb-3 text-white">
      <label for="validationDefault02"><b>Email </b></label>
      <input type="email" class="form-control" id="validationDefault02" placeholder="Email" required name="email">
    </div>
 
     <div class="col-md-4 mb-3 text-white">
      <label for="validationDefaultUsername"><b>Country</b></label>
       <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" required name="country">
        <option value="">Choose...</option>
        <option value="PAKISTAN">PAKISTAN</option>
        <option value="INDIA">INDIA</option>
        <option value="NORTH AMERICA">NORTH AMERICA</option>
        <option value="SOUTH AMERICA">SOUTH AMERICA</option>
        <option value="AFGHANISTAN">AFGHANISTAN</option>
        <option value="PASHAWER">PASHAWER</option>
      </select>
    </div>
    
     <div class="col-md-2 mb-3 text-white">
      <label for="validationDefaultUsername"><b>City</b></label>
       <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" required name="city">
        <option value="">Choose...</option>
        <option value="FAISALABAD">FAISALABAD</option>
        <option value="MULTAN">MULTAN</option>
        <option value="LAHORE">LAHORE</option>
        <option value="KARACHI">KARACHI</option>
        <option value="ISLAMABAD">ISLAMABAD</option>
        <option value="PASHAWER">PASHAWER</option>
      </select>
    </div>

    <div class="col-md-2 mb-3 text-white  ">
      <label for="validationDefault05"><b>Number</b></label>
      <input type="number" class="form-control" id="validationDefault05" required name="num">
    </div>


    <div class="col-md-2 mb-3 text-white  ">
      <label for="validationDefault05"><b>Date</b></label>
      <input type="date" class="form-control" id="validationDefault05" required name="date">
    </div>

     

  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
      <label class="form-check-label text-white" for="invalidCheck2">
        Agree to terms and conditions
      </label>
    </div>
  </div>
  <div class="text-center"><button class="btn btn-primary badge-pill pl-5 pr-5 " type="submit" name="submit">Submit</button></div>
</form>
    </div>
  </div>
  </div>
         
          </div>
			</div>
			</div>
</div>



