<?
include '../connect.php';
$id_audience = $_POST['id_audience'];
$spr_t_cabinet_fgos = $_POST['spr_t_cabinet_fgos'];
$spr_department = $_POST['spr_department'];
$disciplines = $_POST['disciplines'];
$spr_ppssz = $_POST['spr_ppssz'];
$number_protokol = $_POST['number_protokol'];
$journal_date = $_POST['journal_date'];
$temp_summer = $_POST['temp_summer'];
$temp_winter = $_POST['temp_winter'];
$fact_shum = $_POST['fact_shum'];
$ist_shum = $_POST['ist_shum'];
$type_light = $_POST['type_light'];
$fact_light = $_POST['fact_light'];
$date_priem = $_POST['date_priem'];
$allDisciplines = $_POST['allDisciplines'];
$instr = $_POST['instr'];



$sql = "INSERT INTO `passport`(`id_audience`, `spr_t_cabinet_fgos`, `spr_department`, `disciplines`, `spr_ppssz`, `number_protokol`, `journal_date`, `temp_summer`, `temp_winter`, `fact_shum`, `ist_shum`, `type_light`, `fact_light`, `date_priem`)
VALUES ('$id_audience','$spr_t_cabinet_fgos','$spr_department','$disciplines','$spr_ppssz','$number_protokol','$journal_date','$temp_summer','$temp_winter','$fact_shum','$ist_shum','$type_light','$fact_light','$date_priem')";

mysql_query($sql);

$sql = "SELECT id FROM passport ORDER BY id DESC LIMIT 1";
$result = mysql_query($sql);
$data = mysql_fetch_array($result);
$id_passport = $data[id];


foreach ($allDisciplines as $value) {
	$sql = "INSERT INTO passport_disciplines(id_discipline,id_passport)
	VALUES ('$value','$id_passport')";
	
	mysql_query($sql);
}
foreach ($instr as $value) {
	$sql = "INSERT INTO passport_instr(id_instr,id_passport)
	VALUES ('$value','$id_passport')";
	
	mysql_query($sql);
}








?>