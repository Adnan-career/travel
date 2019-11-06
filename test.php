<?php include "connection.php"   ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
			  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>
<body>
	
<!-- 

<?php


$city=array("Greece","Rome","Japan","Dubai");
$rs=array("<del>$200</del>--$150","<del>$200</del>--$150","<del>$200</del>--$150","<del>$200</del>--$150");
$star=array("  <i class='far fa-star text-danger'></i>","<i class='far fa-star text-danger'></i>","<i class='far fa-star text-danger'></i>","<i class='far fa-star text-danger'></i>");
$text=array("Far far away, behind the word mountains, far from the countries<br><br>2 days 3 nights","Far far away, behind the word mountains, far from the countries<br><br>2 days 3 nights","Far far away, behind the word mountains, far from the countries<br><br>2 days 3 nights","Far far away, behind the word mountains, far from the countries<br><br>2 days 3 nights");

$a = count($city);


for ($i=0; $i <$a ; $i++) { 
	?>

<div class="card mt-3 border-0 col-sm-12 col-lg-3" style="float:left;">
	<div class="card-img"> <img class=" card-img-top" src="<?php echo 'img/citys'.$i.'.jpg'; ?>" alt=""></div>
	<div class="card-body"><h6 class="d-flex justify-content-between"><?php echo $city[$i]; ?><p class="text-primary font-weight-bold"><?php echo $rs[$i]; ?></p></h6>
	<p><?php  echo $star[$i].$star[$i].$star[$i].$star[$i].$star[$i];  ?> <span>8 Rating</span></p>
	<p><?php  echo $text[$i]; ?></p>

	</div>

<div class="card-footer text-sm-center"><a href="datainput.php" role="button" class="form-control btn btn-success" style="width:70%;">Book Now</a></div>




</div>



<?php
}


?>
 -->

<!-- 
<div class="container-fluid">
  <?php 
$query = "select * from discountmenu";
$select = mysqli_query($con, $query);
$row = mysqli_fetch_assoc($select);
?>
  <div class="row bg-light">
       <?php

for ($i=0; $i<3; $i++) { 

?>
    
    <div class=" col-sm-12 col-lg-4">


      <div class="card border-0 pt-3" style="width:95%;">
 
        <div class="card-img card-img-top"><img src="uplode/<?php echo $row['pic'] ?>" style="width: 100%; height: 240px;" alt=""></div>
        <div class="card-body">
     <h6 class="d-flex justify-content-between"><?php echo $row['name'] ?> <p class="text-primary font-weight-bold"><del><?php echo $row['price'] ?></del>--<?php echo $row['discount'] ?></p></h6>
        <p>
                <i class="far fa-star text-danger"></i>
                <i class="far fa-star text-danger"></i>
                <i class="far fa-star text-danger"></i>
                <i class="far fa-star text-danger"></i>
                <i class="far fa-star text-danger"></i>
                <span>8 Rating</span>
                </p>
               <?php echo $row['dis']?>
        </div>
          <div class="card-footer text-sm-center"><a href="login.php" role="button" class="form-control btn btn-success" style="width: 70%;">Book Now</a></div>
      </div>
    </div>
<?php
}

?>
  </div>
</div>
 -->






<div class="container-fluid">
  <?php 
$query = "select * from hotelmenu LIMIT 4";
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
 
        <div class="card-img card-img-top"><img src="uplode/<?php echo $row['pic'] ?>" style="width: 100%; height: 240px;" alt=""></div>
        <div class="card-body">
     <h6 class="d-flex justify-content-between"><?php echo $row['name'] ?> <p class="text-primary font-weight-bold"><del><?php echo $row['price'] ?></del></p></h6>
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









































		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>