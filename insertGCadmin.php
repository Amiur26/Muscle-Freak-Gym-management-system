

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
$CID=$_POST['CID'];
$IID=$_POST['IID'];
$gymType=$_POST['gymType'];
$query=" insert into gymClass
values ('$CID','$gymType','$IID')";
mysqli_query($con,$query);
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
        <a class="navbar-brand" href="displayGCadmin.php">Cancel Operation</a>
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
							<h1 class="text-white text-center">Insert gym class
							operation</h1>
						</div><br>
						<label>CID:</label>
						<input type="text" name="CID" class="form-control"> <br>
						<label>IID:</label>
						<input type="text" name="IID" class="form-control"> <br>
						<label>gym type:</label>
						<input type="text" name="gymType" class="form-control"> <br>
						<button class="btn btn-success" type="submit" name="done">
						Submit
						</button><br>
					</div>
				</form>
			</div>
		</body>
	</html>