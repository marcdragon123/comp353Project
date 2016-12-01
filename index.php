<?php  session_start(); ?>
<?php 
  if(isset($_SESSION['user']))
    header("Location:core.php");
  else 
    header("Location:login.php");

 ?>