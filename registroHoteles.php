<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
    <meta name="viewport" content="width=device-width">   
    <title>EmblemaViajes</title>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="carouselengine/amazingcarousel.js"></script>
    <link rel="stylesheet" type="text/css" href="carouselengine/initcarousel-1.css">
    <script src="carouselengine/initcarousel-1.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>

<body>
  <?php 
  include_once 'headerWhite.php';
        include_once 'headerBlack.php'; 
        ?>
  

<div class="container-fluid mt-1" >
  <p class="display-3 text-center">Registre su propiedad</p>
    
      <?php 
        include_once './formularioRegistroHoteles/contacto.php';
        include_once './formularioRegistroHoteles/infoGeneral.php';
        include_once './formularioRegistroHoteles/Software-Web.php';
        include_once './formularioRegistroHoteles/infoFiscal.php';
        include_once './formularioRegistroHoteles/infoHabitacion.php';
        include_once './formularioRegistroHoteles/serviciosPropiedad.php';
      ?>
      
        <button type="submit" class="btn btn-outline-success btn-block">Guardar datos</button>

        <script src="./js/contacto.js"></script>
        <script src="./js/fiscal.js"></script>
        <script src="./js/general.js"></script>
        <script src="./js/habitacion.js"></script>
        <script src="./js/propiedad.js"></script>
        <script src="./js/software.js"></script>

</div>
</body>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
