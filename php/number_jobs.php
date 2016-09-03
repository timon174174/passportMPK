<?php

include "../connect.php";

$id_audience = $_POST[id_audience];
$sql = "SELECT number_jobs FROM audience WHERE id='$id_audience'";
$query = mysql_query($sql);
$result = mysql_fetch_array($query);
echo $result['number_jobs'];


?>