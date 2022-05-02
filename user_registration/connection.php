<?php
session_start();
header('location:page-login.php');
$conn = mysqli_connect('localhost', 'root', '');

mysqli_select_db($conn, 'companydb');

$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$company=$_POST['company_name'];
$location=$_POST['location'];

$checker = "SELECT * FROM users WHERE username='$username'";
$result=mysqli_query($conn, $checker);

$num=mysqli_num_rows($result);
if($num == 1){

	echo "Username Already Taken.";
}

else{

	$check="SELECT * FROM companies WHERE name='$company' && location='$location'";
	$res=mysqli_query($conn, $check);
	$counter=mysqli_num_rows($res);

	if($counter == 1){

		$getComp_id="SELECT id FROM companies WHERE name = '$company'"; 

		$reg="INSERT INTO users SET first_name='$first_name', last_name='$last_name', username='$username', email='$email', password='$password', companies_id='$getComp_id', user_types_id='1'";

		mysqli_query($conn, $reg);

		echo "Registration Successful";

	}
	else{

		$comp ="INSERT INTO companies SET name='$company', location='$location'"; 

		$res=mysqli_query($conn, $comp);

		$getComp_id="SELECT id FROM companies WHERE name = '$company'"; 

		$reg="INSERT INTO users SET first_name='$first_name', last_name='$last_name', username='$username', email='$email', password='$password', companies_id='$getComp_id', user_types_id=1";

		mysqli_query($conn, $reg);

		echo "Registration Successful";
	}
}
?>
