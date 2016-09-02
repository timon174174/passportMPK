$(document).ready(function(){
	updateOfficesFgos();
	function updateOfficesFgos(){
		var type = $("select[name='spr_t_cabinet_fgos'] option:selected").val();
		console.log
		var special = $("select[name='spr_ppssz'] option:selected").val();
		var select = $("select[name='disciplines']");

		$.ajax({
			type: "POST",
			dataType:"json",
			url: "php/offices_fgos.php", 
			data: {type:type,
				special:special},
				success: function(data) {
					select.html(""); 
					$.each(data, function(key, value) {
						select
						.append($("<option></option>")
							.attr("value",value["id"])
							.text(value["name"])); 
					});
					

				},
				error: function(xhr){
					console.log(xhr);
				}
			});


	}
	$("select[name='spr_t_cabinet_fgos']").change(function(event) {
		updateOfficesFgos();
	});
	$("select[name='spr_ppssz']").change(function(event) {
		updateOfficesFgos();
	});

	var solDisciplines;
	var ppssz = $("#spr_ppssz").children(":selected").val();
	var f = $( "#vent option:selected" ).text();


	$.ajax({
		type: "POST",
		dataType:"json",
		url: "refrppssz.php", 
		data: {ppssz:ppssz},
		success: function(data) {
			
			var i=0;
			var arr = new Array();
			$.each(data, function(index, value){
				arr[i] = new Array();
				arr[i]["type"] = "option";
				arr[i]["label"] = value["index_discipline"]+" "+value["name"];
				arr[i]["value"] = value["id"];
				i++;

			});

			
			
			solDisciplines = $("#disciplines").searchableOptionList({


				data:arr,

				maxHeight: '250px',
				texts: {
					searchplaceholder: 'Выберите ПМ, дисциплину или практики'
				},
				

				
			});





		},
		error: function(xhr){
			console.log(xhr);
		}
	});
	

	
	$("#type2").html(f);

	$('#add_per_tbl').click(function(){

		$(".per_tbl").append('<tr><td><input type="text" name="plakat_name"></td><td><input type="text" name="plakat_count"></td><td><a class="delete_row">Удалить</a></td></tr>');


		$(".delete_row").click(function(){
			
			$(this).parent().parent().remove();
		});
	});




	$("#vent").change(function(){

		var f = $( "#vent option:selected" ).text();

		
		$("#type2").html(f);
	});

	$("#checkbox_journal").change(function(){
		if ($(this).prop("checked")) {
			$("#journal_regis").css("display","initial")
		}
		if (!$(this).prop("checked")) {
			$("#journal_regis").css("display","none")
		}
		
		

	})
	$('#add_per_tbl1').click(function(){

		$(".per_tbl1").append('<tr><td><input type="text" name="material_tehn_name"/></td><td><input type="text" name="material_tehn_count"/></td><td><input type="text" name="material_tehn_year"/></td><td><a class="delete_row">Удалить</a></td></tr>');
			

		$(".delete_row").click(function(){
			
			$(this).parent().parent().remove();
		});
	});

	$("#spr_ppssz").change(function(){
		$("#disciplines_div").html("");
		$("#disciplines_div").html("<select name='disciplines' id='disciplines' multiple></select>");

		ppssz = $("#spr_ppssz").children(":selected").val();
		$.ajax({
			type: "POST",
			dataType:"json",
			url: "refrppssz.php", 
			data: {ppssz:ppssz},
			success: function(data) {
				
				var i=0;
				var arr = new Array();
				$.each(data, function(index, value){
					arr[i] = new Array();
					arr[i]["type"] = "option";
					arr[i]["label"] = value["index_discipline"]+" "+value["name"];
					arr[i]["value"] = value["id"];
					i++;

				});

				solDisciplines = $("#disciplines").searchableOptionList({


					data:arr,

					maxHeight: '250px',
					texts: {
						searchplaceholder: 'Выберите ПМ, дисциплину или практики'
					},



				});
				
				


			},
		})



	})


	var solInstr = $("#spr_instr_select").searchableOptionList({
		maxHeight: '250px',
		texts: {
			searchplaceholder: 'Инструкции по ТБ, ОТ, ПБ и ОТ'
		},

	});

	$("#spr_instr_p_select").searchableOptionList({
		maxHeight: '250px',
		texts: {
			searchplaceholder: 'Выберите ПМ, дисциплину или практики'
		},
	});

	$("#add_passport").click(function(event) {
		var id_audience = $("select[name='audience']>option:checked").val();
		var spr_t_cabinet_fgos = $("select[name='spr_t_cabinet_fgos']>option:checked").val();
		var spr_department = $("select[name='spr_department']>option:checked").val();
		var disciplines = $("select[name='disciplines']>option:checked").val();
		var spr_ppssz = $("select[name='spr_ppssz']>option:checked").val();
		var number_protokol = $("input[name='number_protokol']").val();
		var journal_date = $("input[name='journal_date']").val();
		var temp_summer = $("input[name='temp_summer']").val();
		var temp_winter = $("input[name='temp_winter']").val();
		var fact_shum = $("input[name='fact_shum']").val();
		var ist_shum = $("input[name='ist_shum']").val();
		var type_light = $("input[name='type_light']").val();
		var fact_light = $("input[name='fact_light']").val();
		var date_priem = $("input[name='date_priem']").val();
		var allDisciplines = new Array;
		var instr = new Array;
		
		$.each(solDisciplines.getSelection(), function(index, value) {
			allDisciplines[index] = value["value"];
		});
		$.each(solInstr.getSelection(), function(index, value) {
			instr[index] = value["value"];
		});


		


		$.ajax({
			type: "POST",
			url: "php/add_passport.php", 
			data: {
				id_audience:id_audience,
				spr_t_cabinet_fgos:spr_t_cabinet_fgos,
				spr_department:spr_department,
				disciplines:disciplines,
				spr_ppssz:spr_ppssz,
				number_protokol:number_protokol,
				journal_date:journal_date,
				temp_summer:temp_summer,
				temp_winter:temp_winter,
				fact_shum:fact_shum,
				ist_shum:ist_shum,
				type_light:type_light,
				fact_light:fact_light,
				date_priem:date_priem,
				allDisciplines:allDisciplines,
				instr:instr
			},
			success: function(data) {
				
				alert("Всё хорошо");
				console.log(data);


			},
			error: function(xhr) {
				alert("Всё плохо");
				console.log(xhr);
			},
		})
		



	});





});