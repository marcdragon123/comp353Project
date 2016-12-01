<?php
$servername = "localhost:3306";
$username = "root";
$password = "a;sldkfj";
$dbname = 'comp353';

// Create connection
$db = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}



/*function my_db_ssh_disconnected($reason, $message, $language)
{
	printf("Server Disconnected with reason code [%d] and message: %s\n",$reason, $message);
}

$callbacks

$connection = ssh2_connect(login.concordia.ca,22);*/

?>