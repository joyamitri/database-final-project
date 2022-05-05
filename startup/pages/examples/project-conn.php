<?php
session_start();
header('location:project-add.php');

$conn = new mysqli('localhost', 'root', '', 'companydb');

if(!$conn){

	echo "There are some problems connecting to the database";
}

$project_name=mysqli_real_escape_string($conn,$_POST['project_name']);
$project_desc=mysqli_real_escape_string($conn,$_POST['project_desc']);
$status=$_POST['status'];
$start_date=$_POST['start_date'];
$project_leader=mysqli_real_escape_string($conn,$_POST['project_leader']);

$checker = "SELECT id FROM users WHERE username='$project_leader'";
$result=mysqli_query($conn, $checker);
$num=mysqli_num_rows($result);

if($num == 1) {

	$id = mysqli_fetch_row($result);
	$query="INSERT INTO `projects`(`name`, `description`, `status`, `start_date`, `users_id`) VALUES ('$project_name','$project_desc','$status','$start_date','$id[0]')";

	$insert=mysqli_query($conn,$query);
	if(!$insert){

		echo "There are some problems while inserting data";
    }
    else{

    	echo "Data Inserted";

    }
}

else{
	echo "Invalid Project Leader Username";
}