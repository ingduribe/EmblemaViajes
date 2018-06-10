<form id="formuHoteles1">
      <div class="border border-secondary p-3">
          <p class="display-4 text-center">Datos personales</p>
          <div class="form-group row">
            <label for="nombre" class="col-md-4 col-form-label">Nombre</label>
            <div class="col-md-8">
              <input type="text" class="form-control" id="nombre" placeholder="Ingrese nombre" required>
            </div>
          </div>

          <div class="form-group row">
            <label for="apellidos" class="col-md-4 col-form-label">Apellidos</label>
            <div class="col-md-8">
              <input type="text" class="form-control" id="apellidos" placeholder="Ingrese apellidos" required>
            </div>
          </div>

          <div class="form-group row">
            <label for="telefono" class="col-md-4 col-form-label">Telefono</label>
            <div class="col-md-8">
              <input type="text" class="form-control" id="telefono" placeholder="Ingrese numero de telefono" required>
            </div>
          </div>
          
          <div class="form-group row">
            <label for="email" class="col-md-4 col-form-label">Email</label>
            <div class="col-md-8">
              <input type="email" class="form-control" id="email" placeholder="Ingrese email" required>
            </div>
          </div>

           <div class="form-group row">
              <label class="col-md-4 col-form-label" for="idioma_pref">Idioma de preferencia</label>
              <div class="col-md-8 text-center">
                <select class="form-control " id="idioma_pref">
                  <option>Aleman</option>
                  <option>Español</option>
                  <option>Francés</option>
                  <option>Holandés</option>
                  <option>Inglés</option>
                  <option>Italiano</option>
                  <option>Portugués</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-md-12 text-center">
                <label for="observaciones">Observaciones</label>
                <textarea class="form-control" id="observaciones" rows="3" cols="4"></textarea>
              </div>
            </div>

            <div class="mt-5 text-center" id="terminos">
        <h4>Para completar registro, marcar las siguientes casillas:</h4>
      </div>

      <p>
        <strong><input type="checkbox"> Certifico</strong> que esta es una empresa de alojamiento legal y que cuenta con todas las licencias y permisos necesarios, los cuales pueden mostrarse a primer requerimiento. Emblema Viajes SAS se reserva el derecho de verificar e investigar cualquier dato que se proporcione durante el registro.
      </p>

      <p>
        <strong><input type="checkbox"> He leído</strong>, acepto y estoy de acuerdo con los <strong class="text-primary"><a target="_black"  href="formularioRegistroAgencias/terminos_cond.php">Terminos y condiciones</a></strong> y la <strong class="text-primary">Política de privacidad.</strong><br>
        Emblema Viajes permite a los clientes y a los alojamientos comunicarse a través de Emblema Viajes, que recibe y procesa estas comunicaciones de acuerdo con la Política de privacidad y el Acuerdo de colaboración de Emblema Viajes.
      </p>

      <div class="row justify-content-around">
        <button type="button" class="btn btn-primary">Guardar</button>
      </div>

        </div>
      </form>