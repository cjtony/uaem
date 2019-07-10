<?php
require "../conexion.php";

$idegresado = $_SESSION["id"];

$consulta = $conexion->prepare("SELECT * FROM encuesta2 WHERE idegresado = :idegresado");
$consulta->bindParam(':idegresado',$idegresado);
$consulta->execute();

$consulta2 = $conexion->prepare("SELECT * FROM encuesta5 WHERE idegresado = :idegresado");
$consulta2->bindParam(':idegresado',$idegresado);
$consulta2->execute();

$consulta3 = $conexion->prepare("SELECT * FROM encuesta8 WHERE idegresado = :idegresado");
$consulta3->bindParam(':idegresado',$idegresado);
$consulta3->execute();
    
$r = $consulta->rowCount();
$r2 = $consulta2->rowCount();
$r3 = $consulta3->rowCount();

?>

<script>
  $(document).ready(function(){
    let r = $('#r').val();
    let r2 = $('#r2').val();
    let r3 = $('#r3').val();
    if(r> 0 && r2>0 && r3>0){
      $('.contestar').css({"display":"none"});
      $('#contestado').css({"display":"block"});
      $('#imprimir').css({"display":"block"});
    }else{
      $('#btncontestar').css({"display":"block"});
      $('#sincontestar').css({"display":"block"});
      $('#imprimir').css({"display":"none"});
    }
  });
</script>

<div class="content-wrapper">        
        
  <section class="content">
    
    <div class="row">
      
      <div class="col-md-12">
        
        <div class="box">
          
          <!--Encabezado de licenciaturas-->
          <div class="box-header with-border">
          
            <h1 class="box-title">
              
              <i class="fa fa-arrow"></i>

              Modulo de encuestas

            </h1>

            <div class="box-tools pull-right">

            </div>

          </div>
          
          <!--Cuerpo del apartado de licenciaturas-->          
          <div class="panel-body">
            
            <input type="hidden" id="r" value="<?php echo $r;?>">
            <input type="hidden" id="r2" value="<?php echo $r2;?>">
            <input type="hidden" id="r3" value="<?php echo $r3;?>">
      
            <div class="titulo">
              
              <p style="font-size: 14pt;color: #3C6943;"><b>¡<?php echo $nombre?>!</b></p>

            </div>


            <div style="text-align:justify;font-size:12pt;">

              <p>La siguiente encuesta tiene como objetivo analizar el desempeño y el impacto de nuestros egresados en el sector productivo. Para el Centro Universitario UAEM Temascaltepec es muy importante recabar y actualizar información de los egresados, ya que sirve como punto de partida para la actualización y mejora continua de nuestros planes de estudio, así como proporcionar a los egresados capacitación constante que les permita tener un buen desarrollo profesional en el sector productivo.

              <br><br>

              <p>Por lo que se te pide muy amablemente compartas unos minutos de tu tiempo con nosotros para proporcionarnos los siguientes datos.</p>
              </p>

            </div>

            <br>

            <div style="text-align: center;">

              <strong style="color:#3C6943;font-size:14pt;">Estado de la encuesta:</strong>

              <br><br>

              <p id="contestado" style="border: 1px solid #3C6943;padding: 10px; display: none;">

                <strong style="color: #3C6943;">
                  Contestada
                </strong>

              </p>

              <p id="sincontestar" style="display:none;font-size:12pt;">

                <strong style="color: #FE2E2E;">
                  
                  Sin contestar
                </strong>

              </p>

            </div>
      
          <br><br>

          <a href="#" class="btn pull-right contestar" style="background:#3C6943;color:#fff;">Contestar</a>

          <a href="../pdf/index.php" class="btn pull-right" id="imprimir" style="width:160px;background:#3C6943;color:#fff;">Imprimir comprobante</a>
     

          </div>
              
      </div>
                       
    </div>

  </section>

</div>