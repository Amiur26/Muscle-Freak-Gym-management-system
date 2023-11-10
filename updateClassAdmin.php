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
$time=$_POST['time'];
$day=$_POST['day'];
$hours=$_POST['hours'];
$CID2=$_POST['CID2'];
$query=" update class set CID='$CID2',time='$time',day='$day',hours='$hours' where
CID='$CID'";
mysqli_query($con,$query);
}
?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="displayClassAdmin.php">Cancel Operation</a>
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
<label>insert new time:</label>
<input type="text" name="time"
class="form-control"> <br>
<label>insert new day:</label>
<input type="text" name="day"
class="form-control"> <br>
<label>insert new hours:</label>
<input type="text" name="hours"
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