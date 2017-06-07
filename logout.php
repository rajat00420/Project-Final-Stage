
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
			<li><a href="aboutus.php">About Us</a></li>
			<li><a href="contactus.html">Contact Us</a></li>
            <li><a href="login.html">Login/Sign Up</a></li>
			</ul>		
			
		
</nav>
</header>
<br/><br/><br/><br/><br/><br/>
<?php

  session_start();
  if(isset($_SESSION['valid_user']))
  {
  	$old_user = $_SESSION['valid_user'];  // store  to test if user *was* logged in
  	unset($_SESSION['valid_user']);		// free session var valid_user 
  }
  else
  	$old_user = "";

  if (!empty($old_user))	//user logged in
  {
    if (isset($_SESSION['valid_user']))	//if valid_user still exist
	// user was logged in and could not be logged out
  
	{
	  echo "<html>";
	  echo "<body>";
	  echo "<h1>Log out</h1>";
      echo "Could not log you out.<br>";
    } 
	else //valid_user not exist
	{
	  echo "<html>";
	  echo "<body>";
	  echo "<h1>Log out</h1>";
      echo "$old_user, you logged out.<br>";
	}
  }
  else //not logged in
  {
	  echo "<html>";
	  echo "<body>";
	  echo "<h1>Log out</h1>";
    // if user was not logged in but came to this page somehow
    echo "You were not logged in, and so have not been logged out.<br>"; 
  }
  echo '<a href="login.php">Back to login page</a>';
  echo '</body>';
  echo '</html>';
?> 

