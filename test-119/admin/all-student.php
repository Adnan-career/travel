<?php require_once 'includes/header.php'; ?>
<?php

$sql = "SELECT * from students";
$query = $conn->query($sql);
$students = $query->fetchAll();
// print_r($students);
?>
<!-- Sidebar Area End Here -->
<div class="dashboard-content-one">
  <!-- Breadcubs Area Start Here -->
  <div class="breadcrumbs-area">
    <h3>Students</h3>
    <ul>
      <li>
        <a href="index.php">Home</a>
      </li>
      <li>All Students</li>
    </ul>
  </div>
  <!-- Breadcubs Area End Here -->
  <!-- Student Table Area Start Here -->
  <div class="card height-auto">
    <div class="card-body">
      <div class="heading-layout1">
        <div class="item-title">
          <h3>All Students Data</h3>
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
            <form class="mg-b-20">
              <div class="row gutters-8">
                <div class="col-3-xxxl col-xl-3 col-lg-3 col-12 form-group">
                  <input type="text" placeholder="Search by Roll ..." class="form-control">
                </div>
                <div class="col-4-xxxl col-xl-4 col-lg-3 col-12 form-group">
                  <input type="text" placeholder="Search by Name ..." class="form-control">
                </div>
                <div class="col-4-xxxl col-xl-3 col-lg-3 col-12 form-group">
                  <input type="text" placeholder="Search by Class ..." class="form-control">
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
                    <th>
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input checkAll">
                        <label class="form-check-label">Roll</label>
                      </div>
                    </th>
                    <th>Photo</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Father Name </th>
                    <th>Mother Name</th>
                    <th>Gender</th>
                    <th>Date oF Birth</th>
                    <th>Blood Group</th>
                    <th>Religion</th>
                    <th>E-mail</th>
                    <th>Class</th>
                    <th>Section</th>
                    <th>Admissionid</th>
                    <th>Phone</th>
                    <th></th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($students as $student); ?>
                  <tr>
                    <td>
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input">
                        <label class="form-check-label"><?= $student['roll']?></label>
                      </div>
                    </td>
                    <td class="text-center"><img src="img/figure/student5.png" alt="student"></td>
                    <td><?= $student['firstname']?> </td>
                    <td><?= $student['lastname']?> </td>
                    <td><?= $student['fathername']?> </td>
                    <td><?= $student['mothername']?> </td>
                    <td><?= $student['gender']?>  </td>
                    <td><?= $student['dateofbirth']?>  </td>
                    <td><?= $student['bloodgroup']?></td>
                    <td><?= $student['religion']?>  </td>
                    <td><?= $student['email']?> </td>
                    <td><?= $student['class']?> </td>
                    <td><?= $student['section']?> </td>
                    <td><?= $student['admissionid']?> </td>
                    <td><?= $student['phone']?> </td>
                    <td></td>

                    <td>
                      <div class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                        aria-expanded="false">
                        <span class="flaticon-more-button-of-three-dots"></span>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#"><i
                          class="fas fa-times text-orange-red"></i>Close</a>
                          <a class="dropdown-item" href="#"><i
                            class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                            <a class="dropdown-item" href="#"><i
                              class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                            </div>
                          </div>
                        </td>
                      </tr>
                    <?php endforeach; ?>

                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <?php require_once 'includes/footer.php'; ?>
