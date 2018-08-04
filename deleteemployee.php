<?php


	include 'conn.php';
	$eid = $_POST['eid'];

	$query="DELETE FROM `viewemployee` WHERE `eid`='$eid'";
	echo $query;
	$result=mysqli_query($con,$query);
	if ($result) {
		echo "Successfully Deleted ";
	}
	else{
		echo "Error";
	}
?>