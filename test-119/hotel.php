	
	<?php
	 $tittle = "Hotel";

include("navbar.php");

?>



<!-- nav end -->


		
	<!-- background img -->

<div class="container-fluid">
	 <div class="row align-items-center justify-content-center"  style="height: 700px; background-image: url(img/bg_5.jpg); background-size: 100% 100%;">
      <div class="col-sm-12">
        <h1 class="text-center display-2 text-white"><b>Hotels</b></h1>
          
      </div>
    </div>


<!-- backgrounf img -->



 	<div class="container-fluid mt-5">
 		<div class="row">
 			
			<!-- aside -->

			<div class="col-md-3">
				<div class="card">
					<div class="card-body">
						<h4>FIND CITY</h4>
						<form action="">
							<div class="form-group">
								<input class="form-control" type="text" placeholder="Destination, City">
							</div>
							<div class="form-group">
							<select class="form-control">
							<option value="">Select Location</option>
	 						<option value="">San Francisco USA</option>
	 						<option value="">Berlin Germany</option>
	 						<option value="">London United Kingdom</option>
	 						<option value="">Paris Italy</option>

								</select>
							</div>
							<div class="form-group">
								<input type="data" class="form-control" placeholder="Date From">
							</div>

							<div class="form-group">
								<input type="data" class="form-control" placeholder="Date To">
							</div>

							<div class="form-group">
								<input type="range" class="form-control">
							</div>

							<div class="form-group text-sm-center ">
								<a href="datainput.php" role="button" class="form-control btn btn-danger" style="width: 70%;">Search</a>
							</div>

						</form>
					</div>

					
				</div>
			</div>

			<!-- aside end -->

			<!-- contact -->

			
      <div class="col-sm-9">

        

  <?php 
$query = "select * from discountmenu limit 3 ";
$select = mysqli_query($con, $query);

 //    echo $row['id'] . " " . $row['fname'] . " " .$row['lname']." ". $row['email']." ".$row['pass']." ".$row['pnum']." ".$row['dob']." ".$row['maritalStatus']." ".$row['gender'] . " <br>";
 // }
?>
  <div class="row ">

           <?php

while ($row = mysqli_fetch_assoc($select)) {
?>
    <div class=" col-sm-12 col-lg-4">

      <div class="card border-0 pt-3" style="width:95%;">
 
        <div class="card-img card-img-top"><img src="uplode/<?php echo $row['pic'] ?>" style="width: 100%; height: 240px;" alt=""></div>
        <div class="card-body">
     <h6 class="d-flex justify-content-between"><?php echo $row['name'] ?> <p class="text-primary font-weight-bold"><del><?php echo $row['price'] ?></del>--<?php echo $row['discount'] ?></p></h6>
        <p>
                <i class="far fa-star text-danger"></i>
                <i class="far fa-star text-danger"></i>
                <i class="far fa-star text-danger"></i>
                <i class="far fa-star text-danger"></i>
                <i class="far fa-star text-danger"></i>
                <span>8 Rating</span>
                </p>
               <?php echo $row['dis']?>
        </div>
          <div class="card-footer text-sm-center"><a href="login.php?id=<?php echo $row['id'];  ?>" role="button" class="form-control btn btn-success" style="width: 70%;">Book Now</a></div>
      </div>
    </div>
<?php
}

?>
?>

  </div>
    </div>

	</div>

<!-- contact end -->
 	</div>



<!-- fotter -->

<?php

include("fotter.php");

?>