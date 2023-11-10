<?php 

session_start();
if (!isset($_SESSION["email"]) || !isset($_SESSION["usertype"]) || $_SESSION["usertype"] !== "user"){
    header("Location: login.php");
    exit();
}

?>

<style>
body {
font-family: Arial, Helvetica, sans-serif;
background-color: black;
}
* {
box-sizing: border-box;
}
/* Add padding to containers */
.container {
padding: 16px;
background-color: white;
}
/* Full-width input fields */
input[type=text], input[type=password] {
width: 100%;
padding: 15px;
margin: 5px 0 22px 0;
display: inline-block;
border: none;
background: #f1f1f1;
}
input[type=text]:focus, input[type=password]:focus {
background-color: #ddd;
outline: none;
}
/* Overwrite default styles of hr */
hr {
border: 1px solid #f1f1f1;
margin-bottom: 25px;
}
/* Set a style for the submit button */
.registerbtn {
background-color: #04AA6D;
color: white;
padding: 16px 20px;
margin: 8px 0;
border: none;
cursor: pointer;
width: 100%;
opacity: 0.9;
}
.registerbtn:hover {
opacity: 1;
}
/* Add a blue text color to links */
a {
color: dodgerblue;
}
/* Set a grey background color and center the text of the "sign in" section */
.signin {
background-color: #f1f1f1;
text-align: center;
}
</style>
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
	</head>
	<body>
		
		
		<?php
		$con=mysqli_connect('localhost','root');
		mysqli_select_db($con,'testpro2');
		$email=$_SESSION["email"];
		$q="select* from members where email='$email'";
		$query=mysqli_query($con,$q);
		$res=mysqli_fetch_array($query);
		$q2="select* from emergency_contact where email='$email'";
		$query2=mysqli_query($con,$q2);
		$res2=mysqli_fetch_array($query2);
		$q3="select* from payment where email='$email'";
		$query3=mysqli_query($con,$q3);
		$res3=mysqli_fetch_array($query3);
		?>
		<div class="container">
			<h2>YOUR DETAILS</h2>
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>Firstname</th>
						<td><?php echo $res['fname']; ?>   </td>
					</tr>
					<tr>
						<th>Lastname</th>
						<td><?php echo $res['lname']; ?>   </td>
					</tr>
					<tr>
						<th>Email</th>
						<td><?php echo $res['email']; ?>   </td>
					</tr>
					<tr>
						<th>Contact no. </th>
						<td><?php echo $res['contactNo']; ?> </td>
					</tr>
					<tr>
						<th>Sex </th>
						<td><?php echo $res['sex']; ?> </td>
					</tr>
					<tr>
						<th>Date of Birth </th>
						<td><?php echo $res['DOB']; ?> </td>
					</tr>
					<tr>
						<th>GYM FLAG</th>
						<td><?php echo $res['gymflag']; ?>   </td>
					</tr>
					<tr>
						<th>YOGA FLAG</th>
						<td><?php echo $res['yogaflag']; ?>   </td>
					</tr>
				</thead>
				
			</div>
			<tr>
				
				<td><button class="btn-primary btn"> <a href= "updatemembers.php?email=<?php echo $res['email']; ?>" class="text-white" >UPDATE</a> </button></td>
				<td>Update your desired details</td>
			</tr>
			
			
		
	</table>
</div>
<div class="container">
	
	
	<table class="table table-bordered">
		<thead>
			
			
		</thead>
	</table>
</div>
<div class="container">
	<h2>EMERGENCY CONTACT DETAILS</h2>
	
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>First Name</th>
				<td><?php echo $res2['efname']; ?>   </td>
			</tr>
			<tr>
				<th>Last Name</th>
				<td><?php echo $res2['elname']; ?>   </td>
			</tr>
			<tr>
				<th>Contact No.</th>
				<td><?php echo $res2['eContactNo']; ?>   </td>
			</tr>
			<tr>
				<th>Relationship</th>
				<td><?php echo $res2['relationship']; ?>   </td>
			</tr>
			<tr>
				<th>Sex</th>
				<td><?php echo $res2['esex']; ?>   </td>
			</tr>
			
			<tr>
				<td><button class="btn-primary btn"> <a href= "updateEmergency.php?email=<?php echo $res2['email']; ?>" class="text-white" >UPDATE</a> </button></td>
				<td>Update your emergency contact details</td>
			</tr>
			
		</thead>
	</table>
</div>




<div class="container">
	<h2>PAYMENT STATUS</h2>
	
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>Subscription duration:</th>
				<td><?php echo $res3['subDuration']; ?> months   </td>
			</tr>
			<tr>
				<th>Payment Status:</th>

				<td><?php 


				 if ($res3['paymentStatus'] == 1) {
      				echo 'Paid'; // If the value is 1, display 'Paid'
  				} else {
      				echo 'Unpaid'; // If the value is 0, display 'Unpaid'
 			   
 			    } 




				?>  
				 </td>
			</tr>
			<tr>
				<th>Last Payment Date:</th>
				<td><?php echo $res3['paymentDate']; ?>   </td>
			</tr>
			
		
			
			
			
		</thead>
	</table>
</div>




</body>
</html>