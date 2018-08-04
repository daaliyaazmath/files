<?php


	include 'conn.php';
	$fullname = $_POST['fullname'];
	$address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
	$pincode = $_POST['pincode'];
	$country = $_POST['country'];
	$email = $_POST['email'];
	$suggestions = $_POST['suggestions'];
	$id = $_POST['id'];
	$query="UPDATE `jseekerform` SET `fullname`='$fullname', `address`='$address',`city`='$city',`state`='$state',`pincode`='$pincode',`country`='$country' ,`email`='$email'  WHERE `id`='$id'";
	$result=mysqli_query($con,$query);
	if ($result) {
		echo "Successfully Added ";
	}
	else{
		echo "Error...............";
	}
?>