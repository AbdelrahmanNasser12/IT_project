<?php
require_once "connection.php";

$NS=new connection();
$NS->connect();
$email = ($_POST["uemail"]);
$password=($_POST["upass"]);
$username=($_POST["User"]);
$firstName=($_POST["fname"]);
$lastName=($_POST["lname"]);
$stat= true;
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  echo"Invalid email format"."<br>"; 
  $stat=false;
}
if(!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/', $password)) {
  echo 'the password does not meet the requirements!'."<br>";
  $stat=false;
}
if(!preg_match('/^[a-zA-Z0-9]{5,}$/', $username)) { 
    // for english chars + numbers only
    // valid username, alphanumeric & longer than or equals 5 
  echo 'the username does not meet the requirements!'."<br>";
  $stat=false;
}
if (!preg_match("/^[a-zA-Z'-]+$/", $firstName) === 1) {
    echo'Invalid firstName'."<br>";
	$stat=false;
}
if (!preg_match("/^[a-zA-Z'-]+$/", $lastName) === 1) {
    echo'Invalid lastName'."<br>";
	$stat=false;
}
$q= mysql_query("SELECT * FROM users WHERE User_Name='".$username."'");
if ($q&&mysql_num_rows($q)==1) {
	echo "this User Name is already used"."<br>";
    $stat=false;
}
$sql= mysql_query("SELECT * FROM users WHERE Email='".$email."'");
if ($sql&&mysql_num_rows($sql)==1) {
	echo "this Email is already used"."<br>";
    $stat=false;
}

if(stat==true)
{
	$q=mysql_query("insert into users (Fname,Lname,User_Name,Password,Email) values('$firstName','$lastName','$username','$password','$email')");
	if ($q)
	{
		header("location:index.php");
	}
	else
	{
		echo "Not Inserted";
	}
}
$NS->disconnect();

?>