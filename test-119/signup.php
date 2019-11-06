
<?php
 $tittle = "Log In";
include("navbar.php");
include("mail_send.php");
// if (!empty($_SESSION['id'])) {
// 	header("location:datainput.php");
// }


?>
	
	 <div class="container  ">
	 	<div class="row img-fluid pt-3 m-5 " style="background-image: url(img/image_5.jpg);background-size: 100% 100%;">
	 	

			<div class="col-sm-12  " >
	 			<form class="was-validated"  method="POST" >
	 				<h1 class="pb-4 text-center text-danger" style="font-size: 50px;"><i>Travel with Us</i></h1>
	 				<div class="form-row" action="" >
	 					<div class="form-group col-lg-6 col-sm-12">
	 					<label class="text-white">First Name</label>
	 					<input type="text" class="form-control" placeholder="First Name" required name="fname" autofocus pattern="\D{3,15}" >
	 					<div class="valid-feedback font-weight-bold"> Looks good!</div>
	 					<div class="invalid-feedback text-danger font-weight-bold">Error!!!</div>
	 				</div>

	 					<div class="form-group col-lg-6 col-sm-12">
	 					<label class="text-white">Last Name</label>
	 					<input type="text" class="form-control" placeholder="Last Name" required name="lname" pattern="\D{3,15}">
	 					<div class="valid-feedback font-weight-bold"> Looks good!</div>
	 					<div class="invalid-feedback text-danger font-weight-bold">Error!!!</div>
	 				</div>

	 				<div class="form-group col-lg-6 col-sm-12">
	 					<label class="text-white">Email</label>
	 					<input type="email" class="form-control" placeholder="Email" required name="email" pattern="\w{,30}\W">
	 					<div class="valid-feedback font-weight-bold"> Looks good!</div>
	 					<div class="invalid-feedback text-danger font-weight-bold">Error!!!</div>
	 				</div>

	 				<div class="form-group col-lg-6 col-sm-12">
	 					<label class="text-white">Password</label>
	 					<input type="password" class="form-control" placeholder="password" name="pass" required>
	 					<div class="valid-feedback font-weight-bold"> Looks good!</div>
	 					<div class="invalid-feedback text-danger font-weight-bold">Error!!!</div>
	 				</div>


	 				<div class="form-group col-lg-6 col-sm-12">
	 					<label class="text-white">Confirm Password</label>
	 					<input type="password" class="form-control" placeholder="password" name="pass" required>
	 					<div class="valid-feedback font-weight-bold"> Looks good!</div>
	 					<div class="invalid-feedback text-danger font-weight-bold">Error!!!</div>
	 				</div>


	 				<div class="form-group col-lg-6 col-sm-12">
	 					<label class="text-white">Phone Number</label>
	 					<input type="number" class="form-control" placeholder="Phone Number" name="pnum" >
	 					<div class="valid-feedback font-weight-bold"> Looks good!</div>
	 					<div class="invalid-feedback text-danger font-weight-bold">Error!!!</div>
	 				</div>


	 				<div class="form-group col-lg-6 col-sm-12">
	 					<label class="text-white">Date Of Birth</label>
	 					<input type="date" class="form-control" placeholder="date of birth" name="dob" required>
	 					<div class="valid-feedback font-weight-bold"> Looks good!</div>
	 					<div class="invalid-feedback text-danger font-weight-bold">Error!!!</div>
	 				</div>


	 			<div class="form-group col-6">
	 					<label class="text-white">Marital status</label>
	 					<select class="form-control" required="" name="maritalStatus">
	 						<option value="">Choose</option>
	 						<option value="Single">Single</option>
	 						<option value="Married">Married</option>
	 					</select>
	 					<div class="valid-feedback font-weight-bold"> Looks good!</div>
	 					<div class="invalid-feedback text-danger font-weight-bold">Error!!!</div>
	 				</div>
	 				


	 				<div class="custom-control custom-radio custom-control-inline ">
					  <input type="radio" id="customRadioInline1" name="gender" value="Male" class="custom-control-input" required="">
					  <label class="custom-control-label text-white"  for="customRadioInline1">Male</label>
					</div>


					<div class="custom-control custom-radio custom-control-inline ">
					  <input type="radio" id="customRadioInline2" name="gender" value="Female" class="custom-control-input" required="">
					  <label class="custom-control-label text-white" for="customRadioInline2">Female</label>
					</div>



					<div class="col-12 pt-3 pb-3 text-center"><button class="btn btn-primary pl-5 pr-5" type="submit" name="submit">Sign Up</button></div>

					



	 				</div>
	 			</form>

	 		</div>
	 	</div>
	 </div>


<?php

if (isset($_POST['submit'])) {
	

	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$pass = $_POST['pass'];
	$pnum = $_POST['pnum'];
	$dob = $_POST['dob'];
	$maritalStatus = $_POST['maritalStatus'];
	$gender = $_POST['gender'];

$query = "select * from user where email = '$email' ";
$select = mysqli_query($con, $query);
 $row = mysqli_fetch_assoc($select);
if ($row['email']==$email) {
	echo "email is already exist";
}
else{
	$query = "insert into user(fname,lname,email,pass,pnum,dob,maritalStatus,gender) values('$fname','$lname','$email','$pass','$pnum','$dob','$maritalStatus','$gender')";

	
	if (mysqli_query($con, $query)) {
		
		send_email_($email,$fname,$id);

		
	header("location:welcome.php");
	}

}


}


 function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}





















?>

