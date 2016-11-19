<?php 
  include 'backend/dbconnection.php';
  include 'backend/dbFunctions.php';

 $licenseID='1';
 $email='tom';
 $vehiculeNum='1111';
 

  $result=addDriverDB($licenseID,$email,$vehiculeNum);
  echo $result;
  
 ?>