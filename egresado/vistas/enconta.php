<div class="content-wrapper">        
        
  <section class="content">
    
    <div class="row">
      
      <div class="col-md-12">
        
        <div class="box">
          
          <!--Encabezado de licenciaturas-->
          <div class="box-header with-border">
          
            <h1 class="box-title">
              
              <i class="fa fa-arrow"></i>
              
              Nivel de satisfacción de los egresados con respecto a las capacidades, habilidades, actitudes y valores adquiridos durante la Licenciatura en Contaduría

            </h1>

            <div class="box-tools pull-right">

            </div>

          </div>
          
          <?php $idegresado = $_SESSION["id"];?>    

          <div class="panel-body">
            
         <form method="POST" action="vconta.php" class="form-horizontal form-encuesta1">


           <input type="hidden" name="idegresado" value="<?php echo $idegresado;?>">
             
            <br>

            <p >Indica ¿Cómo te sientes con respecto a las siguientes habilidades obtenidas durante la Licenciatura en Contaduría?</p>


             <div class="table-responsive">

      <table class="table table-striped table-bordered" style="width:64%; margin:2% auto;" >
       <thead>
        <tr>
            <th>Preguntas</th>
            <th>Muy Satisfecho  </th>
            <th>Satisfecho</th>
            <th>Regular</th>
            <th>Poco Satisfecho</th>
            <th>Insatisfecho</th>
        </tr>
    </thead>
    <tbody>
    <tr>
        <th>Manejo de relaciones interpersonales</th>

         <fieldset  style="border: none;">
            <td ><center><input type="radio" name="habilidades"   value="muy satisfecho" ></center></td>
            <td><center> <input type="radio" name="habilidades" value="satisfecho"></center></td>
            <td><center><input type="radio" name="habilidades" value="regular" ></center></td>
            <td><center><input type="radio" name="habilidades" value="poco satisfecho"></center></td>
            <td><center><input type="radio" name="habilidades" value="insatisfecho"></center></td>
        </fieldset>
    </tr>

    <tr> 
        <th> Comunicación efectiva</th>

         <fieldset  style="border: none;">
            <td><center><input type="radio" name="efectiva"   value="muy satisfecho" ></center></td>
            <td><center> <input type="radio" name="efectiva" value="satisfecho"></center></td>
            <td><center><input type="radio" name="efectiva" value="regular" ></center></td>
            <td><center><input type="radio" name="efectiva" value="poco satisfecho"></center></td>
            <td><center><input type="radio" name="efectiva" value="insatisfecho"></center></td>
        </fieldset>
     </tr>

     <tr>   

        <th>Manejo de equipo de cómputo</th>
          <fieldset  style="border: none;">
            <td><center><input type="radio" name="equipo"   value="muy satisfecho" ></center></td>
            <td><center> <input type="radio" name="equipo" value="satisfecho"></center></td>
            <td><center><input type="radio" name="equipo" value="regular" ></center></td>
            <td><center><input type="radio" name="equipo" value="poco satisfecho"></center></td>
            <td><center><input type="radio" name="equipo" value="insatisfecho"></center></td>
        </fieldset>
     </tr>

     <tr>
       <th> Capacidad para trabajar en equipo</th>  
        <fieldset  style="border: none;">
            <td><center><input type="radio" name="trabajar"   value="muy satisfecho" ></center></td>
            <td><center> <input type="radio" name="trabajar" value="satisfecho"></center></td>
            <td><center><input type="radio" name="trabajar" value="regular" ></center></td>
            <td><center><input type="radio" name="trabajar" value="poco satisfecho"></center></td>
            <td><center><input type="radio" name="trabajar" value="insatisfecho"></center></td>
        </fieldset>
     </tr>

     <tr>
        <th>Capacidad para relacionarse</th>

            <fieldset  style="border: none;">
            <td><center><input type="radio" name="Capacidad"   value="muy satisfecho" ></center></td>
            <td><center> <input type="radio" name="Capacidad" value="satisfecho"></center></td>
            <td><center><input type="radio" name="Capacidad" value="regular" ></center></td>
            <td><center><input type="radio" name="Capacidad" value="poco satisfecho"></center></td>
            <td><center><input type="radio" name="Capacidad" value="insatisfecho"></center></td>
        </fieldset>
     </tr>

     <tr>
        <th>Capacidad de análisis y síntesis</th>

            <fieldset  style="border: none;">
            <td><center><input type="radio" name="analisis"   value="muy satisfecho" ></center></td>
            <td><center> <input type="radio" name="analisis" value="satisfecho"></center></td>
            <td><center><input type="radio" name="analisis" value="regular" ></center></td>
            <td><center><input type="radio" name="analisis" value="poco satisfecho"></center></td>
            <td><center><input type="radio" name="analisis" value="insatisfecho"></center></td>
        </fieldset>
     </tr>

     <tr>
        <th>Capacidad organizativa</th>

            <fieldset  style="border: none;">
            <td><center><input type="radio" name="organizativa"   value="muy satisfecho" ></center></td>
            <td><center> <input type="radio" name="organizativa" value="satisfecho"></center></td>
            <td><center><input type="radio" name="organizativa" value="regular" ></center></td>
            <td><center><input type="radio" name="organizativa" value="poco satisfecho"></center></td>
            <td><center><input type="radio" name="organizativa" value="insatisfecho"></center></td>
        </fieldset>
     </tr>

     <tr>
        <th>Facilidad de planeación y ejecución</th>

            <fieldset  style="border: none;">
            <td><center><input type="radio" name="Facilidad"   value="muy satisfecho" ></center></td>
            <td><center> <input type="radio" name="Facilidad" value="satisfecho"></center></td>
            <td><center><input type="radio" name="Facilidad" value="regular" ></center></td>
            <td><center><input type="radio" name="Facilidad" value="poco satisfecho"></center></td>
            <td><center><input type="radio" name="Facilidad" value="insatisfecho"></center></td>
        </fieldset>
     </tr>

     <tr>
        <th>Capacidad para toma de decisiones</th>

            <fieldset  style="border: none;">
            <td><center><input type="radio" name="toma"   value="muy satisfecho" ></center></td>
            <td><center> <input type="radio" name="toma" value="satisfecho"></center></td>
            <td><center><input type="radio" name="toma" value="regular" ></center></td>
            <td><center><input type="radio" name="toma" value="poco satisfecho"></center></td>
            <td><center><input type="radio" name="toma" value="insatisfecho"></center></td>
        </fieldset>
     </tr>

     <tr>
        <th>Razonamiento matemático para solución de problemas</th>

            <fieldset  style="border: none;">
            <td><center><input type="radio" name="Razonamiento"   value="muy satisfecho" ></center></td>
            <td><center> <input type="radio" name="Razonamiento" value="satisfecho"></center></td>
            <td><center><input type="radio" name="Razonamiento" value="regular" ></center></td>
            <td><center><input type="radio" name="Razonamiento" value="poco satisfecho"></center></td>
            <td><center><input type="radio" name="Razonamiento" value="insatisfecho"></center></td>
        </fieldset>
     </tr>

     <tr>
        <th>Habilidad para desarrollar trabajos de investigación</th>

            <fieldset  style="border: none;">
            <td><center><input type="radio" name="desarrollar"   value="muy satisfecho" ></center></td>
            <td><center> <input type="radio" name="desarrollar" value="satisfecho"></center></td>
            <td><center><input type="radio" name="desarrollar" value="regular" ></center></td>
            <td><center><input type="radio" name="desarrollar" value="poco satisfecho"></center></td>
            <td><center><input type="radio" name="desarrollar" value="insatisfecho"></center></td>
        </fieldset>
     </tr>

     <tr>
        <th>Capacidad de convencimiento y persuasión</th>

            <fieldset  style="border: none;">
            <td><center><input type="radio" name="convencimiento"   value="muy satisfecho" ></center></td>
            <td><center> <input type="radio" name="convencimiento" value="satisfecho"></center></td>
            <td><center><input type="radio" name="convencimiento" value="regular" ></center></td>
            <td><center><input type="radio" name="convencimiento" value="poco satisfecho"></center></td>
            <td><center><input type="radio" name="convencimiento" value="insatisfecho"></center></td>
        </fieldset>
     </tr>

     <tr>
        <th>Precisión y exactitud en sus tareas</th>

            <fieldset  style="border: none;">
            <td><center><input type="radio" name="exactitud"   value="muy satisfecho" ></center></td>
            <td><center> <input type="radio" name="exactitud" value="satisfecho"></center></td>
            <td><center><input type="radio" name="exactitud" value="regular" ></center></td>
            <td><center><input type="radio" name="exactitud" value="poco satisfecho"></center></td>
            <td><center><input type="radio" name="exactitud" value="insatisfecho"></center></td>
        </fieldset>
     </tr>
     </tbody>
     </table>


         <!----segunada tabla --------------------------------------------->
        <p>Indica ¿Cómo te sientes con respecto a las siguientes actitudes obtenidas durante la Licenciatura en Contaduría? </p>
      


     <table class="table table-striped table-bordered" style="width:64%; margin:2% auto;" >
       <thead>
        <tr>
            <th>Preguntas</th>
            <th>Muy Satisfecho  </th>
            <th>Satisfecho</th>
            <th>Regular</th>
            <th>Poco Satisfecho</th>
            <th>Insatisfecho</th>
        </tr>
    </thead>
    <tbody>

     <tr>
        <th>Espíritu de servicio</th>


            <fieldset  style="border: none;">
            <td><center><input type="radio" name="servicio"   value="muy satisfecho" ></center></td>
            <td><center> <input type="radio" name="servicio" value="satisfecho"></center></td>
            <td><center><input type="radio" name="servicio" value="regular" ></center></td>
            <td><center><input type="radio" name="servicio" value="poco satisfecho"></center></td>
            <td><center><input type="radio" name="servicio" value="insatisfecho"></center></td>
        </fieldset>
     </tr>

     <tr>
        <th>Empatía</th>

            <fieldset  style="border: none;">
            <td><center><input type="radio" name="empatia"   value="muy satisfecho" ></center></td>
            <td><center> <input type="radio" name="empatia" value="satisfecho"></center></td>
            <td><center><input type="radio" name="empatia" value="regular" ></center></td>
            <td><center><input type="radio" name="empatia" value="poco satisfecho"></center></td>
            <td><center><input type="radio" name="empatia" value="insatisfecho"></center></td>
        </fieldset>
     </tr>

     <tr>
        <th>Disciplina</th>

            <fieldset  style="border: none;">
            <td><center><input type="radio" name="Disciplina"   value="muy satisfecho" ></center></td>
            <td><center> <input type="radio" name="Disciplina" value="satisfecho"></center></td>
            <td><center><input type="radio" name="Disciplina" value="regular" ></center></td>
            <td><center><input type="radio" name="Disciplina" value="poco satisfecho"></center></td>
            <td><center><input type="radio" name="Disciplina" value="insatisfecho"></center></td>
        </fieldset>
     </tr>

     <tr>
        <th>Orden</th>

            <fieldset  style="border: none;">
            <td><center><input type="radio" name="Orden"   value="muy satisfecho" ></center></td>
            <td><center> <input type="radio" name="Orden" value="satisfecho"></center></td>
            <td><center><input type="radio" name="Orden" value="regular" ></center></td>
            <td><center><input type="radio" name="Orden" value="poco satisfecho"></center></td>
            <td><center><input type="radio" name="Orden" value="insatisfecho"></center></td>
        </fieldset>
     </tr>

     <tr>
        <th>Propositivo</th>

            <fieldset  style="border: none;">
            <td><center><input type="radio" name="Propositivo"   value="muy satisfecho" ></center></td>
            <td><center> <input type="radio" name="Propositivo" value="satisfecho"></center></td>
            <td><center><input type="radio" name="Propositivo" value="regular" ></center></td>
            <td><center><input type="radio" name="Propositivo" value="poco satisfecho"></center></td>
            <td><center><input type="radio" name="Propositivo" value="insatisfecho"></center></td>
        </fieldset>
     </tr>

     <tr>
        <th>Objetividad</th>

            <fieldset  style="border: none;">
            <td><center><input type="radio" name="Objetividad"   value="muy satisfecho" ></center></td>
            <td><center> <input type="radio" name="Objetividad" value="satisfecho"></center></td>
            <td><center><input type="radio" name="Objetividad" value="regular" ></center></td>
            <td><center><input type="radio" name="Objetividad" value="poco satisfecho"></center></td>
            <td><center><input type="radio" name="Objetividad" value="insatisfecho"></center></td>
        </fieldset>
     </tr>

     <tr>
        <th>Motivación</th>

            <fieldset  style="border: none;">
            <td><center><input type="radio" name="Motivacion"   value="muy satisfecho" ></center></td>
            <td><center> <input type="radio" name="Motivacion" value="satisfecho"></center></td>
            <td><center><input type="radio" name="Motivacion" value="regular" ></center></td>
            <td><center><input type="radio" name="Motivacion" value="poco satisfecho"></center></td>
            <td><center><input type="radio" name="Motivacion" value="insatisfecho"></center></td>
        </fieldset>
     </tr>

     <tr>
        <th>Autodisciplina</th>
        
            <fieldset  style="border: none;">
            <td><center><input type="radio" name="Autodisciplina"   value="muy satisfecho" ></center></td>
            <td><center> <input type="radio" name="Autodisciplina" value="satisfecho"></center></td>
            <td><center><input type="radio" name="Autodisciplina" value="regular" ></center></td>
            <td><center><input type="radio" name="Autodisciplina" value="poco satisfecho"></center></td>
            <td><center><input type="radio" name="Autodisciplina" value="insatisfecho"></center></td>
        </fieldset>
     </tr>

     <tr>
        <th>Responsabilidad</th>

           <fieldset  style="border: none;">
            <td><center><input type="radio" name="reponsabilidad"   value="muy satisfecho" ></center></td>
            <td><center> <input type="radio" name="reponsabilidad" value="satisfecho"></center></td>
            <td><center><input type="radio" name="reponsabilidad" value="regular" ></center></td>
            <td><center><input type="radio" name="reponsabilidad" value="poco satisfecho"></center></td>
            <td><center><input type="radio" name="reponsabilidad" value="insatisfecho"></center></td>
        </fieldset>
     </tr>

     <tr>
        <th>Autosuficiencia</th>

           <fieldset  style="border: none;">
            <td><center><input type="radio" name="Autosuficiencia"   value="muy satisfecho" ></center></td>
            <td><center> <input type="radio" name="Autosuficiencia" value="satisfecho"></center></td>
            <td><center><input type="radio" name="Autosuficiencia" value="regular" ></center></td>
            <td><center><input type="radio" name="Autosuficiencia" value="poco satisfecho"></center></td>
            <td><center><input type="radio" name="Autosuficiencia" value="insatisfecho"></center></td>
        </fieldset>
     </tr>

     <tr>
        <th>Solidaridad</th>

           <fieldset  style="border: none;">
            <td><center><input type="radio" name="Solidaridad"   value="muy satisfecho" ></center></td>
            <td><center> <input type="radio" name="Solidaridad" value="satisfecho"></center></td>
            <td><center><input type="radio" name="Solidaridad" value="regular" ></center></td>
            <td><center><input type="radio" name="Solidaridad" value="poco satisfecho"></center></td>
            <td><center><input type="radio" name="Solidaridad" value="insatisfecho"></center></td>
        </fieldset>
     </tr>

     <tr>
        <th>Pulcritud</th>

           <fieldset  style="border: none;">
            <td><center><input type="radio" name="Pulcritud"   value="muy satisfecho" ></center></td>
            <td><center> <input type="radio" name="Pulcritud" value="satisfecho"></center></td>
            <td><center><input type="radio" name="Pulcritud" value="regular" ></center></td>
            <td><center><input type="radio" name="Pulcritud" value="poco satisfecho"></center></td>
            <td><center><input type="radio" name="Pulcritud" value="insatisfecho"></center></td>
        </fieldset>
     </tr>
    </tbody>
