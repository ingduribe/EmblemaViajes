<form>
	<div class="border border-secondary p-3">
    <p class="display-4 text-center">Pagos</p>
	  <h4 class="text-center">Opciones de pago para los clientes</h4>

	  <div class="form-group row">
          <div class="col-md-6 text-center">
          	<div class="row align-self-center">
          		<div class="col-md-6 align-self-center" >
          			¿Puede cobrar con tarjetas de crédito en el establecimiento?
          		</div>
          		<div class="col-md-6">
                Si<input type="radio" name="tarjet_estable" id="si" value="si">
                No<input type="radio" name="tarjet_estable" value="no">
          		</div>
          	</div>
          </div>

          <div class="col-md-6 text-center" id="listado_tarjetas">
            <input type="checkbox">American Express <br> 
            <input type="checkbox">Visa <br>
            <input type="checkbox">Euro/Mastercard <br>
            <input type="checkbox">Diners Club<br>
            <input type="checkbox">JCB<br>
            <input type="checkbox">Maestro<br>
            <input type="checkbox">Discover<br>
            <input type="checkbox">UnionPay credit card<br>
          </div>
        </div>

        <div class="form-group text-center">     
              <h5 class="text-center">Configuración de IVA/Impuestos</h5>

              <div class="form-group" >
                 IVA 19% no incluido, pago obligatorio para ciudadano Colombiano o Extranjero residente 
                <input type="radio" name="iva" id="si" value="si">
              </div>
              <div class="form-group">
               
                No necesito pagar IVA<input type="radio" name="iva" value="no">
               
              </div>
              <div class="form-group">
                 Otro Especificar <input type="radio" name="iva" value="otro">
                <input type="text" class="form-control" id="otro" placeholder="Digite el nombre del otro impuesto">  
              </div>
        </div>

        <div class="form-group text-center">     
              <h5 class="text-center">Impuesto municipal</h5>

              <div class="form-group" >
                 No hay un impuesto municipal
                <input type="radio" name="iva_muni" id="si" value="si">
              </div>
              <div class="form-group">
                 Se aplica un impuesto municipal<input type="radio" name="iva_muni" value="otro">
                <input type="text" class="form-control" id="iva_muni" placeholder="Digite el nombre del impuesto">  
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-md-6">
                    Importe expresado en
                  </div>
                  <div class="col-md-6">
                    <select class="form-control" id="importe_en" name="importe">
                      <option>COP/por estancia</option>
                      <option>COP/por persona noche</option>
                      <option>No aplicable</option>
                      <option>No se puede calcular</option>
                      <option>COP/por persona por estancia</option>
                      <option>%</option>
                    </select>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <div class="row">
                  <div class="col-md-6">
                    ¿El impuesto municipal está incluido o no?
                  </div>
                  <div class="col-md-6">
                    <select class="form-control" id="iva_si_no">
                      <option selected="selected">Incluido</option>
                      <option>No incluido</option>
                    </select> 
                  </div>
                </div>
              </div>

              <div class="form-group">
                <div class="row">
                  <div class="col-md-6">
                    ¿Los clientes tendrán que pagar algún suplemento en tu establecimiento, por ejemplo, de limpieza?
                  </div>
                  <div class="col-md-6">
                     Si<input type="radio" name="pagar_suplemento" value="si">
                     No<input type="radio" name="pagar_suplemento" value="no">
                  </div>
                </div>
              </div>
        </div>

	    <div class="row justify-content-around">
	      <button type="button" class="btn btn-success">Guardar y seguir</button>
	      <button type="button" class="btn btn-outline-success">Guardar y seguir despues</button>
	    </div>

	</div>
</form>