$(document).ready(function(){

	var habitaciones = [];
	var tbody = $("#tbody");

	$("#guardarHabitacion").click(function(e){
		e.preventDefault();
		var tipoHabit = $("#tipo_habitacion").val();
		var nombreHabit = $("#nombre_habitacion").val();
		var numeroHabit = $("#numero_habitaciones").val();
		var camas = $("#camas").val();
		var numCamas = $("#numero_camas").val();
		var camasS = $("#camasSupletorias").val();
		var cunas = $("#cunas").val();
		var index = habitaciones.length;


		var nuevaHabi = {
			'index': index,
			'tipoHabit': tipoHabit,
			'nombreHabit': nombreHabit,
			'numeroHabit':numeroHabit,
			'camas':camas,
			'numCamas':numCamas,
			'camasS':camasS,
			'cunas':cunas
		}

		habitaciones.push(nuevaHabi);
		console.log(habitaciones);
		var data = '';

		if (habitaciones.length>0) {
			for (i = 0; i < habitaciones.length; i++) {
				data += '<tr class="fila">';
		        data += '<td>' + habitaciones[i].nombreHabit + '</td>';
		        data += '<td>' + habitaciones[i].numeroHabit + '</td>';
		        data += '<td>' + habitaciones[i].camas + '</td>';
		        data += '<td>' + habitaciones[i].numCamas + '</td>';
		        data += '<td>' + habitaciones[i].camasS + '</td>';
		        data += '<td>' + habitaciones[i].cunas + '</td>';
		        data += '</tr>';
		        if (index>0) {
		        	$(".fila").remove();
		        }
		        tbody.append(data);
		        
			}
		}
		
		$("#tipo_habitacion").val("Tipo de habitación")
		$("#nombre_habitacion").val("Nombre de habitacion");
		$("#numero_habitaciones").val("Numero de habitaciones");
		$("#camas").val("Camas");
		$("#numero_camas").val("Numero de camas");	
		$("#camasSupletorias").val("Si");
		$("#cunas").val("Si")	
	})

	
})