<meta charset="utf-8">
<?




include 'header.php';



$tbl = $_GET[tbl];
$id = $_GET[id];
$col = $_GET[col];



$sqlcol = "SHOW COLUMNS FROM $tbl";


$rescol = mysql_query($sqlcol);



if(count($_GET) == 3){

$sql = "SELECT * FROM $tbl WHERE $col = '$id'";


$res = mysql_query($sql);




?>
<h2 style="font-size: 20px; font-weight: bold; margin-bottom: 10px;">Изменение записи</h2>
<form>
	<?
	while($data = mysql_fetch_array($rescol)){

		$colname = $data[Field];
		
		$sql = "SELECT $data[Field] FROM $tbl WHERE $col = '$id'";
		

		

		$res = mysql_query($sql);

		$data2 = mysql_fetch_array($res);

		

			echo"<label style='width=300px'>$data[Field]</label><input type='text' name='$data[Field]_edit' value='$data2[$colname]'><br>";
		
	}

	?>
	<input type="hidden" name="tbl" value="<? echo "$tbl"; ?>">
	<input type="hidden" name="id" value="<? echo "$id"; ?>">
	<input type="hidden" name="col" value="<? echo "$col"; ?>">
	<input type="submit" value="Изменить">	
</form>
<?
}else{



	unset($_GET[tbl]);
	unset($_GET[id]);
	unset($_GET[col]);
	



	foreach ($_GET as $key => $variable) {
	 	
		$value[] = $variable;
		
	}
	

	$i = 0;
	while($data = mysql_fetch_array($rescol)){

		$colname = $data[Field];
		
		$sql = "UPDATE $tbl SET $colname = '$value[$i]' WHERE $col = '$id'";

		$i++;
		mysql_query($sql);

		echo "$sql<br>";

		

		
		
	}



}
?>







