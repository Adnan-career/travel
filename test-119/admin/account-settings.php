<?php require_once 'includes/header.php'; ?>
<!-- Sidebar Area End Here -->
<div class="dashboard-content-one">
  <!-- Breadcubs Area Start Here -->
  <div class="breadcrumbs-area">
    <h3>Account Setting</h3>
    <ul>
      <li>
        <a href="index.php">Home</a>
      </li>
      <li>Account</li>
    </ul>
  </div>
  <!-- Breadcubs Area End Here -->
  <!-- Account Settings Area Start Here -->
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <div class="heading-layout1">
            <div class="item-title">
              <h3>Add New admin</h3>
            </div>
      
                </div>
                <form class="new-added-form" method="POST">
                  <div class="row">
                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                      <label>Full Name *</label>
                      <input type="text" placeholder="" class="form-control" name="fname">
                    </div>
                 
                 
                  
                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                      <label>E-Mail</label>
                      <input type="email" placeholder="" class="form-control" name="email">
                    </div>
                   
                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                      <label>Password</label>
                      <input type="text" placeholder="" class="form-control" name="pass">
                    </div>

                   <div class="form-group col-xl-3 col-lg-6 col-12">
            <label>Gender</label>
            <select class="form-control" required="" name="gender">
              <option value="">Choose</option>
              <option value="male">male</option>
              <option value="female">female</option>
            </select>
          </div>
                   
                    <div class="col-12 form-group mg-t-8">
                      <button type="submit" name="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Save</button>
                      <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Reset</button>
                    </div>

                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>

<!-- inser query -->

<?php

if (isset($_POST['submit'])) {
  

  $fname = $_POST['fname'];
  $email = $_POST['email'];
  $pass = $_POST['pass'];
  $gender = $_POST['gender'];


  $query = "insert into admin (fname,email,pass,gender) values('$fname','$email','$pass','$gender')";
   

  if (mysqli_query($con, $query)) {
    
   header("location:account-settings.php");
  }
  else{
    echo "error";
  }
  

}
?>

<!-- select query -->


      <div class="table-responsive">
        <table class="table display data-table text-nowrap">
          <thead>
            <tr>
                <th>ID</th>
              <th>Fname</th>
              <th>Email</th>
              <th>Pass</th>
              <th>Gender</th>
              <th>Status</th>
              
            </tr>
          </thead>
          <tbody>
            <tr>
            <!--   <td>
                <div class="form-check">
                  <input type="checkbox" class="form-check-input">
                  <label class="form-check-label">#0021</label>
                </div>
              </td> -->
              <!-- <td class="text-center"><img src="img/figure/student2.png" alt="student"></td> -->
<?php 
$query = "select * from admin";
$select = mysqli_query($con, $query);

 //    echo $row['id'] . " " . $row['fname'] . " " .$row['lname']." ". $row['email']." ".$row['pass']." ".$row['pnum']." ".$row['dob']." ".$row['maritalStatus']." ".$row['gender'] . " <br>";
 // }
?>



              <?php

while ($row = mysqli_fetch_assoc($select)) {
?>

  <tr>
    <td><?php echo $row['id'] ?></td>
    <td><?php echo $row['fname'] ?></td>
    <td><?php echo $row['email'] ?></td>
    <td><?php echo $row['pass'] ?></td>
    <td><?php echo $row['gender'] ?></td>
      <td>
                <div class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <span class="flaticon-more-button-of-three-dots"></span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="delete.php?id=<?php echo $row['id'];  ?>"><i class="fas fa-trash text-red-red"></i>Delete</a>
                    <a class="dropdown-item" href="#"><i class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                    <a class="dropdown-item" href="#"><i class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                    <a class="dropdown-item" href="aupdate.php?id=<?php echo $row['id'];  ?>"><i class="fas fa-redo-alt text-orange-peel"></i>update</a>

                </div>
              </td>

   
<?php
}

?>
          
            </tr>
            
              
          </tbody>
        </table>
      </div>
        <!-- Account Settings Area
         <?php require_once 'includes/footer.php'; ?>
