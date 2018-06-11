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
              <option selected="selected">Nombre de habitación</option>
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

        <div class="row justify-content-around p-3">
            <button id="ServiviosHabitacion" type="button" class="btn btn-outline-primary">
              Escoger los servicios de habitación
            </button>
        </div>


<!-- Modal -->
<div id="serviHabita">
      <h3 class="text-center">Servicios de habitaciones</h3>

        <div class="alert alert-danger text-center" id="alertDanger" role="alert">
              <h4 class="alert-heading">Antes de comenzar, lea esta pequeña explicación por favor</h4>
              <p>En este formulario puede agregar los "Servicios de habitación". Puede seleccionar cada servicio si es "Gratis" o "Pago" para los servicios existentes. Los servicios que no seleccione "Gratis" o "Pago" quiere decir que NO existen como opción en la habitación. Por ejemplo si el tipo de habitación no dispone de aire acondicionado no seleccione ni "Gratis" ni tampoco "Pago".</p>
              <hr>
              <p class="mb-0"><button id="btnEntendido" class="btn btn-info">Entendido</button></p>
        </div>

        <div class="row text-center">
            <div class="col-md-6 text-center">
                <div class="form-group row">
                    <div class="col-md-8">
                        Habitaciones para alergicos
                    </div>
                    <div class="col-md-4"> 
                        Gratis<input type="radio" name="HabiAler" value="gratis">
                        Pago<input type="radio" name="HabiAler" value="pago">
                    </div>
                </div>
            </div>
        	<div class="col-md-6 text-center">
        		<div class="form-group row">
        			<div class="col-md-8">
        				Aire acondicionado
        			</div>
        			<div class="col-md-4"> 
        				Gratis<input type="radio" name="aire-acon" value="gratis">
        				Pago<input type="radio" name="aire-acon" value="pago">
        			</div>
        		</div>
        	</div>

        </div>

        <div class="row text-center">
        	<div class="col-md-6 text-center">
        		<div class="form-group row">
        			<div class="col-md-8">
        				Calefacción central
        			</div>
        			<div class="col-md-4"> 
        				Gratis<input type="radio" name="cale" value="gratis">
        				Pago<input type="radio" name="cale" value="pago">
        			</div>
        		</div>
        	</div>

        	<div class="col-md-6 text-center">
				<div class="form-group row">
        			<div class="col-md-8">
        				Acceso para discapacitados
        			</div>
        			<div class="col-md-4"> 
        				Gratis<input type="radio" name="acc-disca" value="gratis">
        				Pago<input type="radio" name="acc-disca" value="pago">
        			</div>
        		</div>
        	</div>
        </div>

        <div class="row text-center">
        	<div class="col-md-6 text-center">
        		<div class="form-group row">
        			<div class="col-md-8">
        				Llava electrónica/magnética
        			</div>
        			<div class="col-md-4"> 
        				Gratis<input type="radio" name="llave-elec" value="gratis">
        				Pago<input type="radio" name="llave-elec" value="pago">
        			</div>
        		</div>
        	</div>

        	<div class="col-md-6 text-center">
				<div class="form-group row">
        			<div class="col-md-8">
        				Ventanas insonorizadas
        			</div>
        			<div class="col-md-4"> 
        				Gratis<input type="radio" name="venta-inso" value="gratis">
        				Pago<input type="radio" name="venta-inso" value="pago">
        			</div>
        		</div>
        	</div>
        </div>

         <div class="row text-center">
        	<div class="col-md-6 text-center">
        		<div class="form-group row">
        			<div class="col-md-8">
        				Conexión entre habitaciones
        			</div>
        			<div class="col-md-4"> 
        				Gratis<input type="radio" name="cone-habi" value="gratis">
        				Pago<input type="radio" name="cone-habi" value="pago">
        			</div>
        		</div>
        	</div>

        	<div class="col-md-6 text-center">
				<div class="form-group row">
        			<div class="col-md-8">
        				Caja fuerte
        			</div>
        			<div class="col-md-4"> 
        				Gratis<input type="radio" name="caja-fu" value="gratis">
        				Pago<input type="radio" name="caja-fu" value="pago">
        			</div>
        		</div>
        	</div>
        </div>

        <div class="row text-center">
            <div class="col-md-6 text-center">
                <div class="form-group row">
                    <div class="col-md-8">
                        Escritorio
                    </div>
                    <div class="col-md-4"> 
                        Gratis<input type="radio" name="escri" value="gratis">
                        Pago<innput type="radio" name="escri" value="pago">
                    </div>
                </div>
            </div>

        	<div class="col-md-6 text-center">
        		<div class="form-group row">
        			<div class="col-md-8">
        				Sofa cama
        			</div>
        			<div class="col-md-4"> 
        				Gratis<input type="radio" name="sofa-cama" value="gratis">
        		        Pago<input type="radio" name="sofa-cama" value="pago">
        			</div>
        		</div>
        	</div>
        </div>

        <div class="row text-center">
        	<div class="col-md-6 text-center">
        		<div class="form-group row">
        			<div class="col-md-8">
        				Cortinas opacas (Foscurit)
        			</div>
        			<div class="col-md-4"> 
        				Gratis<input type="radio" name="corti-opa" value="gratis">
        		        Pago<input type="radio" name="corti-opa" value="pago">
        			</div>
        		</div>
        	</div>

        	<div class="col-md-6 text-center">
				<div class="form-group row">
        			<div class="col-md-8">
        				Plancha
        			</div>
        			<div class="col-md-4"> 
        				Gratis<input type="radio" name="plancha" value="gratis">
        		        Pago<input type="radio" name="plancha" value="pago">
        			</div>
        		</div>
        	</div>
        </div>

        <div class="row text-center">
            <div class="col-md-6 text-center">
                <div class="form-group row">
                    <div class="col-md-8">
                        Plancha pantalones
                    </div>
                    <div class="col-md-4"> 
                        Gratis<input type="radio" name="plancha-panta" value="gratis">
                        Pago<input type="radio" name="plancha-panta" value="pago">
                    </div>
                </div>
            </div>

        	<div class="col-md-6 text-center">
                <div class="form-group row">
                    <div class="col-md-8">
                        Sala de estar
                    </div>
                    <div class="col-md-4"> 
                        Gratis<input type="radio" name="sala" value="gratis">
                        Pago<input type="radio" name="sala" value="pago">
                    </div>
                </div>
            </div>
        </div>

        <div class="row text-center">
        	<div class="col-md-6 text-center">
        		<div class="form-group row">
        			<div class="col-md-8">
        				Teléfono
        			</div>
        			<div class="col-md-4"> 
        				Gratis<input type="radio" name="telefono" value="gratis">
        		        Pago<input type="radio" name="telefono" value="pago">
        			</div>
        		</div>
        	</div>

        	<div class="col-md-6 text-center">
				<div class="form-group row">
        			<div class="col-md-8">
        				Wi-fi
        			</div>
        			<div class="col-md-4"> 
        				Gratis<input type="radio" name="wifi" value="gratis">
        				Pago<input type="radio" name="wifi" value="pago">
        			</div>
        		</div>
        	</div>
        </div>

        <div class="row text-center">
            <div class="col-md-6 text-center">
                <div class="form-group row">
                    <div class="col-md-8">
                        Pantalla TV 4:3
                    </div>
                    <div class="col-md-4"> 
                        Gratis<input type="radio" name="tv-4" value="gratis">
                        Pago<input type="radio" name="tv-4" value="pago">
                    </div>
                </div>
            </div>

            <div class="col-md-6 text-center">
                <div class="form-group row">
                    <div class="col-md-8">
                        Pantalla TV 16:9
                    </div>
                    <div class="col-md-4"> 
                        Gratis<input type="radio" name="tv-16" value="gratis">
                        Pago<input type="radio" name="tv-16" value="pago">
                    </div>
                </div>
            </div>
        </div>

        <div class="row text-center">
            <div class="col-md-6 text-center">
                <div class="form-group row">
                    <div class="col-md-8">
                        Pantalla TV plana
                    </div>
                    <div class="col-md-4"> 
                        Gratis<input type="radio" name="tv-plana" value="gratis">
                        Pago<input type="radio" name="tv-plana" value="pago">
                    </div>
                </div>
            </div>

            <div class="col-md-6 text-center">
                <div class="form-group row">
                    <div class="col-md-8">
                        TV satélite
                    </div>
                    <div class="col-md-4"> 
                        Gratis<input type="radio" name="tv-sat" value="gratis">
                        Pago<input type="radio" name="tv-sat" value="pago">
                    </div>
                </div>
            </div>
        </div>

        <div class="row text-center">
            <div class="col-md-6 text-center">
                <div class="form-group row">
                    <div class="col-md-8">
                        TV/Canal de video de pago
                    </div>
                    <div class="col-md-4"> 
                        Gratis<input type="radio" name="tv-pago" value="gratis">
                        Pago<input type="radio" name="tv-pago" value="pago">
                    </div>
                </div>
            </div>

            <div class="col-md-6 text-center">
                <div class="form-group row">
                    <div class="col-md-8">
                        Servicio en habitaciones
                    </div>
                    <div class="col-md-4"> 
                        Gratis<input type="radio" name="servi-habit" value="gratis">
                        Pago<input type="radio" name="servi-habit" value="pago">
                    </div>
                </div>
            </div>
        </div>

        <div class="row text-center">
            <div class="col-md-6 text-center">
                <div class="form-group row">
                    <div class="col-md-8">
                       Mini-bar
                    </div>
                    <div class="col-md-4"> 
                        Gratis<input type="radio" name="mini-bar" value="gratis">
                        Pago<input type="radio" name="mini-bar" value="pago">
                    </div>
                </div>
            </div>

            <div class="col-md-6 text-center">
                <div class="form-group row">
                    <div class="col-md-8">
                        Kettle (cafetera y tetera)
                    </div>
                    <div class="col-md-4"> 
                        Gratis<input type="radio" name="kettle" value="gratis">
                        Pago<input type="radio" name="kettle" value="pago">
                    </div>
                </div>
            </div>
        </div>

        <div class="row text-center">
            <div class="col-md-6 text-center">
                <div class="form-group row">
                    <div class="col-md-8">
                       Cocina equipada
                    </div>
                    <div class="col-md-4"> 
                        Gratis<input type="radio" name="cocina" value="gratis">
                        Pago<input type="radio" name="cocina" value="pago">
                    </div>
                </div>
            </div>

            <div class="col-md-6 text-center">
                <div class="form-group row">
                    <div class="col-md-8">
                        Kitchenette
                    </div>
                    <div class="col-md-4"> 
                        Gratis<input type="radio" name="kitchenette" value="gratis">
                        Pago<input type="radio" name="kitchenette" value="pago">
                    </div>
                </div>
            </div>
        </div>

        <div class="row text-center">
            <div class="col-md-6 text-center">
                <div class="form-group row">
                    <div class="col-md-8">
                       Espejo maquillaje
                    </div>
                    <div class="col-md-4"> 
                        Gratis<input type="radio" name="espejo" value="gratis">
                        Pago<input type="radio" name="espejo" value="pago">
                    </div>
                </div>
            </div>

            <div class="col-md-6 text-center">
                <div class="form-group row">
                    <div class="col-md-8">
                        Amenities de baño
                    </div>
                    <div class="col-md-4"> 
                        Gratis<input type="radio" name="amenities-bano" value="gratis">
                        Pago<input type="radio" name="amenities-bano" value="pago">
                    </div>
                </div>
            </div>
        </div>


        <div class="row text-center">
            <div class="col-md-6 text-center">
                <div class="form-group row">
                    <div class="col-md-8">
                        Insonorización
                    </div>
                    <div class="col-md-4"> 
                        Gratis<input type="radio" name="insonorizacion" value="gratis">
                        Pago<input type="radio" name="insonorizacion" value="pago">
                    </div>
                </div>
            </div>

            <div class="col-md-6 text-center">
                <div class="form-group row">
                    <div class="col-md-8">
                       Conexión para PC
                    </div>
                    <div class="col-md-4"> 
                        Gratis<input type="radio" name="conec-pc" value="gratis">
                        Pago<input type="radio" name="conec-pc" value="pago">
                    </div>
                </div>
            </div>
        </div>

        <div class="row text-center">
            <div class="col-md-6 text-center">
                <div class="form-group row">
                    <div class="col-md-8">
                       Nevera
                    </div>
                    <div class="col-md-4"> 
                        Gratis<input type="radio" name="nevera" value="gratis">
                        Pago<input type="radio" name="nevera" value="pago">
                    </div>
                </div>
            </div>

            <div class="col-md-6 text-center">
                <div class="form-group row">
                    <div class="col-md-8">
                        Lavadora
                    </div>
                    <div class="col-md-4"> 
                        Gratis<input type="radio" name="lavadora" value="gratis">
                        Pago<input type="radio" name="lavadora" value="pago">
                    </div>
                </div>
            </div>
        </div>

        <div class="row text-center">
            <div class="col-md-6 text-center">
                <div class="form-group row">
                    <div class="col-md-8">
                       Toallas
                    </div>
                    <div class="col-md-4"> 
                        Gratis<input type="radio" name="toallas" value="gratis">
                        Pago<input type="radio" name="toallas" value="pago">
                    </div>
                </div>
            </div>

            <div class="col-md-6 text-center">
                <div class="form-group row">
                    <div class="col-md-8">
                       Lavavajillas
                    </div>
                    <div class="col-md-4"> 
                        Gratis<input type="radio" name="lavavajillas" value="gratis">
                        Pago<input type="radio" name="lavavajillas" value="pago">
                    </div>
                </div>
            </div>
        </div>


        <div class="row text-center">
            <div class="col-md-6 text-center">
                <div class="form-group row">
                    <div class="col-md-8">
                       Secadora
                    </div>
                    <div class="col-md-4"> 
                        Gratis<input type="radio" name="secadora" value="gratis">
                        Pago<input type="radio" name="secadora" value="pago">
                    </div>
                </div>
            </div>

            <div class="col-md-6 text-center">
                <div class="form-group row">
                    <div class="col-md-8">
                        Baño privado
                    </div>
                    <div class="col-md-4"> 
                        Gratis<input type="radio" name="bano-priv" value="gratis">
                        Pago<input type="radio" name="bano-priv" value="pago">
                    </div>
                </div>
            </div>
        </div>

        <div class="row text-center">
            <div class="col-md-6 text-center">
                <div class="form-group row">
                    <div class="col-md-8">
                        Baño compartido
                    </div>
                    <div class="col-md-4"> 
                        Gratis<input type="radio" name="bano-comp" value="gratis">
                        Pago<input type="radio" name="bano-comp" value="pago">
                    </div>
                </div>
            </div>
            <div class="col-md-6 text-center">
                <label for="observaciones">Digite observaciones, que no esten en los radio botones</label>
                <textarea class="form-control" id="observaciones" rows="3" cols="4"></textarea>
            </div>
        </div>

        <div class="row justify-content-around p-3">
            <button id="cerrarDialog" type="button" class="btn btn-outline-warning">
              Guardar y cerrar
            </button>
        </div>


    </div>

    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Servicios de la habitación</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body2">
        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">Hab para alergicos</th>
              <th scope="col">Aire acond.</th>
              <th scope="col">Calefacción</th>
              <th scope="col">Acc. para discapacitados</th>
            </tr>
          </thead>
          <tbody class="text-center">
            <tr id="tr1"></tr>

          </tbody>
        </table>

        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">Llave</th>
              <th scope="col">Ventanas insonorizadas</th>
              <th scope="col">Con. entre habitaciones</th>
              <th scope="col">Caja fuerte</th>
            </tr>
          </thead>
          <tbody class="text-center">
            <tr id="tr2"></tr>

          </tbody>
        </table>

        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">Escritorio</th>
              <th scope="col">Sofa-cama</th>
              <th scope="col">Cortinas opacas</th>
              <th scope="col">Plancha</th>
            </tr>
          </thead>
          <tbody class="text-center">
            <tr id="tr3"></tr>

          </tbody>
        </table>

        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">Plancha pantalones</th>
              <th scope="col">Sala</th>
              <th scope="col">Telefono</th>
              <th scope="col">Wifi</th>
            </tr>
          </thead>
          <tbody class="text-center">
            <tr id="tr4"></tr>

          </tbody>
        </table>

        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">TV 4:3</th>
              <th scope="col">TV 16:9</th>
              <th scope="col">Pantalla plana</th>
              <th scope="col">TV satelite</th>
            </tr>
          </thead>
          <tbody class="text-center">
            <tr id="tr5"></tr>

          </tbody>
        </table>

        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">TV canal pago</th>
              <th scope="col">Servicio en habitaciones</th>
              <th scope="col">Mini bar</th>
              <th scope="col">Kettle</th>
            </tr>
          </thead>
          <tbody class="text-center">
            <tr id="tr6"></tr>

          </tbody>
        </table>

        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">Cocina equipada</th>
              <th scope="col">Kitchenette</th>
              <th scope="col">Espejo maquillaje</th>
              <th scope="col">Amenities de baño</th>
            </tr>
          </thead>
          <tbody class="text-center">
            <tr id="tr7"></tr>

          </tbody>
        </table>

        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">Insonorización</th>
              <th scope="col">Conexión para PC</th>
              <th scope="col">Nevera</th>
              <th scope="col">Lavadora</th>
            </tr>
          </thead>
          <tbody class="text-center">
            <tr id="tr8"></tr>

          </tbody>
        </table>

        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">Toallas</th>
              <th scope="col">Lavavajillas</th>
              <th scope="col">Secadora</th>
              <th scope="col">Baño privado</th>
            </tr>
          </thead>
          <tbody class="text-center">
            <tr id="tr9"></tr>

          </tbody>
        </table>

        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">Baño compartido</th>
              <th scope="col">Observaciones</th>
            </tr>
          </thead>
          <tbody class="text-center">
            <tr id="tr10"></tr>

          </tbody>
        </table>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
        <div class="table-responsive">
        	<table class="table table-hover table-light">
			  <thead class="thead-dark">
			    <tr>
			      <th scope="col">Tipo de habitación</th>
			      <th scope="col"># de habitaciones</th>
			      <th scope="col">Camas</th>
			      <th scope="col"># de Camas</th>
			      <th scope="col">Camas supletorias</th>
                  <th scope="col">Cunas</th>
                  <th scope="col">Ver servicios</th>
			      <th scope="col">Accion</th>
			    </tr>
			  </thead>
			  <tbody id="tbody">
				  
			  </tbody>
			</table>
        </div>
       
		<div id="datos"></div>
		<button id="guardarHabitacion" class="btn btn-outline-primary">Añadir habitación</button>
		<div class="row justify-content-around p-3">
            <button type="button" class="btn btn-success">Guardar y seguir</button>
            <button type="button" class="btn btn-outline-success">Guardar y seguir despues</button>
        </div>
		
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