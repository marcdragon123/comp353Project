<?php include 'header.php';
?>
	<h1>Register</h1>
<?php 
	if(isset($_POST['username'])){
		$result=userExist($_POST['username']);
		if($result){
			echo '<p>'.$result.'</p>';
		}
		else{
			query("INSERT INTO users (username,password) values ('".$_POST['username']."','".$_POST['password']."')");
			query("INSERT INTO personalinfo(username,firstname,lastname,address,city,dob) values ('".$_POST['username']."','".$_POST['fname']."','".$_POST['lname']."','".$_POST['address']."','".$_POST['city']."','".$_POST['dbo']."')");
			$_SESSION['user']=$_POST['username'];
			header("Location:home.php");
		}
	}
;?>
<form method="post" action='register.php'>
	Firstname: <input type="text" name="fname"><br>
	Lastname: <input type="text" name="lname"><br>
	Username: <input type="text" name="username"><br>
	Addresse: <input type="text" name="address"><br>
	City: <input type="text" name="city"><br>
	Date of birth: <input type="text" name="dbo"><br>
	Password: <input type="password" name="password"><br>
	Re-type Password: <input type="password" name="repassword"><br>
	<input type="submit" name="" value='Submit'>
</form>
