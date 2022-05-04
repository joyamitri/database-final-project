<?php
session_start();
header('location:page-login.php');
$conn = mysqli_connect('localhost', 'root', '');

mysqli_select_db($conn, 'companydb');

$email=$_POST['email'];
$password=$_POST['password'];

$checker = "SELECT * FROM users WHERE email='$email'";
$result=mysqli_query($conn, $checker);

$num=mysqli_num_rows($result);
if($num == 1){

	$reg="UPDATE users SET password='$password' WHERE email='$email'";
	mysqli_query($conn, $reg);

	header('location:page-login.php');
}

else{

	header('location:page-reset.php');
}
?>
