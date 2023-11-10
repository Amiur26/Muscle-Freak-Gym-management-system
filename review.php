<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
		
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<a class="navbar-brand" href="index.php">Muscle Freak</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse"
			data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
			aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
					</li>
					
					<li class="nav-item">
						<a class="nav-link" href="about.php">Membership programs</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="review.php">Reviews</a>
					</li>
						<li class="nav-item">
							<a class="nav-link" href="classinfo.php">Class Duration</a>
						</li>
					<li class="nav-item">
						<a class="nav-link" href="login.php">Sign up/Login</a>
					</li>
					
				</ul>
				
			</div>
		</nav>
	</div>
</head>
<body>

	<div class="center-container">
		<br>
		<h1 class="reviewer-name">Member's reviews:</h1>
		
	</div>
	<style>


		.review-container {
	display: flex;
	flex-direction: column;
	gap: 20px;
	}
	.review-card {
	margin: 20px;
	padding: 20px;
	box-shadow: 0 6px 10px rgba(0, 0, 0, 0.1);
	border-radius: 5px;
	background-color: grey;
	}
	.review-header {
	display: flex;
	justify-content: space-between;
	align-items: center;
	margin-bottom: 10px;
	}
	.reviewer-name {
	margin-top: 5px;
	font-style: italic;
	}
	.review-body p {
	margin: 0;
	color:white;
	font-family: "Times New Roman", Times, serif;
	font-size: 20px;
	}
	</style>
	<?php
	$con=mysqli_connect('localhost','root');
	mysqli_select_db($con,'testpro2');
	if (!$con) {
	die("Connection failed: " . mysqli_connect_error());
	}
	// SQL to fetch random reviews
	$sql = "SELECT m.fname,m.lname,r.comments FROM review r JOIN members m ON(m.email=r.email) ORDER BY RAND() LIMIT 5";
	$result = mysqli_query($con,$sql);
	$reviews = array();
	if ($result && mysqli_num_rows($result) > 0) {
	// Fetch all reviews
	while ($row = mysqli_fetch_assoc($result)) {
	$reviews[] = $row;
	}
	} else {
	echo "0 results";
	$reviews = null; // Explicitly set $reviews to null if there are no results
	}
	mysqli_close($con);
	?>
	<div class="review-container">
		
		<?php foreach ($reviews as $review): ?>
		<div class="review-card">
			<div class="review-header">
				<h3 class="reviewer-name"><?php echo $review['fname'].' '.$review['lname']; ?></h3>
			</div>
			<div class="review-body">
				<p><?php echo $review['comments']; ?></p>
			</div>
		</div>
		<?php endforeach; ?>
	</div>
	<br><br>
	<style >
		
	.center-container {
	display: flex;
	flex-direction: column; /* Stack children vertically */
	align-items: center; /* Center children horizontally */
	justify-content: center; /* Center children vertically if the container has a specific height */
	text-align: center; /* Center the text for older browsers */
	}
	.btn-primary {
	text-decoration: none; /* Remove underline from links */
	display: inline-block; /* Allows the padding and margin to be applied correctly */
	padding: 10px 20px; /* Add some padding inside the button */
	background-color:green; /* Bootstrap primary color */
	color: white; /* Text color */
	border-radius: 5px; /* Rounded corners */
	transition: background-color 0.3s; /* Smooth transition for hover effect */
	}
	.btn-primary:hover {
	background-color: #0056b3; /* Darker shade for hover effect */
	}
	</style>
	<div class="center-container">
		
		<h1 class="reviewer-name">To add your own review sign up or login:</h1>
		<a href="login.php" class="btn-primary btn">Login</a>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>