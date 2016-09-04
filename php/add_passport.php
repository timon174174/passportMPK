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
$plakat = $_POST['plakat'];
$mat_tehn = $_POST['mat_tehn'];
$perspect = $_POST['perspect'];
$date = date("Y-m-d H:i:s");



$sql = "INSERT INTO `passport`(`id_audience`, `spr_t_cabinet_fgos`, `spr_department`, `disciplines`, `spr_ppssz`, `number_protokol`, `journal_date`, `temp_summer`, `temp_winter`, `fact_shum`, `ist_shum`, `type_light`, `fact_light`, `date_priem`,date)
VALUES ('$id_audience','$spr_t_cabinet_fgos','$spr_department','$disciplines','$spr_ppssz','$number_protokol','$journal_date','$temp_summer','$temp_winter','$fact_shum','$ist_shum','$type_light','$fact_light','$date_priem','$date')";

mysql_query($sql);

$sql = "SELECT id FROM passport ORDER BY id DESC LIMIT 1";
$result = mysql_query($sql);
$data = mysql_fetch_array($result);
$id_passport = $data[id];

if($allDisciplines) {
	foreach ($allDisciplines as $value) {
		$sql = "INSERT INTO passport_disciplines(id_discipline,id_passport)
	VALUES ('$value','$id_passport')";

		mysql_query($sql);
	}
}
if($instr) {
	foreach ($instr as $value) {
		$sql = "INSERT INTO passport_instr(id_instr,id_passport)
	VALUES ('$value','$id_passport')";

		mysql_query($sql);
	}
}

if($plakat){
	foreach($plakat as $value){

		$plakat_name = $value['name'];
		$plakat_count= $value['count'];
		$sql = "INSERT INTO passport_didact_mat (id_passport,didact_mat,didact_mat_gty)
VALUES ('$id_passport','$plakat_name','$plakat_count')";

		mysql_query($sql);
	}
}
if($mat_tehn){
	foreach($mat_tehn as $value){

		$mat_tehn_name = $value['name'];
		$mat_tehn_count = $value['count'];
		$mat_tehn_year = $value['year'];
		$sql = "INSERT INTO passport_didact_sredstva (id_passport,name,gty,year)
VALUES ('$id_passport','$mat_tehn_name','$mat_tehn_count','$mat_tehn_year')";

		mysql_query($sql);
	}
}
if($perspect){
	foreach($perspect as $value){

		$perspect_name = $value['name'];
		$perspect_count = $value['count'];
		$perspect_description = $value['description'];
		$sql = "INSERT INTO passport_perspect (id_passport,name,gty,description)
VALUES ('$id_passport','$perspect_name','$perspect_count','$perspect_description')";

		mysql_query($sql);
	}
}








?>