<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/style2.css">
	<script src="../js/myscript.js"></script>
	<title>Sign up</title>
</head>
<body>
	<div class="wrap">
		<h2>Sign up</h2>
		<form action="signUp_ok.php" method="post" onsubmit="return Validation();">
			<input type="text" name="fname"  id="first" placeholder="First name">
			<input type="text" name="lname" id="last" placeholder="Last name">
			<input type="text" name="User" id="user_id" placeholder="User name">
			<input type="text" name="uemail" id="email" placeholder="Email">
			<input type="Password" name="upass" id="pwd" placeholder="Password">
			<input type="submit" name="" value="Sign up">

		</form>
	</div>
</body>
</html>