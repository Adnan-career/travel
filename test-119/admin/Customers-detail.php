<?php require_once 'includes/header.php'; ?>

<!-- Sidebar Area End Here -->
<div class="dashboard-content-one">
  <!-- Breadcubs Area Start Here -->
  <div class="breadcrumbs-area">
    <h3>Customers detail</h3>
    <ul>
      <li>
        <a href="index.php">Home</a>
      </li>
      <li>Customers detail</li>
    </ul>
  </div>
  <!-- Breadcubs Area End Here -->
  <!-- Teacher Table Area Start Here -->
  <div class="card height-auto">
    <div class="card-body">
      <div class="heading-layout1">
        <div class="item-title">
          <h3>All Customers Data</h3>
        </div>
       
      </div>
      <form class="mg-b-20">
        <div class="row gutters-8">
          <div class="col-3-xxxl col-xl-3 col-lg-3 col-12 form-group">
            <input type="text" placeholder="Search by ID ..." class="form-control">
          </div>
          <div class="col-4-xxxl col-xl-4 col-lg-3 col-12 form-group">
            <input type="text" placeholder="Search by Name ..." class="form-control">
          </div>
          <div class="col-4-xxxl col-xl-3 col-lg-3 col-12 form-group">
            <input type="text" placeholder="Search by Phone ..." class="form-control">
          </div>
          <div class="col-1-xxxl col-xl-2 col-lg-3 col-12 form-group">
            <button type="submit" class="fw-btn-fill btn-gradient-yellow">SEARCH</button>
          </div>
        </div>
      </form>
      <div class="table-responsive">
        <table class="table display data-table text-nowrap">
          <thead>
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
$query = "select * from user";
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
    <td><?php echo $row['lname'] ?></td>
    <td><?php echo $row['email'] ?></td>
    <td><?php echo $row['pass'] ?></td>
    <td><?php echo $row['pnum'] ?></td>
    <td><?php echo $row['dob'] ?></td>
    <td><?php echo $row['maritalStatus'] ?></td>
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
                    <a class="dropdown-item" href="cus-update.php?id=<?php echo $row['id'];  ?>"><i class="fas fa-redo-alt text-orange-peel"></i>update</a>

                </div>
              </td>

   
<?php
}

?>
          
            </tr>
            
              
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <!-- Teacher Table Area End Here -->
  <?php require_once 'includes/footer.php'; ?>
