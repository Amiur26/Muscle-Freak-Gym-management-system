
<?php
session_start();
if(!isset($_SESSION["email"]))
{
header("location:login.php");
}
?>

<?php
include 'conn.php';
if (isset($_GET['email'])) {
$email = $_GET['email'];
$q = "DELETE FROM members WHERE email='$email'";
if (mysqli_query($con, $q)) {
echo "Record deleted successfully";
} else {
echo "Error deleting record: " . mysqli_error($con);
}
header('location:display.php');
} else {
echo "Email parameter not set in the URL.";
}
?>
