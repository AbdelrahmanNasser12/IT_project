<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Search</title>
	<link rel="stylesheet" type="text/css" href="../css/Search.css">
	<link href="https://fonts.googleapis.com/css?family=Flamenco" rel="stylesheet">
</head>
<body>
<?php
require_once "connection.php";
$name=$_POST["sname"];
$con= new connection();
$con->connect();
$sql =mysql_query("SELECT * FROM drugs WHERE Name='$name'");
$row;
$arr;
if(!($_SESSION["userName"]=="")){
	if(mysql_num_rows($sql)>0)
	{
	   $num_of_rows=mysql_num_rows($sql);
			for($i=0;$i<$num_of_rows;$i++)
			{
				$row=mysql_fetch_array($sql);
				$arr[$i][0]=$row["id"];
				$arr[$i][1]=$row["Name"];
				$arr[$i][2]=$row["Concentration"];
				$arr[$i][3]=$row["Type"];
				$arr[$i][4]=$row["Indications"];
				$arr[$i][5]=$row["Contraindications"];
				$arr[$i][6]=$row["Photo"];
			}

			for($i=0;$i<$num_of_rows;$i++)
			{
				echo '<div class="wrapper">';
			    echo '<div class="string">';
				echo '<label>Name: </label>'.$arr[$i][1]."<br><br>";
				echo '<label>Concentration: </label>'.$arr[$i][2]."<br><br>";
				echo '<label>Type: </label>'.$arr[$i][3]."<br><br>";
				echo '<label>Indications: </label>'.$arr[$i][4]."<br><br>";
				echo '<label>Contraindications: </label>'.$arr[$i][5];
				echo '</div>';
				echo '</div>';
			}
	}
	else
	{
			$q=mysql_query("SELECT * FROM drugs WHERE Name LIKE '%$name%'");
			$num_of_rows=mysql_num_rows($q);
			for($i=0;$i<$num_of_rows;$i++)
			{
				$row=mysql_fetch_array($q);
				$arr[$i][0]=$row["id"];
				$arr[$i][1]=$row["Name"];
				$arr[$i][2]=$row["Concentration"];
				$arr[$i][3]=$row["Type"];
				$arr[$i][4]=$row["Indications"];
				$arr[$i][5]=$row["Contraindications"];
				$arr[$i][6]=$row["Photo"];
			}

			for($i=0;$i<$num_of_rows;$i++)
			{
				echo '<div class="wrap">';
				echo '<div class="string">';
				echo '<label>Name: </label>'.$arr[$i][1]."<br><br>";
				echo '<label>Concentration: </label>'.$arr[$i][2]."<br><br>";
				echo '<label>Type: </label>'.$arr[$i][3]."<br><br>";
				echo '<label>Indications: </label>'.$arr[$i][4]."<br><br>";
				echo '<label>Contraindications: </label>'.$arr[$i][5];
				echo '</div>';
				echo '</div>';
			}
	}
}
else
{
	header("location:login.php");
}

$con->disconnect();
?>
</body>
</html>
