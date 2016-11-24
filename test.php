<?php 
  include 'backend/dbconnection.php';
  include 'backend/dbFunctions.php';

 /*$licenseID='1';
 $email='tom';
 $vehiculeNum='1111';
 

  $result=addDriverDB($licenseID,$email,$vehiculeNum);
  echo $result;*/
  $boolean = false;
  $now_t = 1000;
  $t_now = 0;
  $visibility = 2000;
  $altitude=3000;

  if(!$boolean && ((min($now_t,$t_now))<($visibility<1000 ? 180:120)||$altitude<($visibility<1000 ? 2500: 2000)))
  	echo 'true';
  else 
	echo 'false';  
 ?>