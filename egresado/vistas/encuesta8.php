<div class="content-wrapper">        
        
  <section class="content">
    
    <div class="row">
      
      <div class="col-md-12">
        
        <div class="box">
          
          <!--Encabezado de licenciaturas-->
          <div class="box-header with-border">
          
            <h1 class="box-title">
              
              <i class="fa fa-arrow"></i>

              Nivel de satisfacción de los egresados con respecto a las capacidades, habilidades, actitudes y valores adquiridos durante la Licenciatura en Informática Administrativa

            </h1>

            <div class="box-tools pull-right">

            </div>

          </div>
          
          <?php $idegresado = $_SESSION["id"];?>    

          <div class="panel-body">
            
         <form method="POST" action="vencuesta9.php" class="form-horizontal form-encuesta1">


            <input type="hidden" name="idegresado" value="<?php echo $idegresado;?>">
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
            <th>Análisis y síntesis</th>
         
            <fieldset  style="border: none;">

            <td ><center><input type="radio" name="analisis"   value="muy satisfecho" ></center></td>
            <td><center> <input type="radio" name="analisis" value="satisfecho"></center></td>
            <td><center><input type="radio" name="analisis" value="regular" ></center></td>
            <td><center><input type="radio" name="analisis" value="poco satisfecho"></center></td>
            <td><center><input type="radio" name="analisis" value="insatisfecho"></center></td>
        </fieldset>

        </tr>
        <tr>
            <th>Análisis y solución de problemas</th>
           
            <fieldset  style="border: none;">
            <td><center><input type="radio" name="solucion"   value="muy satisfecho" ></center></td>
            <td><center> <input type="radio" name="solucion" value="satisfecho"></center></td>
            <td><center><input type="radio" name="solucion" value="regular" ></center></td>
            <td><center><input type="radio" name="solucion" value="poco satisfecho"></center></td>
            <td><center><input type="radio" name="solucion" value="insatisfecho"></center></td>
        </fieldset>
        </tr>
        <tr>
            <th>Calculo</th>

            <fieldset  style="border: none;">
            <td><center><input type="radio" name="calculo"   value="muy satisfecho" ></center></td>
            <td><center> <input type="radio" name="calculo" value="satisfecho"></center></td>
            <td><center><input type="radio" name="calculo" value="regular" ></center></td>
            <td><center><input type="radio" name="calculo" value="poco satisfecho"></center></td>
            <td><center><input type="radio" name="calculo" value="insatisfecho"></center></td>
        </fieldset>
            
        </tr>
        <tr>
          <th>Comcalculoicación oral y escrita</th>

            <fieldset  style="border: none;">
            <td><center><input type="radio" name="comunicacion"   value="muy satisfecho" ></center></td>
            <td><center> <input type="radio" name="comunicacion" value="satisfecho"></center></td>
            <td><center><input type="radio" name="comunicacion" value="regular" ></center></td>
            <td><center><input type="radio" name="comunicacion" value="poco satisfecho"></center></td>
            <td><center><input type="radio" name="comunicacion" value="insatisfecho"></center></td>
        </fieldset>
        </tr>
        <tr>
          <th>Chumanasrtación</th>


            <fieldset  style="border: none;">
            <td><center><input type="radio" name="concentracion"   value="muy satisfecho" ></center></td>
            <td><center> <input type="radio" name="concentracion" value="satisfecho"></center></td>
            <td><center><input type="radio" name="concentracion" value="regular" ></center></td>
            <td><center><input type="radio" name="concentracion" value="poco satisfecho"></center></td>
            <td><center><input type="radio" name="concentracion" value="insatisfecho"></center></td>
           </fieldset>
        </tr>
        <tr>
          <th>Desarrollo organizacional</th>


            <fieldset  style="border: none;">
            <td><center><input type="radio" name="desarrollo"   value="muy satisfecho" ></center></td>
            <td><center> <input type="radio" name="desarrollo" value="satisfecho"></center></td>
            <td><center><input type="radio" name="desarrollo" value="regular" ></center></td>
            <td><center><input type="radio" name="desarrollo" value="poco satisfecho"></center></td>
            <td><center><input type="radio" name="desarrollo" value="insatisfecho"></center></td>
        </fieldset>
        </tr>
        <tr>
          <th>Lectura</th>

            <fieldset  style="border: none;">
            <td><center><input type="radio" name="lectura"   value="muy satisfecho" ></center></td>
            <td><center> <input type="radio" name="lectura" value="satisfecho"></center></td>
            <td><center><input type="radio" name="lectura" value="regular" ></center></td>
            <td><center><input type="radio" name="lectura" value="poco satisfecho"></center></td>
            <td><center><input type="radio" name="lectura" value="insatisfecho"></center></td>
        </fieldset>
        </tr>
        <tr>
          <th>Manejo de grupos</th>

            <fieldset  style="border: none;">
            <td><center><input type="radio" name="manejo"   value="muy satisfecho" ></center></td>
            <td><center> <input type="radio" name="manejo" value="satisfecho"></center></td>
            <td><center><input type="radio" name="manejo" value="regular" ></center></td>
            <td><center><input type="radio" name="manejo" value="poco satisfecho"></center></td>
            <td><center><input type="radio" name="manejo" value="insatisfecho"></center></td>
        </fieldset>
        </tr>
        <tr>
          <th>Manejo de información en la memoria</th>

            <fieldset  style="border: none;">
            <td><center><input type="radio" name="informacion"   value="muy satisfecho" ></center></td>
            <td><center> <input type="radio" name="informacion" value="satisfecho"></center></td>
            <td><center><input type="radio" name="informacion" value="regular" ></center></td>
            <td><center><input type="radio" name="informacion" value="poco satisfecho"></center></td>
            <td><center><input type="radio" name="informacion" value="insatisfecho"></center></td>
        </fieldset>
        <tr>
          <th>Relación con otras personas</th>

            <fieldset  style="border: none;">
            <td><center><input type="radio" name="relacion"   value="muy satisfecho" ></center></td>
            <td><center> <input type="radio" name="relacion" value="satisfecho"></center></td>
            <td><center><input type="radio" name="relacion" value="regular" ></center></td>
            <td><center><input type="radio" name="relacion" value="poco satisfecho"></center></td>
            <td><center><input type="radio" name="relacion" value="insatisfecho"></center></td>
        </fieldset>
        </tr>
        <tr>
          <th>Relaciones humanas</th>

            <fieldset  style="border: none;">
            <td><center><input type="radio" name="humanas"   value="muy satisfecho" ></center></td>
            <td><center> <input type="radio" name="humanas" value="satisfecho"></center></td>
            <td><center><input type="radio" name="humanas" value="regular" ></center></td>
            <td><center><input type="radio" name="humanas" value="poco satisfecho"></center></td>
            <td><center><input type="radio" name="humanas" value="insatisfecho"></center></td>
        </fieldset>
        </tr>
        <tr>
          <th>Solución de conflictos laborales</th>

            <fieldset  style="border: none;">
            <td><center><input type="radio" name="conflictos"   value="muy satisfecho" ></center></td>
            <td><center> <input type="radio" name="conflictos" value="satisfecho"></center></td>
            <td><center><input type="radio" name="conflictos" value="regular" ></center></td>
            <td><center><input type="radio" name="conflictos" value="poco satisfecho"></center></td>
            <td><center><input type="radio" name="conflictos" value="insatisfecho"></center></td>
        </fieldset>

        </tr>
        <tr>
          <th>Toma de decisiones</th>

            <fieldset  style="border: none;">
            <td><center><input type="radio" name="toma"   value="muy satisfecho" ></center></td>
            <td><center> <input type="radio" name="toma" value="satisfecho"></center></td>
            <td><center><input type="radio" name="toma" value="regular" ></center></td>
            <td><center><input type="radio" name="toma" value="poco satisfecho"></center></td>
            <td><center><input type="radio" name="toma" value="insatisfecho"></center></td>
        </fieldset>
        </tr>
        <tr>
          <th>Liderazgo</th>

            <fieldset  style="border: none;">
            <td><center><input type="radio" name="liderasgo"   value="muy satisfecho" ></center></td>
            <td><center> <input type="radio" name="liderasgo" value="satisfecho"></center></td>
            <td><center><input type="radio" name="liderasgo" value="regular" ></center></td>
            <td><center><input type="radio" name="liderasgo" value="poco satisfecho"></center></td>
            <td><center><input type="radio" name="liderasgo" value="insatisfecho"></center></td>
        </fieldset>
        </tr>
        <tr>
          <th>Coordinación y planeación</th>

            <fieldset  style="border: none;">
            <td><center><input type="radio" name="coordinacion"   value="muy satisfecho" ></center></td>
            <td><center> <input type="radio" name="coordinacion" value="satisfecho"></center></td>
            <td><center><input type="radio" name="coordinacion" value="regular" ></center></td>
            <td><center><input type="radio" name="coordinacion" value="poco satisfecho"></center></td>
            <td><center><input type="radio" name="coordinacion" value="insatisfecho"></center></td>
        </fieldset>
        </tr>

        <tr>
          <th>Emprendedor </th>

            <fieldset  style="border: none;">
            <td><center><input type="radio" name="emprendedor"   value="muy satisfecho" ></center></td>
            <td><center> <input type="radio" name="emprendedor" value="satisfecho"></center></td>
            <td><center><input type="radio" name="emprendedor" value="regular" ></center></td>
            <td><center><input type="radio" name="emprendedor" value="poco satisfecho"></center></td>
            <td><center><input type="radio" name="emprendedor" value="insatisfecho"></center></td>
        </fieldset>
        </tr>
        <tr>
          <th>Persuasión</th>

            <fieldset  style="border: none;">
            <td><center><input type="radio" name="persuacion"   value="muy satisfecho" ></center></td>
            <td><center> <input type="radio" name="persuacion" value="satisfecho"></center></td>
            <td><center><input type="radio" name="persuacion" value="regular" ></center></td>
            <td><center><input type="radio" name="persuacion" value="poco satisfecho"></center></td>
            <td><center><input type="radio" name="persuacion" value="insatisfecho"></center></td>
        </fieldset>
        </tr>
        <tr>
          <th>Objetividad</th>

            <fieldset  style="border: none;">
            <td><center><input type="radio" name="objetividad"   value="muy satisfecho" ></center></td>
            <td><center> <input type="radio" name="objetividad" value="satisfecho"></center></td>
            <td><center><input type="radio" name="objetividad" value="regular" ></center></td>
            <td><center><input type="radio" name="objetividad" value="poco satisfecho"></center></td>
            <td><center><input type="radio" name="objetividad" value="insatisfecho"></center></td>
            </fieldset>
        </tr>
    </tbody>
  </table>

  <!-------------segunda tabla-------------------->

  <p>Indica ¿Cómo te sientes con respecto a las siguientes actitudes obtenidas durante la Licenciatura en Informática Administrativa?</p>

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
            <th>Aceptación al cambio</th>
         
            <fieldset  style="border: none;">
            <td><center><input type="radio" name="aceptacion"   value="muy satisfecho" ></center></td>
            <td><center> <input type="radio" name="aceptacion" value="satisfecho"></center></td>
            <td><center><input type="radio" name="aceptacion" value="regular" ></center></td>
            <td><center><input type="radio" name="aceptacion" value="poco satisfecho"></center></td>
            <td><center><input type="radio" name="aceptacion" value="insatisfecho"></center></td>
        </fieldset>

        </tr>
        <tr>
            <th>Búsqueda de la eficiencia</th>
            <fieldset  style="border: none;">
            <td><center><input type="radio" name="busqueda"   value="muy satisfecho" ></center></td>
            <td><center> <input type="radio" name="busqueda" value="satisfecho"></center></td>
            <td><center><input type="radio" name="busqueda" value="regular" ></center></td>
            <td><center><input type="radio" name="busqueda" value="poco satisfecho"></center></td>
            <td><center><input type="radio" name="busqueda" value="insatisfecho"></center></td>
        </fieldset>
        </tr>
        <tr>
            <th>constancia</th>

            <fieldset  style="border: none;">
            <td><center><input type="radio" name="constancia"   value="muy satisfecho" ></center></td>
            <td><center> <input type="radio" name="constancia" value="satisfecho"></center></td>
            <td><center><input type="radio" name="constancia" value="regular" ></center></td>
            <td><center><input type="radio" name="constancia" value="poco satisfecho"></center></td>
            <td><center><input type="radio" name="constancia" value="insatisfecho"></center></td>
        </fieldset>
            
        </tr>
        <tr>
          <th>Cooperación con otras personas</th>

            <fieldset  style="border: none;">
            <td><center><input type="radio" name="cooperacion"   value="muy satisfecho" ></center></td>
            <td><center> <input type="radio" name="cooperacion" value="satisfecho"></center></td>
            <td><center><input type="radio" name="cooperacion" value="regular" ></center></td>
            <td><center><input type="radio" name="cooperacion" value="poco satisfecho"></center></td>
            <td><center><input type="radio" name="cooperacion" value="insatisfecho"></center></td>
        </fieldset>
        </tr>
        <tr>
          <th>Cooperación con otros profesionales</th>


            <fieldset  style="border: none;">
            <td><center><input type="radio" name="profesionales"   value="muy satisfecho" ></center></td>
            <td><center> <input type="radio" name="profesionales" value="satisfecho"></center></td>
            <td><center><input type="radio" name="profesionales" value="regular" ></center></td>
            <td><center><input type="radio" name="profesionales" value="poco satisfecho"></center></td>
            <td><center><input type="radio" name="profesionales" value="insatisfecho"></center></td>
        </fieldset>
        </tr>
        <tr>
          <th>Disposición a escuchar</th>


            <fieldset  style="border: none;">
            <td><center><input type="radio" name="escuchar"   value="muy satisfecho" ></center></td>
            <td><center> <input type="radio" name="escuchar" value="satisfecho"></center></td>
            <td><center><input type="radio" name="escuchar" value="regular" ></center></td>
            <td><center><input type="radio" name="escuchar" value="poco satisfecho"></center></td>
            <td><center><input type="radio" name="escuchar" value="insatisfecho"></center></td>
        </fieldset>
        </tr>
        <tr>
          <th>Disposición al trabajo en equipo</th>

            <fieldset  style="border: none;">
            <td><center><input type="radio" name="equipo"   value="muy satisfecho" ></center></td>
            <td><center> <input type="radio" name="equipo" value="satisfecho"></center></td>
            <td><center><input type="radio" name="equipo" value="regular" ></center></td>
            <td><center><input type="radio" name="equipo" value="poco satisfecho"></center></td>
            <td><center><input type="radio" name="equipo" value="insatisfecho"></center></td>
        </fieldset>
        </tr>
        <tr>
          <th>Equilibrio emocional</th>

            <fieldset  style="border: none;">
            <td><center><input type="radio" name="emocional"   value="muy satisfecho" ></center></td>
            <td><center> <input type="radio" name="emocional" value="satisfecho"></center></td>
            <td><center><input type="radio" name="emocional" value="regular" ></center></td>
            <td><center><input type="radio" name="emocional" value="poco satisfecho"></center></td>
            <td><center><input type="radio" name="emocional" value="insatisfecho"></center></td>
        </fieldset>
        </tr>
        <tr>
          <th>Honestidad e integridad profesional</th>

            <fieldset  style="border: none;">
            <td><center><input type="radio" name="honestidad"   value="muy satisfecho" ></center></td>
            <td><center> <input type="radio" name="honestidad" value="satisfecho"></center></td>
            <td><center><input type="radio" name="honestidad" value="regular" ></center></td>
            <td><center><input type="radio" name="honestidad" value="poco satisfecho"></center></td>
            <td><center><input type="radio" name="honestidad" value="insatisfecho"></center></td>
        </fieldset>
        <tr>
          <th>Interés en las nuevas tecnologias</th>

            <fieldset  style="border: none;">
            <td><center><input type="radio" name="tecnologias"   value="muy satisfecho" ></center></td>
            <td><center> <input type="radio" name="tecnologias" value="satisfecho"></center></td>
            <td><center><input type="radio" name="tecnologias" value="regular" ></center></td>
            <td><center><input type="radio" name="tecnologias" value="poco satisfecho"></center></td>
            <td><center><input type="radio" name="tecnologias" value="insatisfecho"></center></td>
        </fieldset>
        </tr>
        <tr>
          <th>Interés en la aurespetotización del trabajo</th>

            <fieldset  style="border: none;">
            <td><center><input type="radio" name="interes"   value="muy satisfecho" ></center></td>
            <td><center> <input type="radio" name="interes" value="satisfecho"></center></td>
            <td><center><input type="radio" name="interes" value="regular" ></center></td>
            <td><center><input type="radio" name="interes" value="poco satisfecho"></center></td>
            <td><center><input type="radio" name="interes" value="insatisfecho"></center></td>
        </fieldset>
        </tr>
        <tr>
          <th>persistencia</th>

            <fieldset  style="border: none;">
            <td><center><input type="radio" name="persistencia"   value="muy satisfecho" ></center></td>
            <td><center> <input type="radio" name="persistencia" value="satisfecho"></center></td>
            <td><center><input type="radio" name="persistencia" value="regular" ></center></td>
            <td><center><input type="radio" name="persistencia" value="poco satisfecho"></center></td>
            <td><center><input type="radio" name="persistencia" value="insatisfecho"></center></td>
        </fieldset>

        </tr>
        <tr>
          <th>respeto a los compañeros</th>

            <fieldset  style="border: none;">
            <td><center><input type="radio" name="respeto"   value="muy satisfecho" ></center></td>
            <td><center> <input type="radio" name="respeto" value="satisfecho"></center></td>
            <td><center><input type="radio" name="respeto" value="regular" ></center></td>
            <td><center><input type="radio" name="respeto" value="poco satisfecho"></center></td>
            <td><center><input type="radio" name="respeto" value="insatisfecho"></center></td>
        </fieldset>
        </tr>
        <tr>
          <th>responsabilidad</th>

            <fieldset  style="border: none;">
            <td><center><input type="radio" name="responsabilidad2"   value="muy satisfecho" ></center></td>
            <td><center> <input type="radio" name="responsabilidad2" value="satisfecho"></center></td>
            <td><center><input type="radio" name="responsabilidad2" value="regular" ></center></td>
            <td><center><input type="radio" name="responsabilidad2" value="poco satisfecho"></center></td>
            <td><center><input type="radio" name="responsabilidad2" value="insatisfecho"></center></td>
        </fieldset>
        </tr>
        <tr>
          <th>Superación profesiona</th>

            <fieldset  style="border: none;">
            <td><center><input type="radio" name="superacion"   value="muy satisfecho" ></center></td>
            <td><center> <input type="radio" name="superacion" value="satisfecho"></center></td>
            <td><center><input type="radio" name="superacion" value="regular" ></center></td>
            <td><center><input type="radio" name="superacion" value="poco satisfecho"></center></td>
            <td><center><input type="radio" name="superacion" value="insatisfecho"></center></td>
        </fieldset>
        </tr>

        <tr>
          <th>Positivo</th>

            <fieldset  style="border: none;">
            <td><center><input type="radio" name="positivo"   value="muy satisfecho" ></center></td>
            <td><center> <input type="radio" name="positivo" value="satisfecho"></center></td>
            <td><center><input type="radio" name="positivo" value="regular" ></center></td>
            <td><center><input type="radio" name="positivo" value="poco satisfecho"></center></td>
            <td><center><input type="radio" name="positivo" value="insatisfecho"></center></td>
        </fieldset>
        </tr>
        <tr>
          <th>Aprendizaje</th>

            <fieldset  style="border: none;">
            <td><center><input type="radio" name="aprendizaje"   value="muy satisfecho" ></center></td>
            <td><center> <input type="radio" name="aprendizaje" value="satisfecho"></center></td>
            <td><center><input type="radio" name="aprendizaje" value="regular" ></center></td>
            <td><center><input type="radio" name="aprendizaje" value="poco satisfecho"></center></td>
            <td><center><input type="radio" name="aprendizaje" value="insatisfecho"></center></td>
        </fieldset>
        </tr>
        <tr>
          <th>Innovación</th>

            <fieldset  style="border: none;">
            <td><center><input type="radio" name="innovacion"   value="muy satisfecho" ></center></td>
            <td><center> <input type="radio" name="innovacion" value="satisfecho"></center></td>
            <td><center><input type="radio" name="innovacion" value="regular" ></center></td>
            <td><center><input type="radio" name="innovacion" value="poco satisfecho"></center></td>
            <td><center><input type="radio" name="innovacion" value="insatisfecho"></center></td>
        </fieldset>
        </tr>
        <tr>
            <th>Flexibilidad</th>

            <fieldset  style="border: none;">
            <td><center><input type="radio" name="flexibilidad"   value="muy satisfecho" ></center></td>
            <td><center> <input type="radio" name="flexibilidad" value="satisfecho"></center></td>
            <td><center><input type="radio" name="flexibilidad" value="regular" ></center></td>
            <td><center><input type="radio" name="flexibilidad" value="poco satisfecho"></center></td>
            <td><center><input type="radio" name="flexibilidad" value="insatisfecho"></center></td>
        </fieldset>
        </tr>
        <tr>
            <th>Entropía</th>

            <fieldset  style="border: none;">
            <td><center><input type="radio" name="entropia"   value="muy satisfecho" ></center></td>
            <td><center> <input type="radio" name="entropia" value="satisfecho"></center></td>
            <td><center><input type="radio" name="entropia" value="regular" ></center></td>
            <td><center><input type="radio" name="entropia" value="poco satisfecho"></center></td>
            <td><center><input type="radio" name="entropia" value="insatisfecho"></center></td>
        </fieldset>
        </tr>
    </tbody>
