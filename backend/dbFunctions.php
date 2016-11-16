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
	function query($sql){
		global $db;
		if($db->query($sql)===true)
			return true;
		else
			echo 'Error:'. $sql. '<br>'. $db->error;	
	}
	function canLogin($user,$password){
		global $db;

		$sql ="SELECT username, password from users where username='".$user."'";
		$result =$db->query($sql);
		if($user=="" || $password="")
			return 'Please enter a username and a password.';
		if($result->num_rows==0)
			return "The username or password are incorrect.";
		foreach ($result as $row) {
			$row =$row;
		}
		if($result->num_rows==1){
			if(password_verify($password,$row['password']))
			return "";
		}
	}

 ?>