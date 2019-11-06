
<?php  include "includes/db.inc.php"; 
if (empty($_SESSION['aid'])) {
  header("location:signin.php");
}


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


<?php require_once 'includes/header.php'; ?>
<!-- Sidebar Area End Here -->
<div class="dashboard-content-one">
  <!-- Breadcubs Area Start Here -->
  <div class="breadcrumbs-area">
    <h3>Update</h3>
    <ul>
      <li>
        <a href="index.php">Home</a>
      </li>
      <li>Update</li>
    </ul>
  </div>
  <!-- Breadcubs Area End Here -->
  <div class="row">
    <!-- Add Room Area Start Here -->
    <div class="col-4-xxxl col-12">
      <div class="card height-auto">
        <div class="card-body">
          <div class="heading-layout1">
            <div class="item-title">
              <h3>Update</h3>
            </div>
                </div>




                <form class="new-added-form" method="post">
                  <div class="row">
                    <div class="col-12-xxxl col-lg-6 col-12 form-group">
                      <label>First name</label>
                      <input type="text" placeholder="" name="fname" class="form-control" value="<?php echo $row['fname']; ?>">
                    </div>
                    <div class="col-12-xxxl col-lg-6 col-12 form-group">
                      <label>Password</label>
                      <input type="text" placeholder="" name="pass"  class="form-control" value="<?php echo $row['pass']; ?>">
                    </div>

                    <div><button class="btn btn-primary pl-5 pr-5" style="font-size: 15px;"  type="submit" name="submit" value="button" >Submit</button></div>
                  
                  </div>
                </form>
              </div>
            </div>
          </div>

            
            
              
                                                                                                           
                                                                                                         
                                                                                                       
                                                                                                        <!-- All Room List Area End Here -->
                                                                                                      </div>
                                                                                                      <?php require_once 'includes/footer.php'; ?>



<?php 
if (isset($_POST['submit'])) {
	

	$fname = $_POST['fname'];
	$pass = $_POST['pass'];

	// UPDATE tablename SET col = val, col = val, col= val WHERE id = $id
	

	$query = "UPDATE user SET fname = '$fname', pass = '$pass' WHERE id = '$id'";
	$update = mysqli_query($con, $query);

	if ($update) {
			header("location:Customers-detail.php");
		
	}

}

?>









	
</body>
</html>