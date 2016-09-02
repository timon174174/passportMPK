<?


include 'connect.php';


$tbl = $_GET[tbl];
$id = $_GET[id];
$col = $_GET[col];

$sql = "DELETE  FROM $tbl WHERE $col = '$id'";

mysql_query($sql);
echo "$sql";



?>