<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Паспорт аудитории</title>
	<link rel="stylesheet" type="text/css" href="reset.css">
	<link rel="stylesheet" type="text/css" href="main.css">
	<link rel="stylesheet" href="sol.css">
	
	
	<link rel="stylesheet" href="style.css">
	<?
	include 'connect.php';
	?>
	<script src="js/jquery-2.2.4.min.js"></script>
	<script src="js/jquery.ui-slider.js"></script>
	<script src="js/script.js"></script>
	<script type="text/javascript" src="sol.js"></script>
</head>
<body>
	<div class="container">
		<header class="header" role="banner">
			<div class="bgr">
				<a href="/" class="logo"></a>
				<div class="fgbou-vpo">Федеральное государственное бюджетное образовательное учреждение высшего профессионального образования</div>
				<div class="mgtu">магнитогорский государственный технический университет им. Г.И. Носова</div>
				<div class="mpk">Многопрофильный колледж</div>
				<div class="pasport">Паспорт лаборатории, мастерской</div>
			</div>





			<div class="header-crn"></div>
			<div class="bgr2"><div><a href="tables.php">Редактирование справочников</a></div></div>
			<div class="clear"></div>
			<div class="menu_bgr">
				<div class="menu">
					<div class="usr_menu"><ul>
						<li>Ввод</li>
						<a href="passports.php" style="color:white;"><li>Редактирование</li></a>
						<li>Просмотр</li>
						<li>Печать</li>
					</ul>
				</div>

				<div class="admin_menu">

					<ul class="level1">
						<li>Справочники</li>
						<div class="level2">
							<ul>
								<li id="three"><a href="#three">Организационная оснащенность</a></li>
								<div class="level3">
									<ul>
										<li><a href="spr_t_instr.php">Справочник видов инструкций</a></li>
										<li><a href="spr_instr.php">Справочник инструкций</a></li>
										<li><a href="workplace_teacher.php">Рабочее место преподавателя</a></li>
									</ul>
								</div>
								<li id="two"><a href="#two">Программно-методическое обеспечение</a></li>
								<div class="level3">
									<ul>
										<li><a href="disciplines.php">Справочник дисциплин</a></li>
										<li><a href="spr_ok.php">Справочник ОК</a></li>
										<li><a href="spr_pk.php">Справочник ПК</a></li>
										<li><a href="spr_ppssz.php">Справочник ППССЗ</a></li>
										<li><a href="read_disciplines.php">Справочник читаемых дисциплин</a></li>
									</ul>
								</div>
								<li id="four"><a href="#four">Организационно-эргономический уровень</a></li>
								<div class="level3">
									<ul>
										<li><a href="spr_vent.php">Справочник типов вентиляции</a></li>
										<li><a href="ventilation.php">Воздухообмен</a></li>
										<li><a href="special_clothing.php">Спецодежда</a></li>
										<li><a href="spr_san_pin.php">Справочник норм СанПин</a></li>
										<li><a href="indicator_ergonomic.php">Показатели эргономики</a></li>
									</ul>
								</div>
								<li id="one"><a href="#one">Материально-техническое оснащение</a></li>
								<div class="level3">
									<ul>
										<li><a href="spr_mto.php">Справочник видов МТО</a></li>
										<li><a href="spr_t_mto.php">Справочник МТО</a></li>
										<li><a href="spr_po.php">Справочник ПО</a></li>
										<li><a href="spr_tools.php">Справочник инструментов</a></li>
										<li><a href="spr_electrics.php">Справочник электрооборудова-ния</a></li>
									</ul>
								</div>
							</ul>
						</div>
					</ul></div></div></div>
					<div class="menu_bgr2"></div>
					<div class="clear"></div>

				</header>

