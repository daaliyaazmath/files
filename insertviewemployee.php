<?php


	include 'conn.php';
	$ename = $_POST['ename'];
	$email = $_POST['email'];
	$password = $_POST['password'];
    $role = $_POST['role'];

	
	$query="INSERT INTO `viewemployee`(`ename`,`email`, `password`,`role`) VALUES ('$ename','$email','$password','$role')";
	echo $query;
	$result=mysqli_query($con,$query);
	if ($result) {
		echo "Successfully Added ";
	}
	else{
		echo "Error";
	}
?>