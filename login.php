<!DOCTYPE html>
<html>
  <head>
    <title></title><meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    </style>
    <link rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
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

<br><br>

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

<form action="#" method="POST">
  <div class="container">
    <h1>Log in</h1>
    
    <hr>
   
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>


    <label for="pass"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="pass" id="pass" required>

    <hr>


    <button type="submit" class="btn btn-primary">Login</button>
  </div>

  <div class="container signin">
    <p>Don't have an Account? <a href="register.php"> Signup</a>.</p>
  </div>
</form>

<br><br>


<?php 


$host="localhost";
$user="root";
$password="";
$db="testpro2";

session_start();


$data=mysqli_connect($host,$user,$password,$db);

if($data===false){

  die("CONNECTION FAILED");
}

if($_SERVER["REQUEST_METHOD"]=="POST"){


$email=$_POST["email"];
$pass=$_POST["pass"];





$sql="select* from login where email='".$email."' AND pass='".$pass."' ";
$result=mysqli_query($data,$sql);
$row=mysqli_fetch_array($result);

if(!is_null($row)){

 $_SESSION["email"] = $email;
 $_SESSION["usertype"] = $row["usertype"];

        if ($row["usertype"] == "user") {
            header("location: memberpage.php");
            exit();
        } elseif ($row["usertype"] == "admin") {
            header("location: display.php");
            exit();
        }
}else{
   echo "username or password incorrect";
}






}?>