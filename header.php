<?php session_start();
	include 'dbconnection.php' ;
	include 'dbFunctions.php';?>

<h1>Super</h1>

<?php  if(!isset($_SESSION['user'])) {?>

<a href ='register.php'>Register</a>
<a href ='Login.php'>Log In</a>	
<?php } else { ?>
 	<a href="logout.php" >Log out</a> 
 	
 <?php } ?>