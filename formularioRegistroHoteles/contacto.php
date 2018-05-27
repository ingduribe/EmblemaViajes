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
            <div class="row justify-content-around">
              <button type="button" class="btn btn-success">Guardar y seguir</button>
              <button type="button" class="btn btn-outline-success">Guardar y seguir despues</button>
            </div>
          
        </div>
      </form>