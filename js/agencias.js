$(document).ready(function(){
	

	$("#btn_guardar_agencia").click(function(){
		var $certifico = $('input:checkbox[name=certifico]:checked').val();
		var $acepto = $('input:checkbox[name=acepto]:checked').val();
		if ($certifico && $acepto ) {
	    	registrar();
	    }else{
	    	alert('Debes seleccionar los campos de aceptar y certificar');
	    }

	})

	function registrar(){
			var datosAgencia = [];
			var nuevaAgencia = {};

			var $nombre_agencia = $("#nombre_agencia").val();
			var $numero_fiscal = $("#numero_fiscal").val();
			var $segmento_agencia = $("#segmento_agencia").val();
			var $iata = $("#iata").val();
			var $asociacion = $('input:radio[name=asoc_agencias]:checked').val();
			if (typeof $asociacion == "undefined") {
	            $asociacion = "No especifica"
	        }
	        var $consorcio = $("#consorcio").val();
	        var $direccion = $("#direccion_agencia").val();
	        var $ciudad = $("#ciudad_agencia").val();
	        var $pais = $('select[name="pais"] option:selected').text();
	        var $cp = $("#cp").val();
	        var $nombre_personal = $("#nombre").val();
	        var $apellidos_personal = $("#apellidos").val();
	        var $telefono_personal = $("#telefono").val();
	        var $email_personal = $("#email").val();
	        var $idioma_pref = $("#idioma_pref").val();
	        var $observaciones = $("#observaciones").val();

			nuevaAgencia = {
				'nombre':$nombre_agencia,
				'numero_fiscal': $numero_fiscal,
				'segmento': $segmento_agencia,
				'iata':$iata,
				'asociacion': $asociacion,
				'consorcio': $consorcio,
				'direccion': $direccion,
				'ciudad': $ciudad,
				'pais': $pais,
				'cp': $cp,
				'nombre_personal': $nombre_personal,
				'apellidos_personal': $apellidos_personal,
				'telefono_personal': $telefono_personal,
				'email_personal': $email_personal,
				'idioma_preferencial': $idioma_pref,
				'observaciones': $observaciones
			}
			
			datosAgencia.push(nuevaAgencia);

			$.ajax({
		      type: 'POST',
		      url: './server/registrar_agencia.php',
		      data: {'datos':JSON.stringify(datosAgencia)}, 
		      cache: false,
		      success: function(response){
		        alert(response);
		      },
		      error: function(){
		        alert("error en la comunicación con el servidor");
		      }
		    })

			$("#nombre_agencia").val("");
			$("#numero_fiscal").val("");
			$("#segmento_agencia").val("");
			$("#iata").val("");
			document.querySelectorAll('[name=asoc_agencias]').forEach((x) => x.checked=false);
			$("#consorcio").val("");
			$("#direccion_agencia").val("");
			$("#ciudad_agencia").val("");
			document.querySelectorAll('[name=pais]').forEach((x) => x.selected=false);
			$("#cp").val("");
			$("#nombre").val("");
			$("#apellidos").val("");
			$("#telefono").val("");
			$("#email").val("");
			$("#idioma_pref").val("");
			$("#observaciones").val("");
		}
})