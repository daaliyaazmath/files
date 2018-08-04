<?php


	include 'conn.php';
	$jname = $_POST['jname'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$jid = $_POST['jid'];
	$query="UPDATE `viewjseeker` SET `jname`='$jname', `password`='$password', `email`='$email'  WHERE `jid`='$jid'";
	$result=mysqli_query($con,$query);
	if ($result) {
		echo "Successfully Added ";
	}
	else{
		echo "Error...............";
	}
?>