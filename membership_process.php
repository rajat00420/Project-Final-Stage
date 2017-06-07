<link href="http://fonts.googleapis.com/css?family=Love+Ya+Like+A+Sister" rel="stylesheet" type="text/css">
<link href="main.css" rel="stylesheet">
<div class="wrapper">
<header><h1>Car Craze</h1>

<nav>

			<ul>
			<li><a href="index.php">Home</a></li>
			<li>
            <div class="dropdown">
  <button class="dropbtn">Buy Cars</button>
  <div class="dropdown-content">
    <a href="newcars.html">New Cars</a>
    <a href="usedcars.html">Used Cars</a>
   
  </div>
</div></li>
			<li><a href="insurance.html">Insurance</a></li>
			<li><a href=" ">About Us</a></li>
			<li><a href="contactus.html">Contact Us</a></li>
            <li><a href="login.html">Login/Sign Up</a></li>
			</ul>		
			
		
</nav>
</header> 
<br/><br/><br/><br/>
<?php
include_once('config.php');




if(isset($_POST['name'], $_POST['dob'],$_POST['email'], $_POST['address'], $_POST['password'], $_POST['confirmpassword'], $_POST['postcode'])){
//if(isset($_POST['name'])) {
	//echo $_POST['postcode'];
	
	
	
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

