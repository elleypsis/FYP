<?php
$servername = "localhost";
$database = "opetella";
$username = "root";
$password = "password";

@$dbcnx = new mysqli('localhost','root','','opetella');
// @ to ignore error message display //
if ($dbcnx->connect_error){
	echo "Database is not online"; 
	exit;
	// above 2 statments same as die() //
	}
/*	else
	echo "Congratulations...  MySql is working..";
*/
if (!$dbcnx->select_db ("opetella"))
	exit("<p>Unable to locate the users database</p>");
?>	