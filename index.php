 <?php

include("navbar.php");
 $tittle = "Home";

?>



<!-- nav end -->


  <!-- background img -->
  <div style="background-image: url(img/yeray-sanchez-689835-unsplash.jpg);background-size:100% 100%;background-repeat: no-repeat; height: 700px;">
    <h1 class="text-uppercase text-center display-1 pt-3 text-white">Travel with us</h1>
  </div>

<!-- background img end -->

<!-- card img-->

<h1>helo</h1>
<div class="container-fluid">

  <div class="row">

    <div class="col-12">

      <div class="card-group ">
    <div class="card col border-0 ">
      <div class="card-body ">
        <img class="card-img-top  " src="img/img_1.jpg" alt="">
      </div>
    </div>

    <div class="card col border-0">
      <div class="card-body">
        <img class="card-img-top" src="img/img_3.jpg" alt="">
         
      </div>
    </div>

    <div class="card col border-0">
      <div class="card-body">
      <img class="card-img-top" src="img/img_2.jpg" alt="">
    
  
        </div>
      </div>
    </div>
    </div>
  </div>
  <!-- card img end -->

  <!-- card icon -->
   <div class="row ">
    <div class="col">
            <div class="card-group">
              <div class="card col border-0">
                <div class="card-body col">
                    <i class="fas fa-plane text-danger" style="font-size: 70px;"><p style="font-size: 30px;">Air Ticketing</p></i>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima accusamus, ad asperiores veritatis sed ipsam laudantium magnam aut ducimus modi beatae cumque esse blanditiis placeat tenetur, recusandae nam, ex. Incidunt!</p>
                  </div>
              </div>

       <div class="card col border-0">
          <div class="card-body">
              <i class="fas fa-ship text-danger" style="font-size: 70px;"><p style="font-size: 30px;">Cruises</p></i>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum voluptas deserunt enim sed, pariatur, aspernatur sequi dolores. Labore sit minus earum, incidunt iste vel a consectetur culpa nobis neque aliquid.</p>
                </div>
              </div>

      <div class="card col border-0">
          <div class="card-body">
            <i class="fas fa-map-marker-alt text-danger" style="font-size: 70px;"><p style="font-size: 30px;">Tour Packages</p></i>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga enim ex aspernatur cupiditate, vel quidem explicabo vero eveniet nesciunt neque! Ducimus minus temporibus sequi expedita rem, cupiditate, voluptatibus esse facere.</p>
                </div>
              </div>
          </div>

    </div>
  </div>
  <!-- card icon end -->

<!-- tour cards -->


<div class="container-fluid bg-light">
  <p class="pl-3 pt-3">Special Offers</p>
    <h4 class="pl-4"><b>Top</b> Tour Packages</h4>
  <?php 
$query = "select * from tourmenu limit 3 ";
$select = mysqli_query($con, $query);

 //    echo $row['id'] . " " . $row['fname'] . " " .$row['lname']." ". $row['email']." ".$row['pass']." ".$row['pnum']." ".$row['dob']." ".$row['maritalStatus']." ".$row['gender'] . " <br>";
 // }
?>
  <div class="row ">

           <?php

while ($row = mysqli_fetch_assoc($select)) {
?>
    <div class=" col-sm-12 col-lg-4">

      <div class="card border-0 pt-3" style="width:95%;">
 
        <div class="card-img card-img-top"><img src="uplode/<?php echo $row['pic'] ?>" style="width: 100%; height: 240px;" alt=""></div>
        <div class="card-body">
     <h6 class="d-flex justify-content-between"><?php echo $row['name'] ?> <p class="text-primary font-weight-bold"><?php echo $row['price'] ?></p></h6>
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
          <div class="card-footer text-sm-center"><a href="login.php?id=<?php echo $row['id'];  ?>" role="button" class="form-control btn btn-success" style="width: 70%;">Book Now</a></div>
      </div>
    </div>
<?php
}

?>

  </div>
</div>

<!-- tour cards end -->

<!-- bg img -->

<div class="row mt-5">
  <div class="col">
    <div style="background-image: url(img/hero_bg_1.jpg);background-size:100% 100%;background-repeat: no-repeat; height: 700px;">
          <h1 class="text-uppercase pl-5 display-3" style="padding-top: 80px;">never stop  exploring</h1>
    <p class="font-weight-bold pl-5 font- ">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique totam, velit eius nemo, atque incidunt,</p>
    </div>
  </div>
</div>

<!-- bg img -->

<!-- Discount -->


<div class="container-fluid">
  <p class="pl-3 pt-3">Special Offers</p>
    <h4 class="pl-4"><b>Top</b> Discount Packages</h4>
  <?php 
$query = "select * from discountmenu limit 3 ";
$select = mysqli_query($con, $query);

 //    echo $row['id'] . " " . $row['fname'] . " " .$row['lname']." ". $row['email']." ".$row['pass']." ".$row['pnum']." ".$row['dob']." ".$row['maritalStatus']." ".$row['gender'] . " <br>";
 // }
