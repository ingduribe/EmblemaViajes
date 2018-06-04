$(document).ready(function(){

	$("#saveServicios").click(function(){
    	

	});
	  
      

	var habitaciones = [];
	var tbody = $("#tbody");
	var modalBody = $(".modal-body");

	function listar(){
		var data = '';
		var servi = '';
		if (habitaciones.length>=0) {
			for (i = 0; i < habitaciones.length; i++) {
				data += '<tr class="fila">';
		        data += '<td>' + habitaciones[i].nombreHabit+ '</td>';
		        data += '<td>' + habitaciones[i].numeroHabit + '</td>';
		        data += '<td>' + habitaciones[i].camas + '</td>';
		        data += '<td>' + habitaciones[i].numCamas + '</td>';
		        data += '<td>' + habitaciones[i].camasS + '</td>';
		        data += '<td>' + habitaciones[i].cunas + '</td>';
		        data += '<td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong" value=('+i+')>Ver servicios</button></td>';
		        data += '<td><button class="btn btn-danger eliminar" value=('+i+')>Eliminar</button></td>';
		        data += '</tr>';

		        servi+= '<p> Holaaaa'+habitaciones[i].banoComp+'</p>'
			}

		    tbody.html(data);
		    modalBody.html(servi);

		
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
    	var llave = $('input:radio[name=llave]:checked').val();
    	var venta_inso = $('input:radio[name=venta-inso]:checked').val();
    	var cone_habi = $('input:radio[name=cone-habi]:checked').val();
    	var caja_fu = $('input:radio[name=caja-fu]:checked').val();
    	var caja_fu_lla = $('input:radio[name=caja-fu-lla]:checked').val();
    	var sifa_ca = $('input:radio[name=sifa-ca]:checked').val();
    	var red_elec = $('input:radio[name=red-elec]:checked').val();
    	var cuna = $('input:radio[name=cuna]:checked').val();
    	var lampa_lectu = $('input:radio[name=lampa-lectu]:checked').val();
    	var luz_noctu = $('input:radio[name=luz-noctu]:checked').val();
    	var corti_opa = $('input:radio[name=corti-opa]:checked').val();
    	var plancha = $('input:radio[name=plancha]:checked').val();
    	var plancha_panta = $('input:radio[name=plancha-panta]:checked').val();
    	var prensa = $('input:radio[name=prensa]:checked').val();
    	var sala = $('input:radio[name=sala]:checked').val();
    	var telefono = $('input:radio[name=telefono]:checked').val();
    	var linea_telef = $('input:radio[name=linea-telef]:checked').val();
    	var llama_local_grat = $('input:radio[name=llama-local-grat]:checked').val();
    	var mensaj_voz = $('input:radio[name=mensaj-voz]:checked').val();
    	var net_grat = $('input:radio[name=net-grat]:checked').val();
    	var net_alta_vel = $('input:radio[name=net-alta-vel]:checked').val();
    	var net_tel = $('input:radio[name=net-tel]:checked').val();
    	var net_ina = $('input:radio[name=net-ina]:checked').val();
    	var tv4 = $('input:radio[name=tv-4]:checked').val();
    	var tv16 = $('input:radio[name=tv-16]:checked').val();
    	var tv_plana = $('input:radio[name=tv-plana]:checked').val();
    	var tv_sat = $('input:radio[name=tv-sat]:checked').val();
    	var tv_pago = $('input:radio[name=tv-pago]:checked').val();
    	var tv_inter = $('input:radio[name=tv-inter]:checked').val();
    	var web_tv = $('input:radio[name=web-tv]:checked').val();
    	var video_club = $('input:radio[name=video-club]:checked').val();
    	var dvd = $('input:radio[name=dvd]:checked').val();
    	var vcr = $('input:radio[name=vcr]:checked').val();
    	var video_jueg = $('input:radio[name=video-jueg]:checked').val();
    	var canales_music = $('input:radio[name=canales-music]:checked').val();
    	var hi_fi = $('input:radio[name=hi-fi]:checked').val();
    	var radio = $('input:radio[name=radio]:checked').val();
    	var seca_ropa = $('input:radio[name=seca-ropa]:checked').val();
    	var repro_cd = $('input:radio[name=repro-cd]:checked').val();
    	var servi_habit = $('input:radio[name=servi-habit]:checked').val();
    	var servi_habitNo = $('input:radio[name=servi-habitNo]:checked').val();
    	var mini_bar = $('input:radio[name=mini-bar]:checked').val();
    	var bot_agua = $('input:radio[name=bot-agua]:checked').val();
    	var kettle = $('input:radio[name=kettle]:checked').val();
    	var cocina = $('input:radio[name=cocina]:checked').val();
    	var kitchenette = $('input:radio[name=kitchenette]:checked').val();
    	var eq_cocina = $('input:radio[name=eq-cocina]:checked').val();
    	var micro = $('input:radio[name=micro]:checked').val();
    	var tostador = $('input:radio[name=tostador]:checked').val();
    	var secador = $('input:radio[name=secador]:checked').val();
    	var espejo = $('input:radio[name=espejo]:checked').val();
    	var artic_bano = $('input:radio[name=artic-bano]:checked').val();
    	var artic_bano_dise = $('input:radio[name=artic-bano-dise]:checked').val();
    	var bidet = $('input:radio[name=bidet]:checked').val();
    	var calent_toallas = $('input:radio[name=calent-toallas]:checked').val();
    	var telef_bano = $('input:radio[name=telef-bano]:checked').val();
    	var tv_bano = $('input:radio[name=tv-bano]:checked').val();
    	var tendedor = $('input:radio[name=tendedor]:checked').val();
    	var rayos_uva = $('input:radio[name=rayos-uva]:checked').val();
    	var tocador = $('input:radio[name=tocador]:checked').val();
    	var costurero = $('input:radio[name=costurero]:checked').val();
    	var insonorizacion = $('input:radio[name=insonorizacion]:checked').val();
    	var conect_2_ordena = $('input:radio[name=conect-2-ordena]:checked').val();
    	var tv_normal = $('input:radio[name=tv-normal]:checked').val();
    	var prensa_diaria = $('input:radio[name=prensa-diaria]:checked').val();
    	var amenities = $('input:radio[name=amenities]:checked').val();
    	var bano_minus = $('input:radio[name=bano-minus]:checked').val();
    	var caja_segu = $('input:radio[name=caja-segu]:checked').val();
    	var cale_indiv = $('input:radio[name=cale-indiv]:checked').val();
    	var enmoquetado = $('input:radio[name=enmoquetado]:checked').val();
    	var nevera = $('input:radio[name=nevera]:checked').val();
    	var horno = $('input:radio[name=horno]:checked').val();
    	var lavadora = $('input:radio[name=lavadora]:checked').val();
    	var toallas = $('input:radio[name=toallas]:checked').val();
    	var tv_sat_algu_habit = $('input:radio[name=tv-sat-algu-habit]:checked').val();
    	var tv_sat_otras_habit = $('input:radio[name=tv-sat-otras-habit]:checked').val();
    	var lavavajillas = $('input:radio[name=lavavajillas]:checked').val();
    	var wifi = $('input:radio[name=wifi]:checked').val();
    	var wifi_gratis = $('input:radio[name=wifi-gratis]:checked').val();


    	console.log(banoComp,HabiAler,no_fum,aire_acon,cale,venta,chime)

		var nuevaHabi = {
			'inde': index,
			'tipoHabit': tipoHabit,
			'nombreHabit': nombreHabit,
			'numeroHabit':numeroHabit,
			'camas':camas,
			'numCamas':numCamas,
			'camasS':camasS,
			'cunas':cunas,
			'banoComp':banoComp,
			'HabiAler':HabiAler,
			'no_fum':no_fum,
			'aire_acon':aire_acon,
			'cale':cale,
			'venta':venta
		}

		habitaciones.push(nuevaHabi);
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
			var indexElmi = $(this).val();
			console.log(indexElmi);
			var ini = indexElmi;
			console.log(habitaciones[$(this).val()]);
			listar();
			
	    })
	

	
})