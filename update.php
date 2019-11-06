<?php 
include "connection.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php 
$id = $_GET['id'];
$query = "select * from user where id = '$id'";
$select = mysqli_query($con, $query);
$row = mysqli_fetch_assoc($select);
?>

	<form action="" method="POST">
		Enter Username: <input type="text" name="fname" value="<?php echo $row['fname']; ?>"><br>
		Enter Password: <input type="text" name="pass" value="<?php echo $row['pass']; ?>"><br>
		<input type="submit" name="submit" value="update">
	</form>




	
<?php 
if (isset($_POST['submit'])) {
	

	$fname = $_POST['fname'];
	$pass = $_POST['pass'];

	// UPDATE tablename SET col = val, col = val, col= val WHERE id = $id
	

	$query = "UPDATE user SET fname = '$fname', pass = '$pass' WHERE id = '$id'";
	$update = mysqli_query($con, $query);

	if ($update) {
			header("location:users.php");
		
	}

}

?>	
</body>
</html>