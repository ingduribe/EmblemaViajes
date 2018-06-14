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


	$("#btn_guardar_cliente").click(function(){
		var $certifico = $('input:checkbox[name=certifico]:checked').val();
		var $acepto = $('input:checkbox[name=acepto]:checked').val();
		if ($certifico && $acepto ) {
	    	registrar();
	    }else{
	    	alert('Debes seleccionar los campos de aceptar y certificar');
	    }

	})

	function registrar(){
		var datosCliente = [];
		var nuevoCliente = {};

		var $nombre = $("#nombre_cliente").val();
		var $direccion = $("#direccion_cliente").val();
		var $poblacion = $("#poblacion_cliente").val();
		var $provincia = $("#provincia_cliente").val();
		var $pais = $('select[name="pais"] option:selected').text();
		var $email = $("#email_cliente").val();
		var $telefono = $("#telefono_cliente").val();
		var $servicios_contratar = servicios;
		var $llegada = $('input[name="llegada"]').val();
		var $salida = $('input[name="salida"]').val();
		var $num_adultos = $("#adultos").val();
		var $num_ninos = $("#ninos").val();
		var $edad_ninos = $("#edad_ninos").val();
		var $observaciones = $("#observaciones").val();

		nuevoCliente = {
			'nombre':$nombre,
			'direccion':$direccion,
			'poblacion':$poblacion,
			'provincia':$provincia,
			'pais':$pais,
			'email':$email,
			'telefono':$telefono,
			'servicios':$servicios_contratar,
			'llegada':$llegada,
			'salida':$salida,
			'num_adultos':$num_adultos,
			'num_ninos':$num_ninos,
			'edad_ninos':$edad_ninos,
			'observaciones':$observaciones
		}

		datosCliente.push(nuevoCliente)

		$.ajax({
		      type: 'POST',
		      url: './server/registrar_cliente.php',
		      data: {'datos':JSON.stringify(datosCliente)}, 
		      cache: false,
		      success: function(response){
		        alert(response);
		      },
		      error: function(){
		        alert("error en la comunicación con el servidor");
		      }
		    })

		$("#nombre_cliente").val("");
		$("#direccion_cliente").val("");
		$("#poblacion_cliente").val("");
		$("#provincia_cliente").val("");
		document.querySelectorAll('[name=pais]').forEach((x) => x.selected=false);
		$("#email_cliente").val("");
		$("#telefono_cliente").val("");
		$('input[name="llegada"]').val("");
		$('input[name="salida"]').val("");
		$("#adultos").val("");
		$("#ninos").val("");
		$("#edad_ninos").val("");
		$("#observaciones").val("");
		servicios.splice(0,servicios.length);
		listarServicios();

	}
})



function Nota_Menor(json) {
//alert("estamos probando el valor menor")
var min=0;

for(var z=0;z<json.estudiantes.length;z++){
if (min<json.estudiantes[z].nota){
min = json.estudiantes[z].nota;
var nom =json.estudiantes[z].nombre;
}

}
var b="LA NOTA MENOR ES DE: "+"---" + " "+ nom + " : " +min;
document.getElementById("estudiantes").innerHTML=b;	
}