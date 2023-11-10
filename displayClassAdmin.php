
<?php 

session_start();
if (!isset($_SESSION["email"]) || !isset($_SESSION["usertype"]) || $_SESSION["usertype"] !== "admin"){
    header("Location: login.php");
    exit();
}

?>



<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet"
			href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
			<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
			<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
			<script
			src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
		</head>
		<body>
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="display.php">Muscle Freak</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse"
        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
           
            
          <li class="nav-item">
              <a class="nav-link" href="display.php">Members</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="displayClassAdmin.php">Class</a>
            </li>

              <li class="nav-item">
              <a class="nav-link" href="displayGCadmin.php">GYM</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="displayYCadmin.php">Yoga</a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="displayInsAdmin.php">Instructors</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="logout.php">Logout</a>
            </li>
            
          </ul>
          
        </div>
      </nav>

			<div class="container">
				<div class="col-lg-12">
					<br><br>
					<h1 class="text-warning text-center">Display class data</h1>
					<br>
					<table class="table table-striped table-hover table-bordered">
						<tr>
							<th>CID</th>
							<th>time</th>
							<th>day</th>
							<th>hours</th>
							<th>delete</th>
							<th>update</th>
						</tr>
						<?php
						include 'conn.php';
						$q="select * from class";
						$query=mysqli_query($con,$q);
						while($res=mysqli_fetch_array($query)){
						?>
						<tr>
							<td> <?php echo $res['CID']; ?> </td>
							<td> <?php echo $res['time']; ?> </td>
							<td> <?php echo $res['day']; ?> </td>
							<td> <?php echo $res['hours']; ?> </td>
							<td>
								<button class="btn-danger btn">
								<a href="deleteClassAdmin.php?CID=<?php echo $res['CID']; ?>"
								class="text-white">Delete</a>
								</button>
							</td>
							<td>
								<button class="btn-primary btn">
								<a href="updateClassAdmin.php?CID=<?php echo $res['CID']; ?>"
								class="text-white">update</a>
								</button>
							</td>
						</tr>
						<?php
						}
						?>



					</table>
				</div>
			</div>
		</body>

	<style>
	.center-container {
	display: flex;
	flex-direction: column; /* Stack children vertically */
	align-items: center; /* Center children horizontally */
	justify-content: center; /* Center children vertically if the container has a specific height */
	text-align: center; /* Center the text for older browsers */
	}
	
	.reviewer-name {
	margin-top: 5px;
	font-style: italic;
	}
	.btn-primary:hover {
	background-color: #0056b3; /* Darker shade for hover effect */
	}
	</style>
	<div class="center-container">
		
		<h1 class="reviewer-name"><font size="6px">To add another class time:</font></h1>
		<a href="insertClassAdmin.php" class="btn-primary btn">Insert</a>
	</div>


	</html>