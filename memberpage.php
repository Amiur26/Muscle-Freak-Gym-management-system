

<?php 

session_start();
if (!isset($_SESSION["email"]) || !isset($_SESSION["usertype"]) || $_SESSION["usertype"] !== "user"){
    header("Location: login.php");
    exit();
}

?>




<!DOCTYPE html>
<html>
	<head>
		<title></title><meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		</style>
		<link rel="stylesheet"
			href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
		</head>
		<body>
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
				<a class="navbar-brand" href="memberpage.php">Muscle Freak</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse"
				data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
				aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active">
							<a class="nav-link" href="memberpage.php">Home <span class="sr-only">(current)</span></a>
						</li>
					
						<li class="nav-item">
							<a class="nav-link" href="postreview.php">Reviews</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="profile.php">Profile</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="logout.php">Logout</a>
						</li>
						
					</ul>
					
				</div>
			</nav>
			<div id="demo" class="carousel slide" data-ride="carousel">
				<ul class="carousel-indicators">
					<li data-target="#demo" data-slide-to="0" class="active"></li>
					<li data-target="#demo" data-slide-to="1"></li>
					<li data-target="#demo" data-slide-to="2"></li>
				</ul>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img src="img/p4.jpg" alt="Los Angeles" width="1100" height="500">
						<div class="carousel-caption">
							<h3>Passion</h3>
							<p>This is where the journey to greatness begins!</p>
						</div>
					</div>
					<div class="carousel-item">
						<img src="img/p2.jpg" alt="Chicago" width="1100" height="500">
						<div class="carousel-caption">
							<h3>Hard work</h3>
							<p>We have everything you need</p>
						</div>
					</div>
					<div class="carousel-item">
						<img src="img/p3.jpg"alt="New York" width="1100" height="500">
						<div class="carousel-caption">
							<h3>Consistency</h3>
							<p>Are you ready to start your journey?</p>
						</div>
					</div>
				</div>
				<a class="carousel-control-prev" href="#demo" data-slide="prev">
					<span class="carousel-control-prev-icon"></span>
				</a>
				<a class="carousel-control-next" href="#demo" data-slide="next">
					<span class="carousel-control-next-icon"></span>
				</a>
			</div>
			<section class="my-5">
				<div class="py-5">
					<h3 class="text-center">About Us</h3>
				</div>
				<div>
					<div class="row">
						<div class="col-lg-6 col-md-6 col-12">
							<img src="img/p5.jpg" class="img-fluid aboutimg">
						</div>
						<div class="col-lg-6 col-md-6 col-12">
							
							<p class="py-0" class="about-body" style="font-size:20px;">Welcome to Muscle Freak, where your fitness journey begins and your dreams become a reality. Our commitment to your well-being extends beyond the physical. We believe in empowering you to lead a healthier, happier life through a holistic approach to fitness. 

							At Muscle Freak, we offer a range of membership options designed to suit your needs and goals. Whether you're looking to kickstart your fitness routine or embark on a transformative journey, we have the perfect membership for you.
							Muscle Freak is more than just a place to work out; it's a community of like-minded individuals who are dedicated to personal growth and wellness. Our vision is to provide a welcoming and motivating environment where everyone, regardless of their fitness level, can thrive.
	          </p>
							
						</div>
					</div>
				</div>
			</section>
			<section class="my-5">
				<div class="py-5">
					<h3 class="text-center">Our Membership Plans</h3>
				</div>
				<div class="container-fluid">
					<div class="row">
						<div class=" col-lg-4 col-md-4 col-12 ">
							<div class="card">
								<img class="card-img-top" src="img/3.png" alt="Card image">
								<div class="card-body">
									<h4 class="card-title">3 month membership</h4>
									
									<p class="card-text"><strong>A start to the change</strong></p>
									
									<p>With our 6-month membership priced at 8000 BDT, you'll have the opportunity to make substantial progress towards your fitness goals. Alongside access to our gym and relaxation amenities, our physiotherapists are available to assist you during morning hours. Achieve your fitness aspirations while enjoying the guidance of our experienced trainers.
									</p>
									<br><br>

								</div>
							</div>
						</div>
						
						<div class=" col-lg-4 col-md-4 col-12 ">
							<div class="card">
								<img class="card-img-top" src="img/6.png" alt="Card image">
								<div class="card-body">
									<h4 class="card-title">6 month membership</h4>
									
									<p class="card-text"><strong>Get ready to see the change</strong></p>
									
											<p>With our 6-month membership priced at 8000 BDT, you'll have the opportunity to make substantial progress towards your fitness goals. Alongside access to our gym and relaxation amenities, our physiotherapists are available to assist you during morning hours. Achieve your fitness aspirations while enjoying the guidance of our experienced trainers.
									</p>
									<br>
									<br>

								</div>
							</div>
						</div>
						<div class=" col-lg-4 col-md-4 col-12 ">
							<div class="card">
								<img class="card-img-top" src="img/12.png" alt="Card image">
								<div class="card-body">
									<h4 class="card-title">12 month membership</h4>
									
									<p class="card-text"><strong>Best way to build your dream body</strong></p>
									
									<p>For those committed to a long-term fitness transformation, our 12-month membership at 15000 BDT offers you the best value. Access our gym, sauna, and steam facilities, and benefit from the expertise of our physiotherapists. Choose from a variety of trainers to personalize your fitness journey. With flexible hours, we ensure that you can prioritize your fitness at any time of day.
									</p>
									<br>


								</div>
							</div>
						</div>
						
					</div>
				</section>
				<section class="my-5">
					<div class="py-5">
						<h3 class="text-center">Gallery</h3>
					</div>
					<div class="container-fluid">
						<div class="row">
							<div class="col-lg-4 col-md-4 col-12 ">
								<img src="img/p2.jpg"  class="img-fluid pb-4" >
							</div>
							<div class="col-lg-4 col-md-4 col-12 ">
								<img src="img/p3.jpg" class="img-fluid pb-4">
							</div>
							<div class="col-lg-4 col-md-4 col-12 ">
								<img src="img/p10.jpg" class="img-fluid pb-4">
							</div>
							
							
							<div class="col-lg-4 col-md-4 col-12 ">
								
								<img src="img/p7.jpg" class="img-fluid pb-4">
							</div>
							<div class="col-lg-4 col-md-4 col-12 ">
								<img src="img/p8.jpg" class="img-fluid pb-4">
							</div>
							<div class="col-lg-4 col-md-4 col-12 ">
								<img src="img/p9.jpg" class="img-fluid pb-4">
							</div>
							
						</div>
					</div>
				</section>
				
				<div class=" py-5"> </div>
				<footer>
					<p class="p-3 bg-dark text-white text-center ">@AMIUR RAHMAN @AZIZ RAIHAN</p>
				</footer>s
				
				<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
				<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
				<script
				src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
			</body>
		</html>