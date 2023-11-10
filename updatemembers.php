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
$result = mysqli_query($con, "SELECT * FROM members WHERE email='$current_email'");
$current_user = mysqli_fetch_assoc($result);


if(isset($_POST['done'])){

	

   
    $new_fname = !empty($_POST['fname']) ? $_POST['fname'] : $current_user['fname'];
    $new_lname = !empty($_POST['lname']) ? $_POST['lname'] : $current_user['lname'];
    $new_email = !empty($_POST['email']) ? $_POST['email'] : $current_email;
    $new_contactNo = !empty($_POST['contactNo']) ? $_POST['contactNo'] : $current_user['contactNo'];
    $new_sex = !empty($_POST['sex']) ? $_POST['sex'] : $current_user['sex'];
    $new_DOB = !empty($_POST['DOB']) ? $_POST['DOB'] : $current_user['DOB'];
    $new_gymflag = !empty($_POST['gymflag']) ? $_POST['gymflag'] : $current_user['gymflag'];
    $new_yogaflag = !empty($_POST['yogaflag']) ? $_POST['yogaflag'] : $current_user['yogaflag'];

    $q = "UPDATE members SET email='$new_email', fname='$new_fname', lname='$new_lname' , contactNo='$new_contactNo' , DOB='$new_DOB' , gymflag='$new_gymflag' , yogaflag='$new_yogaflag' WHERE email='$current_email'";

    $query = mysqli_query($con, $q);

    // Update the session variable with the new email
    $_SESSION["email"] = $new_email;

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


                    <label>Email:</label>
                    <input type="text" name="email" class="form-control" ><br>
                    <label>First Name:</label>
                    <input type="text" name="fname" class="form-control" ><br>
                    <label>Last Name:</label>
                    <input type="text" name="lname" class="form-control" ><br>
                    <label>Contact no:</label>
                    <input type="text" name="contactNo" class="form-control" ><br>
                    <label>Sex</label>
                    <input type="text" name="sex" class="form-control" ><br>
                    <label>Date of Birth:</label>
                    <input type="text" name="DOB" class="form-control" ><br>
                    <label>Gym Flag</label>
                    <input type="text" name="gymflag" class="form-control" ><br>
                    <label>Yoga Flag</label>
                    <input type="text" name="yogaflag" class="form-control" ><br>
                   



                    <button class="btn-success btn" type="submit" name="done">Update</button>
                </div>
            </div>
        </form>
    </div>
	
	
</body>
</html>