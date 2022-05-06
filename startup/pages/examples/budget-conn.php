<?php
session_start();
header('location:project-add.php');

$conn = new mysqli('localhost', 'root', '', 'companydb');

if(!$conn){

	echo "There are some problems connecting to the database";
}

$project_name=mysqli_real_escape_string($conn,$_POST['pr_name']);
$budget=$_POST['budget'];


$checker = "SELECT * FROM projects WHERE name='$project_name'";
$result=mysqli_query($conn, $checker);
$num=mysqli_num_rows($result);

if($num == 1) {

	$id = mysqli_fetch_row($result);
	$query="INSERT INTO `expenses`(`amount`, `projects_id`, `projects_users_id`) VALUES ('$budget',$id[0], '$id[5]')";

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