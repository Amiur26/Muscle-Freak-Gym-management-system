

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
$q = "DELETE FROM gymClass WHERE CID='$CID'";
if (mysqli_query($con, $q)) {
echo "Record deleted successfully";
} else {
echo "Error deleting record: " . mysqli_error($con);
}
header('location:displayGCadmin.php');
} else {
echo "CID parameter not set in the URL.";
}
?>