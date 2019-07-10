<script>
  $(document).ready(function(){
    $('#btnsitrabajo').click(function(){
      $('#sitrabajo').css({"display":"block"});
      $('#notrabajo').css({"display":"none"});
    });
    $('#btnnotrabajo').click(function(){
      $('#notrabajo').css({"display":"block"});
      $('#sitrabajo').css({"display":"none"});
    });

    $('#btnnorelacion').click(function(){
      $('#norelacion').css({"display":"block"});
      $('#sirelacion').css({"display":"none"});
    });
    $('#btnsirelacion').click(function(){
      $('#norelacion').css({"display":"none"});
      $('#sirelacion').css({"display":"block"});
    });

    $('#btnsisoftware').click(function(){
      $('#sisoftware').css({"display":"block"});
    });
    $('#btnnosoftware').click(function(){
      $('#sisoftware').css({"display":"none"});
    });
  });
</script>

<?php

require "../conexion.php";

$idegresado = $_SESSION["id"];  

/*=========================
GENERANDO EL ID DE LA TABLA 
=========================*/


/*=============================================
valores muertos
=============================================*/

$tiempoempleo = "";
$relacionempleo = "";
$nombreemp = "";
$direccionemp = "";
$telefonoemp = "";
$pagwebemp = "";
$sectoremp = "";
$ramoemp = "";
$giroemp = "";
$tipopuesto = "";
$tiempodos = "";
$antiguedadpuesto = "";
$tresfunciones = "";
$rangosueldo = "";
$tipopuesto = "";
$tiempodos = "";
$antiguedadpuesto = "";
$rangosueldo = "";
$sueldopercibes = "";
$utilizassoft = "";
$tiposoftware = "";
$motivosnor = "";
$areapertenece = "";
$metodosemp = "";
$herramientasemp = "";
$equipoemp = "";
$nombreactividad = "";
$satisfaccionuaem = "";
$motivosnotrabajo = "";
$satisfaccionuaem2 = "";
?>
<div class="content-wrapper">        
        
  <section class="content">
    
    <div class="row">
      
      <div class="col-md-12">
        
        <div class="box">
          
          <!--Encabezado de licenciaturas-->
          <div class="box-header with-border">
          
            <h1 class="box-title">
              
              <i class="fa fa-arrow"></i>

              Descripcion de las empresas e instituciones donde elaboran los egresados

             </h1>

            <div class="box-tools pull-right">

            </div>

          </div>
          
          <?php $idegresado = $_SESSION["id"];?>    

          <div class="panel-body">
            
         <form action="vencuesta3.php" class="form-horizontal" method="POST">

      <br>

      <input type="hidden" name="idegresado" value="<?php echo $idegresado;?>">

       <div class="form-group">

            <label class="control-label col-sm-3" style="color: #616A6B;">¿Que tan arraigado te sientes con respecto a la Entidad Federativa o zona de afluencia donde estudiste?</label>

            <div class="radio col-sm-8">

              <fieldset>

                <label>
                  
                  <input type="radio" name="arraigado" value="Excelente">
                  Excelente
                
                </label>
                <br>
                <label>
                  
                  <input type="radio" name="arraigado" value="Buena">
                  Buena
                
                </label>
                <br>
                <label>
                  
                  <input type="radio" name="arraigado" value="Regular">
                  Regular
                
                </label>
                <br>
                <label>
                  
                  <input type="radio" name="arraigado" value="Insatisfactoria">
                  Insatisfactoria
                
                </label>

              </fieldset>
        
          </div>

        </div>

        <div class="form-group">

          <label class="control-label col-sm-3" style="color: #616A6B;margin-top: 1%;">¿Trabajas actualmente?</label>

          <div class="radio col-sm-8" style="margin-top: 1%;">

            <fieldset>

              <label>
                  
                <input type="radio" name="trabajas" value="Si" id="btnsitrabajo">
                Si 
                
              </label>
            
              <label style="margin-left: 2%;">
                  
                <input type="radio" name="trabajas" value="No" id="btnnotrabajo">
                No
                
              </label>

            </fieldset>
        
          </div>

        </div>

        <div id="sitrabajo" style="display: none;border-top:groove;">
          <!--inicio 1-->
          <div class="form-group">

            <label class="control-label col-sm-3" style="color: #616A6B;">¿Cuanto tiempo te llevo conseguir tu primer empleo?</label>

            <div class="radio col-sm-8">

              <input type="hidden" name="tiempoempleo" value="<?php echo $tiempoempleo;?>">

              <fieldset>

              <label>
                
                <input type="radio" name="tiempoempleo" value="Menos de 6 meses">
                Menos de 6 meses 
              
              </label>
              <br>
              <label>
                
                <input type="radio" name="tiempoempleo" value="De 6 a 9 meses">
                De 6 a 9 meses
              
              </label>
              <br>
              <label>
                
                <input type="radio" name="tiempoempleo" value="De 9 a 12 meses">
                De 9 a 12 meses
              
              </label>
              <br>
              <label>
                
                <input type="radio" name="tiempoempleo" value="Mas de una año">
                Mas de una año
              
              </label>

              </fieldset>
        
            </div>

          </div>
          <!--FIN 1-->

          <!--inicio 2-->
          <div class="form-group">

            <label class="control-label col-sm-3" style="color: #616A6B;">¿El trabajo que desempeñas se relaciona con la profesion en que te formaste?</label>

            <div class="radio col-sm-8">

              <input type="hidden" name="relacionempleo" value="<?php echo $relacionempleo;?>">

              <fieldset>

              <label>
                
                <input type="radio" name="relacionempleo" value="Si" id="btnsirelacion">
                Si 
              
              </label>
              <label style="margin-left: 2%;">
                
                <input type="radio" name="relacionempleo" value="No" id="btnnorelacion">
                No
              
              </label>

              </fieldset>
        
            </div>

          </div>
          <!--FIN 2-->
        </div>
        <div id="sirelacion" style="display: none;border-top:groove;padding-top:10px;">
          <!--INICIO 1-->
          <div class="form-group">

            <label class="control-label col-sm-3" style="color: #616A6B;">Nombre de la empresa:</label>

            <div class="col-sm-6">

              <input type="hidden" name="nombreemp" value="<?php echo $nombreemp;?>">
          
              <input type="text" class="form-control" name="nombreemp" placeholder="Nombre de la empresa">

            </div>
        
          </div>
          <!--FIN 1-->

          <!--INICIO 2-->
          <div class="form-group">

            <label class="control-label col-sm-3" style="color: #616A6B;">Dirección:</label>

            <div class="col-sm-6">

              <input type="hidden" name="direccionemp" value="<?php echo $direccionemp;?>">
          
              <input type="text" class="form-control" name="direccionemp" placeholder="Calle, Número, Colonia, Municipio, Estado y Codigo Postal">

            </div>
        
            </div>
          <!--FIN 2-->

          <!--INICIO 3-->
          <div class="form-group">

            <label class="control-label col-sm-3" style="color: #616A6B;">Número telefónico:</label>

            <div class="col-sm-6">

              <input type="hidden" name="telefonoemp" value="<?php echo $telefonoemp;?>">
          
              <input type="text" class="form-control" name="telefonoemp" placeholder="Con lada">
  
            </div>
        
          </div>
          <!--FIN 3-->

          <!--INCIO 4-->
          <div class="form-group">

            <label class="control-label col-sm-3" style="color: #616A6B;">Página web o correo electrónico:</label>

            <div class="col-sm-6">

              <input type="hidden" name="pagwebemp" value="<?php echo $pagwebemp;?>">
          
              <input type="text" class="form-control" name="pagwebemp" placeholder="Por ejemplo: www.miempresa.com.mx">

            </div>

          </div>
          <!--FIN 4-->

          <!--INCIO 5-->
          <div class="form-group">

            <label class="control-label col-sm-3" style="color: #616A6B;">Sector:</label>

            <div class="radio col-sm-8">

              <input type="hidden" name="sectoremp" value="<?php echo $sectoremp;?>">

              <fieldset>

                <label>
                  
                  <input type="radio" name="sectoremp" value="Público">
                  Público
                
                </label>
                <label style="margin-left: 2%;">
                  
                  <input type="radio" name="sectoremp" value="Privado" >
                  Privado
                
                </label>
                <label style="margin-left: 2%;">
                  
                  <input type="radio" name="sectoremp" value="Social" >
                  Social
                
                </label>
            
              </fieldset>
        
            </div>

          </div>
          <!--FIN 5-->

          <!--INICIO 6-->
          <div class="form-group">

            <label class="control-label col-sm-3" style="color: #616A6B;">Ramo:</label>

            <div class="radio col-sm-8">

              <input type="hidden" name="ramoemp" value="<?php echo $ramoemp;?>">

              <fieldset>

                <label>
                  
                  <input type="radio" name="ramoemp" value="Agrícola">
                  Agrícola
                
                </label>
                <br>
                <label>
                  
                  <input type="radio" name="ramoemp" value="Industrial" >
                  Industrial
                
                </label>
                <br>
                <label>
                  
                  <input type="radio" name="ramoemp" value="Comercial" >
                  Comercial
                
                </label>
                <br>
                <label>
                  
                  <input type="radio" name="ramoemp" value="Servicios">
                  Servicios
                
                </label>
              
              </fieldset>

            </div>

          </div>
          <!--FIN 6-->

          <!--INICIO 7-->
          <div class="form-group">

            <label class="control-label col-sm-3" style="color: #616A6B;">Giro:</label>

            <div class="radio col-sm-8">

              <input type="hidden" name="giroemp" value="<?php echo $giroemp;?>">

              <fieldset>

                <label>
                  
                  <input type="radio" name="giroemp" value="Agricultura">
                  Agricultura
                
                </label>
                <br>
                <label>
                  
                  <input type="radio" name="giroemp" value="Explotación forestal">
                  Explotación forestal 
                
                </label>
                <br>
                <label>
                
                  <input type="radio" name="giroemp" value="Ganadería">
                  Ganadería
              
                </label>
                <br>
                <label>
                
                  <input type="radio" name="giroemp" value="Minería">
                  Minería
              
                </label>
                <br>
                <label>
                  
                  <input type="radio" name="giroemp" value="Pesca">
                  Pesca
                
                </label>
                <br>
                <label>
                  
                  <input type="radio" name="giroemp" value="Construcción">
                  Construcción
                
                </label>
                <br>
                <label>
                
                  <input type="radio" name="giroemp" value="Industria manufacturera">
                  Industria manufacturera

                </label>
                <br>
                <label>
                  
                  <input type="radio" name="giroemp" value="Comercio">
                  Comercio
                
                </label>
                <br>
                <label>
                
                  <input type="radio" name="giroemp" value="Transportes">
                  Transportes
              
                </label>
                <br>
                <label>
                  
                  <input type="radio" name="giroemp" value="Comunicaciones y telecomunicaciones">
                  Comunicaciones y telecomunicaciones
                
                </label>
                <br>
                <label>
                
                  <input type="radio" name="giroemp" value="Servicios financieros">
                  Servicios financieros
              
                </label>
                <br>
                <label>
                  
                  <input type="radio" name="giroemp" value="Educación">
                  Educación
                
                </label>
                <br>
                <label>
                  
                  <input type="radio" name="giroemp" value="Turismo y hotelería">
                  Turismo y hotelería
                
                </label>
                <br>
                <label>
                
                  <input type="radio" name="giroemp" value="Tecnologías de la información">
                  Tecnologías de la información
              
                </label>
                <br>
                <label>
                  
                  <input type="radio" name="giroemp" value="Ocio y cultura">
                  Ocio y cultura
                
                </label>
                <br>
                <label>
                  
                  <input type="radio" name="giroemp" value="Función y Administración pública">
                  Función y Administración pública
                
                </label>
                <br>
                <label>
                  
                  <input type="radio" name="giroemp" value="Otro">
                  Otro

                </label>

              </fieldset>

            </div>

          </div>
          <!--FIN 7-->

          <!--INICIO 8-->
          <div class="form-group">

            <label class="control-label col-sm-3" style="color: #616A6B;">Área o departamento a la que perteneces:</label>

            <div class="col-sm-6">

              <input type="hidden" name="areapertenece" value="<?php echo $areapertenece;?>">
              
              <input type="text" class="form-control" name="areapertenece" placeholder="Tu respuestas">

            </div>

          </div>
          <!--FIN 8-->

          <!--INICIO 9-->
          <div class="form-group">

            <label class="control-label col-sm-3" style="color: #616A6B;">Tipo de puesto que desempeñas:</label>

            <div class="radio col-sm-8">

              <input type="hidden" name="tipopuesto" value="<?php echo $tipopuesto;?>">

              <fieldset>

                <label>
                  
                  <input type="radio" name="tipopuesto" value="Director de área">
                  Director de área
                
                </label>
                <br>
                <label>
                  
                  <input type="radio" name="tipopuesto" value="Jefe de departamento" >
                  Jefe de departamento 
                
                </label>

                <br>
                <label>
                  
                  <input type="radio" name="tipopuesto" value="Ejecutivo de ventas" >
                  Ejecutivo de ventas
                
                </label>

                <br>
                <label>
                  
                  <input type="radio" name="tipopuesto" value="Jefe de oficina / sección / área">
                  Jefe de oficina / sección / área
                
                </label>
                <br>
                <label>
                  
                  <input type="radio" name="tipopuesto" value="Coordinador">
                  Coordinador
                
                </label>
                <br>
                <label>
                  
                  <input type="radio" name="tipopuesto" value="Asesor">
                  Asesor
                
                </label>

                <br>
                <label>
                  
                  <input type="radio" name="tipopuesto" value="Supervisor">
                  Supervisor

                </label>
                <br>
                <label>
                  
                  <input type="radio" name="tipopuesto" value="Empleado">
                  Empleado
                
                </label>
                <br>
                <label>
                  
                  <input type="radio" name="tipopuesto" value="Analista">
                  Analista
                
                </label>
                <br>
                <label>
                  
                  <input type="radio" name="tipopuesto" value="Asistente / auxiliar">
                  Asistente / auxiliar

                </label>
                <br>
                <label>
                  
                  <input type="radio" name="tipopuesto" value="Otro">
                  Otro
                
                </label>

              </fieldset>

            </div>

          </div>
          <!--FIN 9-->

          <!--INICIO 10-->
          <div class="form-group">

            <label class="control-label col-sm-3" style="color: #616A6B;">¿Tiempo de dedicación a tu empleo?</label>

            <div class="radio col-sm-4">

                <input type="hidden" name="tiempodos" value="<?php $tiempodos;?>">

                <fieldset>

                  <label >
                    
                    <input type="radio" name="tiempodos" value="Tiempo completo">
                    Tiempo completo
                  
                  </label>
                  <br>
                  <label>
                    
                    <input type="radio" name="tiempodos" value="Medio tiempo">
                    Medio tiempo
                  
                  </label>
                  <br>
                  <label >
                    
                    <input type="radio" name="tiempodos" value="Eventual">
                    Eventual
                  
                  </label>
                  <br>
                  <label>
                    
                    <input type="radio" name="tiempodos" value="Otro">
                    Otro
                  
                  </label>

              </fieldset>
            
            </div>

          </div>
          <!--FIN 10-->

          <!--INICIO 11-->
          <div class="form-group">

            <label class="control-label col-sm-3" style="color: #616A6B;">Antigüedad en el puesto:</label>

            <div class="radio col-sm-4">

                <input type="hidden" name="antiguedadpuesto" value="<?php echo $antiguedadpuesto;?>">

                <fieldset>

                  <label>
                    
                    <input type="radio" name="antiguedadpuesto" value="Menos de 6 meses">
                    Menos de 6 meses
                  
                  </label>                  
                  <br>                  
                  <label>
                    
                    <input type="radio" name="antiguedadpuesto" value="De 6 meses a 3 años">
                    De 6 meses a 3 años
                  
                  </label>
                  <br>
                  <label>
                
                    <input type="radio" name="antiguedadpuesto" value="De 3 a 5 años">
                    De 3 a 5 años
          
                  </label>
                  <br>                  
                  <label>
                  
                    <input type="radio" name="antiguedadpuesto" value="De 5  a 10 años">
                    De 5  a 10 años
                
                  </label>
                  <br>                
                  <label>
                    
                    <input type="radio" name="antiguedadpuesto" value="Mas de 10 años">
                    Mas de 10 años
                  
                  </label>

                </fieldset>
            
            </div>
      
          </div>
          <!--FIN 11-->

          <!--INICIO 12-->
          <div class="form-group">

              <label class="control-label col-sm-3" style="color: #616A6B;">Rango de sueldo mensual que percibes ($);</label>

              <div class="radio col-sm-8">

                <input type="hidden" name="rangosueldo" value="<?php echo $rangosueldo;?>">

                <fieldset>
                
                  <label>
              
                    <input type="radio" name="rangosueldo" value="Menos de 5 000">
                    Menos de 5 000
            
                  </label>
                  <br>
                  <label>
              
                    <input type="radio" name="rangosueldo" value="De 5 000 a 1 0000">
                    De 5 000 a 1 0000
            
                  </label>
                  <br>
                  <label>
              
                  <input type="radio" name="rangosueldo" value="De 10 000 a 15 000">
                  De 10 000 a 15 000
      
                  </label>
                  <br> 
                  <label>
              
                    <input type="radio" name="rangosueldo" value="De 15 000 a 20 000">
                    De 15 000 a 20 000
            
                  </label>
                  <br>
                  <label>
              
                    <input type="radio" name="rangosueldo" value="Más de 20 000">
                    Más de 20 000
            
                  </label>

                </fieldset>
              
              </div>
            
          </div>
          <!--FIN 12-->

          <!--INICIO 13-->
          <div class="form-group">

            <label class="control-label col-sm-3" style="color: #616A6B;">¿El sueldo que percibes es con o sin prestaciones?</label>

            <div class="radio col-sm-8">

              <fieldset>

                <input type="hidden" name="sueldopercibes" value="<?php echo $sueldopercibes;?>">
                
                <label>
                
                  <input type="radio" name="sueldopercibes" value="Con prestaciones">
                  Con prestaciones
              
                </label>
                
                <label style="margin-left: 2%;">
                
                  <input type="radio" name="sueldopercibes" value="Sin prestaciones">
                  Sin prestaciones
              
                </label>
              
              </fieldset>
            
            </div>

          </div>
          <!--FIN 13-->

          <!--INICIO 14-->
          <div class="form-group">

            <label class="control-label col-sm-3" style="color: #616A6B;">Menciona las tres funciones más importantes que desempeñas:</label>
          
            <div class="col-sm-6">
              
              <input type="text" class="form-control" name="tresfunciones" placeholder="Tu respuesta" value="<?php echo $tresfunciones;?>">

            </div>
          
          </div>
          <!--FIN 14-->

          <!--INICIO 15-->
          <div class="form-group">

            <label class="control-label col-sm-3" style="color: #616A6B;">¿Qué métodos empleas para realizar las principales funciones y/o actividades profesionales?</label>
          
            <div class="col-sm-6">
              
              <input type="text" class="form-control" name="metodosemp" placeholder="Ejemplo: Método científico, analítico, matématico, lógico, experimental, jurídico, etc." value="<?php echo $metodosemp;?>">

            </div>
          
          </div>
          <!--FIN 15-->

          <!--INICIO 16-->
          <div class="form-group">

            <label class="control-label col-sm-3" style="color: #616A6B;">¿Qué equipo empleas para realizar las principales funciones y/o actividades profesionales?</label>
          
            <div class="col-sm-6">
              
              <input type="text" class="form-control" name="equipoemp" placeholder="Tu respuesta" value="<?php echo $equipoemp;?>">

            </div>
          
          </div>
          <!--FIN 16-->

          <!--INICIO 17-->
          <div class="form-group">

            <label class="control-label col-sm-3" style="color: #616A6B;">¿Qué herramientas empleas para realizar las principales funciones y/o actividades profesionales?</label>
          
            <div class="col-sm-6">
              
              <input type="text" class="form-control" name="herramientasemp" placeholder="Tu respuesta" value="<?php echo $herramientasemp;?>">

            </div>
          
          </div>
          <!--FIN 17-->

          <!--INCIO 18-->
          <div class="form-group">

            <label class="control-label col-sm-3" style="color: #616A6B;">¿Utilizas algún tipo de software o paquetería contable para realizar tus funciones?</label>

            <div class="radio col-ms-4">

              <input type="hidden" name="utilizassoft" value="<?php echo $utilizassoft;?>">

              <fieldset>

                <label>
                  
                  <input type="radio" name="utilizassoft" value="Si" id="btnsisoftware">
                  Si
                
                </label>
                <label style="margin-left: 2%;">
                  
                  <input type="radio" name="utilizassoft" value="No" id="btnnosoftware">
                  No
                
                </label>

              </fieldset>

            </div>

          </div>
          <!--FIN 18-->
        </div>

        <div style="display:none;padding-top:10px;" id="sisoftware">
          <!--INICIO 1-->
          <div class="form-group">

            <label class="control-label col-sm-3" style="color: #616A6B;">¿Qué tipo de software o paquetería utilizas para realizar tus funciones?</label>
            
            <div class="col-sm-6">
                
              <input type="text" class="form-control" name="tiposoftware" placeholder="Tu respuesta" value="<?php echo $tiposoftware;?>">

            </div>
                      
          </div>
          <!--FIN 1-->
        </div>

        <div id="norelacion" style="display: none;border-top:groove;padding-top:10px;">
          <!--INICIO 1-->
          <div class="form-group">

            <label class="control-label col-sm-3" style="color: #616A6B;">¿Cual es el nombre de la actividad laboral que realizas o cargo que desempeñas?</label>
          
            <div class="col-sm-6">
              
              <input type="text" class="form-control" name="nombreactividad" value="<?php echo $nombreactividad;?>">

            </div>
          
          </div>
          <!--FIN 1-->

          <!--INICIO 2-->  
          <div class="form-group">

            <label class="control-label col-sm-3" style="color: #616A6B;">¿Cuales son los principales motivos por los que trabajas fuera del campo laboral de tu profesion?</label>

            <div class="radio col-sm-8">

              <input type="hidden" name="motivosnor" value="<?php echo $motivosnor;?>">

              <fieldset>

              <label>
                
                <input type="radio" name="motivosnor" value="Bajos salarios">
                Bajos salarios 
              
              </label>
              <br>
              <label>
                
                <input type="radio" name="motivosnor" value="Dificultades de horario o distancia">
                Dificultades de horario o distancia
              
              </label>
              <br>
              <label>
                
                <input type="radio" name="motivosnor" value="Falta de experiencia profesional">
                Falta de experiencia profesional
              
              </label>
              <br>
              <label>
                
                <input type="radio" name="motivosnor" value="Oportunidades de empleo, escasas o poco atractivas">
                Oportunidades de empleo, escasas o poco atractivas
              
              </label>
              <br>
              <label>
                
                <input type="radio" name="motivosnor" value="Exigencias de contratacion que no cubro">
                Exigencias de contratacion que no cubro
              
              </label>
              <br>
              <label>
                
                <input type="radio" name="motivosnor" value="Pocas oportunidades de empleo">
                Pocas oportunidades de empleo
              
              </label>
          
              </fieldset>
        
            </div>

          </div>
          <!--FIN 2-->

          <!--INICIO 3-->
          <div class="form-group">

            <label class="control-label col-sm-3" style="color: #616A6B;">¿Qué tan satisfecho te sientes con la formación recibida por el C.U. UAEM Temascaltepec?</label>

            <div class="radio col-sm-8">

              <input type="hidden" name="satisfaccionuaem" value="<?php echo $satisfaccionuaem;?>">

              <fieldset>

              <label>
                
                <input type="radio" name="satisfaccionuaem" value="Muy Satisfecho">
                Muy Satisfecho
              
              </label>
              <br>
              <label>
                
                <input type="radio" name="satisfaccionuaem" value="Satisfecho">
                Satisfecho
              
              </label>
              <br>
              <label>
                
                <input type="radio" name="satisfaccionuaem" value="Regularmente Satisfecho">
                Regularmente Satisfecho
              
              </label>
              <br>
              <label>
                
                <input type="radio" name="satisfaccionuaem" value="Poco Satisfecho">
                Poco Satisfecho
              
              </label>
              <br>
              <label>
                
                <input type="radio" name="satisfaccionuaem" value="Insatisfecho">
               Insatisfecho
              
              </label>
          
              </fieldset>
        
            </div>

          </div>
          <!--FIN 3-->
        </div>
        
        <div id="notrabajo" style="display: none;border-top:groove;padding-top:10px;">
          <!--inicio 1-->
          <div class="form-group">

            <label class="control-label col-sm-3" style="color: #616A6B;">¿Cuales son los principales motivos por los que no trabajas?</label>

            <div class="radio col-sm-8">

              <input type="hidden" name="motivosnotrabajo" value="<?php echo $motivosnotrabajo;?>">

              <fieldset>

              <label>
                
                <input type="radio" name="motivosnotrabajo" value="Bajos salarios">
                Bajos salarios 
              
              </label>
              <br>
              <label>
                
                <input type="radio" name="motivosnotrabajo" value="Dificultades de horario o distancia">
                Dificultades de horario o distancia
              
              </label>
              <br>
              <label>
                
                <input type="radio" name="motivosnotrabajo" value="Falta de experiencia profesional">
                Falta de experiencia profesional
              
              </label>
              <br>
              <label>
                
                <input type="radio" name="motivosnotrabajo" value="Asuntos Familiares">
                Asuntos Familiares
              
              </label>
              <br>
              <label>
                
                <input type="radio" name="motivosnotrabajo" value="Exigencias de contratacion que no cubro">
                Exigencias de contratacion que no cubro
              
              </label>
              <br>
              <label>
                
                <input type="radio" name="motivosnotrabajo" value="Pocas oportunidades de empleo">
                Pocas oportunidades de empleo
              
              </label>
              <br>
              <label>
                
                <input type="radio" name="motivosnotrabajo" value="No estar titulado">
                No estar titulado
              
              </label>
              <br>
              <label>
                
                <input type="radio" name="motivosnotrabajo" value="No dominar idiomas">
                No dominar idiomas
              
              </label>

              </fieldset>
        
            </div>

          </div>
          <!--FIN 1-->

          <!--INICIO 2-->
          <div class="form-group">

            <label class="control-label col-sm-3" style="color: #616A6B;">¿Qué tan satisfecho te sientes con la formación recibida por el C.U. UAEM Temascaltepec?</label>

            <div class="radio col-sm-8">

              <fieldset>

              <label>
                
                <input type="radio" name="satisfaccionuaem" value="Muy Satisfecho">
                Muy Satisfecho
              
              </label>
            
              <label style="margin-left:2%;">
                
                <input type="radio" name="satisfaccionuaem" value="Satisfecho">
                Satisfecho
              
              </label>
              
              <label style="margin-left:2%;">
                
                <input type="radio" name="satisfaccionuaem" value="Regularmente Satisfecho">
                Regularmente Satisfecho
              
              </label>
              
              <label style="margin-left:2%;">
                
                <input type="radio" name="satisfaccionuaem" value="Poco Satisfecho">
                Poco Satisfecho
              
              </label>
              
              <label style="margin-left:2%;">
                
                <input type="radio" name="satisfaccionuaem" value="Insatisfecho">
                Insatisfecho
              
              </label>
          
              </fieldset>
        
            </div>

          </div>
          <!--FIN 2-->

          <!--INICIO 3-->
          <div class="form-group">

            <label class="control-label col-sm-3" style="color: #616A6B;">¿Qué tan satisfecho te sientes con respecto a clima universitario (instalaciones, capacidad y cumplimiento de profesores, limpieza, respeto a los derechos y obligaciones, equipamiento, laboratorio, bibliotecas, comportamiento de las autoridades, transparencia en el uso de los recursos citados).?</label>

            <div class="radio col-sm-8">

              <input type="hidden" name="satisfaccionuaem2" value="<?php echo $satisfaccionuaem2;?>">

              <fieldset>

              <label>
                
                <input type="radio" name="satisfaccionuaem2" value="Muy Satisfecho">
                Muy Satisfecho
              
              </label>
              <br>
              <label>
                
                <input type="radio" name="satisfaccionuaem2" value="Satisfecho">
                Satisfecho
              
              </label>
              <br>
              <label>
                
                <input type="radio" name="satisfaccionuaem2" value="Regularmente Satisfecho">
                Regularmente Satisfecho
              
              </label>
              <br>
              <label>
                
                <input type="radio" name="satisfaccionuaem2" value="Poco Satisfecho">
                Poco Satisfecho
              
              </label>
              <br>
              <label>
                
                <input type="radio" name="satisfaccionuaem2" value="Insatisfecho">
               Insatisfecho
              
              </label>
          
              </fieldset>
        
            </div>

          </div>
          <!--FIN 3-->
        </div>
    

       <div class="form-group"> 

              <div class="col-sm-offset-2 col-sm-10">

          <input type="submit" value="Siguiente" class="btn boton pull-right" style="background:#3C6943;color:#fff;">
        </div>

       </div>

       </form>
     

           </div>
              
       </div>
                       
     </div>

  </section>

</div>