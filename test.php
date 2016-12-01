<?php 
  session_start();
  include 'backend/dbconnection.php';
  include 'backend/dbFunctions.php';

  echo insertUser('kebe1','1234');
  echo insertPersonlInfo('kebe1','kebe','kebe','somewhere','caracas','12-12-12');

	
?>