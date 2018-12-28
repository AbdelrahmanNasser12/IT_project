<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Log in</title>
	<link rel="stylesheet" type="text/css" href="../css/style1.css">
	<script src="../js/myscript1.js"></script>
</head>
<body>
	<nav>
		<ul>
			<li><a href="signup.php">Sign Up</a></li>
		</ul>
	</nav>
	<div class="loginbox">
		<img src="../images/User_Avatar_2.png" class="avatar">
			<h1>Login</h1>
			<form action="login_check.php" method="post" onsubmit="return Validation();">
				<p>Username</p>
				<input type="text" name="uname" id="user_id" placeholder="Enter Username">
				<p>Password</p>
				<input type="Password" name="upass" id="pwd" placeholder="Enter Password">
			</br>
				<input type="submit" name="" value="Sign in">
			</form>
	</div>
</body>
</html>