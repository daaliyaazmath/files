<?php


	include 'conn.php';
	$jid = $_POST['jid'];

	$query="DELETE FROM `viewjseeker` WHERE `jid`='$jid'";
	echo $query;
	$result=mysqli_query($con,$query);
	if ($result) {
		echo "Successfully Deleted ";
	}
	else{
		echo "Error";
	}
?>