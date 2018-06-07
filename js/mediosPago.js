$(document).ready(function(){
	var minE = 1;
	var minS = 1;
	var maxE = 24;
	var maxS = 24;
	var hora_entrada = $("#hora_entrada");
	var hora_salida = $("#hora_salida");


	for (var i = minE; i <= maxE; i++) {
		var optionE = document.createElement('option');
		optionE.value = i;
		optionE.innerHTML = i;
		hora_entrada.append(optionE);

	}

	for (var i = minS; i <= maxS; i++) {
		var optionS = document.createElement('option');
		optionS.value = i;
		optionS.innerHTML = i;
		hora_salida.append(optionS);

	}
	
})