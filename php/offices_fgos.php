<?


include '../connect.php';

$type = $_POST['type'];
$special = $_POST['special'];

$query = "SELECT * FROM foundation_offices_fgos WHERE id_t_cabinet='$type' AND id_ppssz = '$special'";


$result = mysql_query($query) or die(mysql_error());

$i = 0;
while($data = mysql_fetch_array($result)){

	$return[$i][id] = $data[id_foundation];
	$return[$i][name] = $data[name];
	$i++;

}
echo json_encode($return);

?>