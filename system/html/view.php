<!DOCTYPE html>
<html>
<head>
	<title>view</title>
	<link rel="stylesheet" type="text/css" href="../css/view.css">
	<link href="https://fonts.googleapis.com/css?family=Flamenco" rel="stylesheet">
</head>
<body>
<?php
require_once "Drugs.php";
$id=$_GET["id2"];
$Nz= new Drugs();
$row=$Nz->select_by_id($id);
echo '<div class="wrap">';
echo '<div class="string">';
echo '<label>Name: </label>'.$row[1]." ".$row[2]."<br><br>";
echo '<label>Type: </label>'.$row[3]."<br><br>";
echo '<label>Indications: </label>'.$row[4]."<br><br>";
echo '<label>Contraindications: </label>'.$row[5]."<br><br>";
echo "<br><br><a href='CMS.php'> back </a>";
echo '</div>';
echo '</div>';
?>
</body>
</html>