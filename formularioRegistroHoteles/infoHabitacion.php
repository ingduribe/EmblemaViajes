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

        <div class="row text-center">
        	<div class="col-md-6 text-center">
        		<div class="form-group row">
        			<div class="col-md-8">
        				Baño compartido
        			</div>
        			<div class="col-md-4"> 
        				Si<input type="radio" name="banoComp">
        				No<input type="radio" name="banoComp">
        			</div>
        		</div>
        	</div>

        	<div class="col-md-6 text-center">
				<div class="form-group row">
        			<div class="col-md-8">
        				Habitaciones para alergicos
        			</div>
        			<div class="col-md-4"> 
        				Si<input type="radio" name="HabiAler">
        				No<input type="radio" name="HabiAler">
        			</div>
        		</div>
        	</div>
        </div>

        <div class="row text-center">
        	<div class="col-md-6 text-center">
        		<div class="form-group row">
        			<div class="col-md-8">
        				Habitaciones para no fumadores
        			</div>
        			<div class="col-md-4"> 
        				Si<input type="radio" name="no-fum">
        				No<input type="radio" name="no-fum">
        			</div>
        		</div>
        	</div>

        	<div class="col-md-6 text-center">
				<div class="form-group row">
        			<div class="col-md-8">
        				Aire acondicionado
        			</div>
        			<div class="col-md-4"> 
        				Si<input type="radio" name="aire-acon">
        				No<input type="radio" name="aire-acon">
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
        				Si<input type="radio" name="cale">
        				No<input type="radio" name="cale">
        			</div>
        		</div>
        	</div>

        	<div class="col-md-6 text-center">
				<div class="form-group row">
        			<div class="col-md-8">
        				Ventanas articuladas
        			</div>
        			<div class="col-md-4"> 
        				Si<input type="radio" name="venta">
        				No<input type="radio" name="venta">
        			</div>
        		</div>
        	</div>
        </div>

        <div class="row text-center">
        	<div class="col-md-6 text-center">
        		<div class="form-group row">
        			<div class="col-md-8">
        				Chimenea
        			</div>
        			<div class="col-md-4"> 
        				Si<input type="radio" name="chime">
        				No<input type="radio" name="chime">
        			</div>
        		</div>
        	</div>

        	<div class="col-md-6 text-center">
				<div class="form-group row">
        			<div class="col-md-8">
        				Perros
        			</div>
        			<div class="col-md-4"> 
        				Si<input type="radio" name="perros">
        				No<input type="radio" name="perros">
        			</div>
        		</div>
        	</div>
        </div>

        <div class="row text-center">
        	<div class="col-md-6 text-center">
        		<div class="form-group row">
        			<div class="col-md-8">
        				Otros animales de compañía
        			</div>
        			<div class="col-md-4"> 
        				Si<input type="radio" name="otros-ani">
        				No<input type="radio" name="otros-ani">
        			</div>
        		</div>
        	</div>

        	<div class="col-md-6 text-center">
				<div class="form-group row">
        			<div class="col-md-8">
        				Acceso para discapacitados
        			</div>
        			<div class="col-md-4"> 
        				Si<input type="radio" name="acc-disca">
        				No<input type="radio" name="acc-disca">
        			</div>
        		</div>
        	</div>
        </div>

        <div class="row text-center">
        	<div class="col-md-6 text-center">
        		<div class="form-group row">
        			<div class="col-md-8">
        				Llave electrónica/magnética
        			</div>
        			<div class="col-md-4"> 
        				Si<input type="radio" name="llave">
        				No<input type="radio" name="llave">
        			</div>
        		</div>
        	</div>

        	<div class="col-md-6 text-center">
				<div class="form-group row">
        			<div class="col-md-8">
        				Ventanas insonorizadas
        			</div>
        			<div class="col-md-4"> 
        				Si<input type="radio" name="venta-inso">
        				No<input type="radio" name="venta-inso">
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
        				Si<input type="radio" name="cone-habi">
        				No<input type="radio" name="cone-habi">
        			</div>
        		</div>
        	</div>

        	<div class="col-md-6 text-center">
				<div class="form-group row">
        			<div class="col-md-8">
        				Caja fuerte (código)
        			</div>
        			<div class="col-md-4"> 
        				Si<input type="radio" name="caja-fu">
        				No<input type="radio" name="caja-fu">
        			</div>
        		</div>
        	</div>
        </div>

        <div class="row text-center">
        	<div class="col-md-6 text-center">
        		<div class="form-group row">
        			<div class="col-md-8">
        				Caja fuerte (llave)
        			</div>
        			<div class="col-md-4"> 
        				Si<input type="radio" name="caja-fu-llave">
        				No<input type="radio" name="caja-fu-llave">
        			</div>
        		</div>
        	</div>

        	<div class="col-md-6 text-center">
				<div class="form-group row">
        			<div class="col-md-8">
        				Escritorio
        			</div>
        			<div class="col-md-4"> 
        				Si<input type="radio" name="escri">
        				No<input type="radio" name="escri">
        			</div>
        		</div>
        	</div>
        </div>

        <div class="row text-center">
        	<div class="col-md-6 text-center">
        		<div class="form-group row">
        			<div class="col-md-8">
        				Sofá cama
        			</div>
        			<div class="col-md-4"> 
        				Si<input type="radio" name="sifa-ca">
        				No<input type="radio" name="sifa-ca">
        			</div>
        		</div>
        	</div>

        	<div class="col-md-6 text-center">
				<div class="form-group row">
        			<div class="col-md-8">
        				Red eléctrica
        			</div>
        			<div class="col-md-4"> 
        				Si<input type="radio" name="red-elec">
        				No<input type="radio" name="red-elec">
        			</div>
        		</div>
        	</div>
        </div>

        <div class="row text-center">
        	<div class="col-md-6 text-center">
        		<div class="form-group row">
        			<div class="col-md-8">
        				Cuna
        			</div>
        			<div class="col-md-4"> 
        				Si<input type="radio" name="cuna">
        				No<input type="radio" name="cuna">
        			</div>
        		</div>
        	</div>

        	<div class="col-md-6 text-center">
				<div class="form-group row">
        			<div class="col-md-8">
        				Lámpara lectura
        			</div>
        			<div class="col-md-4"> 
        				Si<input type="radio" name="lampa-lectu">
        				No<input type="radio" name="lampa-lectu">
        			</div>
        		</div>
        	</div>
        </div>

        <div class="row text-center">
        	<div class="col-md-6 text-center">
        		<div class="form-group row">
        			<div class="col-md-8">
        				Luz nocturna
        			</div>
        			<div class="col-md-4"> 
        				Si<input type="radio" name="luz-noctu">
        				No<input type="radio" name="luz-noctu">
        			</div>
        		</div>
        	</div>

        	<div class="col-md-6 text-center">
				<div class="form-group row">
        			<div class="col-md-8">
        				Cortinas opacas (Foscurit)
        			</div>
        			<div class="col-md-4"> 
        				Si<input type="radio" name="corti-opa">
        				No<input type="radio" name="corti-opa">
        			</div>
        		</div>
        	</div>
        </div>

        <div class="row text-center">
        	<div class="col-md-6 text-center">
        		<div class="form-group row">
        			<div class="col-md-8">
        				Plancha
        			</div>
        			<div class="col-md-4"> 
        				Si<input type="radio" name="plancha">
        				No<input type="radio" name="plancha">
        			</div>
        		</div>
        	</div>

        	<div class="col-md-6 text-center">
				<div class="form-group row">
        			<div class="col-md-8">
        				Plancha pantalones
        			</div>
        			<div class="col-md-4"> 
        				Si<input type="radio" name="plancha-panta">
        				No<input type="radio" name="plancha-panta">
        			</div>
        		</div>
        	</div>
        </div>


        <div class="row text-center">
        	<div class="col-md-6 text-center">
        		<div class="form-group row">
        			<div class="col-md-8">
        				Prensa gratuita
        			</div>
        			<div class="col-md-4"> 
        				Si<input type="radio" name="prensa">
        				No<input type="radio" name="prensa">
        			</div>
        		</div>
        	</div>

        	<div class="col-md-6 text-center">
				<div class="form-group row">
        			<div class="col-md-8">
        				Sala de estar
        			</div>
        			<div class="col-md-4"> 
        				Si<input type="radio" name="sala">
        				No<input type="radio" name="sala">
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
        				Si<input type="radio" name="telefono">
        				No<input type="radio" name="telefono">
        			</div>
        		</div>
        	</div>

        	<div class="col-md-6 text-center">
				<div class="form-group row">
        			<div class="col-md-8">
        				Línea directa teléfono
        			</div>
        			<div class="col-md-4"> 
        				Si<input type="radio" name="linea-telef">
        				No<input type="radio" name="linea-telef">
        			</div>
        		</div>
        	</div>
        </div>

        <div class="row text-center">
        	<div class="col-md-6 text-center">
        		<div class="form-group row">
        			<div class="col-md-8">
        				Llamadas locales gratuitas
        			</div>
        			<div class="col-md-4"> 
        				Si<input type="radio" name="llama-local-grat">
        				No<input type="radio" name="llama-local-grat">
        			</div>
        		</div>
        	</div>

        	<div class="col-md-6 text-center">
				<div class="form-group row">
        			<div class="col-md-8">
        				Mensajería por voz
        			</div>
        			<div class="col-md-4"> 
        				Si<input type="radio" name="mensaj-voz">
        				No<input type="radio" name="mensaj-voz">
        			</div>
        		</div>
        	</div>
        </div>

        <div class="row text-center">
            <div class="col-md-6 text-center">
                <div class="form-group row">
                    <div class="col-md-8">
                        Internet acceso gratuito
                    </div>
                    <div class="col-md-4"> 
                        Si<input type="radio" name="net-grat">
                        No<input type="radio" name="net-grat">
                    </div>
                </div>
            </div>

            <div class="col-md-6 text-center">
                <div class="form-group row">
                    <div class="col-md-8">
                        Internet alta velocidad
                    </div>
                    <div class="col-md-4"> 
                        Si<input type="radio" name="net-alta-vel">
                        No<input type="radio" name="net-alta-vel">
                    </div>
                </div>
            </div>
        </div>

        <div class="row text-center">
            <div class="col-md-6 text-center">
                <div class="form-group row">
                    <div class="col-md-8">
                        Internet por teléfono
                    </div>
                    <div class="col-md-4"> 
                        Si<input type="radio" name="net-tel">
                        No<input type="radio" name="net-tel">
                    </div>
                </div>
            </div>

            <div class="col-md-6 text-center">
                <div class="form-group row">
                    <div class="col-md-8">
                        Internet inalámbrico
                    </div>
                    <div class="col-md-4"> 
                        Si<input type="radio" name="net-ina">
                        No<input type="radio" name="net-ina">
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
                        Si<input type="radio" name="tv-4:3">
                        No<input type="radio" name="tv-4:3">
                    </div>
                </div>
            </div>

            <div class="col-md-6 text-center">
                <div class="form-group row">
                    <div class="col-md-8">
                        Pantalla TV 16:9
                    </div>
                    <div class="col-md-4"> 
                        Si<input type="radio" name="tv-16:9">
                        No<input type="radio" name="tv-16:9">
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
                        Si<input type="radio" name="tv-plana">
                        No<input type="radio" name="tv-plana">
                    </div>
                </div>
            </div>

            <div class="col-md-6 text-center">
                <div class="form-group row">
                    <div class="col-md-8">
                        TV satélite
                    </div>
                    <div class="col-md-4"> 
                        Si<input type="radio" name="tv-sat">
                        No<input type="radio" name="tv-sat">
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
                        Si<input type="radio" name="tv-pago">
                        No<input type="radio" name="tv-pago">
                    </div>
                </div>
            </div>

            <div class="col-md-6 text-center">
                <div class="form-group row">
                    <div class="col-md-8">
                        TV interactiva
                    </div>
                    <div class="col-md-4"> 
                        Si<input type="radio" name="tv-inter">
                        No<input type="radio" name="tv-inter">
                    </div>
                </div>
            </div>
        </div>

        <div class="row text-center">
            <div class="col-md-6 text-center">
                <div class="form-group row">
                    <div class="col-md-8">
                        Web TV
                    </div>
                    <div class="col-md-4"> 
                        Si<input type="radio" name="web-tv">
                        No<input type="radio" name="web-tv">
                    </div>
                </div>
            </div>

            <div class="col-md-6 text-center">
                <div class="form-group row">
                    <div class="col-md-8">
                        Video Club
                    </div>
                    <div class="col-md-4"> 
                        Si<input type="radio" name="video-club">
                        No<input type="radio" name="video-club">
                    </div>
                </div>
            </div>
        </div>

        <div class="row text-center">
            <div class="col-md-6 text-center">
                <div class="form-group row">
                    <div class="col-md-8">
                        DVD
                    </div>
                    <div class="col-md-4"> 
                        Si<input type="radio" name="dvd">
                        No<input type="radio" name="dvd">
                    </div>
                </div>
            </div>

            <div class="col-md-6 text-center">
                <div class="form-group row">
                    <div class="col-md-8">
                        VCR
                    </div>
                    <div class="col-md-4"> 
                        Si<input type="radio" name="vcr">
                        No<input type="radio" name="vcr">
                    </div>
                </div>
            </div>
        </div>
    
        <div class="row text-center">
            <div class="col-md-6 text-center">
                <div class="form-group row">
                    <div class="col-md-8">
                        Videojuegos
                    </div>
                    <div class="col-md-4"> 
                        Si<input type="radio" name="video-jueg">
                        No<input type="radio" name="video-jueg">
                    </div>
                </div>
            </div>

            <div class="col-md-6 text-center">
                <div class="form-group row">
                    <div class="col-md-8">
                        Canales de música
                    </div>
                    <div class="col-md-4"> 
                        Si<input type="radio" name="canales-music">
                        No<input type="radio" name="canales-music">
                    </div>
                </div>
            </div>
        </div>

        <div class="row text-center">
            <div class="col-md-6 text-center">
                <div class="form-group row">
                    <div class="col-md-8">
                        Hi-Fi
                    </div>
                    <div class="col-md-4"> 
                        Si<input type="radio" name="hi-fi">
                        No<input type="radio" name="hi-fi">
                    </div>
                </div>
            </div>

            <div class="col-md-6 text-center">
                <div class="form-group row">
                    <div class="col-md-8">
                        Radio
                    </div>
                    <div class="col-md-4"> 
                        Si<input type="radio" name="radio">
                        No<input type="radio" name="radio">
                    </div>
                </div>
            </div>
        </div>

        <div class="row text-center">
            <div class="col-md-6 text-center">
                <div class="form-group row">
                    <div class="col-md-8">
                        Secadora de ropa
                    </div>
                    <div class="col-md-4"> 
                        Si<input type="radio" name="seca-ropa">
                        No<input type="radio" name="seca-ropa">
                    </div>
                </div>
            </div>

            <div class="col-md-6 text-center">
                <div class="form-group row">
                    <div class="col-md-8">
                        Reproductor CD
                    </div>
                    <div class="col-md-4"> 
                        Si<input type="radio" name="repro-cd">
                        No<input type="radio" name="repro-cd">
                    </div>
                </div>
            </div>
        </div>

        <div class="row text-center">
            <div class="col-md-6 text-center">
                <div class="form-group row">
                    <div class="col-md-8">
                       Servicio habitaciones 24h
                    </div>
                    <div class="col-md-4"> 
                        Si<input type="radio" name="servi-habit">
                        No<input type="radio" name="servi-habit">
                    </div>
                </div>
            </div>

            <div class="col-md-6 text-center">
                <div class="form-group row">
                    <div class="col-md-8">
                        RServicio habitaciones no-24h
                    </div>
                    <div class="col-md-4"> 
                        Si<input type="radio" name="servi-habitNo">
                        No<input type="radio" name="servi-habitNo">
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
                        Si<input type="radio" name="mini-bar">
                        No<input type="radio" name="mini-bar">
                    </div>
                </div>
            </div>

            <div class="col-md-6 text-center">
                <div class="form-group row">
                    <div class="col-md-8">
                        Mini-bar gratuito
                    </div>
                    <div class="col-md-4"> 
                        Si<input type="radio" name="mini-bar-grat">
                        No<input type="radio" name="mini-bar-grat">
                    </div>
                </div>
            </div>
        </div>

        <div class="row text-center">
            <div class="col-md-6 text-center">
                <div class="form-group row">
                    <div class="col-md-8">
                       Botella de agua
                    </div>
                    <div class="col-md-4"> 
                        Si<input type="radio" name="bot-agua">
                        No<input type="radio" name="bot-agua">
                    </div>
                </div>
            </div>

            <div class="col-md-6 text-center">
                <div class="form-group row">
                    <div class="col-md-8">
                        Kettle (cafetera y tetera)
                    </div>
                    <div class="col-md-4"> 
                        Si<input type="radio" name="kettle">
                        No<input type="radio" name="kettle">
                    </div>
                </div>
            </div>
        </div>

        <div class="row text-center">
            <div class="col-md-6 text-center">
                <div class="form-group row">
                    <div class="col-md-8">
                       Cocina
                    </div>
                    <div class="col-md-4"> 
                        Si<input type="radio" name="cocina">
                        No<input type="radio" name="cocina">
                    </div>
                </div>
            </div>

            <div class="col-md-6 text-center">
                <div class="form-group row">
                    <div class="col-md-8">
                        Kitchenette
                    </div>
                    <div class="col-md-4"> 
                        Si<input type="radio" name="kitchenette">
                        No<input type="radio" name="kitchenette">
                    </div>
                </div>
            </div>
        </div>

        <div class="row text-center">
            <div class="col-md-6 text-center">
                <div class="form-group row">
                    <div class="col-md-8">
                       Equipo cocina
                    </div>
                    <div class="col-md-4"> 
                        Si<input type="radio" name="eq-cocina">
                        No<input type="radio" name="eq-cocina">
                    </div>
                </div>
            </div>

            <div class="col-md-6 text-center">
                <div class="form-group row">
                    <div class="col-md-8">
                        Microondas
                    </div>
                    <div class="col-md-4"> 
                        Si<input type="radio" name="micro">
                        No<input type="radio" name="micro">
                    </div>
                </div>
            </div>
        </div>

        <div class="row text-center">
            <div class="col-md-6 text-center">
                <div class="form-group row">
                    <div class="col-md-8">
                       Tostador
                    </div>
                    <div class="col-md-4"> 
                        Si<input type="radio" name="tostador">
                        No<input type="radio" name="tostador">
                    </div>
                </div>
            </div>

            <div class="col-md-6 text-center">
                <div class="form-group row">
                    <div class="col-md-8">
                        Secador
                    </div>
                    <div class="col-md-4"> 
                        Si<input type="radio" name="secador">
                        No<input type="radio" name="secador">
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
                        Si<input type="radio" name="espejo">
                        No<input type="radio" name="espejo">
                    </div>
                </div>
            </div>

            <div class="col-md-6 text-center">
                <div class="form-group row">
                    <div class="col-md-8">
                        Artículos de baño
                    </div>
                    <div class="col-md-4"> 
                        Si<input type="radio" name="artic-bano">
                        No<input type="radio" name="artic-bano">
                    </div>
                </div>
            </div>
        </div>

        <div class="row text-center">
            <div class="col-md-6 text-center">
                <div class="form-group row">
                    <div class="col-md-8">
                       Artículos de baño de diseño
                    </div>
                    <div class="col-md-4"> 
                        Si<input type="radio" name="artic-bano-dise">
                        No<input type="radio" name="artic-bano-dise">
                    </div>
                </div>
            </div>

            <div class="col-md-6 text-center">
                <div class="form-group row">
                    <div class="col-md-8">
                        Bidet
                    </div>
                    <div class="col-md-4"> 
                        Si<input type="radio" name="bidet">
                        No<input type="radio" name="bidet">
                    </div>
                </div>
            </div>
        </div>

        <div class="row text-center">
            <div class="col-md-6 text-center">
                <div class="form-group row">
                    <div class="col-md-8">
                       Calentador de toallas
                    </div>
                    <div class="col-md-4"> 
                        Si<input type="radio" name="calent-toallas">
                        No<input type="radio" name="calent-toallas">
                    </div>
                </div>
            </div>

            <div class="col-md-6 text-center">
                <div class="form-group row">
                    <div class="col-md-8">
                        Teléfono en el baño
                    </div>
                    <div class="col-md-4"> 
                        Si<input type="radio" name="telef-bano">
                        No<input type="radio" name="telef-bano">
                    </div>
                </div>
            </div>
        </div>

        <div class="row text-center">
            <div class="col-md-6 text-center">
                <div class="form-group row">
                    <div class="col-md-8">
                       TV en el baño
                    </div>
                    <div class="col-md-4"> 
                        Si<input type="radio" name="tv-bano">
                        No<input type="radio" name="tv-bano">
                    </div>
                </div>
            </div>

            <div class="col-md-6 text-center">
                <div class="form-group row">
                    <div class="col-md-8">
                        Tendedor
                    </div>
                    <div class="col-md-4"> 
                        Si<input type="radio" name="tendedor">
                        No<input type="radio" name="tendedor">
                    </div>
                </div>
            </div>
        </div>

        <div class="row text-center">
            <div class="col-md-6 text-center">
                <div class="form-group row">
                    <div class="col-md-8">
                       Rayos UVA
                    </div>
                    <div class="col-md-4"> 
                        Si<input type="radio" name="rayos-uva">
                        No<input type="radio" name="rayos-uva">
                    </div>
                </div>
            </div>

            <div class="col-md-6 text-center">
                <div class="form-group row">
                    <div class="col-md-8">
                        Tocador
                    </div>
                    <div class="col-md-4"> 
                        Si<input type="radio" name="tocador">
                        No<input type="radio" name="tocador">
                    </div>
                </div>
            </div>
        </div>

        <div class="row text-center">
            <div class="col-md-6 text-center">
                <div class="form-group row">
                    <div class="col-md-8">
                       Costurero
                    </div>
                    <div class="col-md-4"> 
                        Si<input type="radio" name="costurero">
                        No<input type="radio" name="costurero">
                    </div>
                </div>
            </div>

            <div class="col-md-6 text-center">
                <div class="form-group row">
                    <div class="col-md-8">
                        Insonorización
                    </div>
                    <div class="col-md-4"> 
                        Si<input type="radio" name="insonorizacion">
                        No<input type="radio" name="insonorizacion">
                    </div>
                </div>
            </div>
        </div>

        <div class="row text-center">
            <div class="col-md-6 text-center">
                <div class="form-group row">
                    <div class="col-md-8">
                       Conexión para 2 ordenadores
                    </div>
                    <div class="col-md-4"> 
                        Si<input type="radio" name="conect-2-ordena">
                        No<input type="radio" name="conect-2-ordena">
                    </div>
                </div>
            </div>

            <div class="col-md-6 text-center">
                <div class="form-group row">
                    <div class="col-md-8">
                        TV
                    </div>
                    <div class="col-md-4"> 
                        Si<input type="radio" name="tv-normal">
                        No<input type="radio" name="tv-normal">
                    </div>
                </div>
            </div>
        </div>

        <div class="row text-center">
            <div class="col-md-6 text-center">
                <div class="form-group row">
                    <div class="col-md-8">
                       Prensa diaria
                    </div>
                    <div class="col-md-4"> 
                        Si<input type="radio" name="prensa-diaria">
                        No<input type="radio" name="prensa-diaria">
                    </div>
                </div>
            </div>

            <div class="col-md-6 text-center">
                <div class="form-group row">
                    <div class="col-md-8">
                        Amenities
                    </div>
                    <div class="col-md-4"> 
                        Si<input type="radio" name="amenities">
                        No<input type="radio" name="amenities">
                    </div>
                </div>
            </div>
        </div>

        <div class="row text-center">
            <div class="col-md-6 text-center">
                <div class="form-group row">
                    <div class="col-md-8">
                       Baño minusválidos
                    </div>
                    <div class="col-md-4"> 
                        Si<input type="radio" name="bano-minus">
                        No<input type="radio" name="bano-minus">
                    </div>
                </div>
            </div>

            <div class="col-md-6 text-center">
                <div class="form-group row">
                    <div class="col-md-8">
                        Caja de seguridad
                    </div>
                    <div class="col-md-4"> 
                        Si<input type="radio" name="caja-segu">
                        No<input type="radio" name="caja-segu">
                    </div>
                </div>
            </div>
        </div>

        <div class="row text-center">
            <div class="col-md-6 text-center">
                <div class="form-group row">
                    <div class="col-md-8">
                       Calefacción individual
                    </div>
                    <div class="col-md-4"> 
                        Si<input type="radio" name="cale-indiv">
                        No<input type="radio" name="cale-indiv">
                    </div>
                </div>
            </div>

            <div class="col-md-6 text-center">
                <div class="form-group row">
                    <div class="col-md-8">
                        Enmoquetado/a
                    </div>
                    <div class="col-md-4"> 
                        Si<input type="radio" name="enmoquetado">
                        No<input type="radio" name="enmoquetado">
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
                        Si<input type="radio" name="nevera">
                        No<input type="radio" name="nevera">
                    </div>
                </div>
            </div>

            <div class="col-md-6 text-center">
                <div class="form-group row">
                    <div class="col-md-8">
                        Mini nevera
                    </div>
                    <div class="col-md-4"> 
                        Si<input type="radio" name="mini-nevera">
                        No<input type="radio" name="mini-nevera">
                    </div>
                </div>
            </div>
        </div>

        <div class="row text-center">
            <div class="col-md-6 text-center">
                <div class="form-group row">
                    <div class="col-md-8">
                       Horno
                    </div>
                    <div class="col-md-4"> 
                        Si<input type="radio" name="horno">
                        No<input type="radio" name="horno">
                    </div>
                </div>
            </div>

            <div class="col-md-6 text-center">
                <div class="form-group row">
                    <div class="col-md-8">
                        Lavadora
                    </div>
                    <div class="col-md-4"> 
                        Si<input type="radio" name="lavadora">
                        No<input type="radio" name="lavadora">
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
                        Si<input type="radio" name="toallas">
                        No<input type="radio" name="toallas">
                    </div>
                </div>
            </div>

            <div class="col-md-6 text-center">
                <div class="form-group row">
                    <div class="col-md-8">
                        Aire Acc. 
                    </div>
                    <div class="col-md-4"> 
                        Si<input type="radio" name="aire-acc">
                        No<input type="radio" name="aire-acc">
                    </div>
                </div>
            </div>
        </div>

        <div class="row text-center">
            <div class="col-md-6 text-center">
                <div class="form-group row">
                    <div class="col-md-8">
                       TV satélite en algunas habitaciones
                    </div>
                    <div class="col-md-4"> 
                        Si<input type="radio" name="tv-sat-algu-habit">
                        No<input type="radio" name="tv-sat-algu-habit">
                    </div>
                </div>
            </div>

            <div class="col-md-6 text-center">
                <div class="form-group row">
                    <div class="col-md-8">
                        T.V. (sat) en otras hab. 
                    </div>
                    <div class="col-md-4"> 
                        Si<input type="radio" name="tv-sat-otras-habit">
                        No<input type="radio" name="tv-sat-otras-habit">
                    </div>
                </div>
            </div>
        </div>

        <div class="row text-center">
            <div class="col-md-6 text-center">
                <div class="form-group row">
                    <div class="col-md-8">
                       Lavavajillas
                    </div>
                    <div class="col-md-4"> 
                        Si<input type="radio" name="lavavajillas">
                        No<input type="radio" name="lavavajillas">
                    </div>
                </div>
            </div>

            <div class="col-md-6 text-center">
                <div class="form-group row">
                    <div class="col-md-8">
                        TV Canal Plus 
                    </div>
                    <div class="col-md-4"> 
                        Si<input type="radio" name="tv-canal-plus">
                        No<input type="radio" name="tv-canal-plus">
                    </div>
                </div>
            </div>
        </div>

        <div class="row text-center">
            <div class="col-md-6 text-center">
                <div class="form-group row">
                    <div class="col-md-8">
                       Wi-Fi
                    </div>
                    <div class="col-md-4"> 
                        Si<input type="radio" name="wifi">
                        No<input type="radio" name="wifi">
                    </div>
                </div>
            </div>

            <div class="col-md-6 text-center">
                <div class="form-group row">
                    <div class="col-md-8">
                        Wi-Fi Gratis
                    </div>
                    <div class="col-md-4"> 
                        Si<input type="radio" name="wifi-gratis">
                        No<input type="radio" name="wifi-gratis">
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