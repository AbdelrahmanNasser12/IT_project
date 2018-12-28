<?php

$id=$_GET["id2"];
require_once "Drugs.php";

$NS= new Drugs();

if ($NS->delete_by_id($id))
{
	header("location:CMS.php");
}
else
{
	echo "Not Deleted";
}
mysql_close($con);


?>