</table>


  <!----tercera tabla --------------------------------------------->
        <p>Indica ¿Cómo te sientes con respecto a los siguientes valores obtenidos durante la Licenciatura en Contaduría? </p>

 <table class="table table-striped table-bordered" style="width:64%; margin:2% auto;" >
           <thead>
         <tr>
            <th>Preguntas</th>
            <th>Muy Satisfecho  </th>
            <th>Satisfecho</th>
            <th>Regular</th>
            <th>Poco Satisfecho</th>
            <th>Insatisfecho</th>
          </tr>
          </thead>
     <tbody>
         <tr>
            <th>Respeto</th>

            <fieldset  style="border: none;">
            <td><center><input type="radio" name="respecto"   value="muy satisfecho" ></center></td>
            <td><center> <input type="radio" name="respecto" value="satisfecho"></center></td>
            <td><center><input type="radio" name="respecto" value="regular" ></center></td>
            <td><center><input type="radio" name="respecto" value="poco satisfecho"></center></td>
            <td><center><input type="radio" name="respecto" value="insatisfecho"></center></td>
            </fieldset>
         </tr>

         <tr>
            <th>Honestidad</th>

            <fieldset  style="border: none;">
            <td><center><input type="radio" name="honestidad"   value="muy satisfecho" ></center></td>
            <td><center> <input type="radio" name="honestidad" value="satisfecho"></center></td>
            <td><center><input type="radio" name="honestidad" value="regular" ></center></td>
            <td><center><input type="radio" name="honestidad" value="poco satisfecho"></center></td>
            <td><center><input type="radio" name="honestidad" value="insatisfecho"></center></td>
            </fieldset>
         </tr>

         <tr>
            <th>Responsabilidad</th>

            <fieldset  style="border: none;">
            <td><center><input type="radio" name="responsanbilidad2"   value="muy satisfecho" ></center></td>
            <td><center> <input type="radio" name="responsanbilidad2" value="satisfecho"></center></td>
            <td><center><input type="radio" name="responsanbilidad2" value="regular" ></center></td>
            <td><center><input type="radio" name="responsanbilidad2" value="poco satisfecho"></center></td>
            <td><center><input type="radio" name="responsanbilidad2" value="insatisfecho"></center></td>
            </fieldset>
         </tr>

         <tr>
            <th>Igualdad</th>

            <fieldset  style="border: none;">
            <td><center><input type="radio" name="Igualdad"   value="muy satisfecho" ></center></td>
            <td><center> <input type="radio" name="Igualdad" value="satisfecho"></center></td>
            <td><center><input type="radio" name="Igualdad" value="regular" ></center></td>
            <td><center><input type="radio" name="Igualdad" value="poco satisfecho"></center></td>
            <td><center><input type="radio" name="Igualdad" value="insatisfecho"></center></td>
            </fieldset>
         </tr>

         <tr>
            <th>Compromiso</th>

            <fieldset  style="border: none;">
            <td><center><input type="radio" name="Compromiso"   value="muy satisfecho" ></center></td>
            <td><center> <input type="radio" name="Compromiso" value="satisfecho"></center></td>
            <td><center><input type="radio" name="Compromiso" value="regular" ></center></td>
            <td><center><input type="radio" name="Compromiso" value="poco satisfecho"></center></td>
            <td><center><input type="radio" name="Compromiso" value="insatisfecho"></center></td>
            </fieldset>

         </tr>

         <tr>
            <th>Compañerismo</th>

            <fieldset  style="border: none;">
            <td><center><input type="radio" name="companerismo"   value="muy satisfecho" ></center></td>
            <td><center> <input type="radio" name="companerismo" value="satisfecho"></center></td>
            <td><center><input type="radio" name="companerismo" value="regular" ></center></td>
            <td><center><input type="radio" name="companerismo" value="poco satisfecho"></center></td>
            <td><center><input type="radio" name="companerismo" value="insatisfecho"></center></td>
            </fieldset>
         </tr>

         <tr>
            <th>Confianza</th>

            <fieldset  style="border: none;">
            <td><center><input type="radio" name="Confianza"   value="muy satisfecho" ></center></td>
            <td><center> <input type="radio" name="Confianza" value="satisfecho"></center></td>
            <td><center><input type="radio" name="Confianza" value="regular" ></center></td>
            <td><center><input type="radio" name="Confianza" value="poco satisfecho"></center></td>
            <td><center><input type="radio" name="Confianza" value="insatisfecho"></center></td>
            </fieldset>
         </tr>

         <tr>
            <th>Tolerancia</th>

            <fieldset  style="border: none;">
            <td><center><input type="radio" name="Tolerancia"   value="muy satisfecho" ></center></td>
            <td><center> <input type="radio" name="Tolerancia" value="satisfecho"></center></td>
            <td><center><input type="radio" name="Tolerancia" value="regular" ></center></td>
            <td><center><input type="radio" name="Tolerancia" value="poco satisfecho"></center></td>
            <td><center><input type="radio" name="Tolerancia" value="insatisfecho"></center></td>
            </fieldset>
         </tr>

         <tr>
            <th>Cooperación</th>

            <fieldset  style="border: none;">
            <td><center><input type="radio" name="Cooperacion"   value="muy satisfecho" ></center></td>
            <td><center> <input type="radio" name="Cooperacion" value="satisfecho"></center></td>
            <td><center><input type="radio" name="Cooperacion" value="regular" ></center></td>
            <td><center><input type="radio" name="Cooperacion" value="poco satisfecho"></center></td>
            <td><center><input type="radio" name="Cooperacion" value="insatisfecho"></center></td>
            </fieldset>
         </tr>

         <tr>
            <th>Convivencia y Servicio</th>

            <fieldset  style="border: none;">
            <td><center><input type="radio" name="Convivencia"   value="muy satisfecho" ></center></td>
            <td><center> <input type="radio" name="Convivencia" value="satisfecho"></center></td>
            <td><center><input type="radio" name="Convivencia" value="regular" ></center></td>
            <td><center><input type="radio" name="Convivencia" value="poco satisfecho"></center></td>
            <td><center><input type="radio" name="Convivencia" value="insatisfecho"></center></td>
            </fieldset>
         </tr>

         <tr>
            <th>Pertinencia</th>

            <fieldset  style="border: none;">
            <td><center><input type="radio" name="Pertinencia"   value="muy satisfecho" ></center></td>
            <td><center> <input type="radio" name="Pertinencia" value="satisfecho"></center></td>
            <td><center><input type="radio" name="Pertinencia" value="regular" ></center></td>
            <td><center><input type="radio" name="Pertinencia" value="poco satisfecho"></center></td>
            <td><center><input type="radio" name="Pertinencia" value="insatisfecho"></center></td>
            </fieldset>
         </tr>

         <tr>
            <th>Solidaridad</th>

             <fieldset  style="border: none;">
            <td><center><input type="radio" name="Solidaridad2"   value="muy satisfecho" ></center></td>
            <td><center> <input type="radio" name="Solidaridad2" value="satisfecho"></center></td>
            <td><center><input type="radio" name="Solidaridad2" value="regular" ></center></td>
            <td><center><input type="radio" name="Solidaridad2" value="poco satisfecho"></center></td>
            <td><center><input type="radio" name="Solidaridad2" value="insatisfecho"></center></td>
            </fieldset>
         </tr>

         <tr>
            <th>Equidad</th>

                <fieldset  style="border: none;">
                <td><center><input type="radio" name="Equidad"   value="muy satisfecho" ></center></td>
                <td><center> <input type="radio" name="Equidad" value="satisfecho"></center></td>
                <td><center><input type="radio" name="Equidad" value="regular" ></center></td>
                <td><center><input type="radio" name="Equidad" value="poco satisfecho"></center></td>
                <td><center><input type="radio" name="Equidad" value="insatisfecho"></center></td>
                </fieldset>
         </tr>

         <tr>
            <th>Prudencia</th>

                <fieldset  style="border: none;">
                <td><center><input  type="radio" name="Prudencia" value="muy satisfecho" ></center></td>
                <td><center> <input type="radio" name="Prudencia" value="satisfecho"></center></td>
                <td><center><input  type="radio" name="Prudencia" value="regular" ></center></td>
                <td><center><input  type="radio" name="Prudencia" value="poco satisfecho"></center></td>
                <td><center><input  type="radio" name="Prudencia" value="insatisfecho"></center></td>
                </fieldset>
         </tr>

         <tr>
            <th>Justicia</th>

                <fieldset  style="border: none;">
                <td><center><input type="radio" name="Justicia"   value="muy satisfecho" ></center></td>
                <td><center> <input type="radio" name="Justicia" value="satisfecho"></center></td>
                <td><center><input type="radio" name="Justicia" value="regular" ></center></td>
                <td><center><input type="radio" name="Justicia" value="poco satisfecho"></center></td>
                <td><center><input type="radio" name="Justicia" value="insatisfecho"></center></td>
                </fieldset>
         </tr>

         <tr>
            <th>Discreción</th>

                <fieldset  style="border: none;">
                <td><center><input type="radio" name="Discrecion"   value="muy satisfecho" ></center></td>
                <td><center> <input type="radio" name="Discrecion" value="satisfecho"></center></td>
                <td><center><input type="radio" name="Discrecion" value="regular" ></center></td>
                <td><center><input type="radio" name="Discrecion" value="poco satisfecho"></center></td>
                <td><center><input type="radio" name="Discrecion" value="insatisfecho"></center></td>
                </fieldset>
         </tr>
     </tbody>
 </table>

    <!--------------------tercer tabla-------------------------------->
      
       <p>Indica ¿Cómo te sientes con respecto al desempeño de las siguientes competencias profesionales adquiridas durante la Licenciatura en Contaduría?</p>


        <table class="table table-striped table-bordered" style="width:64%; margin:2% auto;" >
         <thead>
             <tr>
            <th>Preguntas</th>
            <th>Muy Satisfecho  </th>
            <th>Satisfecho</th>
            <th>Regular</th>
            <th>Poco Satisfecho</th>
            <th>Insatisfecho</th>
             </tr>
         </thead>
         <tbody>

             <tr>
             <th>Obtener, analizar y controlar información financiera</th>

             <fieldset  style="border: none;">
             <td><center><input type="radio" name="Obtener"   value="muy satisfecho" ></center></td>
             <td><center> <input type="radio" name="Obtener" value="satisfecho"></center></td>
             <td><center><input type="radio" name="Obtener" value="regular" ></center></td>
             <td><center><input type="radio" name="Obtener" value="poco satisfecho"></center></td>
             <td><center><input type="radio" name="Obtener" value="insatisfecho"></center></td>
             </fieldset>
             </tr>

             <tr>
                <th>Obtener, analizar y controlar información legal y fiscal</th>

                <fieldset  style="border: none;">
                <td><center><input type="radio" name="analizar"   value="muy satisfecho" ></center></td>
                <td><center> <input type="radio" name="analizar" value="satisfecho"></center></td>
                <td><center><input type="radio" name="analizar" value="regular" ></center></td>
                <td><center><input type="radio" name="analizar" value="poco satisfecho"></center></td>
                <td><center><input type="radio" name="analizar" value="insatisfecho"></center></td>
                </fieldset>
             </tr>

             <tr>
                <th>Verificar2 y evaluar la veracidad de la información para la emisión de informes o dictámenes.</th>

                <fieldset  style="border: none;">
                <td><center><input type="radio" name="Verificar2"   value="muy satisfecho" ></center></td>
                <td><center> <input type="radio" name="Verificar2" value="satisfecho"></center></td>
                <td><center><input type="radio" name="Verificar2" value="regular" ></center></td>
                <td><center><input type="radio" name="Verificar2" value="poco satisfecho"></center></td>
                <td><center><input type="radio" name="Verificar2" value="insatisfecho"></center></td>
                </fieldset>
             </tr>

             <tr>
                <th>Presentar información actualizada que permita su comparación y predeterminación.</th>

                <fieldset  style="border: none;">
                <td><center><input type="radio" name="Presentar"   value="muy satisfecho" ></center></td>
                <td><center> <input type="radio" name="Presentar" value="satisfecho"></center></td>
                <td><center><input type="radio" name="Presentar" value="regular" ></center></td>
                <td><center><input type="radio" name="Presentar" value="poco satisfecho"></center></td>
                <td><center><input type="radio" name="Presentar" value="insatisfecho"></center></td>
                </fieldset>
             </tr>

             <tr>
                <th>Interpretar y aplicar normatividad internacional para la conversión de estados financieros.</th>

                <fieldset  style="border: none;">
                <td><center><input type="radio" name="Interpretar"   value="muy satisfecho" ></center></td>
                <td><center> <input type="radio" name="Interpretar" value="satisfecho"></center></td>
                <td><center><input type="radio" name="Interpretar" value="regular" ></center></td>
                <td><center><input type="radio" name="Interpretar" value="poco satisfecho"></center></td>
                <td><center><input type="radio" name="Interpretar" value="insatisfecho"></center></td>
                </fieldset>
             </tr>

             <tr>
                <th>Establecer controles de los elementos del costo que permita la efectiva toma de decisiones.</th>

                <fieldset  style="border: none;">
                <td><center><input type="radio" name="Establecer"   value="muy satisfecho" ></center></td>
                <td><center> <input type="radio" name="Establecer" value="satisfecho"></center></td>
                <td><center><input type="radio" name="Establecer" value="regular" ></center></td>
                <td><center><input type="radio" name="Establecer" value="poco satisfecho"></center></td>
                <td><center><input type="radio" name="Establecer" value="insatisfecho"></center></td>
                </fieldset>
             </tr>

             <tr>
                <th>Aplicar técnicas que eleven la calidad y la productividad</th>

                <fieldset  style="border: none;">
                <td><center><input type="radio" name="Aplicar"   value="muy satisfecho" ></center></td>
                <td><center> <input type="radio" name="Aplicar" value="satisfecho"></center></td>
                <td><center><input type="radio" name="Aplicar" value="regular" ></center></td>
                <td><center><input type="radio" name="Aplicar" value="poco satisfecho"></center></td>
                <td><center><input type="radio" name="Aplicar" value="insatisfecho"></center></td>
                </fieldset>
             </tr>

             <tr>
                <th>Predeterminar cuantitativamente y cualitativamente los objetivos de la administración.</th>


                <fieldset  style="border: none;">
                <td><center><input type="radio" name="Predeterminar"   value="muy satisfecho" ></center></td>
                <td><center> <input type="radio" name="Predeterminar" value="satisfecho"></center></td>
                <td><center><input type="radio" name="Predeterminar" value="regular" ></center></td>
                <td><center><input type="radio" name="Predeterminar" value="poco satisfecho"></center></td>
                <td><center><input type="radio" name="Predeterminar" value="insatisfecho"></center></td>
                </fieldset>
             </tr>

             <tr>
                <th>Planear y controlar los recursos financieros de la entidad.</th>

                <fieldset  style="border: none;">
                <td><center><input type="radio" name="controlar"   value="muy satisfecho" ></center></td>
                <td><center> <input type="radio" name="controlar" value="satisfecho"></center></td>
                <td><center><input type="radio" name="controlar" value="regular" ></center></td>
                <td><center><input type="radio" name="controlar" value="poco satisfecho"></center></td>
                <td><center><input type="radio" name="controlar" value="insatisfecho"></center></td>
                </fieldset>
             </tr>

             <tr>
                <th>Establecer estrategias de financiamiento e inversión</th>

                <fieldset  style="border: none;">
                <td><center><input type="radio" name="estrategias"   value="muy satisfecho" ></center></td>
                <td><center> <input type="radio" name="estrategias" value="satisfecho"></center></td>
                <td><center><input type="radio" name="estrategias" value="regular" ></center></td>
                <td><center><input type="radio" name="estrategias" value="poco satisfecho"></center></td>
                <td><center><input type="radio" name="estrategias" value="insatisfecho"></center></td>
                </fieldset>
             </tr>

             <tr>
                <th>Promocionar, desarrollar, expandir y mantener negocios internacionales.</th>

                <fieldset  style="border: none;">
                <td><center><input  type="radio" name="internacionales"   value="muy satisfecho" ></center></td>
                <td><center> <input type="radio" name="internacionales" value="satisfecho"></center></td>
                <td><center><input  type="radio" name="internacionales" value="regular" ></center></td>
                <td><center><input  type="radio" name="internacionales" value="poco satisfecho"></center></td>
                <td><center><input  type="radio" name="internacionales" value="insatisfecho"></center></td>
                </fieldset>
             </tr>

             <tr>
                <th>Orientar y proponer estrategias de solución financiera, contable y fiscal.</th>

                <fieldset  style="border: none;">
                <td><center><input type="radio" name="Orientar"   value="muy satisfecho" ></center></td>
                <td><center> <input type="radio" name="Orientar" value="satisfecho"></center></td>
                <td><center><input type="radio" name="Orientar" value="regular" ></center></td>
                <td><center><input type="radio" name="Orientar" value="poco satisfecho"></center></td>
                <td><center><input type="radio" name="Orientar" value="insatisfecho"></center></td>
                </fieldset>
             </tr>

             <tr>
                <th>Obtener, analizar y controlar información financiera</th>

                <fieldset  style="border: none;">
                <td><center><input type="radio" name="financiera"   value="muy satisfecho" ></center></td>
                <td><center> <input type="radio" name="financiera" value="satisfecho"></center></td>
                <td><center><input type="radio" name="financiera" value="regular" ></center></td>
                <td><center><input type="radio" name="financiera" value="poco satisfecho"></center></td>
                <td><center><input type="radio" name="financiera" value="insatisfecho"></center></td>
                </fieldset>
             </tr>

         </tbody>
         </table>   
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