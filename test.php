<?php 
  session_start();
  include 'backend/dbconnection.php';
  include 'backend/dbFunctions.php';

  echo getUserLicense('tom');
  echo $_SESSION['user'];
	
?>