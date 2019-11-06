<?php require_once 'includes/header.php'; ?>

<!-- Sidebar Area End Here -->
<div class="dashboard-content-one">
  <!-- Breadcubs Area Start Here -->
  <div class="breadcrumbs-area">
    <h3>Hotel Bookings</h3>
    <ul>
      <li>
        <a href="index.php">Home</a>
      </li>
      <li>Hotel Booking</li>
    </ul>
  </div>
  <!-- Breadcubs Area End Here -->
  <!-- Teacher Table Area Start Here -->
  <div class="card height-auto">
    <div class="card-body">
      <div class="heading-layout1">
        <div class="item-title">
          <h3>Hotel Booking  Data</h3>
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
              <th>Full Name</th>
              <th>Father Name</th>
              <th>Phone</th>
              <th>Catagory</th>
              <th>Room Type</th>
              <th>Number of Bed</th>
              
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
$query = "select * from hotelb";
$select = mysqli_query($con, $query);

 //    echo $row['id'] . " " . $row['fname'] . " " .$row['lname']." ". $row['email']." ".$row['pass']." ".$row['pnum']." ".$row['dob']." ".$row['maritalStatus']." ".$row['gender'] . " <br>";
 // }
?>



<?php

while ($row = mysqli_fetch_assoc($select)) {
?>

  <tr>
    <td><?php echo $row['id'] ?></td>
    <td><?php echo $row['fullname'] ?></td>
    <td><?php echo $row['fathername'] ?></td>
    <td><?php echo $row['phone'] ?></td>
    <td><?php echo $row['catagory'] ?></td>
    <td><?php echo $row['room'] ?></td>
    <td><?php echo $row['bed'] ?></td>
       <td>
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
