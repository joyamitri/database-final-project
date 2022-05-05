<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '');

mysqli_select_db($conn, 'companydb');

$username=mysqli_real_escape_string($conn,$_POST['username']);

$checker = "SELECT * FROM users WHERE username='$username'";
$result=mysqli_query($conn, $checker);


$num=mysqli_num_rows($result);

if($num == 1){
	$query="DELETE FROM users WHERE username='$username'";

	$delete=mysqli_query($conn,$query);

	if(!$delete){

		echo "There are some problems while inserting data";
    }
    else{

    	header('location:../startup/index.php');

    }
}

else{
	header('location:delete-user.php');
}
?>
