<meta charset="utf-8">
<?




include 'header.php';



$tbl = $_GET[tbl];



$sqlcol = "SHOW COLUMNS FROM $tbl";


$rescol = mysql_query($sqlcol);

if(count($_GET) == 1){
?>
<h2 style="font-size: 20px; font-weight: bold; margin-bottom: 10px;">Добавление записи</h2>
<form>
	<?
	while($data = mysql_fetch_array($rescol)){

		

		


		

			echo"<label>$data[Field]</label><input type='text' name='$data[Field]_edit'><br>";
		
	}

	?>
	<input type="hidden" name="tbl" value="<? echo "$tbl"; ?>">
	<input type="submit" value="Добавить">	
</form>
<?
}else{

	unset($_GET[tbl]);
	$i = 0;
	$sql = "INSERT INTO $tbl VALUES (";
	foreach ($_GET as $key => $variable) {
	 	
		$value[] = $variable;
		
	}


	while($data = mysql_fetch_array($rescol)){

		
		
		$sql .= "'$value[$i]', ";

		
		$i++;
		

		

		
		
	}
	$sql .= ")";
	mysql_query($sql);
	echo "$sql<br>";






}
?>