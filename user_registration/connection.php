<?php
session_start();
header('location:page-login.php');

$conn = new mysqli('localhost', 'root', '', 'companydb');

if(!$conn){

	echo "There are some problems connecting to the database";
}

$first_name=mysqli_real_escape_string($conn,$_POST['first_name']);
$last_name=mysqli_real_escape_string($conn,$_POST['last_name']);
$username=mysqli_real_escape_string($conn,$_POST['username']);
$email=$_POST['email'];
$password=mysqli_real_escape_string($conn,$_POST['password']);
$hash = hash('sha256', $password);
$company_name=mysqli_real_escape_string($conn,$_POST['company_name']);
$location=mysqli_real_escape_string($conn,$_POST['location']);

$checker = "SELECT * FROM users WHERE username='$username'";
$result=mysqli_query($conn, $checker);

$num=mysqli_num_rows($result);

if($num == 1) {

	echo "Username Already Taken";
}

else{

	$check="SELECT id FROM companies WHERE name='$company_name' AND location='$location'";

	$res=mysqli_query($conn, $check);

	$counter=mysqli_num_rows($res);

	if($counter == 1){

		while($row=mysqli_fetch_row($res)){

			$query="INSERT INTO `users`(`first_name`, `last_name`, `username`, `email`, `password`, `companies_id`, `user_types_id`) VALUES ('$first_name','$last_name','$username','$email','$hash',$row[0], 1)";

			$insert=mysqli_query($conn,$query);

			if(!$insert){

				echo "There are some problems while inserting data";
            }
            else{

            	echo "Data Inserted";

            }

        }
    }

    else{

    	$comp="INSERT INTO `companies`(`name`, `location`) VALUES ('$company_name','$location')";

    	$res=mysqli_query($conn, $comp);

    	$check="SELECT id FROM companies WHERE name='$company_name' AND location='$location'";

    	$res=mysqli_query($conn, $check);

    	$counter=mysqli_num_rows($res);

    	if($counter == 1){

    		while($row=mysqli_fetch_row($res)){

    			$query="INSERT INTO `users`(`first_name`, `last_name`, `username`, `email`, `password`, `companies_id`, `user_types_id`) VALUES ('$first_name','$last_name','$username','$email','$hash',$row[0], 1)";

    			$insert=mysqli_query($conn,$query);

    			if(!$insert){

    				echo "There are some problems while inserting data";

    			}
                else{

                	echo "Data Inserted";

                }

            }

        }
    }

}

?>