
<?php 

session_start();
if (!isset($_SESSION["email"]) || !isset($_SESSION["usertype"]) || $_SESSION["usertype"] !== "admin"){
    header("Location: login.php");
    exit();
}

?>


<?php
include 'conn.php';
if(isset($_POST['done'])){
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_GET['email'];
$DOB=$_POST['DOB'];
$sex=$_POST['sex'];
$gymflag=$_POST['gymflag'];
$yogaflag=$_POST['yogaflag'];
$pass=$_POST['pass'];
$contactNo=$_POST['contactNo'];
$paymentStatus=$_POST['paymentStatus'];
$efname=$_POST['efname'];
$elname=$_POST['elname'];
$eContactNo=$_POST['eContactNo'];
$relationship=$_POST['relationship'];
$esex=$_POST['esex'];
$CID=$_POST['CID'];
$subDuration=$_POST['subDuration'];
$paymentDate=$_POST['paymentDate'];
$query=" update members set
fname='$fname',lname='$lname',contactNo='$contactNo',gymflag=$gymflag,yogaflag=$yogaflag
,pass='$pass' where email='$email'";
mysqli_query($con,$query);
$query=" update payment set
paymentStatus=$paymentStatus,subDuration='$subDuration',paymentDate='$paymentDate'
where email='$email'";
mysqli_query($con,$query);
$query=" update emergency_contact set
efname='$efname',efname='$elname',eContactNo='$eContactNo',relationship='$relationship',es
ex='$esex' where email='$email'";
mysqli_query($con,$query);
$query=" update take_classes set CID='$CID' where email='$email'";
mysqli_query($con,$query);
}
?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet"
	href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
	
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="display.php">Cancel Operation</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse"
        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
          </ul>
          
        </div>
      </nav>
	<div class="col-lg-6 m-auto">
		<form method="post">
			<br><div class="card">
				<div class="card-header bg-dark">
					<h1 class="text-white text-center">Update operation</h1>
				</div><br>
				<label>fname:</label>
				<input type="text" name="fname" class="form-control"> <br>
				<label>lname:</label>
				<input type="text" name="lname" class="form-control"> <br>
				<label>gymflag:</label>
				<input type="text" name="gymflag" class="form-control"> <br>
				<label>yogaflag:</label>
				<input type="text" name="yogaflag" class="form-control"> <br>
				<label>pass:</label>
				<input type="text" name="pass" class="form-control"> <br>
				<label>Contact number</label>
				<input type="text" name="contactNo"
				class="form-control"> <br>
				<label>duration of subscription:</label>
				<input type="text" name="subDuration"
				class="form-control"> <br>
				<label>payment date:</label>
				<input type="text" name="paymentDate"
				class="form-control"> <br>
				<label>payment status</label>
				<input type="text" name="paymentStatus"
				class="form-control"> <br>
				<label>fname of emergency contact</label>
				<input type="text" name="efname"
				class="form-control"> <br>
				<label>lname of emergency contact</label>
				<input type="text" name="elname"
				class="form-control"> <br>
				<label>contact number of emergency
				contact</label>
				<input type="text" name="eContactNo"
				class="form-control"> <br>
				<label>relationship with emergency
				contact</label>
				<input type="text" name="relationship"
				class="form-control"> <br>
				<label>sex of emergency contact</label>
				<input type="text" name="esex"
				class="form-control"> <br>
				<label>change classes:?press 1 for gym,2
				for yoga</label>
				<input type="text" name="CID"
				class="form-control"> <br>
				<button class="btn btn-success" type="submit" name="done">
				Submit
				</button><br>
			</div>
		</form>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
	<script
	src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>