<?php
	//must appear BEFORE the <html> tag
	session_start();
	include_once('include/config.php');	
	
	if (isset($_SESSION['valid_user'])) {
		header("location: member_only.php");
	}
	
	//make the database connection
	$conn  = db_connect();
	
	$error = "";	     
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      $email = $conn -> real_escape_string($_POST['email']);
      $password = $conn -> real_escape_string($_POST['password']); 
     	  
	  //make a query to check if user login successfully
	  $sql = "select * from users where email='$email' and password='$password'";
	  $result = $conn -> query($sql);
	  $numOfRows = $result -> num_rows;

	  if ($numOfRows == 1) {
         $_SESSION['valid_user'] = $email;         
         header("location: member_only.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Membership Form</title>
<link href="css/login.css" rel="stylesheet" type="text/css">
<link href="css/styles.css" rel="stylesheet" type="text/css">
<script src="js/nav.js"></script>
<script src="js/member.js"></script>
</head>

<body onLoad="run_first()">
	<div id="wrapper">
	<header>
    	<h1>ABC School</h1>
    </header>
	<?php include("include/nav.inc") ?>

<div id="member_frm" class="member_frm">
<h1>Login</h1>
<p>Please enter your email and password</p>
<form action="login.php" method="post">
    <div class="row">
    	<div class="col">
        	<label for="email">Email:</label>
            <input type="email" id="email" name="email" size="35" maxlength="50" 
            	onBlur="changeColor(id, 'white')"
                onFocus="changeColor(id, 'seaShell')" required />
        </div>
    </div>
    <div class="row">
    	<div class="col">
        	<label for="password">Password:</label>
            <input type="password" id="password" name="password" size="20" maxlength="20" 
            	onBlur="changeColor(id, 'white')"
                onFocus="changeColor(id, 'seaShell')" required />
        </div>
    </div>
    <div class="row">
    	<div class="col">
        	<label>&nbsp;</label>
            <input type="submit" id="submit" value="Submit" />
            <input type="reset" id="reset" value="Clear" />
        </div>
    </div>
    <?php if($error != "") echo "<div class=\"row error\">$error</div>"; ?>        
</form>
</div>
   
	<footer><h4>Design By 007 - 2017</h4></footer>
</div>
</body>
</html>
