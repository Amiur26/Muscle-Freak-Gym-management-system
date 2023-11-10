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
$CID=$_GET['CID'];
$gymType=$_POST['gymType'];
$IID=$_POST['IID'];
$CID2=$_POST['CID2'];
$query=" update gymClass set CID='$CID2',gymType='$gymType',IID='$IID' where CID='$CID'";
mysqli_query($con,$query);
}
?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet"
	href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
	
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
					<h1 class="text-white text-center">Update class
					operation</h1>
				</div><br>
				<label>insert new CID:</label>
				<input type="text" name="CID2"
				class="form-control"> <br>
				<label>insert new gym type:</label>
				<input type="text" name="gymType"
				class="form-control"> <br>
				<label>insert new IID:</label>
				<input type="text" name="IID"
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