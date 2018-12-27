<?php
require_once "connection.php";
$uname=$_POST["uname"];
$upass=$_POST["upass"];

$NS=new connection();
$NS->connect();
$q= mysql_query("SELECT * FROM users WHERE User_Name='".$uname."' and Password= '".$upass."'");
if ($q&&mysql_num_rows($q)==1) {
	header("location:index.php");
}else if($uname=="admin"&&$upass=="admin"){
	header("location:CMS.php");
}else if(empty($uname)||empty($upass)){
	header("location:login.php");
}else {
	//echo "there is UserName OR Password is wrong";
	header("location:login.php");
//Fail
}


$NS->disconnect();

?>