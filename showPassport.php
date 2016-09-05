<?php
include 'header.php';

$passport_id = $_POST['passport'];

$sql = "SELECT * FROM passport WHERE id='$passport_id'";
$result = mysql_query($sql);
$data = mssql_fetch_array($result);


?>