<?php 
	include 'dbFunctions.php';
	include 'dbconnection.php';
	print_r($_POST);
	echo $_POST['rideId'];
	$msg =deleteRide(intval($_POST['rideId']));
	echo gettype($msg);
	//echo $msg;
	

	header("Location:../adminpanel.php");


 ?>