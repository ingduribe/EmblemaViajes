<div class="container mt-1" id="formHoteles1">
  <p class="display-3 text-center">Registra tu hotel</p>
    <form id="formuHoteles1">
      <div class="border border-secondary p-3">

          <p class="display-4 text-center">Datos de contacto</p>
            <div class="form-group row">
              <label for="nombre contacto" class="col-md-4 col-form-label">Nombre de la persona de contacto</label>
              <div class="col-md-8">
                <input type="text" class="form-control" id="nombre" placeholder="Ingrese nombre" required>  
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-4 col-form-label" for="cargo">¿Cual es su cargo en el hotel?</label>
              <div class="col-md-8 text-center">
                <select class="form-control " id="cargo">
                  <option>Propietario</option>
                  <option>Director / Administrador / Gerente</option>
                  <option>Reservas / Renueve</option>
                  <option>Recepción</option>
                  <option>Contratación / E-commerce</option>
                  <option>Otro</option>
                </select>
              </div>
            </div>
            
            <div class="form-group row">
              <label class="col-md-4 col-form-label" for="telefono">Telefono de contacto</label>
              <div class="col-md-8">
                <input type="number" class="form-control" id="telefonoC" placeholder="Ingrese telefono" required>
              </div>
            </div>

            <div class="form-group row">
              <label class="col-md-4 col-form-label" for="telefono">Telefono alternativo</label>
              <div class="col-md-8">
                <input type="number" class="form-control" id="telefonoA" placeholder="Ingrese telefono alternativo (opcional)">
              </div>
            </div>

            <div class="form-group row">
              <label class="col-md-4" for="email">Correro electrónico</label>
              <div class="col-md-8">
                <input type="email" class="form-control" id="email" placeholder="Ingresa email" required>
              </div>
            </div>

            <div class="form-group row">
              <label class="col-md-4 col-form-label" for="grupoHoteles">¿Pertenece a una cadena hotelera o grupo de gestion de hoteles?</label>
              <div class="col-md-8 text-center">
                <select class="form-control " id="grupoHoteles">
                  <option class="text-center">Si</option>
                  <option class="text-center">No</option>>
                </select>
              </div>
            </div>

            <div class="form-group row">
              <label for="nombre cadena hotelera" class="col-md-4 col-form-label">Nombre de cadena hotelera o grupo de gestión</label>
              <div class="col-md-8">
                <input type="text" class="form-control" id="nombreCadenaHotelera" placeholder="Ingrese cadena hotelera (si tiene)">  
              </div>
            </div>

        </div>

        <div class="border border-secondary p-3">
          <p class="display-4 text-center">Información general</p>
          <div class="form-group row">
            <label for="nombre propiedad" class="col-md-4 col-form-label">Nombre de la propiedad</label>
            <div class="col-md-8">
              <input type="text" class="form-control" id="nombrepropiedad" placeholder="Ingrese nombre de la propiedad">  
            </div>
          </div>

          <div class="form-group row">
            <label class="col-md-4 col-form-label" for="cargo">Tipo de alojamiento</label>
            <div class="col-md-8 text-center">
              <select class="form-control " id="cargo">
                <option>Hotel</option>
                <option>Hostel</option>
                <option>Aparthotel</option>
                <option>Resortn</option>
                <option>Villa / Mansión</option>
                <option>Apartamento</option>
                <option>Casa</option>
                <option>Casa rural</option>
                <option>Habitación en casa privada</option>
                <option>Lodge</option>
                <option>Barco</option>
                <option>Camping</option>
                <option>Hotel capsula</option>
                <option>Chalet Montaña</option>
                <option>Posada / Hostería</option>
                <option>Motel</option>
                <option>Casa Rural</option>
                <option>Otro</option>
              </select>
            </div>
          </div>

          <div class="form-group row">
            <label class="col-md-4 col-form-label" for="telefono">Numero total de habitaciones o unidades</label>
            <div class="col-md-8">
              <input type="number" class="form-control" id="telefonoA" placeholder="Ingrese numero de habitaciones">
            </div>
          </div>

          <div class="form-group row">
            <label class="col-md-4 col-form-label" for="categoria">Categoría</label>
            <div class="col-md-8 text-center">
              <select class="form-control " id="categoria">
                <option>No aplica</option>
                <option>1 Estrella</option>
                <option>2 Estrellas</option>
                <option>3 Estrellas</option>
                <option>4 Estrellas</option>
                <option>5 Estrellas</option>
                <option>Otra calificación o superior</option>
              </select>
            </div>
          </div>

          <div class="form-group row">
            <label for="direccion" class="col-md-4 col-form-label">Dirección completa</label>
            <div class="col-md-8">
              <input type="text" class="form-control" id="direccion" placeholder="Ingrese dirección">  
            </div>
          </div>

          <div class="form-group row">
            <label for="ciudad" class="col-md-4 col-form-label">Ciudad</label>
            <div class="col-md-8">
              <input type="text" class="form-control" id="ciudad" placeholder="Ingrese ciudad">  
            </div>
          </div>

          <div class="form-group row">
            <label for="barrio" class="col-md-4 col-form-label">Barrio</label>
            <div class="col-md-8">
              <input type="text" class="form-control" id="barrio" placeholder="Ingrese barrio">  
            </div>
          </div>

          <div class="form-group row">
            <label for="pais" class="col-md-4 col-form-label">Pais</label>
            <div class="col-md-8">
              <input type="text" class="form-control" id="pais" placeholder="Ingrese pais">  
            </div>
          </div>

          <div class="form-group row">
            <label for="codigo postal" class="col-md-4 col-form-label">Código postal</label>
            <div class="col-md-8">
              <input type="text" class="form-control" id="codigo-postal" placeholder="Ingrese código postal">  
            </div>
          </div>


        </div>
        

        <button type="submit" class="btn btn-outline-success btn-block">Guardar datos</button>
        <button type="submit" class="btn btn-outline-danger btn-block" id="cerrarDialog">Cerrar</button>
      </form>

  

</div>
