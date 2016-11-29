<?php session_start();
	include 'dbFunctions.php';
	include 'dbconnection.php';

	print_r($_POST);
	$msg= register_to_ride($_SESSION['user'],/*$_POST['']*/21);
	header("Location:../core.php?message=m1");

 ?>