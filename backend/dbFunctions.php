<?php 

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

		$sql ="SELECT username, password from users where username='".$user."'";
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
	function postRideDB($price, $startTime, $startLocation,$endLocation, $isPeriodic, $date,$daysOfW,$licenseId){
		global $db;
		$query = "INSERT INTO ride (price, startTime, startLocation, endLocation, isPeriodic, date, daysOfWeek, licenceID) VALUES ($price,'$startTime','$startLocation','$endLocation','$isPeriodic',$date,'$daysOfW','$licenseId')";
		$result = query($query);
		print_r($result);
	}
	function addDriver($email,$licenseID,$vehiculeNum){
		global $db;

		
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
		$sql = "SELECT * from personalinfo WHERE username ='$user'";
		$result =$db->query($sql);
		$infotable = $result->fetch_assoc();
		return $infotable;
	}

 ?>