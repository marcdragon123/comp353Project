<?php 
	include 'header.php';
	if(!isset($_SESSION['user']))
		header("Location: index.php");
 ?>
<h1>Welcome <?php echo $_SESSION['user']; ?></h1>
<a href =''>Find a ride</a>
<a href =''>Post a ride</a>
