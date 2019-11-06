

<?php  include "includes/db.inc.php";       ?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
 <?php 
$id = $_GET['id'];
$query = "select * from discountmenu where id = '$id'";
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




                <form class="new-added-form" method="POST">
                  <div class="row">
                    <div class="col-12-xxxl col-lg-6 col-12 form-group">
                      <label>Image</label>
                      <input type="file"  name="pic" class="form-control" value="<?php echo $row['pic']; ?>">
                    </div>
                     <div class="col-12-xxxl col-lg-6 col-12 form-group">
                      <label>Name</label>
                      <input type="text"  name="name"  class="form-control" value="<?php echo $row['name']; ?>">
                    </div>
                     <div class="col-12-xxxl col-lg-6 col-12 form-group">
                      <label>Price</label>
                      <input type="text" name="price"  class="form-control" value="<?php echo $row['price']; ?>">
                    </div>
                     <div class="col-12-xxxl col-lg-6 col-12 form-group">
                      <label>Discount</label>
                      <input type="text" name="discount"  class="form-control" value="<?php echo $row['discount']; ?>">
                    </div>
                    <div class="col-12-xxxl col-lg-12 col-12 form-group">
                      <label>Description</label>
                      <input type="text" placeholder="" name="dis"  class="form-control" value="<?php echo $row['dis']; ?>">
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
	
  
	$pic = $_POST['pic'];
	$name = $_POST['name'];
  $price = $_POST['price'];
  $discount = $_POST['discount'];
  $dis = $_POST['dis'];



	// UPDATE tablename SET col = val, col = val, col= val WHERE id = $id
	

	$query = "UPDATE discountmenu SET pic = '$pic', name = '$name', price = '$price', discount = '$discount', dis = '$dis' WHERE id = '$id'";
	$update = mysqli_query($con, $query);

	if ($update) {
			header("discountmenu.php");
		
	}

}

?>









	
</body>
</html>