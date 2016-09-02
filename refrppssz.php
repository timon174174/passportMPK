<?


include 'connect.php';

$ppssz = $_POST[ppssz];



$sql = "SELECT index_discipline, name,id FROM disciplines WHERE ppsz = $ppssz";



$result = mysql_query($sql);
$i = 0;
while($data = mysql_fetch_array($result)){

	$return[$i][index_discipline] = $data[index_discipline];
	$return[$i][name] = $data[name];
	$return[$i][id] = $data[id];
	$i++;

}



echo json_encode($return);





?>