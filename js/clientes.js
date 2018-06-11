$(document).ready(function(){
	var tbody_s = $("#tbody_servi");
	var servicios = [];
	function listarServicios(){
		var tr = '';
		if (servicios.length >= 0) {
			for (var i = 0; i < servicios.length; i++) {
				tr += '<tr>';
				tr += '<td>'+servicios[i].servicio+'</td>';
				tr += '<td><button class="btn btn-danger eliminarSer" value="'+i+'">Eliminar</button></td>';
				tr += '</tr>';
			}
			tbody_s.html(tr);
		}
	}

	$("#add_servicios").click(function(e){
		e.preventDefault();
		var servicio = $("#servicios_contratar").val();
		var nuevoServicio = {
			'servicio':servicio
		}
		servicios.push(nuevoServicio);
		listarServicios();
	})

	$(document).on('click', '.eliminarSer',function(event){
		event.preventDefault();
		var index_elim = $(this).val();
		servicios.splice(index_elim,1);
		listarServicios();
	})
})