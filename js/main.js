$(document).ready(function(){
	$( "#datepickerLlegada" ).datepicker();
	$( "#datepickerSalida" ).datepicker();

	$( "#ServiviosHabitacion" ).click(function(){
		$("#serviHabita").dialog({
			modal:true,
			resizable:true,
			width: '80vw',
			dialogClass: "no-close success-dialog",
			dateFormat: "yyyy-MM-dd"
		});
	});

	$("#cerrarDialog").click(function(){
		$("#serviHabita").dialog('close');
	}) 
	
})

