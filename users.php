
<?php

include "connection.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>


<?php 
$query = "select * from user";
$select = mysqli_query($con, $query);

 //    echo $row['id'] . " " . $row['fname'] . " " .$row['lname']." ". $row['email']." ".$row['pass']." ".$row['pnum']." ".$row['dob']." ".$row['maritalStatus']." ".$row['gender'] . " <br>";
 // }
?>


<table border="2px;">
	
<tr>
	<th>ID</th>
	<th>Fname</th>
	<th>Lname</th>
	<th>Email</th>
	<th>Pass</th>
	<th>Pnum</th>
	<th>Dob</th>
	<th>Mstatus</th>
	<th>Gender</th>
	<th>Delete</th>
	<th>Update</th>

</tr>
<?php

while ($row = mysqli_fetch_assoc($select)) {
?>

	<tr>
		<td><?php echo $row['id'] ?></td>
		<td><?php echo $row['fname'] ?></td>
		<td><?php echo $row['lname'] ?></td>
		<td><?php echo $row['email'] ?></td>
		<td><?php echo $row['pass'] ?></td>
		<td><?php echo $row['pnum'] ?></td>
		<td><?php echo $row['dob'] ?></td>
		<td><?php echo $row['maritalStatus'] ?></td>
		<td><?php echo $row['gender'] ?></td>
		<td><a href="delete.php?id=<?php echo $row['id'] ?>">delete</a></td>
		<td><a href="update.php?id=<?php echo $row['id'] ?>">update</a></td>
		
	</tr>

<?php
}

?>



















</table>







	
</body>
</html>