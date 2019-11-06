
<?php

include "connection.php";

if(!isset($tittle)){
  $tittle = "Home";
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $tittle; ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>
<body>
	



 <div class="container-fluid">
      <div class="row  bg-light">
        <div class="col-12">
          <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="index.php">Travelers</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#adn" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="adn">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active "><a href="index" class="nav-link">Home</a></li>
            <li class="nav-item active"><a href="about" class="nav-link">About</a></li>
            <li class="nav-item active"><a href="tour" class="nav-link">Tour</a></li>
            <li class="nav-item active"><a href="discount" class="nav-link">Discount</a></li>
            <li class="nav-item active"><a href="hotel" class="nav-link">Hotels</a></li>
            <li class="nav-item active"><a href="blog" class="nav-link">Blog</a></li>
            <li class="nav-item active"><a href="contactus" class="nav-link">Contact</a></li>

        <?php 

if (empty($_SESSION['id'])) {
 echo '        <li class="nav-item "><a href="login.php"class="nav-link">Log In</a></li>
        <li class="nav-item"><a href="signup.php" class="nav-link">Sign Up</a></li>';
}

         ?>

     


        <?php 

if (!empty($_SESSION['id'])) {
 echo '<li class="nav-item active"><a href="hotelb.php"class="nav-link" >Book Hotel</a></li>
      <li class="nav-item active"><a href="tickets.php"class="nav-link" >Tickets</a></li>
      <li class="nav-item"><a href="logout.php"class="nav-link" title="Logout">log/out</a></li>';
}

         ?>

            <li class="nav-item">
          <a href="https://web.facebook.com/?stype=lo&jlou=Afehl28Wgu1irLKCHRX7zRfR3pa9Miypy4GpDydZWCiNihGAUyOI2RPGTJ2IOxyu350ebajUYnFnLOwfUNKDos40ZRi_zKftXSVkM5_0AVQ03w&smuh=16837&lh=Ac8q-TFKNLvs9nDm" target="empty"><i class="fab fa-facebook-f nav-link" title="Facebook"></i></a>
        </li>
          <li class="nav-item">
          <a href="https://www.instagram.com/" target="empty"><i class="fab fa-instagram nav-link" title="Instagram"></i></a>
        </li>
        <li class="nav-item">
          <a href="https://twitter.com/login" target="empty"><i class="fab fa-twitter nav-link" title="Twitter"></i></a>
        </li>
      
          </ul>
        </div>
     
    </nav>
        </div>
        
      </div>
    </div>


<!-- nav end -->


	