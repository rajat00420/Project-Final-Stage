<?php
//define constants for connection info
define("ORACLEUSER","j457651");
define("ORACLEPASS","Password1");
define("ORACLEDB","jc457651_team02");

//make connection to database
function db_connect()
{
	$conn = oci_connect(ORACLEUSER, ORACLEPASS, ORACLEDB);
	if (!$conn) {
		$e = oci_error();
		trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
	}
	return $conn;
} 
?>

