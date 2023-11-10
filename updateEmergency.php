<?php 

session_start();
if (!isset($_SESSION["email"]) || !isset($_SESSION["usertype"]) || $_SESSION["usertype"] !== "user"){
    header("Location: login.php");
    exit();
}

?>


<?php 

$con=mysqli_connect('localhost','root');

mysqli_select_db($con,'testpro2');


$current_email = $_SESSION["email"];
// Fetch current user details from the database
$result = mysqli_query($con, "SELECT * FROM emergency_contact WHERE email='$current_email'");
$current_user = mysqli_fetch_assoc($result);


if(isset($_POST['done'])){

	

   
    $new_efname = !empty($_POST['efname']) ? $_POST['efname'] : $current_user['efname'];
    $new_elname = !empty($_POST['elname']) ? $_POST['elname'] : $current_user['elname'];
    $new_eContactNo = !empty($_POST['eContactNo']) ? $_POST['eContactNo'] : $current_user['eContactNo'];
    $new_relationship = !empty($_POST['relationship']) ? $_POST['relationship'] : $current_user['relationship'];
    $new_esex = !empty($_POST['esex']) ? $_POST['esex'] : $current_user['esex'];
    
  

    $q1="UPDATE emergency_contact SET efname='$new_efname', elname='$new_elname' , eContactNo='$new_eContactNo' , relationship='$new_relationship' , esex='$new_esex' WHERE email='$current_email'";

    $query1=mysqli_query($con, $q1);
    
    $email=$_GET['email'];
    // Update the session variable with the new email
    $_SESSION["email"] = $email;

    header("Location: profile.php");
    exit(); 


}




?>


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
        <a class="navbar-brand" href="profile.php">Cancel Operation</a>
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
            <div class="card">
                <br><br><div class="card-header ">
                    <h1 class=" text-center">Update Details</h1><br>


                    
                    <label>First Name:</label>
                    <input type="text" name="efname" class="form-control" ><br>
                    <label>Last Name:</label>
                    <input type="text" name="elname" class="form-control" ><br>
                    <label>Contact no:</label>
                    <input type="text" name="eContactNo" class="form-control" ><br>
                    <label>Relationship:</label>
                    <input type="text" name="relationship" class="form-control" ><br>
                    <label>Sex:</label>
                    <input type="text" name="esex" class="form-control" ><br>
                   
                    
                   



                    <button class="btn-success btn" type="submit" name="done">Update</button>
                </div>
            </div>
        </form>
    </div>
	
	
</body>
</html>