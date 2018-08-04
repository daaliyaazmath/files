<?php

	include 'conn.php';
	$jid = $_POST['jid'];
	$query="SELECT * FROM `viewjseeker` WHERE `jid`='$jid'";
	$result=mysqli_query($con,$query);
	$json_data=array();
	while($row=mysqli_fetch_assoc($result)){
		$json_data[]=$row;
	}
	
	echo json_encode($json_data);
?>