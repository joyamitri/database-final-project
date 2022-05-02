<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '');

mysqli_select_db($conn, 'companydb');

$username=$_POST['username'];
$password=$_POST['password'];

$checker = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result=mysqli_query($conn, $checker);


$num=mysqli_num_rows($result);

if($num == 1){
	$_SESSION['username']=$username;
	header('location:../index.html');
}

else{
	header('location:page-login.php');
	
}
?>
