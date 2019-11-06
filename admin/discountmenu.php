<?php require_once 'includes/header.php'; ?>
<!-- Sidebar Area End Here -->
<div class="dashboard-content-one">
  <!-- Breadcubs Area Start Here -->
  <div class="breadcrumbs-area">
    <h3>Discount Menu</h3>
    <ul>
      <li>
        <a href="index.php">Home</a>
      </li>
      <li>Discount Menu</li>
    </ul>
  </div>
  <!-- Breadcubs Area End Here -->
  <!-- Class Routine Area Start Here -->
  <div class="row">
    <div class="col-4-xxxl col-12">
      <div class="card height-auto">
        <div class="card-body">
          <div class="heading-layout1">
            <div class="item-title">
              <h3>Edit Discount Menu</h3>
            </div>
   
                </div>
                <form class="new-added-form" method="POST" enctype="multipart/form-data">
                  <div class="row">
                    <div class="col-12-xxxl col-lg-6 col-12 form-group">
                      <label>Image *</label>
                      <input type="file" required="" name="pic" class="form-control">
                    </div>
                    <div class="col-12-xxxl col-lg-6 col-12 form-group">
                      <label>Name *</label>
                      <input type="text" required="" name="name" class="form-control">

                    </div>
                    <div class="col-12-xxxl col-lg-6 col-12 form-group">
                      <label>Price *</label>
                      <input type="text" required="" name="price" class="form-control">
                    </div>
                      <div class="col-12-xxxl col-lg-6 col-12 form-group">
                      <label>Discount</label>
                      <input type="text" name="discount"  class="form-control">
                    </div>
                    <div class="col-12-xxxl col-lg-6 col-12 form-group">
                      <label>Description *</label>
                      <input type="text" class="form-control" name="dis" required="">
                    </div>
                 <div class="col-12 form-group mg-t-8">
                      <button type="submit" name="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Save</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
<?php

if (isset($_POST['submit'])) {
  
$target_dir = "../uplode/";
     $target_file = $target_dir . basename($_FILES["pic"]["name"]);  // media/car2.jpg
     $pic =  basename($_FILES["pic"]["name"]);
     move_uploaded_file($_FILES["pic"]["tmp_name"], $target_file);



  $name = $_POST['name'];
  $price = $_POST['price'];
  $discount= $_POST['discount'];
  $dis= $_POST['dis'];


  $query = "insert into discountmenu (pic,name,price,discount,dis) values('$pic','$name','$price','$discount','$dis')";
   
  


  
  if (mysqli_query($con, $query)) {
    
    echo "u r res";
  }
  

}
?>



<div class="container-fluid">
  <?php 
$query = "select * from discountmenu";
$select = mysqli_query($con, $query);

 //    echo $row['id'] . " " . $row['fname'] . " " .$row['lname']." ". $row['email']." ".$row['pass']." ".$row['pnum']." ".$row['dob']." ".$row['maritalStatus']." ".$row['gender'] . " <br>";
 // }
?>
  <div class="row bg-light">
           <?php

while ($row = mysqli_fetch_assoc($select)) {
?>
    <div class="col-4">
      <div class="card  pt-3">
 
        <div class="card-img card-img-top"><img src="../uplode/<?php echo $row['pic'] ?>" style="width: 100%; height: 240px;" alt=""></div>
        <div class="card-body">
     <h6 class="d-flex justify-content-between"><?php echo $row['name'] ?> <p class="text-primary font-weight-bold"><del><?php echo $row['price'] ?></del>--<?php echo $row['discount'] ?></p></h6>
               <?php echo $row['dis']?>
        </div>
          <div class="card-footer text-sm-center"><a href="cardupdate.php?id=<?php echo $row['id'];  ?>" role="button" class="form-control btn btn-success" style="width: 70%;">Update</a></div>
      </div>
    </div>
<?php
}

?>

  </div>
</div>



        
                                          </div>
                                          <!-- Class Routine Area End Here -->
                                          <?php require_once 'includes/footer.php'; ?>
