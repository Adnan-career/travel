<?php 
include "includes/db.inc.php";

$id = $_GET['id'];


// DELETE FROM tablename WHERE col = 'val'

$query = "DELETE FROM bookings WHERE id = '$id'";
$delete = mysqli_query($con, $query);


if ($delete) {
	header("location:bookings.php");
}

?>	