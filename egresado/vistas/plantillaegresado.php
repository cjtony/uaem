<?php 

require '../formularios/phpprincipalusuario.php';

include '../modales/password.php';

 ?>
<!DOCTYPE html>

<html lang="en">

<head>
  
  <meta charset="utf-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>SSE</title>
    
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  
  <!--<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>-->

  <link rel="stylesheet" href="../../public/css/bootstrap.min.css">

  <link rel="stylesheet" href="../../init/css/plantillaegresado.css">

  <link rel="stylesheet" href="../../public/css/font-awesome.css">

  <link rel="stylesheet" href="../../public/css/AdminLTE.min.css">

  <link rel="stylesheet" href="../../public/css/_all-skins.min.css">

  <link rel="apple-touch-icon" href="../../public/img/apple-touch-icon.png">

  <link rel="shortcut icon" href="../../public/img/favicon.ico">

  <link rel="stylesheet" type="text/css" href="../../public/datatables/jquery.dataTables.min.css">    

  <link href="../../public/datatables/buttons.dataTables.min.css" rel="stylesheet"/>
  
  <link href="../../public/datatables/responsive.dataTables.min.css" rel="stylesheet"/>

  <link rel="stylesheet" href="../../public/css/bootstrap-select.css">

  <link rel="stylesheet" href="../../public/swal/sweetalert2.css">


  <script src="../../public/js/jquery.min.js"></script>

  <script src="../../public/js/bootstrap.min.js"></script>

  <script src="../../public/js/app.min.js"></script>

  <script src="../../public/datatables/jquery.dataTables.min.js"></script>    

  <script src="../../public/datatables/dataTables.buttons.min.js"></script>

  <script src="../../public/datatables/buttons.html5.min.js"></script>

  <script src="../../public/datatables/buttons.colVis.min.js"></script>

  <script src="../../public/datatables/jszip.min.js"></script>

  <script src="../../public/datatables/pdfmake.min.js"></script>

  <script src="../../public/datatables/vfs_fonts.js"></script> 

  <script src="../../public/js/bootbox.min.js"></script> 

  <script src="../../public/js/bootstrap-select.js"></script>

  <script src="../../public/swal/sweetalert2.js"></script>

  <script src="../librerias/jquery/encuestas.js"></script>

</head>

<body class="hold-transition skin-green sidebar-mini">

<div class="wrapper">
  <?php
    
    include "header.php";

    include "menulateral.php";



    if (isset($_GET["ruta"])) {

          if($_GET["ruta"] == "inicio" ||
             $_GET["ruta"] == "direccion" ||
             $_GET["ruta"] == "actualizacion" ||
             $_GET["ruta"] == "datosacademicos" ||
             $_GET["ruta"] == "encuesta1" ||
             $_GET["ruta"] == "encuesta2" ||
             $_GET["ruta"] == "encuesta3" ||
             $_GET["ruta"] == "encuesta4" ||
             $_GET["ruta"] == "encuesta5" ||
             $_GET["ruta"] == "encuesta6" ||
             $_GET["ruta"] == "encuesta7" ||
             $_GET["ruta"] == "encuesta8" ||
             $_GET["ruta"] == "encuesta9" ||
             $_GET["ruta"] == "encuestas" ||
             $_GET["ruta"] == "com" ||
             $_GET["ruta"] == "enconta" ||
             $_GET["ruta"] == "encderecho" ||   
             $_GET["ruta"] == "encturismo" || 
             $_GET["ruta"] == "encturismo2" ||
             $_GET["ruta"] == "encagronomo" ||
             $_GET["ruta"] == ""){

            include $_GET["ruta"].'.php';
          }
    }else{
      include "inicio.php";
    }

  
    include "footer.php";
  ?>

  </div>
  
</body>

</html>