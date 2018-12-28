<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">	
	<link href="https://fonts.googleapis.com/css?family=Flamenco" rel="stylesheet">
	<script defer src="http://use.fontawesome.com/releases/v5.0.6/js/all.js" =""></script>
</head>
<body>
	<div class="wrapper">
		<nav id="nav">
			<div style="color: #fff;font-weight: bold; text-transform: uppercase;font-family: Courier;" class="logo"><span class="colorchange">Pharmacy</span></div>
			<ul> 
				<li><a href="index.php">Home</a></li>
				<li><a href="about.php">About</a></li>
				<li><a href="contact.php">Contact</a></li>
				<li><a href="login.php">Log in</a></li>
				<li><a href="logout.php">Log out</a></li>
			</ul>
		</nav>
		<section class="sec1">
			<div class="main-content">
				<h1>Welcome To Our <span class="colorchange">Pharmacy</span> App.</h1>
			</div>
			<form id="form" class="search-box" action="Search.php" method="post" name="the_form">
				<input class="search-txt" type="text" name="sname" placeholder="Type to search">
				<button type="submit" class="search-btn"><i class="fas fa-search"></i>
			</form>
		</section>
	</div>
</body>
</html>