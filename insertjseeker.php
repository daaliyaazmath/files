<?php


	include 'conn.php';
	$jname = $_POST['jname'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	
	$query="INSERT INTO `viewjseeker`(`jname`,`email`, `password`) VALUES ('$jname','$email','$password')";
	echo $query;
	$result=mysqli_query($con,$query);
	if ($result) {
		echo "Successfully Added ";
	}
	else{
		echo "Error";
	}
?>