</table>

<!--------------------tercer tabla-------------------------------->
      
       <p>Indica ¿Cómo te sientes con respecto a los siguientes valores obtenidos durante la Licenciatura en Informática Administrativa?</p>


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
            <th>Prudencia</th>
         
            <fieldset  style="border: none;">
            <td><center><input type="radio" name="Prudencia"   value="muy satisfecho" ></center></td>
            <td><center> <input type="radio" name="Prudencia" value="satisfecho"></center></td>
            <td><center><input type="radio" name="Prudencia" value="regular" ></center></td>
            <td><center><input type="radio" name="Prudencia" value="poco satisfecho"></center></td>
            <td><center><input type="radio" name="Prudencia" value="insatisfecho"></center></td>
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
            <th>Honestidad</th>

            <fieldset  style="border: none;">
            <td><center><input type="radio" name="Honestidad2"   value="muy satisfecho" ></center></td>
            <td><center> <input type="radio" name="Honestidad2" value="satisfecho"></center></td>
            <td><center><input type="radio" name="Honestidad2" value="regular" ></center></td>
            <td><center><input type="radio" name="Honestidad2" value="poco satisfecho"></center></td>
            <td><center><input type="radio" name="Honestidad2" value="insatisfecho"></center></td>
        </fieldset>
            
        </tr>
        <tr>
          <th>Espiritu</th>

            <fieldset  style="border: none;">
            <td><center><input type="radio" name="Espiritu"   value="muy satisfecho" ></center></td>
            <td><center> <input type="radio" name="Espiritu" value="satisfecho"></center></td>
            <td><center><input type="radio" name="Espiritu" value="regular" ></center></td>
            <td><center><input type="radio" name="Espiritu" value="poco satisfecho"></center></td>
            <td><center><input type="radio" name="Espiritu" value="insatisfecho"></center></td>
        </fieldset>
        </tr>
        <tr>
          <th>Respeto</th>


            <fieldset  style="border: none;">
            <td><center><input type="radio" name="Respeto2"   value="muy satisfecho" ></center></td>
            <td><center> <input type="radio" name="Respeto2" value="satisfecho"></center></td>
            <td><center><input type="radio" name="Respeto2" value="regular" ></center></td>
            <td><center><input type="radio" name="Respeto2" value="poco satisfecho"></center></td>
            <td><center><input type="radio" name="Respeto2" value="insatisfecho"></center></td>
        </fieldset>
        </tr>
        <tr>
          <th>Disposición a escuchar</th>


            <fieldset  style="border: none;">
            <td><center><input type="radio" name="escuchar2"   value="muy satisfecho" ></center></td>
            <td><center> <input type="radio" name="escuchar2" value="satisfecho"></center></td>
            <td><center><input type="radio" name="escuchar2" value="regular" ></center></td>
            <td><center><input type="radio" name="escuchar2" value="poco satisfecho"></center></td>
            <td><center><input type="radio" name="escuchar2" value="insatisfecho"></center></td>
        </fieldset>
        </tr>
        <tr>
          <th>Empatia</th>

            <fieldset  style="border: none;">
            <td><center><input type="radio" name="Empatia"   value="muy satisfecho" ></center></td>
            <td><center> <input type="radio" name="Empatia" value="satisfecho"></center></td>
            <td><center><input type="radio" name="Empatia" value="regular" ></center></td>
            <td><center><input type="radio" name="Empatia" value="poco satisfecho"></center></td>
            <td><center><input type="radio" name="Empatia" value="insatisfecho"></center></td>
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
          <th>Justicia</th>

            <fieldset  style="border: none;">
            <td><center><input type="radio" name="Justicia2"   value="muy satisfecho" ></center></td>
            <td><center> <input type="radio" name="Justicia2" value="satisfecho"></center></td>
            <td><center><input type="radio" name="Justicia2" value="regular" ></center></td>
            <td><center><input type="radio" name="Justicia2" value="poco satisfecho"></center></td>
            <td><center><input type="radio" name="Justicia2" value="insatisfecho"></center></td>
        </fieldset>
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
        <tr>
          <th>Responsabilidad</th>

            <fieldset  style="border: none;">
            <td><center><input type="radio" name="Responsabilidad"  value="muy satisfecho" ></center></td>
            <td><center> <input type="radio" name="Responsabilidad" value="satisfecho"></center></td>
            <td><center><input type="radio" name="Responsabilidad" value="regular" ></center></td>
            <td><center><input type="radio" name="Responsabilidad" value="poco satisfecho"></center></td>
            <td><center><input type="radio" name="Responsabilidad" value="insatisfecho"></center></td>
        </fieldset>
        </tr>
        
    </tbody>
