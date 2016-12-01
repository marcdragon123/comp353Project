<?php 
	session_start();
	include 'dbconnection.php';
    include 'dbFunctions.php';
    print_r($_POST);
   //postRideDB();
   if ($_POST['isPeriodic']=='false'){
		echo postRideDB(0,$_POST['dep_time'],$_POST['departure'],$_POST['destination'],'false',$_POST['dep_date'],"Trump for the win!",$licence,$_POST['distance']/1,$_POST['riders']);
		//header('Location:../core.php?message=success');
	}
	else{
		$dow = '';
		foreach ($_POST['dow'] as $day) {
			$dow = $dow .$day . '-';
		}
		echo $dow;
		echo postRideDB(0,$_POST['dep_time'],$_POST['departure'],$_POST['destination'],'true','Fidel is dead!',$dow,$licence,$_POST['distance']/1,$_POST['riders']);
		//header('Location:../core.php?message=success');

	}



 ?>