?>
  <div class="row ">

           <?php

while ($row = mysqli_fetch_assoc($select)) {
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
          <div class="card-footer text-sm-center"><a href="login.php?id=<?php echo $row['id'];?> &dis=true" role="button" class="form-control btn btn-success" style="width: 70%;">Book Now</a></div>
      </div>
    </div>
<?php
}

?>

  </div>
</div>

  


<!-- Discount card end -->


<!-- Hotels & Rooms -->


<div class="container-fluid mt-3 bg-light">
  <p class="pl-3 pt-3">Special Offers</p>
    <h4 class="pl-4"><b>Top</b> Hotel Packages</h4>
  <?php 
$query = "select * from hotelmenu limit 3 ";
$select = mysqli_query($con, $query);

 //    echo $row['id'] . " " . $row['fname'] . " " .$row['lname']." ". $row['email']." ".$row['pass']." ".$row['pnum']." ".$row['dob']." ".$row['maritalStatus']." ".$row['gender'] . " <br>";
 // }
?>
  <div class="row">

           <?php

while ($row = mysqli_fetch_assoc($select)) {
?>
    <div class=" col-sm-12 col-lg-4">

      <div class="card border-0 pt-3" style="width:95%;">
 
        <div class="card-img card-img-top"><img src="uplode/<?php echo $row['pic'] ?>" style="width: 100%; height: 240px;" alt=""></div>
        <div class="card-body">
     <h6 class="d-flex justify-content-between"><?php echo $row['name'] ?> <p class="text-primary font-weight-bold"><?php echo $row['price'] ?></p></h6>
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
          <div class="card-footer text-sm-center"><a href="login.php?id=<?php echo $row['id'];  ?>&hotel=true" role="button" class="form-control btn btn-success" style="width: 70%;">Book Now</a></div>
      </div>
    </div>
<?php
}

?>

  </div>
</div>

<!-- Hotels & Rooms End -->

  <!-- Blog -->


    <div class="row pt-5 bg-light mt-5">
      <div class="col">
              <p class="pl-3">Recent Blog</p>
    <h4 class="pl-4"><b>Tips</b>   & Articles</h4> 

        <div class="card-group">

               <div class="card col border-0">

        <div class="card-img card-img-top"> <img class="w-100" src="img/image_1.jpg" alt="" style="height: 240px;"></div>

         <div class="card-body">
          
           <p class="d-flex justify-content-between"> Tips & Articles</p>
              
              <p><b>8 Best homestay in Philippines that you don't miss out</b></p>
              <p>August 12, 2018 Admin  3</p>
               
            </div>
      </div>


      <!-- 2nd card -->


           <div class="card col border-0">

        <div class="card-img card-img-top"> <img class="w-100" src="img/image_2.jpg" alt="" style="height: 240px;"></div>

         <div class="card-body">
          
           <p class="d-flex justify-content-between">Culture</p>
              
                <p><b>Even the all-powerful Pointing has no control about the blind texts</b></p>
                <p>August 12, 2018 Admin  3</p>
            </div>

      </div>


      <!-- 3rd card -->


           <div class="card col border-0">

        <div class="card-img card-img-top"> <img class="w-100" src="img/image_3.jpg" alt="" style="height: 240px;"></div>

         <div class="card-body">
          
              <p class="d-flex justify-content-between">Tips, Travel</p>
              
                <p><b>Even the all-powerful Pointing has no control about the blind texts</b></p>
                <p>August 12, 2018 Admin  3</p>
            </div>
      </div>

      <!-- 4th card -->


           <div class="card col border-0">

        <div class="card-img card-img-top"> <img class="w-100" src="img/image_4.jpg" alt="" style="height: 240px;"></div>

         <div class="card-body">
          
          <p class="d-flex justify-content-between">Tips, Travel</p>
              
                <p><b>Even the all-powerful Pointing has no control about the blind texts</b></p>
                <p>August 12, 2018 Admin  3</p>
            </div>
      </div>
      
    </div>
      </div>
    </div>


    <!-- bolg end -->


    <!-- Subscribe -->

    <div class="row align-items-center justify-content-center"  style="height: 400px; background-color: #57D9B7;">
      <div class="col-sm-12">
        <h1 class="text-center">Subcribe to our Newsletter</h1>
        <p class="text-center">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
          <form>
        <div class="form-group col-sm-12" >
            <div class="input-group-append justify-content-center">
              <input type="email" placeholder="Enter email addres" pattern="\w{,30}\W" required="">
         <a href="" role="button" class=" btn btn-success">Subcribe</a>
              </div>
            </div>
          </form>
      </div>
    </div>


    <!-- subcribe end -->
</div>


<?php

include("fotter.php");

?>
