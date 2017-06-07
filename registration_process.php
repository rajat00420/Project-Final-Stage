<?php
include_once('config.php');

if(isset($_POST['name'], $_POST['dob'],$_POST['email'], $POST['address'], $_POST['password'], $_POST['confirmpassword'], $_POST['postcode'])) {
	$name = $_POST['name'];
	$dob = $_POST['dob'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$password = $_POST['password'];
	$confirmpassword = $_POST['confirmpassword'];
	$postcode = $_POST['postcode'];
	//make the database connection
	$conn  = db_connect();
	//create an insert query 	
	$sql = "insert into users (name, dob, email, address, password, confirmpassword, postcode) 
			VALUES ('$name', '$dob', '$email', '$address', '$password', '$confirmpassword', '$postcode')";
	//execute the query
	if($conn -> query($sql))
	{
		echo "<h1>Welcome to Car Craze</h1>";
		echo "Hi <b>$name</b><br />";
		echo "<a href=\"login.php\">You can login now</a>";
	}
	$conn -> close();		
}
else {
	die("Input error");
}
?>

