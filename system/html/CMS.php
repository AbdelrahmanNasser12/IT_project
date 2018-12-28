<!DOCTYPE html>
<html>
<head>
	<title>CMS</title>
	<link rel="stylesheet" type="text/css" href="../css/CMS.css">
	<link href="https://fonts.googleapis.com/css?family=Flamenco" rel="stylesheet">
</head>
<body>
<?php
require_once "Drugs.php";

 $NS= new Drugs();
 $arr=$NS->select_all();
 
 //print_r($arr);
 
 $counter=1;
 echo "<a href='insert.php'>Insert New Drugs</a><br><br>";
 echo "<table width=100% border=2>";
 echo "<tr><th>id</th><th>name</th><th>Concentration</th><th>View</th><th>Update</th><th>Delete</th></tr>";

 
 for($i=0;$i<sizeof($arr);$i++)
 {
	$id=$arr[$i][0];
	echo '<div class="string">';
	echo "<tr>";
	echo "<td>".$counter."</td>";
	echo "<td>".$arr[$i][1]."</td>";
	echo "<td>".$arr[$i][2]."</td>";
	echo '</div>';
	echo "<td><a href='view.php?id2=$id'>View</a></td>";
	echo "<td><a href='update.php?id2=$id'>Update</a></td>";
	echo "<td><a href='delete.php?id2=$id'>Delete</a></td>";
	echo "</tr>";
	$counter++;

 }
 
 echo "</table>";

?>
</body>
</html>