<?php require_once  "includes/db.inc.php";
if (!empty($_SESSION['aid'])) {
    header("location:index.php");
}

?>



<!doctype html>
<html class="no-js " lang="en">

<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

    <title>Admin</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!-- Custom Css -->
    <link rel="stylesheet" href="csss/bootstrap.min.css">
    <link rel="stylesheet" href="csss/main.css">
    <link rel="stylesheet" href="csss/authentication.css">
    <link rel="stylesheet" href="csss/color_skins.css">
</head>

<body class="theme-blush authentication sidebar-collapse">
<!-- Navbar -->
<nav class="navbar navbar-expand-lg fixed-top navbar-transparent">
    <div class="container">
        <div class="navbar-translate n_logo">
            <a class="navbar-brand"  title="" target="_blank">Travelers</a>
            <button class="navbar-toggler" type="button">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
            </button>
        </div>


    </div>
</nav>

<!-- End Navbar -->
<div class="page-header">
    <div class="page-header-image" style="background-image:url(img/login.jpg)"></div>
    <div class="container">
        
<?php
 
 if (isset($_POST['submit'])) {
  $email = $_POST['email'];
  $pass = $_POST['pass'];

$query = "select * from admin where email = '$email' and pass ='$pass' ";
$select = mysqli_query($con, $query);
 $row = mysqli_fetch_assoc($select);

if ($email == $row['email'] and $pass == $row['pass']) {
  
  $_SESSION['aid']=$row['id'];
  $_SESSION['fname']=$row['fname'];
    
  header("location:index.php");
}

else{
  echo "<h3 style='color: white;text-align:center;padding: 50px;background-color: red;'> username or password didnt match  </h3>";
}

}

?>
        <div class="col-md-12 content-center">
            <div class="card-plain">
                <form class="form" method="POST" >
                    <div class="header">
                        <div class="logo-container">
                            <img src="img/logo.svg" alt="">
                        </div>
                        <h5>Log in</h5>
                    </div>
                    <div class="content">
                        <div class="input-group">
                            <input type="email" class="form-control" name="email" placeholder="Enter User Email">
                            <span class="input-group-addon">
                                <i class="zmdi zmdi-account-circle"></i>
                            </span>
                        </div>
                        <div class="input-group">
                            <input type="password" name="pass" placeholder="Password" class="form-control" />
                            <span class="input-group-addon">
                                <i class="zmdi zmdi-lock"></i>
                            </span>
                        </div>
                    </div>
                    <div class="col-xs-4">
                      <button type="submit" class="btn btn-primary btn-round btn-lg btn-block" name="submit">Sign In</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>







<script src="assets/bundles/libscripts.bundle.js"></script>
<script src="assets/bundles/vendorscripts.bundle.js"></script>


</body>



</html>
