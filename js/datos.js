$(document).ready(function(){

	var habitaciones = [];
	var datos = document.getElementById("datos");

	$("#guardarHabitacion").click(function(e){
		e.preventDefault();
		var tipoHabit = $("#tipo_habitacion").val();
		var nombreHabit = $("#nombre_habitacion").val();
		var numeroHabit = $("#numero_habitaciones").val();
		var camas = $("#camas").val();
		var numCamas = $("#numero_camas").val();


		var nuevaHabi = {
			'tipoHabit': tipoHabit,
			'nombreHabit': nombreHabit,
			'numero_camas':numero_camas,
			'camas':camas,
			'numCamas':numCamas
		}
		habitaciones.push(nuevaHabi);
		for (var i = 0; i < habitaciones.length; i++) {
			datos.innerHTML = habitaciones[i].tipoHabit+habitaciones[i].nombreHabit+habitaciones[i].numero_camas+habitaciones[i].camas+habitaciones[i].numCamas
		}
	})

	

	
})