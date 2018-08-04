<?php

	include 'conn.php';
	$eid = $_POST['eid'];
	$query="SELECT * FROM `viewemployee` WHERE `eid`='$eid'";
	$result=mysqli_query($con,$query);
	$json_data=array();
	while($row=mysqli_fetch_assoc($result)){
		$json_data[]=$row;
	}
	
	echo json_encode($json_data);
?>