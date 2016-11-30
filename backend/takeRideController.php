<?php session_start();
	include 'dbFunctions.php';
	include 'dbconnection.php';

	print_r($_POST);
	$msg =register_to_ride($_SESSION['user'],$_POST['r_id']);
	echo $msg;
	if($msg ==""){
			header("Location:../core.php?message=m2");
}
	else{
		header("Location:../core.php?message=m1");
	}


	


 ?>