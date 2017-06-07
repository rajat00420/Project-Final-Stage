<?php
//define constants for connection info
define("MYSQLUSER","team02mar17");
define("MYSQLPASS","Password1");
define("HOSTNAME","localhost");
define("MYSQLDB","team02mar17_test");

//make connection to database
function db_connect()
{
	$conn = @new mysqli(HOSTNAME, MYSQLUSER, MYSQLPASS, MYSQLDB);
	if($conn -> connect_error) {
		die('Connect Error: ' . $conn -> connect_error);
	}
	return $conn;
} 
?>

