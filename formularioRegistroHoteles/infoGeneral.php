<form>

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
                <option>Resort</option>
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

          <div class="row justify-content-around">
            <button type="button" class="btn btn-success">Guardar y seguir</button>
            <button type="button" class="btn btn-outline-success">Guardar y seguir despues</button>
          </div>

        </div>
      </form>