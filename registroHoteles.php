<div class="container-fluid mt-1" id="formHoteles1">
  <p class="display-3 text-center">Registre su propiedad</p>
    
      <?php 
        include_once './formularioRegistroHoteles/contacto.php';
        include_once './formularioRegistroHoteles/infoGeneral.php';
        include_once './formularioRegistroHoteles/Software-Web.php';
        include_once './formularioRegistroHoteles/infoFiscal.php';
        include_once './formularioRegistroHoteles/infoHabitacion.php';
      ?>
      
        <button type="submit" class="btn btn-outline-success btn-block">Guardar datos</button>
        <button type="submit" class="btn btn-outline-danger btn-block" id="cerrarDialog">Cerrar</button>

        <script src="./js/datos.js"></script>

</div>