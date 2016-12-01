<?php 
	/**
	*	Function userExist
	*	This function verifies if the username already exists on the database
	*
	*	@param $user
	*		The username to verify
	*	@return an empty string if the username doesn't exist, a message otherwise.
	*/
	function userExist($user){
		global $db;
		$sql= "SELECT username from users where username = '". $user ."'";
		$result =$db->query($sql);
	
		if($result->num_rows>0)
			return 'This username already exists.';
		else if($user =="")
			return 'Please enter a username.';
		else
			return '';
	}
	
	/**
	*	Function canLogin
	*	This functions verifies if the username and password given match on the database
	*
	*	@param $user
	*			The username to verify
	*	@param $password
	*			The password to verify
	* 	@return a message if it failed to match the 2 parameters, an empty string if it success
	*/
	function canLogin($user,$password){
		global $db;

		$sql ="SELECT email, password from users where email='".$user."'";
		$result =$db->query($sql);
		if($user=="" || $password=="")
			return 'Please enter a username and a password.';
		if($result->num_rows==0)
			return "The username or password are incorrect.";
		foreach ($result as $row) {
			$row =$row;
		}
		if($result->num_rows==1){
			if(password_verify($password,$row['password']))
				return "";
			else
				return "The username or password are incorrect.";
		}
	}


	function postRideDB($price, $startTime, $startLocation,$endLocation, $isPeriodic, $date,$daysOfW,$licenseId,$distance,$maxriders){
		global $db;
		if($isPeriodic == 'false'){
			$sql = "INSERT INTO ride (price, startTime, startLocation, endLocation, isPeriodic, date, licenceID,distance,max_riders) VALUES ($price,'$startTime','$startLocation','$endLocation','$isPeriodic','$date','$licenseId','$distance',$maxriders)";
		}
		else {
			$sql = "INSERT INTO ride (price, startTime, startLocation, endLocation, isPeriodic, daysOfWeek, licenceID,distance,max_riders) VALUES ($price,'$startTime','$startLocation','$endLocation','$isPeriodic','$daysOfW','$licenseId','$distance',$maxriders)";
		}
		
		
		if ($db->query($sql) === TRUE) 
    		return "";
		else 
    		return "Error: " . $sql . "<br>" . $db->error;
	}
	/**
	*	Function addDriverDB
	*		This function adds to the database information about a user who wants to be a driver
	*
	*	@param $licenseID
	*		the user's license
	*	@param $email
	*		the user's email
	*	@param $vehiculeNum
	*		the user's vehicule number
	*	@return an empty string if everything was good. A error message if not.
	*/
	function addDriverDB($licenseID,$email,$vehiculeNum){
		global $db;
		$sql = "INSERT INTO driver(licenceID,user_email,score,vehiculeNum,numRides) VALUES('$licenseID','$email',null,'$vehiculeNum',0)";
		if ($db->query($sql) === TRUE) 
    		return "";
		else 
    		return "Error: " . $sql . "<br>" . $db->error;
	}
	/**
	*	Function getProfileInfo
	*		This function access all personal information about he user on the database;
	*
	*	@param $user
	*		the user which information is to be found
	*	@return   an array containing the users personal informations
	*/
	function getProfileInfo($user){
		global $db;
		$sql = "SELECT * from personalinfo WHERE user_email ='$user'";
		$result =$db->query($sql);
		$infotable = $result->fetch_assoc();
		return $infotable;
	}
	function getAllRides(){
		global $db;
		$sql = "SELECT * FROM driver,ride where driver.licenceID = ride.licenceID";
		$result = $db->query($sql);   //run query
		
		return $result;
	}
	function getMaxNumberRiders($rideId){
		global $db;
		$sql = "SELECT max_riders from ride where rideID ='$rideId'";
		$result = $db->query($sql);
		$row = $result->fetch_assoc();
		return $row['max_riders'];
	}
	function getCurrentNumberRiders($rideId){
		global $db;
		$sql = "SELECT * from takes_ride where ride_id ='$rideId'";
		$result = $db->query($sql);
		
		return $result->num_rows;

	}
	function register_to_ride($username,$rideId){
		global $db;
		if(getCurrentNumberRiders($rideId)<getMaxNumberRiders($rideId)){
			$sql = "INSERT INTO takes_ride (passager_email,ride_id) values ('$username','$rideId')";
			if ($db->query($sql) === TRUE) 
    			return "";
			else 
    			return "Error: " . $sql . "<br>" . $db->error;
		}
		else
			return 'The ride is full!';
	}
	function getUserLicense($user_email){
		global $db;
		$sql = "SELECT licenceID from driver where user_email = '$user_email'";
		$result = $db->query($sql);
		$row = $result->fetch_assoc();
		return $row['licenceID'];

	}
	function getAllProfileInfo(){
		global $db;
		$sql ="SELECT * from personalinfo";
		$result = $db->query($sql);
		return $result;
	}
	function deleteRide($ride_id){
		global $db;
		print_r($db);
		$sql = "DELETE FROM ride where rideID = $ride_id";
		echo $sql;
		if ($db->query($sql) === TRUE) {
    return "";
} else {
    return "Error deleting record: " . $db->error;
}

	}
 ?>