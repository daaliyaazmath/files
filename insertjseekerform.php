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

	
	$query="INSERT INTO `jseekerform`(`fullname`,`address`,`city`,`state`,`pincode`,`country`,`email`, `suggestions`) VALUES ('$fullname','$address','$city','$state','$pincode','$country','$email','$suggestions')";
	echo $query;
	$result=mysqli_query($con,$query);
	if ($result) {
		echo "Successfully Added ";
	}
	else{
		echo "Error";
	}
?>