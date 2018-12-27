<?php
require_once "Drugs.php";

$id=$_GET["id2"];

$Nz= new Drugs();
$row=$Nz->select_by_id($id);

?>


<form action="update_ok.php" method="post">

<input type="hidden" name="id3" value="<?php echo $id;?>">
Name:
<input type="text" name="dname" id="dname" value="<?php echo $row[1];?>" style="font-size: 18pt; height: 40px; width:280px; ">
<br>
<br>
Type
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
Concentration
<input type="text" name="dconc" id="dconc" value="<?php echo $row[2];?>" style="font-size: 18pt; height: 40px; width:280px; ">
<br>
Indications
<input type="text" name="dInd" id="dInd" value="<?php echo $row[4];?>"style="font-size: 18pt; height: 40px; width:280px; ">
<br>
Contraindications
<input type="text" name="dcont" id="dcont" value="<?php echo $row[5];?>" style="font-size: 18pt; height: 40px; width:280px; ">
<br>
photo
<input type="file" name "dphoto" id ="dphoto" value="<?php echo $row[6];?>">
<br>
<input type="submit" value="update">
</form>