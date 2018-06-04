$(document).ready(function(){

	$("#saveServicios").click(function(){
    	

	});
	  
      

	var habitaciones = [];
	var tbody = $("#tbody");
    var tr1 = $("#tr1");
    var tr2 = $("#tr2");
    var tr3 = $("#tr3");

	function listar(){
		var data = '';
        
		if (habitaciones.length>=0) {
            var j = 0;
			for (i = 0; i < habitaciones.length; i++) {
				data += '<tr class="fila">';
		        data += '<td>' + habitaciones[i].nombreHabit+ '</td>';
		        data += '<td>' + habitaciones[i].numeroHabit + '</td>';
		        data += '<td>' + habitaciones[i].camas + '</td>';
		        data += '<td>' + habitaciones[i].numCamas + '</td>';
		        data += '<td>' + habitaciones[i].camasS + '</td>';
		        data += '<td>' + habitaciones[i].cunas + '</td>';
		        data += '<td><button type="button" class="btn btn-primary descripcion" data-toggle="modal" data-target="#exampleModalLong" value="'+i+'">Ver servicios</button></td>';
		        data += '<td><button class="btn btn-danger eliminar" value="'+i+'">Eliminar</button></td>';
		        data += '</tr>';
			}
		    tbody.html(data);
		
		}
	}

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

    	var HabiAler = $('input:radio[name=HabiAler]:checked').val();
    	var aire_acon = $('input:radio[name=aire-acon]:checked').val();
    	var cale = $('input:radio[name=cale]:checked').val();
    	var acc_disca = $('input:radio[name=acc-disca]:checked').val();
    	var llave = $('input:radio[name=llave-elec]:checked').val();
    	var venta_inso = $('input:radio[name=venta-inso]:checked').val();
    	var cone_habi = $('input:radio[name=cone-habi]:checked').val();
    	var caja_fu = $('input:radio[name=caja-fu]:checked').val();
    	var escritorio = $('input:radio[name=escri]:checked').val();
    	var sofac = $('input:radio[name=sofa-cama]:checked').val();
    	var corti_opa = $('input:radio[name=corti-opa]:checked').val();
    	var plancha = $('input:radio[name=plancha]:checked').val();
    	var plancha_panta = $('input:radio[name=plancha-panta]:checked').val();
    	var sala = $('input:radio[name=sala]:checked').val();
    	var telefono = $('input:radio[name=telefono]:checked').val();
        var wifi = $('input:radio[name=wifi]:checked').val();
    	var tv4 = $('input:radio[name=tv-4]:checked').val();
    	var tv16 = $('input:radio[name=tv-16]:checked').val();
    	var tv_plana = $('input:radio[name=tv-plana]:checked').val();
    	var tv_sat = $('input:radio[name=tv-sat]:checked').val();
    	var tv_pago = $('input:radio[name=tv-pago]:checked').val();
    	var servi_habit = $('input:radio[name=servi-habit]:checked').val();
    	var mini_bar = $('input:radio[name=mini-bar]:checked').val();
    	var kettle = $('input:radio[name=kettle]:checked').val();
    	var cocina = $('input:radio[name=cocina]:checked').val();
    	var kitchenette = $('input:radio[name=kitchenette]:checked').val();
        var espejo = $('input:radio[name=espejo]:checked').val();
    	var amenities_bano = $('input:radio[name=amenities-bano]:checked').val();
    	var insonorizacion = $('input:radio[name=insonorizacion]:checked').val();
    	var conect_pc = $('input:radio[name=conec-pc]:checked').val();
    	var nevera = $('input:radio[name=nevera]:checked').val();
        var lavadora = $('input:radio[name=lavadora]:checked').val();
        var toallas = $('input:radio[name=toallas]:checked').val();
        var lavavajillas = $('input:radio[name=lavavajillas]:checked').val();
    	var secadora = $('input:radio[name=secadora]:checked').val();
    	var bano_priv = $('input:radio[name=bano-priv]:checked').val();
        var observaciones = $("#observaciones").val();

		var nuevaHabi = {
			'inde': index,
			'tipoHabit': tipoHabit,
			'nombreHabit': nombreHabit,
			'numeroHabit':numeroHabit,
			'camas':camas,
			'numCamas':numCamas,
			'camasS':camasS,
			'cunas':cunas,

			'HabiAler':HabiAler,
			'aire_acon':aire_acon,
			'cale':cale,
			'acc_disca':acc_disca,
            'llave':llave,
            'venta_inso':venta_inso,
            'cone_habi':cone_habi,
            'caja_fu':caja_fu,
            'escritorio':escritorio,
            'sofac':sofac,
            'corti_opa':corti_opa,
            'plancha':plancha,
            'plancha_panta':plancha_panta,
            'sala':sala,
            'telefono':telefono,
            'wifi':wifi,
            'tv4':tv4,
            'tv16':tv16,
            'tv_plana':tv_plana,
            'tv_sat':tv_sat,
            'tv_pago':tv_pago,
            'servi_habit':servi_habit,
            'mini_bar':mini_bar,
            'kettle':kettle,
            'cocina':cocina,
            'kitchenette':kitchenette,
            'espejo':espejo,
            'amenities_bano':amenities_bano,
            'insonorizacion':insonorizacion,
            'conect_pc':conect_pc,
            'nevera':nevera,
            'lavadora':lavadora,
            'toallas':toallas,
            'lavavajillas':lavavajillas,
            'secadora':secadora,
            'bano_priv':bano_priv,
            'observaciones':observaciones
		}

		habitaciones.push(nuevaHabi);
        console.log(habitaciones)
		listar();

		
		$("#tipo_habitacion").val("Tipo de habitación")
		$("#nombre_habitacion").val("Nombre de habitacion");
		$("#numero_habitaciones").val("Numero de habitaciones");
		$("#camas").val("Camas");
		$("#numero_camas").val("Numero de camas");	
		$("#camasSupletorias").val("Si");
		$("#cunas").val("Si")	
	})

		$(document).on('click', '.eliminar', function (e) {  
			e.preventDefault();
			var indexElim = $(this).val();
            habitaciones.splice(indexElim,1);
            listar();
			
	    })

        $(document).on('click', '.descripcion', function (e) {  
            e.preventDefault();
            var servi1 = '';
            var servi2 = '';
            var servi3 = '';

            var j = $(this).val();
            
            console.log(j);
           
            servi1+= '<td>'+habitaciones[j].HabiAler+'</td>';
            servi1+= '<td>'+habitaciones[j].aire_acon+'</td>';
            servi1+= '<td>'+habitaciones[j].cale+'</td>';
            servi1+= '<td>'+habitaciones[j].acc_disca+'</td>';

            servi2+= '<td>'+habitaciones[j].llave+'</td>';
            servi2+= '<td>'+habitaciones[j].venta_inso+'</td>';
            servi2+= '<td>'+habitaciones[j].cone_habi+'</td>';
            servi2+= '<td>'+habitaciones[j].caja_fu+'</td>';

            servi3+= '<td>'+habitaciones[j].escritorio+'</td>';
            servi3+= '<td>'+habitaciones[j].sofac+'</td>';
            servi3+= '<td>'+habitaciones[j].corti_opa+'</td>';
            servi3+= '<td>'+habitaciones[j].plancha+'</td>';

            tr1.html(servi1);
            tr2.html(servi2);
            tr3.html(servi3);


            
            
        })
	

	
})