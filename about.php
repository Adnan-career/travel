
	
 <?php
 
 $tittle = "About Us";

include("navbar.php");

?>



<!-- nav end -->


<!-- background img -->

<div class="container-fluid">
	 <div class="row align-items-center justify-content-center"  style="height: 600px; background-image: url(img/jordan-gellie-33556-unsplash.jpg); background-size: 100% 100%;">
      <div class="col-sm-12 col-lg-12">
        <h1 class="text-center display-1 text-warning">About Us</h1>
          
      </div>
    </div>
<!-- backgrounf img -->


 <!-- contact -->

<div class="row">
	<div class="col-sm-12 col-lg-6" style="background-image: url(img/about.jpg);background-size:100% 100%; height: 500px;background-repeat: no-repeat;">
		
	</div>
	
<div class="col-sm-12 col-lg-6 p-5 ">
	
	<div class="accordion" id="first">
		<div class="card">
			<h2>
				<button class=" btn btn-success " type="button" data-toggle="collapse" data-target="#asd" aria-expanded="true" aria-controls="asd">
					What we do
				</button>
			</h2>

				<div id="asd" class="collapse show" data-parent="#first">
			<div class="card-body">
				<h2>Offering Reliable Hosting</h2>
				<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.

Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate, quibusdam sunt iste dolores conseq</p>
				
			</div>
			
			</div>
		</div>

	
		
		<div class="card">
			<h2>
				<button class=" btn btn-success collapsed " type="button" data-toggle="collapse" data-target="#second" aria-expanded="false" aria-controls="second">
					Our mission

				</button>
			</h2>
			<div id="second" class="collapse" data-parent="#first">
			<div class="card-body">
				<h2>Exceptional Web Solutions</h2>
				<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.

Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate, quibusdam sunt iste dolores conseq</p>
				
			</div>
			
			</div>
		</div>

		<div class="card">
			<h2>
				<button class=" btn btn-success collapsed " type="button" data-toggle="collapse" data-target="#third" aria-expanded="false" aria-controls="third">
					Our mission
				</button>
			</h2>
			<div id="third" class="collapse" data-parent="#first">
			<div class="card-body">
				<h2>Help Our Customer</h2>
				<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.

Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate, quibusdam sunt iste dolores conseq</p>
				
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


</div>



<?php

include("fotter.php");

?>