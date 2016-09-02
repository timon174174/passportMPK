<?


mysql_connect("localhost",timon,123);
mysql_select_db("mmd");
mysql_query("set names 'UTF8'");

$i = 1;
while ($i <= 80) {
	$path = "img/klishe/klishe ($i).jpg";
	$category = "Без категории";
	$sql = "INSERT INTO klishe(category, path) VALUES ('$category', '$path')";
	mysql_query($sql);
	echo "$sql";
	echo "<br>";
	$i++;
}



?>