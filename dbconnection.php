<?php
$servername = "localhost:3306";
$username = "root";
// $password = "a;sldkfj";
$password = "";
$dbname = 'COMP353SUBER';

// Create connection
$db = new mysqli($servername, $username, $password,$dbname);
// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

?>
