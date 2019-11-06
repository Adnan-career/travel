
<?php
 $tittle = "Log In";
include("navbar.php");
if (!empty($_SESSION['id'])) {
	header("location:datainput.php");
}


?>

<div class="container-fluid">
	<div class="row bg-dark	" style="height: 500px;">
		<div class="col-12">
				

			<div class="card border-0 mt-4" style="width: 35%; margin: auto;">
				<div class="card-body">
					<form method="POST">
						<div class="form-group">
							<h1 class="text-center">Log In</h1>
							<label>Email Address</label>
							<input type="email" class="form-control" placeholder="Email" required="" name="email" pattern="\w{,30}\W" >
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" class="form-control" placeholder="password" name="pass" required="">
						</div>
						<div> <a href="">Forgot your password?</a></div>
							<div class="col-12 pt-3 pb-3 text-center"><button class="btn btn-primary pl-5 pr-5" name="submit">Log In  </button></div>
							<div><a href="signup.php">Create an account </a></div>
					</form>
				</div>
			</div>





		</div>
	</div>
</div>

<?php
 $hotel = "";
 if(isset($_GET['hotel'])){
 $hotel=$_GET['hotel'];	
 }
 
?>
<?php
 $dis = "";
 if(isset($_GET['dis'])){
 $dis=$_GET['dis'];	
 }
 
?>
<?php 
 
 if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$pass = $_POST['pass'];

$query = "SELECT * from user WHERE email  = '$email' AND confirm_account = '1' ";


$select = mysqli_query($con, $query);
 $row = mysqli_fetch_assoc($select);

if ($email == $row['email'] and $pass == $row['pass'] and $confirm_account== $row['1']) {
	
	$_SESSION['id']=$row['id'];

if($hotel == "true"){
	header("location:hotelb.php");	
}

elseif ($dis=="true") {
	header("location:discountb.php");
}

else{
		header("location:datainput.php");
	}
	
}




else{
	echo "Your Email is Not Verfiy Pleace Verfiy Your Email";
}

}

?>
