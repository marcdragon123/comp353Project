<?php 
	session_start();
	include 'dbconnection.php';
    include 'dbFunctions.php';
  	$licence = getUserLicense($_SESSION['user']);
	print_r($_POST);

	if ($_POST['tripType']=='singleTrip'){
		echo postRideDB($_POST['distance']/10000,$_POST['dep_time'],$_POST['departure'],$_POST['destination'],'false',$_POST['dep_date'],"Trump for the win!",$licence,$_POST['distance']/1,$_POST['riders']);
		header('Location:../core.php?message=success');
	}
	else{
		$dow = '';
		foreach ($_POST['dow'] as $day) {
			$dow = $dow .$day . '-';
		}
		echo $dow;
		echo postRideDB($_POST['distance']/10000,$_POST['dep_time'],$_POST['departure'],$_POST['destination'],'true','Fidel is dead!',$dow,$licence,$_POST['distance']/1,$_POST['riders']);
		header('Location:../core.php?message=success');

	}



 ?>