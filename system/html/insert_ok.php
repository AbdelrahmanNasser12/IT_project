<?php
require_once "connection.php";
$dname=$_POST["dname"];
$dtype=$_POST["dtype"];
$dconc=$_POST["dconc"];
$dInd=$_POST["dInd"];
$dcont=$_POST["dcont"];    
$dphoto=realpath($_FILES["dphoto"]["tmp_name"]);

$con= new connection();
$con->connect();
$q=mysql_query("insert into drugs (Name,Type,Indications,Contraindications,Concentration,Photo) values('$dname','$dtype','$dInd','$dcont','$dconc','$dphoto')");

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