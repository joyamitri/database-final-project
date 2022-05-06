<?php
session_start();
//header('location:index2.php');

$conn = new mysqli('localhost', 'root', '', 'companydb');

if(!$conn){

	echo "There are some problems connecting to the database";
}

$quer = "SELECT * FROM projects";
$check = mysqli_query($conn, $quer);
$num= mysqli_num_rows($check);

$res = [];

if($num > 0){

	while($row=mysqli_fetch_row($check)){

		$res[] = $row;
	}

	$_SESSION['row'] = $res;
}

else{

	echo "Error";
}
?>