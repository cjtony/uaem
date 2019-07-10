<?php
session_start();

if(!isset($_SESSION["user"])){
  header("location: ../../index.php");
 
}
?>
<!DOCTYPE html>

<html lang="en">

<head>
  
  <meta http-equiv="Cache-Control" content="no-cache", mustrevalidate>
  <meta http-equiv="Expires" content="0">
  <meta http-equiv="Last-Modified" content="0">
  <meta http-equiv="Pragma" content="no-cache">
    
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>SSE</title>

  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

  <link rel="stylesheet" href="../../public/css/bootstrap.min.css">

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

</head>

<body class="hold-transition skin-green sidebar-mini">

<div class="wrapper">
  <?php
    
    include 'header.php';

    include 'menulateral.php';

    if (isset($_GET["ruta"])) {

          if($_GET["ruta"] == "escritorio" ||
             $_GET["ruta"] == "dpersonales" ||
             $_GET["ruta"] == "ddireccion" ||
             $_GET["ruta"] == "egresado" ||
             $_GET["ruta"] == "licenciatura" ||
             $_GET["ruta"] == "dpersonales" ||
             $_GET["ruta"] == "ddireccion" ||
             $_GET["ruta"] == "estadisticas" ||
             $_GET["ruta"] == "reportUsers" ||
             $_GET["ruta"] == "estadisticas"){

            include $_GET["ruta"].'.php';
          }

    }else{

      include "escritorio.php";
      
    }

    include 'footer.php';
  ?>

  </div>
  
</body>

</html>