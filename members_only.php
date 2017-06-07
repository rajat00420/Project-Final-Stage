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

  echo "<h1>Members only</h1>";

  // check session variable

  if (isset($_SESSION['valid_user']))
  {
    echo "<p>You are logged in as " . $_SESSION['valid_user'] . "</p>";
    echo "<p>Members only content goes here</p>";
	echo "<a href=\"logout.php\">Logout</a>";
  }
  else
  {
    echo "<p>You are not logged in.</p>";
    echo "<p>Only logged in members may see this page.</p>";
	echo "<a href=\"login.php\">Login page</a>";
  } 
?>
