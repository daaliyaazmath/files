<?php


	include 'conn.php';
	$ename = $_POST['ename'];
	$email = $_POST['email'];
	$password = $_POST['password'];
    $role = $_POST['role'];
	$eid = $_POST['eid'];
	$query="UPDATE `viewemployee` SET `ename`='$ename', `password`='$password', `email`='$email' , `role`='$role' WHERE `eid`='$eid'";
	$result=mysqli_query($con,$query);
	if ($result) {
		echo "Successfully Added ";
	}
	else{
		echo "Error...............";
	}
?>