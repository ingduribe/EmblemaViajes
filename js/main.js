$(document).ready(function(){
	$( "#datepickerLlegada" ).datepicker();
	$( "#datepickerSalida" ).datepicker();

	$( "#RegistroHoteles" ).click(function(){
		$("#formHoteles1").dialog({
			modal:true,
			resizable:true,
			width: '95vw',
			dialogClass: "no-close success-dialog"
		});
	});

	$("#cerrarDialog").click(function(){
		$("#formHoteles1").dialog('close');
	}) 

	
	
})

