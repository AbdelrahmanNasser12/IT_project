<!DOCTYPE html>
<html>
<head>
	<title>Insert</title>
	<link rel="stylesheet" type="text/css" href="../css/insert.css">
	<link href="https://fonts.googleapis.com/css?family=Flamenco" rel="stylesheet">

</head>
<body>
<div class="wrap">
<form action="insert_ok.php" method="post">
<label>Name</label>
<input type="text" name="dname" id="dname" style="font-size: 18pt; height: 40px; width:280px; ">
<br>
<br>
<label>Type</label>
<select name="dtype" id="dtype">

<?php
$arr=array("Antibiotics","Antipyretics","Analgesics","Mood stabilizers","Antiseptics","Hormone replacements");

for ($i=0;$i<=5;$i++)
{
echo "<option value='".$arr[$i]."'>".$arr[$i]."</option>";
}
?>
</select>
<br>
<br>
<label>Concentration</label>
<input type="text" name="dconc" id="dconc" style="font-size: 18pt; height: 40px; width:280px; ">
<br>
<label>Indications</label>
<input type="text" name="dInd" id="dInd" style="font-size: 18pt; height: 40px; width:280px; ">
<br>
<label>Contraindications</label>
<input type="text" name="dcont" id="dcont" style="font-size: 18pt; height: 40px; width:280px; ">
<br>
<input type="submit" value="Insert">
</form>
</div>
</body>
</html>