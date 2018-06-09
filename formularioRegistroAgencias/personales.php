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

        </div>
      </form>