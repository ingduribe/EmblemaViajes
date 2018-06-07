$(document).ready(function(){

    var nombre_hab_array = new Array();
    nombre_hab_array[1] = ['Nombre de habitación','Individual'];
    nombre_hab_array[2] = ['Nombre de habitación','Doble','Doble grande','Doble pequeña','Doble superior','Doble con ventilador','Doble economica','Doble con patio','Doble con terraza privada','Doble con balcon','Doble con balcon y vista al mar','Doble con bañera','Doble con ducha','Doble con baño compartido','Doble con aseo compartido', 'Doble con baño privado','Doble con hidromasaje','Doble vista mar','Doble vista montaña','Doble vista piscina','DOble vista lago','Doble (1 adulto + 1 niño','Doble (1 adulto + 2 niños)','Doble (2 adultos + 1 niño)','Doble (2 adultos + 2 niños)'];
    nombre_hab_array[3] = ['Nombre de habitación','Doble 2 camas','Doble Grande – 2 camas','Doble Pequeña – 2 camas','Doble Superior – 2 camas','Doble con ventilador – 2 camas','Doble Económica – 2 camas','Doble con patio – 2 camas','Doble con terraza privada – 2 camas','Doble con balcón – 2 camas','Doble con balcón y vista mar – 2 camas','Doble con bañera – 2 camas','Doble con ducha – 2 camas','Doble con baño compartido – 2 camas','Doble con aseo compartido – 2 camas','Doble con aseo compartido – 2 camas','Doble con baño privado – 2 camas','Doble con hidromasaje – 2 camas','Doble vista mar – 2 camas','Doble vista montaña – 2 camas','Doble vista piscina – 2 camas','Doble vista lago – 2 camas','Doble (1 adulto + 1 niño) – 2 camas','Doble (1 adulto + 2 niños) – 2 camas','Doble (2 adultos + 1 niño) – 2 camas','Doble (2 adultos + 2 niños) – 2 camas'];
    nombre_hab_array[4] = ['Nombre de habitación','Doble 1 o 2 camas','Doble Grande – 1 o 2 camas','Doble Pequeña – 1 o 2 camas','Doble Superior – 1 o 2 camas','Doble con ventilador – 1 o 2 camas','Doble Económica – 1 o 2 camas','Doble con patio – 1 o 2 camas','Doble con terraza privada – 1 o 2 camas','Doble con balcón – 1 o 2 camas','Doble con balcón y vista mar – 1 o 2 camas','Doble con bañera – 1 o 2 camas','Doble con ducha – 1 o 2 camas','Doble con baño compartido – 1 o 2 camas','Doble con aseo compartido – 1 o 2 camas','Doble con baño privado – 1 o 2 camas','Doble con hidromasaje – 1 o 2 camas','Doble vista mar – 1 o 2 camas','Doble vista mar – 1 o 2 camas','Doble vista montaña – 1 o 2 camas','Doble vista piscina – 1 o 2 camas','Doble vista lago – 1 o 2 camas','Doble (1 adulto + 1 niño) – 1 o 2 camas','Doble (1 adulto + 2 niños) – 1 o 2 camas','Doble (2 adultos + 1 niño) – 1 o 2 camas','Doble (2 adultos + 2 niños) – 1 o 2 camas'];
    nombre_hab_array[5] = ['Nombre de habitación','Triple','Triple Grande','Triple Pequeña','Triple Superior','Triple con ventilador','Triple Económica','Triple con patio','Triple con terraza privada','Triple con balcón','Triple con balcón y vista mar','Triple con bañera','Triple con ducha','Triple con baño compartido','Triple con aseo compartido','Triple con baño privado','Triple con hidromasaje','Triple vista mar','Triple vista montaña','Triple vista piscina','Triple vista lago','Triple (1 adulto + 1 niño)','Triple (1 adulto + 2 niños)','Triple (2 adultos + 1 niño)','Triple (2 adultos + 2 niños)'];
    nombre_hab_array[6] = ['Nombre de habitación','Cuadruple','Cuadruple Grande','Cuadruple Pequeña','Cuadruple Superior','Cuadruple con ventilador','Cuadruple Económica','Cuadruple con patio','Cuadruple con terraza privada','Cuadruple con balcón','Cuadruple con balcón y vista mar','Cuadruple con bañera','Cuadruple con ducha','Cuadruple con baño compartido','Cuadruple con aseo compartido','Cuadruple con baño privado','Cuadruple con hidromasaje','Cuadruple vista mar','Cuadruple vista montaña','Cuadruple vista piscina','Cuadruple vista lago','Cuadruple Duplex','Cuadruple Lujo','Cuadruple Estilo Japones','Cuadruple 2 camas grandes'];
    nombre_hab_array[7] = ['Nombre de habitación','Familiar','Familiar Grande','Familiar Pequeña','Familiar Superior','Familiar con ventilador','Familiar Económica','Familiar con patio','Familiar con terraza privada','Familiar con balcón','Familiar con balcón y vista mar','Familiar con bañera','Familiar con ducha','Familiar con baño compartido','Familiar con aseo compartido','Familiar con baño privado','Familiar con hidromasaje','Familiar vista mar','Familiar vista montaña','Familiar vista piscina','Familiar vista lago','Familiar Duplex','Familiar Lujo','Familiar Bungalow','Familiar Camarote','Familiar Estudio','Familiar Suite con balcón','Familiar Suite Junior','Familiar con Sauna'];
    nombre_hab_array[8] = ['Nombre de habitación','Suite','Suite grande','Suite pequeña','Suite superior','Suite presidencial','Suite executive','Suite con patio','Suite con terraza privada','Suite con balcon','Suite con balcon y vista al mar','Suite con bañera','Suite con ducha','Suite con acceso a Spa','Suite 1 dormitorio','Suite 2 dormitorios','Suite 3 dormitorios','Suite vista mar','Suite vista montaña','Suite vista piscina','Suite vista lago','Suite hidromasaje','Suite Lujo','Suite con Sauna'];
    nombre_hab_array[9] = ['Nombre de habitación','Suite Junior','Suite Junior Grande','Suite Junior Pequeña','Suite Junior Superior','Suite Junior Deluxe','Suite Junior Executive','Suite Junior con patio','Suite Junior con terraza privada','Suite Junior con balcón','Suite Junior con balcón y vista mar','Suite Junior con bañera','Suite Junior con ducha','Suite Junior con acceso a Spa','Suite Junior vista mar','Suite Junior vista montaña','Suite Junior vista piscina','Suite Junior vista lago','Suite Junior hidromasaje','Suite Junior Lujo','Suite Junior con Sauna'];
    nombre_hab_array[10] = ['Nombre de habitación','Apartamento','Apartamento Grande','Apartamento Pequeño','Apartamento Superior','Apartamento Loft','Apartamento Duplex','Apartamento con patio','Apartamento con terraza privada','Apartamento con balcón','Apartamento con balcón y vista mar','Apartamento con bañera','Apartamento con ducha','Apartamento con acceso a Spa','Apartamento 1 dormitorio','Apartamento 2 dormitorios','Apartamento 3 dormitorios','Apartamento vista mar','Apartamento vista montaña','Apartamento vista piscina','Apartamento vista lago','Apartamento hidromasaje','Apartamento Atico','Apartamento con Sauna'];
    nombre_hab_array[11] = ['Nombre de habitación','Habitación compartida 10 camas','Habitación compartida 8 camas masculino','Habitación compartida 6 camas  masculino','Habitación compartida 4 camas  masculino','Habitación compartida 2 camas  masculino','Habitación compartida 10 camas femenino','Habitación compartida 8 camas femenino','Habitación compartida 6 camas femenino','Habitación compartida 4 camas femenino','Habitación compartida 2 camas femenino','Habitación compartida mixto'];

    function generarTipoHabi(formu){
        var tipoHab = formu.tipo_habitacion.selectedIndex;
        formu.nombre_habitacion.length = nombre_hab_array[tipoHab].length;
        for (var i = 0; i < formu.nombre_habitacion.length; i++) {
            formu.nombre_habitacion.options[i].text = nombre_hab_array[tipoHab][i];
        }

        var minH = 0;
        var maxH = 400;
        var minC = 0;
        var maxC = 10;


        for (var i = minH; i <=maxH; i++) {
            var optionH = document.createElement('option');
            optionH.value = i;
            optionH.innerHTML = i;
            formu.numero_habitaciones.appendChild(optionH);
        }

        for (var i = minC; i <=maxC; i++) {
            var optionC = document.createElement('option');
            optionC.value = i;
            optionC.innerHTML = i;
            formu.numero_camas.appendChild(optionC);
        }
    }


	$("#btnEntendido").click(function(){
        $("#alertDanger").slideUp('slow');
	});
	  
	var habitaciones = [];
	var tbody = $("#tbody");
    

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
        if (typeof HabiAler == "undefined") {
            HabiAler = "No tiene"
        }
    	var aire_acon = $('input:radio[name=aire-acon]:checked').val();
        if (typeof aire_acon == "undefined") {
            aire_acon = "No tiene"
        }
    	var cale = $('input:radio[name=cale]:checked').val();
        if (typeof cale == "undefined") {
            cale = "No tiene"
        }
    	var acc_disca = $('input:radio[name=acc-disca]:checked').val();
        if (typeof acc_disca == "undefined") {
            acc_disca = "No tiene"
        }
    	var llave = $('input:radio[name=llave-elec]:checked').val();
        if (typeof llave == "undefined") {
            llave = "No tiene"
        }
    	var venta_inso = $('input:radio[name=venta-inso]:checked').val();
        if (typeof venta_inso == "undefined") {
            venta_inso = "No tiene"
        }
    	var cone_habi = $('input:radio[name=cone-habi]:checked').val();
        if (typeof cone_habi == "undefined") {
            cone_habi = "No tiene"
        }
    	var caja_fu = $('input:radio[name=caja-fu]:checked').val();
        if (typeof caja_fu == "undefined") {
            caja_fu = "No tiene"
        }
    	var escritorio = $('input:radio[name=escri]:checked').val();
        if (typeof escritorio == "undefined") {
            escritorio = "No tiene"
        }
    	var sofac = $('input:radio[name=sofa-cama]:checked').val();
        if (typeof sofac == "undefined") {
            sofac = "No tiene"
        }
    	var corti_opa = $('input:radio[name=corti-opa]:checked').val();
        if (typeof corti_opa == "undefined") {
            corti_opa = "No tiene"
        }
    	var plancha = $('input:radio[name=plancha]:checked').val();
        if (typeof plancha == "undefined") {
            plancha = "No tiene"
        }
    	var plancha_panta = $('input:radio[name=plancha-panta]:checked').val();
        if (typeof plancha_panta == "undefined") {
            plancha_panta = "No tiene"
        }
    	var sala = $('input:radio[name=sala]:checked').val();
        if (typeof sala == "undefined") {
            sala = "No tiene"
        }
    	var telefono = $('input:radio[name=telefono]:checked').val();
        if (typeof telefono == "undefined") {
            telefono = "No tiene"
        }
        var wifi = $('input:radio[name=wifi]:checked').val();
        if (typeof wifi == "undefined") {
            wifi = "No tiene"
        }
    	var tv4 = $('input:radio[name=tv-4]:checked').val();
        if (typeof tv4 == "undefined") {
            tv4 = "No tiene"
        }
    	var tv16 = $('input:radio[name=tv-16]:checked').val();
        if (typeof tv16 == "undefined") {
            tv16 = "No tiene"
        }
    	var tv_plana = $('input:radio[name=tv-plana]:checked').val();
        if (typeof tv_plana == "undefined") {
            tv_plana = "No tiene"
        }
    	var tv_sat = $('input:radio[name=tv-sat]:checked').val();
        if (typeof tv_sat == "undefined") {
            tv_sat = "No tiene"
        }
    	var tv_pago = $('input:radio[name=tv-pago]:checked').val();
        if (typeof tv_pago == "undefined") {
            tv_pago = "No tiene"
        }
    	var servi_habit = $('input:radio[name=servi-habit]:checked').val();
        if (typeof servi_habit == "undefined") {
            servi_habit = "No tiene"
        }
    	var mini_bar = $('input:radio[name=mini-bar]:checked').val();
        if (typeof mini_bar == "undefined") {
            mini_bar = "No tiene"
        }
    	var kettle = $('input:radio[name=kettle]:checked').val();
        if (typeof kettle == "undefined") {
            kettle = "No tiene"
        }
    	var cocina = $('input:radio[name=cocina]:checked').val();
        if (typeof cocina == "undefined") {
            cocina = "No tiene"
        }
    	var kitchenette = $('input:radio[name=kitchenette]:checked').val();
        if (typeof kitchenette == "undefined") {
            kitchenette = "No tiene"
        }
        var espejo = $('input:radio[name=espejo]:checked').val();
        if (typeof espejo == "undefined") {
            espejo = "No tiene"
        }
    	var amenities_bano = $('input:radio[name=amenities-bano]:checked').val();
        if (typeof amenities_bano == "undefined") {
            amenities_bano = "No tiene"
        }
    	var insonorizacion = $('input:radio[name=insonorizacion]:checked').val();
        if (typeof insonorizacion == "undefined") {
            insonorizacion = "No tiene"
        }
    	var conect_pc = $('input:radio[name=conec-pc]:checked').val();
        if (typeof conect_pc == "undefined") {
            conect_pc = "No tiene"
        }
    	var nevera = $('input:radio[name=nevera]:checked').val();
        if (typeof nevera == "undefined") {
            nevera = "No tiene"
        }
        var lavadora = $('input:radio[name=lavadora]:checked').val();
        if (typeof lavadora == "undefined") {
            lavadora = "No tiene"
        }
        var toallas = $('input:radio[name=toallas]:checked').val();
        if (typeof toallas == "undefined") {
            toallas = "No tiene"
        }
        var lavavajillas = $('input:radio[name=lavavajillas]:checked').val();
        if (typeof lavavajillas == "undefined") {
            lavavajillas = "No tiene"
        }
    	var secadora = $('input:radio[name=secadora]:checked').val();
        if (typeof secadora == "undefined") {
            secadora = "No tiene"
        }
    	var bano_priv = $('input:radio[name=bano-priv]:checked').val();
        if (typeof bano_priv == "undefined") {
            bano_priv = "No tiene"
        }
        var bano_comp = $('input:radio[name=bano-comp]:checked').val();
        if (typeof bano_comp == "undefined") {
            bano_comp = "No tiene"
        }

        var observaciones = $("#observaciones").val();
        if (typeof observaciones == "undefined") {
            observaciones = "No tiene"
        }

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
            'observaciones':observaciones,
            'bano_comp':bano_comp
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
        $("#cunas").val("Si");
		$("#observaciones").val("");
        document.querySelectorAll('[name=HabiAler]').forEach((x) => x.checked=false);
        document.querySelectorAll('[name=aire-acon]').forEach((x) => x.checked=false);
        document.querySelectorAll('[name=cale]').forEach((x) => x.checked=false);
        document.querySelectorAll('[name=acc-disca]').forEach((x) => x.checked=false);
        document.querySelectorAll('[name=llave-elec]').forEach((x) => x.checked=false);
        document.querySelectorAll('[name=venta-inso]').forEach((x) => x.checked=false);
        document.querySelectorAll('[name=cone-habi]').forEach((x) => x.checked=false);
        document.querySelectorAll('[name=caja-fu]').forEach((x) => x.checked=false);
        document.querySelectorAll('[name=escri]').forEach((x) => x.checked=false);
        document.querySelectorAll('[name=sofa-cama]').forEach((x) => x.checked=false);
        document.querySelectorAll('[name=corti-opa]').forEach((x) => x.checked=false);
        document.querySelectorAll('[name=plancha]').forEach((x) => x.checked=false);
        document.querySelectorAll('[name=plancha-panta]').forEach((x) => x.checked=false);
        document.querySelectorAll('[name=sala]').forEach((x) => x.checked=false);
        document.querySelectorAll('[name=telefono]').forEach((x) => x.checked=false);
        document.querySelectorAll('[name=wifi]').forEach((x) => x.checked=false);
        document.querySelectorAll('[name=tv-4]').forEach((x) => x.checked=false);
        document.querySelectorAll('[name=tv-16]').forEach((x) => x.checked=false);
        document.querySelectorAll('[name=tv-plana]').forEach((x) => x.checked=false);
        document.querySelectorAll('[name=tv-sat]').forEach((x) => x.checked=false);
        document.querySelectorAll('[name=tv-pago]').forEach((x) => x.checked=false);
        document.querySelectorAll('[name=servi-habit]').forEach((x) => x.checked=false);
        document.querySelectorAll('[name=mini-bar]').forEach((x) => x.checked=false);
        document.querySelectorAll('[name=kettle]').forEach((x) => x.checked=false);
        document.querySelectorAll('[name=cocina]').forEach((x) => x.checked=false);
        document.querySelectorAll('[name=kitchenette]').forEach((x) => x.checked=false);
        document.querySelectorAll('[name=espejo]').forEach((x) => x.checked=false);
        document.querySelectorAll('[name=amenities-bano]').forEach((x) => x.checked=false);
        document.querySelectorAll('[name=insonorizacion]').forEach((x) => x.checked=false);
        document.querySelectorAll('[name=conec-pc]').forEach((x) => x.checked=false);
        document.querySelectorAll('[name=nevera]').forEach((x) => x.checked=false);
        document.querySelectorAll('[name=lavadora]').forEach((x) => x.checked=false);
        document.querySelectorAll('[name=toallas]').forEach((x) => x.checked=false);
        document.querySelectorAll('[name=lavavajillas]').forEach((x) => x.checked=false);
        document.querySelectorAll('[name=secadora]').forEach((x) => x.checked=false);
        document.querySelectorAll('[name=bano-priv]').forEach((x) => x.checked=false);
        document.querySelectorAll('[name=bano-comp]').forEach((x) => x.checked=false);
    
	})

		$(document).on('click', '.eliminar', function (e) {  
			e.preventDefault();
			var indexElim = $(this).val();
            habitaciones.splice(indexElim,1);
            listar();
			
	    })

        $(document).on('click', '.descripcion', function (e) {  
            e.preventDefault();
            var tr1 = $("#tr1");
            var tr2 = $("#tr2");
            var tr3 = $("#tr3");
            var tr4 = $("#tr4");
            var tr5 = $("#tr5");
            var tr6 = $("#tr6");
            var tr7 = $("#tr7");
            var tr8 = $("#tr8");
            var tr9 = $("#tr9");
            var tr10 = $("#tr10");
            var servi1 = '';
            var servi2 = '';
            var servi3 = '';
            var servi4 = '';
            var servi5 = '';
            var servi6 = '';
            var servi7 = '';
            var servi8 = '';
            var servi9 = '';
            var servi10 = '';
            var j = $(this).val();           
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

            servi4+= '<td>'+habitaciones[j].plancha_panta+'</td>';
            servi4+= '<td>'+habitaciones[j].sala+'</td>';
            servi4+= '<td>'+habitaciones[j].telefono+'</td>';
            servi4+= '<td>'+habitaciones[j].wifi+'</td>';

            servi5+= '<td>'+habitaciones[j].tv4+'</td>';
            servi5+= '<td>'+habitaciones[j].tv16+'</td>';
            servi5+= '<td>'+habitaciones[j].tv_plana+'</td>';
            servi5+= '<td>'+habitaciones[j].tv_sat+'</td>';

            servi6+= '<td>'+habitaciones[j].tv_pago+'</td>';
            servi6+= '<td>'+habitaciones[j].servi_habit+'</td>';
            servi6+= '<td>'+habitaciones[j].mini_bar+'</td>';
            servi6+= '<td>'+habitaciones[j].kettle+'</td>';

            servi7+= '<td>'+habitaciones[j].cocina+'</td>';
            servi7+= '<td>'+habitaciones[j].kitchenette+'</td>';
            servi7+= '<td>'+habitaciones[j].espejo+'</td>';
            servi7+= '<td>'+habitaciones[j].amenities_bano+'</td>';

            servi8+= '<td>'+habitaciones[j].insonorizacion+'</td>';
            servi8+= '<td>'+habitaciones[j].conect_pc+'</td>';
            servi8+= '<td>'+habitaciones[j].nevera+'</td>';
            servi8+= '<td>'+habitaciones[j].lavadora+'</td>';

            servi9+= '<td>'+habitaciones[j].toallas+'</td>';
            servi9+= '<td>'+habitaciones[j].lavavajillas+'</td>';
            servi9+= '<td>'+habitaciones[j].secadora+'</td>';
            servi9+= '<td>'+habitaciones[j].bano_priv+'</td>';

            servi10+= '<td>'+habitaciones[j].bano_comp+'</td>';
            servi10+= '<td>'+habitaciones[j].observaciones+'</td>';

            tr1.html(servi1);
            tr2.html(servi2);
            tr3.html(servi3); 
            tr4.html(servi4); 
            tr5.html(servi5); 
            tr6.html(servi6); 
            tr7.html(servi7); 
            tr8.html(servi8); 
            tr9.html(servi9); 
            tr10.html(servi10); 
        })	
})