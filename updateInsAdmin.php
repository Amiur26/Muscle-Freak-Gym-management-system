
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
$IID=$_GET['IID'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$sex=$_POST['sex'];
$IID2=$_POST['IID2'];
$DOB=$_POST['DOB'];
$contactNo=$_POST['contactNo'];
$gymflag=$_POST['gymflag'];
$yogaflag=$_POST['yogaflag'];
$query=" update instructors set
IID='$IID2',fname='$fname',lname='$lname',sex='$sex',DOB='$DOB',contactNo='$contactNo',gy
mflag='$gymflag',yogaflag='$yogaflag' where IID='$IID'";
mysqli_query($con,$query);
}
?>
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
        <a class="navbar-brand" href="displayInsAdmin.php">Cancel Operation</a>
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
				<label>insert new IID:</label>
				<input type="text" name="IID2"
				class="form-control"> <br>
				<label>insert new fname:</label>
				<input type="text" name="fname"
				class="form-control"> <br>
				<label>insert new lname:</label>
				<input type="text" name="lname"
				class="form-control"> <br>
				<label>insert new sex:</label>
				<input type="text" name="sex"
				class="form-control"> <br>
				<label>insert new DOB:</label>
				<input type="text" name="DOB"
				class="form-control"> <br>
				<label>insert new contactNo:</label>
				<input type="text" name="contactNo"
				class="form-control"> <br>
				<label>insert new gymflag:</label>
				<input type="text" name="gymflag"
				class="form-control"> <br>
				<label>insert new yogaflag:</label>
				<input type="text" name="yogaflag"
				class="form-control"> <br>
				<button class="btn btn-success" type="submit" name="done">
				Submit
				</button><br>
			</div>
		</form>
	</div>
</body>
</html>