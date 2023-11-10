<!DOCTYPE html>
<html>
<head>
	
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
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

    <div class="container"> 
	<div class="col-lg-12">
		<br><br>
		<h1 class="text-warning text-center">Class information:</h1>
		<br>
		<table class="table table-striped table-hover table-bordered">
			<tr>
				<th>CID</th>
			
				<th>instructor</th>
				<th>sex</th>
				<th>type of class</th>
				<th>day</th>
				<th>time</th>
				<th>hours</th>
				
				


			</tr>
			<?php

    include 'conn.php';

	


$q="select c.CID as 'Class ID',i.fname as 'instructor',i.sex,g.gymType as 'type of class',c.day,c.time,c.hours
from class c join gymClass g on(c.CID=g.CID) join instructors i on(g.IID=i.IID) union
select c.CID as 'Class ID',i.fname as 'instructor',i.sex,g.yogaType as 'type of class',c.day,c.time,c.hours
from class c join yogaClass g on(c.CID=g.CID) join instructors i on(g.IID=i.IID);";




$query=mysqli_query($con,$q);

while($res=mysqli_fetch_array($query)){




?>


			<tr>
				<td> <?php echo $res['Class ID']; ?> </td>
				<td> <?php echo $res['instructor']; ?> </td>
				<td> <?php echo $res['sex']; ?> </td>
				<td> <?php echo $res['type of class']; ?> </td>
				<td> <?php echo $res['day']; ?> </td>
				<td> <?php echo $res['time']; ?> </td>
				<td> <?php echo $res['hours']; ?> </td>

				
		

				
			</tr>

			<?php 
			}
				?>
			


		</table>
		

	</div>
	</div>
	
</body>
</html>