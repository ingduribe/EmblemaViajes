<form>
	<div class="border border-secondary p-3">
	  <p class="display-4 text-center">Condiciones de cancelación</p>

	  <div class="form-group row">
          <div class="col-md-6 text-center">
          	<div class="row align-self-center">
          		<div class="col-md-6 align-self-center" >
          			<label for="">Cancelación gratuita </label>
          		</div>
          		<div class="col-md-6">
          			<select class="form-control" id="cancelacion" name="cancelacion">
		              <option>24 horas antes de llegar</option>
		              <option>48 horas antes de llegar</option>
		              <option>3 días antes de llegar</option>
		              <option>7 días antes de llegar</option>
		              <option>14 días antes de llegar</option>
		              <option>30 días antes de llegar</option>
		              <option>60 días antes de llegar</option>
		            </select>
          		</div>
          	</div>
          </div>

          <div class="col-md-6 text-center">
            <div class="row">
          		<div class="col-md-6 align-self-center">
          			<label for="">Penalidad cancelación fuera de plazo</label>
          		</div>
          		<div class="col-md-6">
          			<select class="form-control" id="penalidad" name="penalidad">
		              <option>Valor 1 noche</option>
		              <option>25% del valor total de la reserva</option>
		              <option>50% del valor total de la reserva</option>
		              <option>75% del valor total de la reserva</option>
		              <option>100% del valor total de la reserva</option>
		            </select>
          		</div>
          	</div>
          </div>
        </div>

        <div class="form-group row">
          <div class="col-md-6 text-center">
          	<div class="row align-self-center">
          		<div class="col-md-6 align-self-center" >
          			<label for="">Hora de entrada</label>
          		</div>
          		<div class="col-md-6">
          			<select class="form-control" id="hora_entrada" name="hora_entrada">
		              
		            </select>
          		</div>
          	</div>
          </div>

          <div class="col-md-6 text-center">
            <div class="row">
          		<div class="col-md-6 align-self-center">
          			<label for="">Hora de salida</label>
          		</div>
          		<div class="col-md-6">
          			<select class="form-control" id="hora_salida" name="hora_salida">
		        
		            </select>
          		</div>
          	</div>
          </div>
        </div>

        <div class="form-group row">
        	<div class="col-md-3 text-center">¿Se permite fumar en la propiedad?</div>
        	<div class="col-md-3 text-center">
        		<select class="form-control" id="fumar_propiedad">
	              <option selected="selected">Si</option>
	              <option>No</option>
	            </select>
        	</div>
        	<div class="col-md-3 text-center">¿Se permite alojar niños?</div>
        	<div class="col-md-3 text-center">
        		<select class="form-control" id="aloj_ninos">
	              <option selected="selected">Si</option>
	              <option>No</option>
	            </select>
        	</div>
        </div>

        <div class="form-group row">
        	<div class="col-md-3 text-center">¿Se permiten mascotas?</div>
        	<div class="col-md-3 text-center">
        		<select class="form-control" id="mascotas">
	              <option selected="selected">Si</option>
	              <option>No</option>
	              <option>Bajo petición</option>
	            </select>
        	</div>
        	<div class="col-md-3 text-center">Estancia minima</div>
        	<div class="col-md-3 text-center">
        		<select class="form-control" id="estancia_minima">
	              <option selected="selected">NO</option>
	              <option>2 noches</option>
	              <option>3 noches</option>
	              <option>4 noches</option>
	              <option>5 noches</option>
	              <option>6 noches</option>
	              <option>7 noches</option>
	            </select>
        	</div>
        </div>


	    <div class="row justify-content-around">
	      <button type="button" class="btn btn-success">Guardar y seguir</button>
	      <button type="button" class="btn btn-outline-success">Guardar y seguir despues</button>
	    </div>

	</div>
</form>