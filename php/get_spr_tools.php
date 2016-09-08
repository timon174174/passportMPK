<?php

include '../connect.php';
$id_audience = $_POST['audience'];

$sql = "SELECT spr_tools.name,spr_tools.id FROM spr_tools WHERE audience = '$id_audience'";

$result =  mysql_query($sql);

$i = 0;
while($data = mysql_fetch_array($result)){

    $return[$i][id] = $data[id];
    $return[$i][name] = $data[name];
    $i++;

}
echo json_encode($return);

?>