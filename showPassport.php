<?php
include 'header.php';

$passport_id = $_GET['passport'];

$sql = "SELECT * FROM passport WHERE id='$passport_id'";
$result = mysql_query($sql);
$data = mysql_fetch_array($result);
?>
<h1 style="text-align: center;font-weight: bold;font-size: 20px;">Паспорт</h1>
<?

$sql_spr_t_cabinet = "SELECT * FROM spr_t_cabinet_fgos WHERE id='$data[spr_t_cabinet_fgos]'";
$result_spr_t_cabinet = mysql_query($sql_spr_t_cabinet);
$data_spr_t_cabinet = mysql_fetch_array($result_spr_t_cabinet);

$sql_spr_ppssz = "SELECT * FROM spr_ppssz WHERE id_specialty='$data[spr_ppssz]'";
$result_spr_ppssz = mysql_query($sql_spr_ppssz);
$data_spr_ppssz = mysql_fetch_array($result_spr_ppssz);

?>
<p style="text-align: center"><?echo $data_spr_t_cabinet[name];?></p>
<p><?echo $data_spr_t_cabinet[name]." ".$data_spr_ppssz[specialty]." ".$data_spr_ppssz[name];?> </p>
<p>Специальность<?echo $data_spr_t_cabinet[name]." ".$data_spr_ppssz[specialty]." ".$data_spr_ppssz[name];?> </p>
2.Программно-методическое обеспечение лаборатории\мастерской




