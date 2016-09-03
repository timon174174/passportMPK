<?
include "header.php";
?>

<?



?>
<form>
	<table>
		<tr><td><h1 class="h1_pasport">Паспорт аудитории</h1>
		</td>
		<td>
			<select name="audience" id="">
				<?

				$query = 'SELECT * FROM audience';

				$result = mysql_query($query) or die(mysql_error());

				while($data = mysql_fetch_array($result)){



					echo "<option value='$data[id]'>$data[number]</option>";

				}
				?>
			</select>
		</td>
	</tr>

	<tr><td>

		<label for="vent">Тип: </label>
	</td>
	<td>
		<select name="spr_t_cabinet_fgos" id="vent">
			<?

			$query = 'SELECT * FROM spr_t_cabinet_fgos';

			$result = mysql_query($query) or die(mysql_error());

			while($data = mysql_fetch_array($result)){



				echo "<option value='$data[id]'>$data[name]</option>";

			}
			?>

		</select>
	</td>
</tr>
<tr><td>

	<label>Специальность: </label>
</td>
<td>
	<select name="spr_ppssz" id="spr_ppssz" title="Специальность">

		<?
		$query = 'SELECT * FROM spr_ppssz';

		$result = mysql_query($query) or die(mysql_error());


		while($data = mysql_fetch_array($result)){



			echo "<option value='$data[id_specialty]'>$data[specialty] $data[name]</option>";

		}

		?>
	</select>
</td>
</tr>

<tr><td>
	
	<label>Отделение: </label>
</td>
<td>
	<select name="spr_department" id="">

		<?
		$query = 'SELECT * FROM spr_department';

		$result = mysql_query($query) or die(mysql_error());
		while($data = mysql_fetch_array($result)){



			echo "<option value='$data[id]'>№$data[id] $data[name]</option>";

		}

		?>
	</select>
</td>
</tr>

<tr><td>

	<label id="type2">то, что во 2: </label>
</td>
<td>
	<select name="disciplines" id="">

		<?
		$query = "SELECT * FROM foundation_offices_fgos";

		$result = mysql_query($query) or die(mysql_error());


		while($data = mysql_fetch_array($result)){



			echo "<option value='$data[id_foundation]'>$data[name]</option>";

		}

		?>
	</select>
</td>
</tr>



</table>


<h1 style="font-weight: bold; margin-bottom: 10px;">2.Программно-методическое обеспечение лаборатории/мастерской</h1>
<h1 style="font-style: italic;margin-bottom: 10px;">2.2 Программы профессиональных модулей, дисциплин и практик</h1>
<div id="disciplines_div" style="margin-bottom: 10px;">
	<select name="disciplines2" id="disciplines" multiple>


	</select>
</div>

<label style="margin-bottom: 5px;">№ протокола ПЦК, дата утверждения: </label><input type="text" value="" style="margin-bottom: 10px;" name="number_protokol">
<h1 style="font-style: italic;margin-bottom: 10px;" >2.3 Перечень таблиц, плакатов и других дидактических материалов</h1>
<table class="per_tbl" style="margin-bottom: 10px;">
	<tr>
		<td style="width: 400px">Наименование</td>
		<td>Количество</td>
	</tr>

</table>
<input type="button" value="Добавить" id="add_per_tbl" style="margin-bottom: 10px;">

<h1 style="font-weight: bold; margin-bottom: 10px;">3.Организационная оснащенность лаборатории/мастерской</h1>
<h1 style="font-style: italic;">3.1 Инструкции по ТБ, ОТ, ПБ и ОТ при проведении лабораторно/практических работ</h1>
<div id="spr_instr_div" >
	<select name="spr_inst" id="spr_instr_select" multiple style="margin-bottom: 10px;">

		<?
		$query = 'SELECT * FROM spr_instr';

		$result = mysql_query($query) or die(mysql_error());


		while($data = mysql_fetch_array($result)){



			echo "<option value='$data[id]'>$data[name]</option>";

		}

		?>
	</select>
</div>


