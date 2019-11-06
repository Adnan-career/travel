<?php require_once 'includes/header.php'; ?>
<!-- Sidebar Area End Here -->
<div class="dashboard-content-one">
  <!-- Breadcubs Area Start Here -->
  <div class="breadcrumbs-area">
    <h3>Admin Dashboard</h3>
    <ul>
      <li>
        <a href="index.php">Home</a>
      </li>
      <li>Bookings</li>
    </ul>
  </div>
  <div class="row bg-light">
    <div class="col-8-xxxl col-12">
   
      <div class="table-responsive">
        <table class="table display text-nowrap">
          <thead>
            <tr>
                <th>ID</th>
              <th>Fname</th>
              <th>Lname</th>
              <th>category</th>
              <th>duration</th>
               <th>Email</th>
              <th>country</th>
              <th>city</th>
              <th>Number</th>
              <th>date</th>
              <th>Current Status</th>
              <th>Upload Status</th>
              
              
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
$query = "select * from bookings";
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
    <td><?php echo $row['category'] ?></td>
    <td><?php echo $row['duration'] ?></td>
    <td><?php echo $row['email'] ?></td>
    <td><?php echo $row['country'] ?></td>
    <td><?php echo $row['city'] ?></td>
    <td><?php echo $row['num'] ?></td>
    <td><?php echo $row['date'] ?></td>
    <td><?php echo $row['status'] ?></td>
    <td> <a class="btn btn-success badge-pill" href="bstatus.php?id=<?= $row['id']; ?>&status=approved">Approved</a> 
  <a class="btn btn-danger badge-pill" href="bdelete.php?id=<?= $row['id']; ?>">Delete</a></td>
  </tr>

<?php
}

