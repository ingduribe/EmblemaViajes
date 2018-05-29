<form>
	<div class="border border-secondary p-3">
	  <p class="display-4 text-center">Habitaciones</p>

	  <div class="form-group row" style="font-size: 15px;">
          <div class="col-md-3 text-center">
          	<small class="text-danger" id="errorTipo" ></small>
            <select class="form-control" name="tipo_habitacion" onChange="generarTipoHabi(this.form)">
              <option selected="selected">Tipo de habitación</option>
              <option value="individual">Individual</option>
              <option value="doble_t">Doble</option>
              <option value="doble_t">Doble twin (2 camas)</option>
              <option value="boble_">Doble 1 o 2 camas</option>
              <option value="triple">Triple</option>
              <option value="cuadruple">Cuadruple</option>
              <option value="familiar">Familiar</option>
              <option value="suite">Suite</option>
              <option value="suite_j">Suite junior</option>
              <option value="apartamento">Apartamento</option>
              <option value="habitacion_c">Habitación compartida</option>
            </select>
          </div>

          <div class="col-md-3 text-center">
            <select class="form-control" name="nombre_habitacion">
              <option></option>
            </select>
          </div>

          <div class="col-md-4 text-center">
            <select class="form-control" id="numero_habitaciones">
              <option>Numero de habitaciones</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
              <option>6</option>
            </select>
          </div>

        </div>

		
	</div>
</form>

<script>
	var nombre_hab_array = new Array();
	nombre_hab_array[1] = ['Nombre de habitación','Individual']
	nombre_hab_array[2] = ['Nombre de habitación','Doble','Doble grande','Doble pequeña','Doble superior','Doble con ventilador','Doble economica','Doble con patio','Doble con terraza privada','Doble con balcon','Doble con balcon y vista al mar','Doble con bañera','Doble con ducha','Doble con baño compartido','Doble con aseo compartido', 'Doble con baño privado','Doble con hidromasaje','Doble vista mar','Doble vista montaña','Doble vista piscina','DOble vista lago','Doble (1 adulto + 1 niño','Doble (1 adulto + 2 niños)','Doble (2 adultos + 1 niño)','Doble (2 adultos + 2 niños)']
	function generarTipoHabi(formu){
		var tipoHab = formu.tipo_habitacion.selectedIndex;
		console.log(tipoHab)
		formu.nombre_habitacion.length = nombre_hab_array[tipoHab].length;
		for (var i = 0; i < formu.nombre_habitacion.length; i++) {
			formu.nombre_habitacion.options[i].text = nombre_hab_array[tipoHab][i];
		}
	}
	
</script>