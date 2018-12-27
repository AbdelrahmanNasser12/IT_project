<?php
require_once "Drugs.php";
$id=$_GET["id2"];
$Nz= new Drugs();
$row=$Nz->select_by_id($id);
echo "Name:".$row[1]." ".$row[2]."<br>";
echo "Type:".$row[3]."<br>";
echo "Indications:".$row[4]."<br>";
echo "Contraindications:".$row[5]."<br>";

echo "<br><br><a href='CMS.php'> back </a>";
?>