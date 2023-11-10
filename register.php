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
              <a class="nav-link" href="classinfo.php">Class Duration</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="review.php">Reviews</a>
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



<form action=" register.php" method="post">
            <div class="container">
              <label>First Name:</label>
              <input type="text" name="fname" autocomplete="off" class="form-control" required>
            </div>
            <div class="container">
              <label>Last name:</label>
              <input type="text" name="lname" autocomplete="off" class="form-control" required>
            </div>
            <div class="container">
              <label>Email:</label>
              <input type="text" name="email" placeholder="user@mail.com" autocomplete="off" class="form-control" required>
            </div>
            <div class="container">
              <label>Date of Birth:</label>
              <input type="date" name="DOB" autocomplete="off" class="form-control" required>
            </div>
            <div class="container">
              <label>Sex:</label>
              <input type="text" name="sex" autocomplete="off" class="form-control" required>
            </div>

            <div class="container">
              <label>Gym:</label>
              
              <select name=gymflag class="form-control" required>
                
               <optgroup label="Do you want to take gym class?">
               <option value="1">Yes</option>
               <option value="0">No</option>
               
              
              </select>
            </div>
            <div class="container">
              <label>Yoga:</label>
             <select name=yogaflag class="form-control" required>
                
               <optgroup label="Do you want to take yoga class?">
               <option value="1">Yes</option>
               <option value="0">No</option>
               
              
              </select>
            </div>
            <div class="container">
              <label>Password:</label>
              <input type="password" name="pass" autocomplete="off" class="form-control" required>
            </div>
           
            <div class="container">
              <label>Contact number:</label>
              <input type="tel" name="contactNo" placeholder="01---------" autocomplete="off"  pattern="[0-9]{11}" class="form-control"required>
            </div>

            <div class="container">
              <label>Duration of Subscription</label>
              <select name=subDuration class="form-control" >
                
                  <optgroup label="Months">
              <option value="3">3</option>
               <option value="6">6</option>
               <option value="12">12</option>

              
              </select>
             
            </div>

             <div class="container">
              <label>Date of registration</label>
              <input type="date" name="paymentDate" autocomplete="off" class="form-control" required>
            </div>


           
            <div class="container">
              <label>First name of emergency contact</label>
              <input type="text" name="efname" autocomplete="off" class="form-control" required>
            </div>
            <div class="container">
              <label>Last name of emergency contact</label>
              <input type="text" name="elname" autocomplete="off" class="form-control" required>
            </div>
            <div class="container">
              <label>contact number of emergency contact</label>
              <input type="text" name="eContactNo" autocomplete="off" class="form-control" required>
            </div>
            <div class="container">
              <label>relationship with emergency contact</label>
              <input type="text" name="relationship" autocomplete="off" class="form-control" required>
            </div>
            <div class="container">
              <label>sex of emergency contact</label>
              <input type="text" name="esex" autocomplete="off" class="form-control" required>
            </div>
            
           <div class="container">
              <label>Select which class you want to take?</label>
             

               <select name=CID class="form-control" >
                
              <optgroup label="CID time day hours ">
              <option value="1">1 6pm monday 2hrs</option>
              <option value="2">2 6pm monday 2hrs</option>
               <option value="3">3 3pm wednesday 1hr</option>
               <option value="4">4 3pm wednesday 2hrs</option>
              <option value="5">5 5pm wednesday 2hrs</option>
               <option value="6">6 6pm saturday 1hr</option>

              
              </select>
            </div>
            <div class="container">
               <label>Select which class you want to take?</label>
              
              <select name=CID2 class="form-control" >
                
              <optgroup label="CID2 time day hours ">
              <option value="1">1 6pm monday 2hrs</option>
              <option value="2">2 6pm monday 2hrs</option>
               <option value="3">3 3pm wednesday 1hr</option>
               <option value="4">4 3pm wednesday 2hrs</option>
              <option value="5">5 5pm wednesday 2hrs</option>
               <option value="6">6 6pm saturday 1hr</option>
               <option value="">Don't need another class</option>

              
              </select>

            </div>
      
            
            
          <div class="container">
             <button type="submit" class="btn btn-primary" >Submit</button>
          </div>
          
          </div>
          
        
      </form>
 

  <div class="container signin">
    <p>Already have an account? <a href="login.php">Login in</a>.</p>
  </div>
</form>

<br><br>



</body>
</html>


<?php  
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $con = mysqli_connect('localhost', 'root');
    if ($con) {
        echo "Thank You for your registering!";
    } else {
        echo "no connection";
    }


mysqli_select_db($con,'testpro2');


$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$DOB=$_POST['DOB'];
$sex=$_POST['sex'];
$gymflag=$_POST['gymflag'];
$yogaflag=$_POST['yogaflag'];
$pass=$_POST['pass'];
$contactNo=$_POST['contactNo'];



$efname=$_POST['efname'];
$elname=$_POST['elname'];
$eContactNo=$_POST['eContactNo'];
$relationship=$_POST['relationship'];
$esex=$_POST['esex'];

$CID=$_POST['CID'];
$CID2=$_POST['CID2'];

$subDuration=$_POST['subDuration'];
$paymentDate=$_POST['paymentDate'];



$query=" insert into members (fname,lname,email,DOB,sex,contactNo,gymflag,yogaflag,pass)
values ('$fname','$lname','$email','$DOB','$sex','$contactNo','$gymflag','$yogaflag','$pass')";
mysqli_query($con,$query);

$query=" insert into payment (email,subDuration,paymentDate)
values ('$email','$subDuration','$paymentDate')";
mysqli_query($con,$query);



$query=" insert into emergency_contact (efname,elname,eContactNo,relationship,esex,email)
values ('$efname','$elname','$eContactNo','$relationship','$esex','$email')";
mysqli_query($con,$query);

$query=" insert into login(email,pass)
values ('$email','$pass')";
mysqli_query($con,$query);

$query=" insert into take_classes 
values ('$email','$CID')";
mysqli_query($con,$query);

$query=" insert into take_classes 
values ('$email','$CID2')";
mysqli_query($con,$query);



mysqli_close($con);
}

?>


