<?php 
require_once 'includes/db.inc.php';
$id= $_GET['id'];
$status= $_GET['status'];

$query="UPDATE bookings SET status='$status' WHERE id = '$id'";
$update=mysqli_query($con,$query);
if ($update) {
	header("location:bookings.php");
}

 ?>