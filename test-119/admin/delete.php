<?php 
include "includes/db.inc.php";

$id = $_GET['id'];


// DELETE FROM tablename WHERE col = 'val'

$query = "DELETE FROM user WHERE id = '$id'";
$delete = mysqli_query($con, $query);


if ($delete) {
	header("location:Customers-detail.php");
}

?>	