<?php 
	include 'header.php'; 
?>
<h1>Log in</h1>
<?php 
	if(isset($_POST['username'])){
		$result = canLogin($_POST['username'],$_POST['password']);
		if($result){
			echo '<p>'.$result.'</p>';
		}
		else{
			$_SESSION['user']=$_POST['username'];
			header("Location:core.php");
		}
	}
?>
<form method="post" action='login.php'>
	Username: <input type="text" name="username"><br>
	Password <input type="Password" name="password"><br>
	<input type="submit" name="">
</form>
