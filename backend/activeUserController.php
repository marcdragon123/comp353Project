<?php 
	include 'dbconnection.php';
	include 'dbFunctions.php';

	print_r($_POST);
	echo activateUser($_POST['user_email']);
	header("Location:../adminpanel.php");



 ?>