?>
          
            </tr>
            
              
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <!-- Breadcubs Area End Here -->


    <!-- Student Info Area Start Here -->
    
              <!-- Student Info Area End Here -->
              <div class="col-8-xxxl col-12">
                <div class="row mt-4">
                  <!-- Summery Area Start Here -->
                  <div class="col-lg-4">
                    <div class="dashboard-summery-one">
                      <div class="row">
                        <div class="col-6">
                          <div class="item-icon bg-light-magenta">
                            <i class="flaticon-shopping-list text-magenta"></i>
                          </div>
                        </div>

                        <div class="col-6">
                          <div class="item-content">
                            <div class="item-title">Notification</div>
                            <div class="item-number"><span class="counter" data-num="12">12</span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="dashboard-summery-one">
                      <div class="row">
                        <div class="col-6">
                          <div class="item-icon bg-light-blue">
                            <i class="flaticon-calendar text-blue"></i>
                          </div>
                        </div>
                        <div class="col-6">
                          <div class="item-content">
                            <div class="item-title">Events</div>
                            <div class="item-number"><span class="counter" data-num="06">06</span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="dashboard-summery-one">
                      <div class="row">
                        <div class="col-6">
                          <div class="item-icon bg-light-yellow">
                            <i class="flaticon-percentage-discount text-orange"></i>
                          </div>
                        </div>
                        <div class="col-6">
                          <div class="item-content">
                            <div class="item-title">Bookings</div>
                            <div class="item-number"><span class="counter" data-num="94">94</span><span>%</span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div> </div>
                                                      <div class="row">
                                                        <div class="col-4-xxxl col-xl-6 col-12">
                                                          <div class="card dashboard-card-three">
                                                            <div class="card-body">
                                                              <div class="heading-layout1">
                                                                <div class="item-title">
                                                                  <h3>Bookings</h3>
                                                                </div>
                                                                <div class="dropdown">
                                                                  <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                                                  aria-expanded="false">...</a>

                                                                  <div class="dropdown-menu dropdown-menu-right">
                                                                    <a class="dropdown-item" href="#"><i
                                                                      class="fas fa-times text-orange-red"></i>Close</a>
                                                                      <a class="dropdown-item" href="#"><i
                                                                        class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                                                        <a class="dropdown-item" href="#"><i
                                                                          class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                                                        </div>
                                                                      </div>
                                                                    </div>
                                                                    <div class="doughnut-chart-wrap">
                                                                      <canvas id="student-doughnut-chart" width="100" height="270"></canvas>
                                                                    </div>
                                                                    <div class="student-report">
                                                                      <div class="student-count pseudo-bg-blue">
                                                                        <h4 class="item-title">Padding</h4>
                                                                        <div class="item-number">28.2%</div>
                                                                      </div>
                                                                      <div class="student-count pseudo-bg-yellow">
                                                                        <h4 class="item-title">Bookings</h4>
                                                                        <div class="item-number">65.8%</div>
                                                                      </div>
                                                                    </div>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                              <div class="col-4-xxxl col-xl-6 col-12">
                                                                <div class="card dashboard-card-thirteen">
                                                                  <div class="card-body">
                                                                    <div class="heading-layout1">
                                                                      <div class="item-title">
                                                                        <h3>Event Calender</h3>
                                                                      </div>
                                                                      <div class="dropdown">
                                                                        <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                                                        aria-expanded="false">...</a>

                                                                        <div class="dropdown-menu dropdown-menu-right">
                                                                          <a class="dropdown-item" href="#"><i
                                                                            class="fas fa-times text-orange-red"></i>Close</a>
                                                                            <a class="dropdown-item" href="#"><i
                                                                              class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                                                              <a class="dropdown-item" href="#"><i
                                                                                class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                                                              </div>
                                                                            </div>
                                                                          </div>
                                                                          <div class="calender-wrap">
                                                                            <div id="fc-calender" class="fc-calender"></div>
                                                                          </div>
                                                                        </div>
                                                                      </div>
                                                                    </div>
                                                                    <div class="col-4-xxxl col-12">
                                                                      <div class="card dashboard-card-six">
                                                                        <div class="card-body">
                                                                          <div class="heading-layout1 mg-b-17">
                                                                            <div class="item-title">
                                                                              <h3>Notifications</h3>
                                                                            </div>
                                                                            <div class="dropdown">
                                                                              <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                                                              aria-expanded="false">...</a>

                                                                              <div class="dropdown-menu dropdown-menu-right">
                                                                                <a class="dropdown-item" href="#"><i
                                                                                  class="fas fa-times text-orange-red"></i>Close</a>
                                                                                  <a class="dropdown-item" href="#"><i
                                                                                    class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                                                                    <a class="dropdown-item" href="#"><i
                                                                                      class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                                                                    </div>
                                                                                  </div>
                                                                                </div>
                                                                                <div class="notice-box-wrap">
                                                                                  <div class="notice-list">
                                                                                    <div class="post-date bg-skyblue">16 June, 2019</div>
                                                                                    <h6 class="notice-title"><a href="#">Great web site to go on vacation.
                                                                                      </a></h6>
                                                                                      <div class="entry-meta"> Jennyfar Lopez / <span>5 min ago</span></div>
                                                                                    </div>
                                                                                    <div class="notice-list">
                                                                                      <div class="post-date bg-yellow">16 June, 2019</div>
                                                                                      <h6 class="notice-title"><a href="#">Great web</a></h6>
                                                                                      <div class="entry-meta"> Jennyfar Lopez / <span>5 min ago</span></div>
                                                                                    </div>
                                                                                    <div class="notice-list">
                                                                                      <div class="post-date bg-pink">16 June, 2019</div>
                                                                                      <h6 class="notice-title"><a href="#">I like it</a></h6>
                                                                                        <div class="entry-meta"> Jennyfar Lopez / <span>5 min ago</span></div>
                                                                                      </div>
                                                                                      <div class="notice-list">
                                                                                        <div class="post-date bg-skyblue">16 June, 2019</div>
                                                                                        <h6 class="notice-title"><a href="#">Great web manag mene esom text of the
                                                                                          printing.</a></h6>
                                                                                          <div class="entry-meta"> Jennyfar Lopez / <span>5 min ago</span></div>
                                                                                        </div>
                                                                                        <div class="notice-list">
                                                                                          <div class="post-date bg-yellow">16 June, 2019</div>
                                                                                          <h6 class="notice-title"><a href="#">Great web manag printing.</a></h6>
                                                                                          <div class="entry-meta"> Jennyfar Lopez / <span>5 min ago</span></div>
                                                                                        </div>
                                                                                        <div class="notice-list">
                                                                                          <div class="post-date bg-pink">16 June, 2019</div>
                                                                                          <h6 class="notice-title"><a href="#">Great web manag meneesom.</a></h6>
                                                                                          <div class="entry-meta"> Jennyfar Lopez / <span>5 min ago</span></div>
                                                                                        </div>
                                                                                      </div>
                                                                                    </div>
                                                                                  </div>
                                                                                </div>
                                                                              </div>
                                                                              <!-- Footer Area Start Here -->
                                                                              <?php require_once 'includes/footer.php'; ?>
