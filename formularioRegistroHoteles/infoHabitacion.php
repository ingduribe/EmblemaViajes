<form>
	<div class="border border-secondary p-3">
	  <p class="display-4 text-center">Habitaciones</p>

	  	<div class="form-group row">
          <div class="col-md-6 text-center">
            <select class="form-control" id="tipo_habitacion" name="tipo_habitacion" onChange="generarTipoHabi(this.form)">
              <option selected="selected">Tipo de habitación</option>
              <option>Individual</option>
              <option>Doble</option>
              <option>Doble twin (2 camas)</option>
              <option>Doble 1 o 2 camas</option>
              <option>Triple</option>
              <option>Cuadruple</option>
              <option>Familiar</option>
              <option>Suite</option>
              <option>Suite junior</option>
              <option>Apartamento</option>
              <option>Habitación compartida</option>
            </select>
          </div>

          <div class="col-md-6 text-center">
            <select class="form-control" id="nombre_habitacion" name="nombre_habitacion">
              <option>Nombre de habitación</option>
            </select>
          </div>
        </div>

        <div class="form-group row">
        	 <div class="col-md-4 text-center">
	            <select class="form-control" id="numero_habitaciones">
	              <option>Numero de habitaciones</option>
	            </select>
	          </div>

	          <div class="col-md-3 text-center">
	            <select class="form-control" id="camas">
	              <option selected="selected">Camas</option>
	              <option>Cama individual 90 – 130 cm ancho</option>
	              <option>Cama doble 130 – 150 cm ancho</option>
	              <option>Cama doble grande 150 – 180 cm ancho</option>
	              <option>Cama doble extragrande 180 – 210 cm ancho</option>
	              <option>Camarote / Litera</option>
	              <option>Sofá cama</option>
	            </select>
	          </div>

	          <div class="col-md-3 text-center">
	            <select class="form-control" id="numero_camas">
	              <option>Numero de camas</option>
	            </select>
	          </div>
        </div>

        <div class="form-group row">
        	<div class="col-md-3 text-center">¿Ofrece camas supletorias?</div>
        	<div class="col-md-3 text-center">
        		<select class="form-control" id="camasSupletorias">
	              <option selected="selected">Si</option>
	              <option>No</option>
	            </select>
        	</div>
        	<div class="col-md-3 text-center">¿Ofrece cunas?</div>
        	<div class="col-md-3 text-center">
        		<select class="form-control" id="cunas">
	              <option selected="selected">Si</option>
	              <option>No</option>
	            </select>
        	</div>
        </div>
        <table class="table table-dark">
		  <thead>
		    <tr>
		      <th scope="col">Tipo de habitación</th>
		      <th scope="col">Nombre de habitación</th>
		      <th scope="col">Numero de habitaciones</th>
		      <th scope="col">Camas</th>
		      <th scope="col">Numero de Camas</th>
		      <th scope="col">Camas supletorias</th>
		      <th scope="col">Cunas</th>
		    </tr>
		  </thead>
		  <tbody>

		  </tbody>
		</table>
		<div id="datos"></div>
		<button id="guardarHabitacion" class="btn btn-outline-dark">Añadir habitación</button>
		
	</div>
</form>

<script>
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

	
</script>