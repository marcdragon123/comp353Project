<?php 
	session_start();
	include 'dbconnection.php';
    include 'dbFunctions.php';
  	
	print_r($_POST);


	/*if ($_POST['tripType']=='singleTrip'){
	postRequestDB($_POST['dep_time'],$_POST['departure'],$_POST['destination'],'false',$_POST['dep_date']);
	}*/



	if ($_POST['tripType']=='singleTrip'){
		echo postRequestDB($_POST['dep_time'],$_POST['departure'],$_POST['destination'],'false',$_POST['dep_date'],'null');
		header('Location:../core.php?message=success');
	}
	else{
		$dow = '';
		foreach ($_POST['dow'] as $day) {
			$dow = $dow .$day . '-';
		}
		echo $dow;
		echo postRequestDB($_POST['dep_time'],$_POST['departure'],$_POST['destination'],'true','null',$dow);
		header('Location:../core.php?message=success');

	}


 ?>