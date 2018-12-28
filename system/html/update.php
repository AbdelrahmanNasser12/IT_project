<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
	<link rel="stylesheet" type="text/css" href="../css/update.css">
	<link href="https://fonts.googleapis.com/css?family=Flamenco" rel="stylesheet">
</head>
<body>
<?php
require_once "Drugs.php";

$id=$_GET["id2"];

$Nz= new Drugs();
$row=$Nz->select_by_id($id);

?>

<div class="wrap">
<form action="update_ok.php" method="post">

<input type="hidden" name="id3" value="<?php echo $id;?>">
<label>Name</label>
<input type="text" name="dname" id="dname" value="<?php echo $row[1];?>" style="font-size: 18pt; height: 40px; width:280px; ">
<br>
<br>
<label>Type</label>
<select name="dtype" id="dtype" value="<?php echo $row[3];?>">

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
<input type="text" name="dconc" id="dconc" value="<?php echo $row[2];?>" style="font-size: 18pt; height: 40px; width:280px; ">
<br>
<label>Indications</label>
<input type="text" name="dInd" id="dInd" value="<?php echo $row[4];?>"style="font-size: 18pt; height: 40px; width:280px; ">
<br>
<label>Contraindications</label>
<input type="text" name="dcont" id="dcont" value="<?php echo $row[5];?>" style="font-size: 18pt; height: 40px; width:280px; ">
<br>
<input type="submit" value="update">
</form>
</div>
</body>
</html>