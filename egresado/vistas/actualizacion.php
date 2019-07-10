<?php

require "../conexion.php";

$idu = $_SESSION['id'];

$consulta = $conexion->prepare("SELECT l.nombre,a.ingreso,a.egreso,a.titulado,a.modalidad,a.tiempo
                                FROM  academico a
                                INNER JOIN licenciaturas l on l.idlic=a.licenciatura
                                WHERE a.idper = :id");

$consulta->bindParam(':id',$idu);

$consulta->execute();

foreach ($consulta as $k) {
  $licenciatura = $k[0];
  $ingreso = $k[1];
  $egreso = $k[2];
  $titulado = $k[3];
  $modalidad = $k[4];
  $tiempo = $k[5];
}
/*=============================================
MOSTRAR datos de Formación y capacitación egresados
=============================================*/
$consulta = $conexion->prepare ("SELECT f.estudioposterior,f.estudiocual,f.tegustariaestudio,f.queestudio,f.tematica,f.horario,f.modalidad,f.habilidades,f.conocimientos,f.actitudes from formacioncapacitacion f where idper=:id");
$consulta->bindParam(':id', $idu);

$consulta->execute();

foreach ($consulta as $du) {
  $estudioposterior= $du[0];
  $estudiocual = $du[1];
  $tegustariaestudio = $du[2];
  $queestudio = $du[3];
  $tematica = $du[4];
  $horario = $du[5];
  $modalidad = $du[6];
  $habilidades=$du[7];
  $conocimientos =$du[8];
  $actitudes =$du[9];
}


/*=============================================
MOSTRAR LICENCIATURAS
=============================================*/

?>
<script>
  
  $(document).ready(function(){

    /*=============================================
      respuesta de titulado
    =============================================*/
    
    let rtitulado = $('#titulado').val();

    if( rtitulado == "si"){
      $('#btnsi').prop("checked",true);
      $('#titulo').css({"display":"block"});
      $('#cuanto').css({"display":"block"});
    }else{
      $('#btnno').prop("checked",true);
    }

    $('#btnsi').click(function(){
      $('#titulo').css({"display":"block"});
      $('#cuanto').css({"display":"block"});
    }); 

    $('#btnno').click(function(){
      $('#titulo').css({"display":"none"});
      $('#cuanto').css({"display":"none"});
    });

    /*=============================================
    CAMPOS DE MODALIDAD
    =============================================*/

    
    let valor = $('#modalidadr').val();

    if(valor == "Aprovechamiento"){
      $('#aprovechamiento').prop("checked",true);
    }else if(valor == "EGEL"){
      $('#egel').prop("checked",true);
    }else if(valor == "Tesis"){
      $('#tesis').prop("checked",true);
    }else if(valor == "ensayo"){
      $('#ensayo').prop("checked",true);
    }else{
      $('#articulo').prop("checked",true);
    }


   /*=============================================
    CAMPOS DE tiempo
    =============================================*/
    let tiempo =$('#tiempor').val();

    if (tiempo =="Menos de un año") {
      $('#menos').prop("checked",true);

    }else if (tiempo =="Entre 1 año y 2 años") {
      $('#entre').prop("checked",true);

    } else {
      $('#mas').prop("checked",true);
    }
 /*=============================================
    CAMPOS DE has realizado un estudio posterior
    =============================================*/

  let estudiop = $('#estudioposterior').val();

  if(estudiop == "Si") {
    $('#btnsiestudioposterior').prop("checked",true); 
  } else{
    $('#btnnoestudioposterior').prop("checked",true);

  }
  /*=============================================
    CAMPOS DE has realizado un estudio posterior
    =============================================*/

    let valor2 =$('#cual').val();

    if (valor2 == "Doctorado") {
      $('#doctorado').prop("checked",true);
    }else if (valor2 == "Maestria"){
      $('#maestria').prop("checked",true);
    }else if (valor2 == "Especialidad  ") {
      $('#especialidad').prop("checked",true);
    }else if (valor2 == "Diplomado") {
      $('#diplomado').prop("checked",true);
    }else if (valor2 == "Curso") {
      $('#curso').prop("checked",true);
    }else{
      $('#taller').prop("checked",true);
    }
/*=============================================
    CAMPOS te gustaria realizar algun estudio posterior
 =============================================*/

   let vrealizar =$('#realizar').val();

   if (vrealizar == "Si") {
    $('#si2').prop("checked",true);
   }else if(vrealizar =="No"){
     $('#no2').prop("checked",true);
   }else{
    $('#talvez').prop("checked",true);
   }
/*=============================================
    CAMPOS Que estudio posterior te gustaria realizar?
 =============================================*/

    let resultado = $('.gustariaestudio').val();

    if(resultado == "Especialidad"){
      $('#respecialidad').prop("checked",true);
    }else if(resultado == "Doctorado"){
      $('#rdoctorado').prop("checked",true);
    }else if(resultado == "Maestria"){
      $('#rmaestria').prop("checked",true);
    }else if(resultado == "Diplomado"){
      $('#rdiplomado').prop("checked",true);
    }else if(resultado == "Curso"){
      $('#rcurso').prop("checked",true);
    }else{
      $('#rtaller').prop("checked",true);
    }

/*=============================================
    CAMPOS Que estudio posterior te gustaria realizar?
 =============================================*/

 let hor =$('#horarioh').val();

 if (hor =="Lunes a Viernes Matutino "){
    $('#lunes').prop("checked",true);
 }else if (hor == "Lunes a Viernes Vespertino") {
    $('#martes').prop("checked",true);
 }else{
     $('#sabado').prop("checked",true);
 }
 /*=============================================
    Cque modqalidad
 =============================================*/

  let pre =$('#presencialt').val();

  if (pre == "Presencial"){
    $('#presencial').prop("checked",true);

  }else if (pre == "Distancia"){
    $('#distancia').prop("checked",true);
  }else {
    $('#semipresencial').prop("checked",true);
  }
 /*=============================================
    3 modulo entidad o arraigado
 =============================================*/

  let en =$('#entidad').val();

  if(en == "Excelente"){
    $('#ex').prop("checked",true);
  }else if (en == "Buena") {

  $('#bue').prop("checked",true);
  }else if (en == "Regular") {
    $('#re').prop("checked",true);
  }else{
    $('#ins').prop("checked",true);
  }

   let tr =$('#trabajas-a').val();
   if(tr =="Si"){
    $("#btnsitrabajo").prop("checked",true);
   }else {
    $('#btnnotrabajo').prop("checked",true);
   }


  });


</script>

<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">

      <h1>

        Inicio
        <small>Actuallizar Informacion</small>

      </h1>

      <ol class="breadcrumb">

        <li><a href="#"><i class="fa fa-home"></i> Inicio</a></li>

        <li class="active">Actualizar informacion</li>

      </ol>
      
    </section>

    <section class="content">

      <h1 style="font-size: 14pt; color: #3C6943; border-bottom: groove;">¡Selecciona el modulo que deseas modificar!</h1>

      <br>
      
      <div class="row">

          <div class="col-lg-3 col-xs-6">

            <div class="small-box bg-green">

              <div class="inner">

                <h3>MOD 1</h3>

                <p style="text-align: center;">Datos academicos y de titulacion</p>

              </div>

              <div class="icon">

                <i class="fa fa-pencil"></i>

              </div>

              <a href="#" class="small-box-footer" data-toggle="modal" data-target="#datosacademicos">Modificar<i class="fa fa-arrow-circle-right"></i></a>

            </div>

          </div>

          <div class="col-lg-6 col-xs-6">
            
            <div class="small-box bg-green">

              <div class="inner">

                <p style="text-align: center;">Formación y capacitación egresados</p>

              </div>

              <div class="icon">

                <i class="ion ion-ios-people-outline"></i>

              </div>

              <a href="#" class="small-box-footer" data-toggle="modal" data-target="#formacion" >Ver <i class="fa fa-arrow-circle-right"></i></a>

            </div>

          </div>

         <div class="col-lg-3 col-xs-6">
            
            <div class="small-box bg-green">

              <div class="inner">

                <h3>MOD 2</h3>

                <p>Descripcion de empresas e instituciones donde laboran los egresados</p>

              </div>

              <div class="icon">

                <i class="fa fa-pencil-square-o"></i>

              </div>

              <a href="#" class="small-box-footer" data-toggle="modal" data-target="#empresas" >Ver <i class="fa fa-arrow-circle-right"></i></a>

            </div>

          </div>

          <div class="col-lg-6 col-xs-6">
            
            <div class="small-box bg-green">

              <div class="inner">

                <p>Datos generales del jefe inmediato de los egresado de las licenciaturas</p>

              </div>
              <div class="icon">

                <i class="ion ion-person-add"></i>

              </div>

              <a href="#" class="small-box-footer">Ver <i class="fa fa-arrow-circle-right"></i></a>

            </div>

          </div>


        </div>

    </section>

</div>

<!--=====================================
MODAL DATOS ACADEMICOS
======================================-->

<div id="datosacademicos" class="modal fade" role="dialog">

  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">

      <div class="modal-header" style="background:#3C6943;">

        <button type="button" class="close" data-dismiss="modal">&times;</button>

        <h4 class="modal-title" style="color:#fff;"><i class="fa fa-home" style="margin-right: 2%;"></i>Datos academicos y de titulación.</h4>

      </div>

      <div class="modal-body">

        <form method="POST" action="vactualizar.php" class="form-horizontal form-encuesta1">

          <input type="hidden" value="<?php echo $idu;?>">

          <div class="form-group">

                <label class="control-label col-sm-3" style="color: #616A6B;">¿De que licenciatura egresaste?</label>

                <div class="col-sm-8">

                  <select required  class="form-control" name="licenciatura">
                    <option><?php echo $licenciatura;?></option>
                      <?php
                          foreach($carreras as $r){
                            echo "<option value=".$r[0].">".$r[1]."</option>";
                          }
                      ?>
                  </select>

                </div>

            </div>

            <div class="form-group">

                <label class="control-label col-sm-3" style="color: #616A6B;">Año de ingreso</label>

                <div class="col-sm-4">

                  <input type="text" name="ingresoa" disabled="" value="<?php echo $ingreso?>" maxlength="4" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" class="form-control">

              </div>

            </div>

            <div class="form-group">

                <label class="control-label col-sm-3" style="color: #616A6B;">Año de Engreso</label>

                <div class="col-sm-4">

                  <input type="text" name="egresoa"  disabled="" value="<?php echo $egreso?>" maxlength="4" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" class="form-control">

              </div>

            </div>

            <div class="form-group">
              
              <label class="control-label col-sm-3" style="color: #616A6B;">¿Te encuentras titulado?</label>

              <div class="radio col-sm-4">
                  <fieldset>
          
                  <input type="hidden" value="<?php echo $titulado;?>" id="titulado">

                   <label>
                    
                    <input type="radio" name="titulado" value="si" id="btnsi">
                    Si
                  
                   </label>
                   <label style="margin-left: 2%;">
                    
                   <input type="radio" name="titulado" value="no" id="btnno">
                    No
                  
                   </label>

                  </fieldset>
              
              </div>
              
            </div>

            <div id="titulo" style="display:none;">
              
              <div class="form-group">

                  <label class="control-label col-sm-3" style="color: #616A6B;">¿Por que modalidad te titulaste?</label>

                  <div class="radio col-sm-4">

                    <fieldset>

                     <input type="hidden" value="<?php echo $modalidad;?>" id="modalidadr">

                     <label>
                      
                      <input type="radio" name="modalidad" value="Aprovechamiento" id="aprovechamiento">
                      Aprovechamiento
                    
                     </label>
                     <br>
                     <label>
                      
                      <input type="radio" name="modalidad" value="EGEL" id="egel">
                      EGEL
                    
                     </label>
                     <br>
                     <label>
                      
                      <input type="radio" name="modalidad" value="Tesis" id="tesis">
                      Tesis
                    
                     </label>
                     <br>
                     <label>
                      
                      <input type="radio" name="modalidad" value="Ensayo" id="ensayo">
                      Ensayo
                    
                     </label>
                     <br>
                     <label>
                      
                      <input type="radio" name="modalidad" value="Articulo" id="articulo">
                      Articulo
                    
                     </label>
                     

                    </fieldset>
              
                 </div>

               </div>
             </div>

             <div id="cuanto" style="display:none;">

               <div class="form-group">
              
                <label class="control-label col-sm-3" style="color: #616A6B;">¿Cuanto tiempo te llevo conseguir tu titulo?</label>

                 <div class="radio col-sm-4">

                    <fieldset>

                      <input type="hidden"   value="<?php echo$tiempo;?>"id="tiempor">

                     <label>
                      
                     <input type="radio" name="tiempo"  id="menos" value="Menos de un año">
                      Menos de un año
                    
                     </label>
                     <br>
                     <label>
                      
                     <input type="radio" name="tiempo" id="entre" value="Entre 1 año y 2 años">
                      Entre 1 año y 2 años
                    
                     </label>
                     <br>
                     <label>
                      
                     <input type="radio" name="tiempo"  id="mas" value="Mas de 2 años">
                      Mas de 2 años
                    
                     </label>
         
                     </fieldset>

                     </div>
                  </div>
              </div>
              
            <br>

            <div class="modal-footer">

              <input type="submit"  class="btn boton"  value="Guardar" name="actualizardatos">

              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

            </div>

        </form>
        
      </div>

     </div>

    </div>
</div>

<!--=====================================
MODAL DATOS Formación y capacitación egresados
======================================-->


<div id="formacion" class="modal fade" role="dialog">

  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">

      <div class="modal-header" style="background:#3C6943;">

        <button type="button" class="close" data-dismiss="modal">&times;</button>

        <h4 class="modal-title" style="color:#fff;"><i class="fa fa-home" style="margin-right: 2%;"></i>Formación y capacitación egresados.</h4>

      </div>

      <div class="modal-body">

        <form method="POST" action="vactualizar.php" class="form-horizontal form-encuesta1">

          <input type="hidden" value="<?php echo $idu;?>">

           <div class="form-group">

           <label class="control-label col-sm-3" style="color: #616A6B;">¿Haz realizado algun estudio posterior a la licenciatura?</label>

           <div class="radio col-ms-4">

             <fieldset>

             <input type="hidden" value="<?php echo $estudioposterior;?>" id="estudioposterior">

              <label>
              
             <input type="radio" name="estudioposterior" value="Si" id="btnsiestudioposterior">
              Si
            
             </label>
             <label style="margin-left: 2%;">
              
              <input type="radio" name="estudioposterior" value="No" id="btnnoestudioposterior">
              No
            
              </label>
            </fieldset>
        
         </div>

       </div>

        
        <div class="form-group">

            <label class="control-label col-sm-3" style="color: #616A6B;">¿Cual estudio haz realizado?</label>

             <div class="radio col-sm-8">

             <fieldset>

             <input type="hidden"   value="<?php echo$estudiocual;?>" id="cual">

             <label>
                
               <input type="radio" name="estudiocual" id="doctorado" value="Doctorado">
                Doctorado
              
               </label>
               <br><br>
               <label>
                
               <input type="radio" name="estudiocual" id="maestria" value="Maestria">
                Maestria
              
               </label>
               <br><br>
               <label>
                
               <input type="radio" name="estudiocual"  id="especialidad" value="Especialidad">
                Especialidad
              
               </label>
               <br><br>
               <label>
                
               <input type="radio" name="estudiocual" id="diplomado" value="Diplomado">
                Diplomado
              
               </label>
               <br><br>
               <label>
                
               <input type="radio" name="estudiocual" id="curso" value="Curso">
                Curso
              
               </label>
               <br><br>
               <label>
                
               <input type="radio" name="estudiocual" id="taller" value="Taller">
                Taller
              
               </label>

               </fieldset>
        
             </div>

           </div>

        <div class="form-group">

          <label class="control-label col-sm-3" style="color: #616A6B;">¿Te gustaria realizar algun estudio posterior?</label>

          <div class="radio col-ms-4">

            <fieldset>
            <input type="hidden"   value="<?php echo$tegustariaestudio;?>" id="realizar">
             <label>
              
              <input type="radio" name="tegustariaestudio" value="Si" id="si2">
              Si
            
             </label>
             <label style="margin-left: 2%;">
              
             <input type="radio" name="tegustariaestudio" value="No" id="no2">
              No
            
             </label>
             <label style="margin-left: 2%;">
              
             <input type="radio" name="tegustariaestudio" value="Tal Vez" id="talvez">
              Tal Vez
             </label>
             </fieldset>
        
           </div>

         </div>

        
          <div class="form-group">

            <label class="control-label col-sm-3" style="color: #616A6B;">¿Que estudio posterior te gustaria realizar?</label>

             <div class="radio col-sm-4">

                <fieldset>
                
                <input type="hidden" value="<?php echo $queestudio;?>" class="gustariaestudio">

                <label>
                
               <input type="radio" name="queestudio" id="rdoctorado" value="Doctorado">
                Doctorado
              
               </label>
               <br><br>
               <label>
                
               <input type="radio" name="queestudio" id="rmaestria" value="Maestria">
                Maestria
              
               </label>
               <br><br>
               <label>
                
               <input type="radio" name="queestudio" id="respecialidad" value="Especialidad">
                Especialidad
              
               </label>
               <br><br>
               <label>
                
               <input type="radio" name="queestudio" id="rdiplomado" value="Diplomado">
                Diplomado
              
               </label>
               <br><br>
               <label>
                
               <input type="radio" name="queestudio" id="rcurso" value="Curso">
                Curso
              
               </label>
               <br><br>
               <label>
                
               <input type="radio" name="queestudio" id="rtaller" value="Taller">
                Taller
              
               </label>

               </fieldset>
        
             </div>

          </div>

        
           <div class="form-group">
  
             <label class="control-label col-sm-3" style="color: #616A6B;">¿Sobre que tematica te gustaria realizar algun curso o estudio de actualizacion?</label>
          
             <div class="col-sm-6">
            
             <input type="text" class="form-control"  disabled="" value="<?php echo$tematica; ?>" name="tematica">

            </div>
          
          </div>

      
        
         <div class="form-group">

           <label class="control-label col-sm-3" style="color: #616A6B;">¿Que horario seria el mas conveniente para ti, para tomar algun curso o estudio de actualizacion?</label>

           <div class="radio col-sm-6">
               <fieldset>
               <input type="hidden"   value="<?php echo$horario;?>" id="horarioh">

               <label>
                  
                  <input type="radio" name="horario" id="lunes" value="Lunes a Viernes Matutino">
                  Lunes a Viernes Matutino
                
                 </label>
                 <br><br>
                 <label>
                  
                 <input type="radio" name="horario"  id="martes" value="Lunes a Viernes Vespertino">
                  Lunes a Viernes Vespertino
                
                 </label>
                 <br><br>
                 <label>
                  
                  <input type="radio" name="horario" id="sabado" value="Sabatino">
                  Sabatino
                
                 </label>

               </fieldset>
        
           </div>
            

         </div>

        <div class="form-group">

            <label class="control-label col-sm-3" style="color: #616A6B;">¿Que modalidad prefieres para tomar algun curso o estudio de actualizacion?</label>

           <div class="radio col-sm-6">
            
              <fieldset>

                <input type="hidden"   value="<?php echo$modalidad;?>" id="presencialt">
                
                <label>
                  
                  <input type="radio" name="modalidad"  id="presencial" value="Presencial">
                  Presencial
                
                 </label>
                 <br><br>
                 <label>
                  
                  <input type="radio" name="modalidad" id="distancia" value="Distancia">
                  Distancia
                
                 </label>
                  <br><br>
                 <label>
                  
                   <input type="radio" name="modalidad"  id="semipresencial"  value="Semipresencial">
                  Semipresencial
                
                 </label>

                </fieldset>
        
            </div>
          
         </div>
  
       <div class="form-group">

          <label class="control-label col-sm-3" style="color: #616A6B;">¿Que habilidades son necesarias para que te puedas desempeñar profesionalmente?</label>

         <div class="col-sm-6">
          
         <input type="text" class="form-control" disabled="" value="<?php echo$habilidades; ?> " name="habilidades" >

         </div>
        
       </div>

      <div class="form-group">

          <label class="control-label col-sm-3" style="color: #616A6B;">¿Que conocimientos son necesarios para que te puedas desempeñar profesionalmente?</label>

          <div class="col-sm-6">
            
          <input type="text" class="form-control"   disabled=""  value="<?php echo$conocimientos;?>" name="conocimientos">

          </div>
        
          </div>
  
          <div class="form-group">

         <label class="control-label col-sm-3" style="color: #616A6B;">¿Que actitudes son necesarios para que te puedas desempeñar profesionalmente?</label>

          <div class="col-sm-6">
             
          <input type="text" class="form-control"  disabled="" value="<?php echo$actitudes;?>" name="actitudes">

          </div>
        
         </div>
            <br>

            <div class="modal-footer">

              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

            </div>

        </form>
        
      </div>

     </div>

    </div>
</div>

<!--=====================================
MODAL Descripcion de las esmpresas e instituciones donde laboran los egresados
======================================-->
<div id="empresas" class="modal fade" role="dialog">

  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">

      <div class="modal-header" style="background:#3C6943;">

        <button type="button" class="close" data-dismiss="modal">&times;</button>

        <h4 class="modal-title" style="color:#fff;"><i class="fa fa-home" style="margin-right: 2%;"></i>Datos academicos y de titulación.</h4>

      </div>

      <div class="modal-body">

        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="form-horizontal form-encuesta1">
            
            <div class="form-group">

            <label class="control-label col-sm-3" style="color: #616A6B;">¿Que tan arraigado te sientes con respecto a la Entidad Federativa o zona de afluencia donde estudiste?</label>

            <div class="radio col-sm-8">

              <fieldset>
             <input type="hidden" value="<?php echo $arraigado;?>" id="entidad" >
                <label>
                  
                  <input type="radio" name="arraigado" id="ex" value="Excelente">
                  Excelente
                
                </label>
                <br>
                <label>
                  
                  <input type="radio" name="arraigado" id="bue" value="Buena">
                  Buena
                
                </label>
                <br>
                <label>
                  
                  <input type="radio" name="arraigado" id="re" value="Regular">
                  Regular
                
                </label>
                <br>
                <label>
                  
                  <input type="radio" name="arraigado" id="ins" value="Insatisfactoria">
                  Insatisfactoria
                
                </label>

              </fieldset>
        
          </div>

        </div>

        <div class="form-group">

          <label class="control-label col-sm-3" style="color: #616A6B;margin-top: 1%;">¿Trabajas actualmente?</label>

          <div class="radio col-sm-8" style="margin-top: 1%;">

            <fieldset>
              <input type="text" id="trabajas-a" value="<?php echo $trabajas;?>">
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

        <div id="sitrabajo" style="display: block ;border-top:groove;">
          <!--inicio 1-->
          <div class="form-group">

            <label class="control-label col-sm-3" style="color: #616A6B;">¿Cuanto tiempo te llevo conseguir tu primer empleo?</label>

            <div class="radio col-sm-8">

              <input type="text" name="tiempoempleo" value="<?php echo $tiempoempleo;?>">

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

              <input type="text" name="relacionempleo" value="<?php echo $relacionempleo;?>">

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
        <div id="sirelacion" style="display: block;border-top:groove;padding-top:10px;">
          <!--INICIO 1-->
          <div class="form-group">

            <label class="control-label col-sm-3" style="color: #616A6B;">Nombre de la empresa:</label>

            <div class="col-sm-6">

              <input type="text" name="nombreemp" value="<?php echo $nombreemp;?>">
          
              <input type="text" class="form-control" name="nombreemp" placeholder="Nombre de la empresa">

            </div>
        
          </div>
          <!--FIN 1-->

          <!--INICIO 2-->
          <div class="form-group">

            <label class="control-label col-sm-3" style="color: #616A6B;">Dirección:</label>

            <div class="col-sm-6">

              <input type="text" name="direccionemp" value="<?php echo $direccionemp;?>">
          
              <input type="text" class="form-control" name="direccionemp" placeholder="Calle, Número, Colonia, Municipio, Estado y Codigo Postal">

            </div>
        
            </div>
          <!--FIN 2-->

          <!--INICIO 3-->
          <div class="form-group">

            <label class="control-label col-sm-3" style="color: #616A6B;">Número telefónico:</label>

            <div class="col-sm-6">

              <input type="text" name="telefonoemp" value="<?php echo $telefonoemp;?>">
          
              <input type="text" class="form-control" name="telefonoemp" placeholder="Con lada">
  
            </div>
        
          </div>
          <!--FIN 3-->

          <!--INCIO 4-->
          <div class="form-group">

            <label class="control-label col-sm-3" style="color: #616A6B;">Página web o correo electrónico:</label>

            <div class="col-sm-6">

              <input type="text" name="pagwebemp" value="<?php echo $pagwebemp;?>">
          
              <input type="text" class="form-control" name="pagwebemp" placeholder="Por ejemplo: www.miempresa.com.mx">

            </div>

          </div>
          <!--FIN 4-->

    

          <!--INICIO 6-->
          <div class="form-group">

            <label class="control-label col-sm-3" style="color: #616A6B;">Ramo:</label>

            <div class="radio col-sm-8">

              <input type="text" name="ramoemp" value="<?php echo $ramoemp;?>">

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
        </div>
          <!--FIN 6-->
        
              
            <br>

            <div class="modal-footer">

              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

            </div>

        </form>
        
      </div>

     </div>

    </div>
</div>







