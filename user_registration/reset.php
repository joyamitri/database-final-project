<?php
session_start();
header('location:page-login.php');
$conn = mysqli_connect('localhost', 'root', '');

mysqli_select_db($conn, 'companydb');

$email=$_POST['email'];
$password=mysqli_real_escape_string($conn,$_POST['password']);
$hash = hash('sha256', $password);

$checker = "SELECT * FROM users WHERE email='$email'";
$result=mysqli_query($conn, $checker);

$num=mysqli_num_rows($result);
if($num == 1){

	$reg="UPDATE users SET password='$hash' WHERE email='$email'";
	mysqli_query($conn, $reg);

	header('location:page-login.php');
}

else{

	header('location:page-reset.php');
}
?>
