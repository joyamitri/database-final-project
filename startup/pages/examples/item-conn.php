<?php
session_start();
header('location:orders.php');

$conn = new mysqli('localhost', 'root', '', 'companydb');

if(!$conn){

	echo "There are some problems connecting to the database";
}

$item_name=mysqli_real_escape_string($conn,$_POST['item_name']);

$status=$_POST['status'];

$quantity=$_POST['quantity'];

$checker = "SELECT * FROM raw_materials WHERE name='$item_name'";
$result=mysqli_query($conn, $checker);

$num=mysqli_num_rows($result);

if($num == 1){

	echo "Already in database";
}

else{

	$query="INSERT INTO `raw_materials`(`name`, `status`, `quantity`) VALUES ('$item_name','$status','$quantity')";

	$insert=mysqli_query($conn,$query);
	if(!$insert){

		echo "There are some problems while inserting data";
    }
    else{

    	echo "Data Inserted";

    }
}
?>