<?php 
include('dbconnect.php');

if (isset($_POST['submit'])) {
	if (empty($_POST['firstName']) || empty($_POST['lastName']) || empty($_POST['email']) || empty ($_POST['password'])
		|| empty ($_POST['password2']) ) {
	echo "All records to be filled in";
	exit;}
	}
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$password = $_POST['password'];
$password2 = $_POST['password2'];

if ($password != $password2) {
	echo "Sorry passwords do not match";
	exit;
	}
$password = md5($password);
$sql = "INSERT INTO users (firstName, lastName, email, password) 
		VALUES ('$firstName', '$lastName', '$email', '$password')";


$result = $dbcnx->query($sql);


if (!$result) 
	echo "Your query failed.";
else {
	echo '<meta http-equiv="refresh" content="3;url=../final-php/login.php" />';
	include 'redirect.php';
	exit();
}
?>