</table>

<!-----------------------------cuarta tbala------------------------->

       <p >Indica ¿Cómo te sientes con respecto al desempeño de las siguientes competencias profesionales adquiridas durante la Licenciatura en Informática Administrativa?</p>



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
            <th>Planear, generar y mantener bases de datos de las organizaciones con bancos de datos electrónicos</th>
         
            <fieldset  style="border: none;">
            <td><center><input type="radio" name="planear"   value="muy satisfecho" ></center></td>
             <td><center> <input type="radio" name="planear" value="satisfecho"></center></td>
            <td><center> <input type="radio" name="planear" value="regular" ></center></td>
            <td><center><input type="radio" name="planear" value="poco satisfecho"></center></td>
            <td><center><input type="radio" name="planear" value="insatisfecho"></center></td>
        </fieldset>

        </tr>
        <tr>
            <th>Diseño de implementación de planes de contingencia en caso de desastres (DRP) y planes operativos de respaldo electrónico</th>
            <fieldset  style="border: none;">
            <td><center><input type="radio" name="diseno"   value="muy satisfecho" ></center></td>
            <td><center> <input type="radio" name="diseno" value="satisfecho"></center></td>
            <td><center><input type="radio" name="diseno" value="regular" ></center></td>
            <td><center><input type="radio" name="diseno" value="poco satisfecho"></center></td>
            <td><center><input type="radio" name="diseno" value="insatisfecho"></center></td>
        </fieldset>
        </tr>
        <tr>
            <th>Creación y mantenimiento de helpesk</th>

            <fieldset  style="border: none;">
            <td><center><input type="radio" name="creacion"   value="muy satisfecho" ></center></td>
            <td><center> <input type="radio" name="creacion" value="satisfecho"></center></td>
            <td><center><input type="radio" name="creacion" value="regular" ></center></td>
            <td><center><input type="radio" name="creacion" value="poco satisfecho"></center></td>
            <td><center><input type="radio" name="creacion" value="insatisfecho"></center></td>
        </fieldset>
            
        </tr>
        <tr>
          <th>Analista y diseñador de sistemas de información</th>

            <fieldset  style="border: none;">
            <td><center><input type="radio" name="analista"   value="muy satisfecho" ></center></td>
            <td><center> <input type="radio" name="analista" value="satisfecho"></center></td>
            <td><center><input type="radio" name="analista" value="regular" ></center></td>
            <td><center><input type="radio" name="analista" value="poco satisfecho"></center></td>
            <td><center><input type="radio" name="analista" value="insatisfecho"></center></td>
        </fieldset>
        </tr>
        <tr>
          <th>Desarrollo de sistemas de información administrativos que permitan los procesamientos en línea y la generación de estadísticas y simulaciones pertinentes para apoyar la toma de decisiones en tiempo real</th>


            <fieldset  style="border: none;">
            <td><center><input type="radio" name="desarrollo2"   value="muy satisfecho" ></center></td>
            <td><center> <input type="radio" name="desarrollo2" value="satisfecho"></center></td>
            <td><center><input type="radio" name="desarrollo2" value="regular" ></center></td>
            <td><center><input type="radio" name="desarrollo2" value="poco satisfecho"></center></td>
            <td><center><input type="radio" name="desarrollo2" value="insatisfecho"></center></td>
        </fieldset>
        </tr>
        <tr>
          <th>Generación de planes estratégicos informáticos incluyendo estudios DOFA</th>


            <fieldset  style="border: none;">
            <td><center><input type="radio" name="generacion2"   value="muy satisfecho" ></center></td>
            <td><center> <input type="radio" name="generacion2" value="satisfecho"></center></td>
            <td><center><input type="radio" name="generacion2" value="regular" ></center></td>
            <td><center><input type="radio" name="generacion2" value="poco satisfecho"></center></td>
            <td><center><input type="radio" name="generacion2" value="insatisfecho"></center></td>
        </fieldset>
        </tr>
        <tr>
          <th>Administrar y controlar las redes y las comunicaciones en general en las organizaciones</th>

            <fieldset  style="border: none;">
            <td><center><input type="radio" name="administrar"   value="muy satisfecho" ></center></td>
            <td><center> <input type="radio" name="administrar" value="satisfecho"></center></td>
            <td><center><input type="radio" name="administrar" value="regular" ></center></td>
            <td><center><input type="radio" name="administrar" value="poco satisfecho"></center></td>
            <td><center><input type="radio" name="administrar" value="insatisfecho"></center></td>
        </fieldset>
        </tr>
        <tr>
          <th>administrar los sistemas de comunicaciones de las organizaciones de manera eficiente</th>

            <fieldset  style="border: none;">
            <td><center><input type="radio" name="adsistemas"   value="muy satisfecho" ></center></td>
            <td><center> <input type="radio" name="adsistemas" value="satisfecho"></center></td>
            <td><center><input type="radio" name="adsistemas" value="regular" ></center></td>
            <td><center><input type="radio" name="adsistemas" value="poco satisfecho"></center></td>
            <td><center><input type="radio" name="adsistemas" value="insatisfecho"></center></td>
        </fieldset>
        </tr>
        <tr>
          <th>Liderar proyectos de desarrollo de software</th>

            <fieldset  style="border: none;">
            <td><center><input type="radio" name="liderar"   value="muy satisfecho" ></center></td>
            <td><center> <input type="radio" name="liderar" value="satisfecho"></center></td>
            <td><center><input type="radio" name="liderar" value="regular" ></center></td>
            <td><center><input type="radio" name="liderar" value="poco satisfecho"></center></td>
            <td><center><input type="radio" name="liderar" value="insatisfecho"></center></td>
        </fieldset>
        <tr>
          <th>administrar departamentos y negocios informáticos así como unidades informáticas</th>

            <fieldset  style="border: none;">
            <td><center><input type="radio" name="addepartamentos"  value="muy satisfecho" ></center></td>
            <td><center> <input type="radio" name="addepartamentos" value="satisfecho"></center></td>
            <td><center><input type="radio" name="addepartamentos" value="regular" ></center></td>
            <td><center><input type="radio" name="addepartamentos" value="poco satisfecho"></center></td>
            <td><center><input type="radio" name="addepartamentos" value="insatisfecho"></center></td>
        </fieldset>
        </tr>
        <tr>
          <th>Elaboración y administración de programas de capacitación como apoyo a la información y difusión de culturas informáticas en las organizaciones</th>

            <fieldset  style="border: none;">
            <td><center><input type="radio" name="elaboracion"  value="muy satisfecho" ></center></td>
            <td><center> <input type="radio" name="elaboracion" value="satisfecho"></center></td>
            <td><center><input type="radio" name="elaboracion" value="regular" ></center></td>
            <td><center><input type="radio" name="elaboracion" value="poco satisfecho"></center></td>
            <td><center><input type="radio" name="elaboracion" value="insatisfecho"></center></td>
        </fieldset>
        </tr>
        <tr>
          <th>desarrollo de programas institucionales para la aplicación y optimización del uso de las tecnologías de información</th>

            <fieldset  style="border: none;">
            <td><center><input type="radio" name="programas"  value="muy satisfecho" ></center></td>
            <td><center> <input type="radio" name="programas" value="satisfecho"></center></td>
            <td><center><input type="radio" name="programas" value="regular" ></center></td>
            <td><center><input type="radio" name="programas" value="poco satisfecho"></center></td>
            <td><center><input type="radio" name="programas" value="insatisfecho"></center></td>
        </fieldset>
        </tr>
        <tr>
          <th>Implementación de técnicas administrativas aplicadas a áreas informáticas</th>

            <fieldset  style="border: none;">
            <td><center><input type="radio" name="implementacion"  value="muy satisfecho" ></center></td>
            <td><center> <input type="radio" name="implementacion" value="satisfecho"></center></td>
            <td><center><input type="radio" name="implementacion" value="regular" ></center></td>
            <td><center><input type="radio" name="implementacion" value="poco satisfecho"></center></td>
            <td><center><input type="radio" name="implementacion" value="insatisfecho"></center></td>
        </fieldset>
        </tr>
        <tr>
          <th>Generación de estrategias y controles administrativos</th>

            <fieldset  style="border: none;">
            <td><center><input type="radio" name="estrategias"  value="muy satisfecho" ></center></td>
            <td><center> <input type="radio" name="estrategias" value="satisfecho"></center></td>
            <td><center><input type="radio" name="estrategias" value="regular" ></center></td>
            <td><center><input type="radio" name="estrategias" value="poco satisfecho"></center></td>
            <td><center><input type="radio" name="estrategias" value="insatisfecho"></center></td>
        </fieldset>
        </tr>
        <tr>
          <th>estudios y evaluaciones financieras para proyectos informáticos</th>

            <fieldset  style="border: none;">
            <td><center><input type="radio" name="estudios"  value="muy satisfecho" ></center></td>
            <td><center> <input type="radio" name="estudios" value="satisfecho"></center></td>
            <td><center><input type="radio" name="estudios" value="regular" ></center></td>
            <td><center><input type="radio" name="estudios" value="poco satisfecho"></center></td>
            <td><center><input type="radio" name="estudios" value="insatisfecho"></center></td>
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
 