<!-- <h1 style="font-style: italic; margin-bottom: 10px;">3.2 Инструкции по ОТ при проведении лабораторно/практических работ</h1>
<div id="spr_instr_p_div" >
	<select name="spr_instr_p" id="spr_instr_p_select" multiple style="margin-bottom: 10px;">

		<?
		$query = 'SELECT * FROM spr_instr WHERE types_instructions = "П"';

		$result = mysql_query($query) or die(mysql_error());


		while($data = mysql_fetch_array($result)){



			echo "<option value=''>$data[name]</option>";

		}

		?>
	</select></div> -->

	<h1 style="font-style: italic; margin-bottom: 10px; margin-bottom: 10px;">3.3 Журнал регистрации инструктажей на рабочем месте</h1>
	<input type="checkbox" id="checkbox_journal" value="1" style="margin-bottom: 10px;"><div style="display: none;" id="journal_regis"><label> ведется с </label><input type="date" name="journal_date"></div>





	<h1 style="font-weight: bold;">4.Материально-техническое оснащение лаборатории/мастерской</h1>
	<h1 style="font-style: italic;">Перечень электронных плакатов, дидактических средств и прочих материалов</h1>
	<table class="per_tbl1">
		<tr>
			<td style="width: 400px">Наименование</td>
			<td>Кол-во</td>
			<td>Год приобретения</td>
		</tr>

	</table>
	<input type="button" value="Добавить" id="add_per_tbl1">
	<h1 style="font-weight: bold;">7.Организационно-эргономический уровень рабочих мест</h1>
	<h1 style="font-style: italic;">7.1 Соответствие площади технологическим нормам</h1>
	<label for="">Количество посадочых мест</label>
	<input type="text" name="number_jobs">
	<h1 style="font-style: italic;">7.2 Температурный режим</h1>

	<table class="soot_temp">
		<tr>
			<td>Температура в летний период, град. C</td>
			<td>Температура в зимний период, град. C</td>

		</tr>
		<tr>
			<td><input type="text" name="temp_summer" value=""></td>
			<td><input type="text" name="temp_winter" value=""></td>

		</tr>
	</table>



	<h1 style="font-style: italic;">7.3 Уровень шума</h1>

	<table class="soot_temp">
		<tr>
			<td>Фактический уровень шума, Дб</td>
			<td>Источник шума</td>
		</tr>
		<tr>
			<td><input type="text" name="fact_shum"></td>
			<td><input type="text" name="ist_shum"></td>
		</tr>
	</table>








	<h1 style="font-style: italic;">7.4 Уровень освещенности</h1>

	<table class="soot_temp">
		<tr>
			<td>Вид освещенности</td>
			<td>Фактическая освещенность</td>
		</tr>
		<tr>
			<td>Естественная</td>
			<td><input type="text" name="fact_light" value="">
            </td>
		</tr>
        <tr>
			<td>Искуственная</td>
			<td><input type="text" name="fact_light" value=""></td>
		</tr>

	</table>




	<h1 style="font-style: italic;">7.4 Обеспеченность спец. одеждой и индивидуальными защитными средствами</h1>

	<table class="soot_temp">
		<tr>
			<td>№п/п</td>
			<td>Наименование СО и индивидуальных ЗС</td>
			<td>Количество</td>
		</tr>
		<tr>
			<td><input type="text"></td>
			<td><input type="text"></td>
			<td>
				<input type="text">
			</td>
		</tr>
	</table>
	<h1 style="font-weight: bold;">8.Перспективное планирование</h1>
	<h1 style="font-style: italic;">Перечень оборудования,	 электронных плакатов, дидактических средств и прочих материалов</h1>
	<table class="perspect">
		<tr>
			<td style="width: 400px">Наименование</td>
			<td>Кол-во</td>
			<td>Примечание</td>
		</tr>

	</table>
	<input type="button" value="Добавить" id="add_perspect">
	<h1 style="font-weight: bold;">9. Дата ежегодной приемки</h1>
	От <input type="date" name="date_priem">
	<input type="button" name="" value="Сохранить" id="add_passport">








</form>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>



</body>

</html> 
