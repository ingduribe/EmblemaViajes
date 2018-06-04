$(document).ready(function(){
	$( "#datepickerLlegada" ).datepicker();
	$( "#datepickerSalida" ).datepicker();

	$( "#ServiviosHabitacion" ).click(function(){
		$("#serviHabita").dialog({
			modal:true,
			resizable:true,
			width: '80vw',
			dialogClass: "no-close success-dialog"
		});
	});

	$("#cerrarDialog").click(function(){
		$("#serviHabita").dialog('close');
	}) 
	
})

