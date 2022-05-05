<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '');

mysqli_select_db($conn, 'companydb');

$username=mysqli_real_escape_string($conn,$_POST['username']);
$password=mysqli_real_escape_string($conn,$_POST['password']);
$hash = hash('sha256', $password);

$checker = "SELECT * FROM users WHERE username='$username' AND password='$hash'";
$result=mysqli_query($conn, $checker);


$num=mysqli_num_rows($result);

if($num == 1){
	$_SESSION['username']=$username;
	header('location:../startup/index.php');
}

else{
	header('location:page-login.php');
}
?>
