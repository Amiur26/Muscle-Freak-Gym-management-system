

<?php
session_start();
if(!isset($_SESSION["email"]))
{
header("location:login.php");
}
?>


<?php
include 'conn.php';
if (isset($_GET['IID'])) {
$IID = $_GET['IID'];
$q = "DELETE FROM instructors WHERE IID='$IID'";
if (mysqli_query($con, $q)) {
echo "Record deleted successfully";
} else {
echo "Error deleting record: " . mysqli_error($con);
}
header('location:displayInsAdmin.php');
} else {
echo "IID parameter not set in the URL.";
}
?>