<?php
require_once "connection.php";
$id=$_POST["id3"];
$dname=$_POST["dname"];
$dtype=$_POST["dtype"];
$dconc=$_POST["dconc"];
$dInd=$_POST["dInd"];
$dcont=$_POST["dcont"];
$dphoto=$_POST["dphoto"];
$con= new connection();
$con->connect();
$q=mysql_query("update drugs set Name='$dname',Type='$dtype',Indications='$dInd',Contraindications='$dcont',Concentration='$dconc',Photo='$dphoto' where id=$id ");

if ($q)
{
	header("location:CMS.php");
}
else
{
	echo "Not Inserted";
}
$con->disconnect();


?>