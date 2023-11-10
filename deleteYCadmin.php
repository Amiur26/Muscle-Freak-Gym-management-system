<?php
session_start();
if(!isset($_SESSION["email"]))
{
header("location:login.php");
}
?>



<?php
include 'conn.php';
if (isset($_GET['CID'])) {
$CID = $_GET['CID'];
$q = "DELETE FROM yogaClass WHERE CID='$CID'";
if (mysqli_query($con, $q)) {
echo "Record deleted successfully";
} else {
echo "Error deleting record: " . mysqli_error($con);
}
header('location:displayYCadmin.php');
} else {
echo "CID parameter not set in the URL.";
}
?>