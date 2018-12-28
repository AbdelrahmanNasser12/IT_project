<?
require_once "connection.php";

class drugs extends connection
{
	function select_all()
	{
		parent::connect();
		$sql = "SELECT * FROM drugs";
		$result=mysql_query($sql);
		$num_of_rows=mysql_num_rows($result);
		for($i=0;$i<$num_of_rows;$i++)
		{
			$row=mysql_fetch_array($result);
			$arr[$i][0]=$row["id"];
			$arr[$i][1]=$row["Name"];
			$arr[$i][2]=$row["Concentration"];
			$arr[$i][3]=$row["Type"];
			$arr[$i][4]=$row["Indications"];
			$arr[$i][5]=$row["Contraindications"];
			$arr[$i][6]=$row["Photo"];
		}
		parent::disconnect();
		return $arr;	
	}
	
	
	function select_by_id($id)
	{
		parent::connect();
		$sql = "SELECT * FROM drugs where id=$id" ;
		$result=mysql_query($sql);
		$row=mysql_fetch_array($result);
		$arr[0]=$row["id"];
		$arr[1]=$row["Name"];
		$arr[2]=$row["Concentration"];
		$arr[3]=$row["Type"];
		$arr[4]=$row["Indications"];
		$arr[5]=$row["Contraindications"];
		$arr[6]=$row["Photo"];
			
		parent::disconnect();
		return $arr;	
	}
	
	function delete_by_id($id)
	{
		parent::connect();
		$sql = "delete from drugs where id=$id";
		$result=mysql_query($sql);
		parent::disconnect();
		if ($result)
		{	
			return true;
		}
		else
		{
			return false;
		}	
	}
	
	
	
}


?>