<?
include 'header.php';
$sql = "SELECT * FROM passport";
$result = mysql_query($sql) or die(mysql_error());
?>
<table>
	<tr>
		<td>
			Аудитория
		</td>
		<td>
			Тип
		</td>
		<td>
		</td>
	</tr>
	<?
	while($data = mysql_fetch_array($result)){
		?>
		<tr>
		<td>
			<?
			$query = "SELECT number FROM audience WHERE id=$data[id_audience]";
			
			$result2 = mysql_query($query) or die(mysql_error());
			$data2 = mysql_fetch_array($result2);
			echo "$data2[number]";
			?>
		</td>
		<td>
			<?
			$query = "SELECT name FROM spr_t_cabinet_fgos WHERE id=$data[spr_t_cabinet_fgos]";
			
			$result3 = mysql_query($query) or die(mysql_error());
			$data3 = mysql_fetch_array($result3);
			echo "$data3[name]";
			?>
		</td>
		<td>
			<a href='editPassport.php?passport=<?echo "$data[id]"; ?>'>Изменить</a>
		</td>
		<td>
			<a href="showPassport.php?passport=<?echo "$data[id]";?>">Просмотр</a>
		</td>
	</tr>

	
	<?
}
?>
</table>
