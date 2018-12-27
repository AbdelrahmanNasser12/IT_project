<form action="insert_ok.php" method="post">
Name:
<input type="text" name="dname" id="dname" style="font-size: 18pt; height: 40px; width:280px; ">
<br>
<br>
Type
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
Concentration
<input type="text" name="dconc" id="dconc" style="font-size: 18pt; height: 40px; width:280px; ">
<br>
Indications
<input type="text" name="dInd" id="dInd" style="font-size: 18pt; height: 40px; width:280px; ">
<br>
Contraindications
<input type="text" name="dcont" id="dcont" style="font-size: 18pt; height: 40px; width:280px; ">
<br>
photo
<input type="file" name "dphoto" id ="dphoto" size="50">
<br>
<input type="submit" value="Insert">
</form>