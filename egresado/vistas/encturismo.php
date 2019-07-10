<div class="content-wrapper">        
        
  <section class="content">
    
    <div class="row">
      
      <div class="col-md-12">
        
        <div class="box">
          
          <!--Encabezado de licenciaturas-->
          <div class="box-header with-border">
          
            <h1 class="box-title">
              
              <i class="fa fa-arrow"></i>

           Nivel de satisfacción de los egresados con respecto a las capacidades, habilidades, actitudes y valores adquiridos durante la Licenciatura en efectiva.

            </h1>

            <div class="box-tools pull-right">

            </div>

          </div>
          
          <?php $idegresado = $_SESSION["id"];?>    

          <div class="panel-body">
            
         <form method="POST" action="vturismo.php" class="form-horizontal form-encuesta1">


        <input type="hidden" name="idegresado" value="<?php echo $idegresado;?>">
             
            <br>

            <p>Indica ¿Cómo te sientes con respecto a las siguientes habilidades obtenidas durante la Licenciatura en efectiva?</p>


       <div class="table-responsive">

          <table class="table table-striped table-bordered" style="width:64%; margin:2% auto;" >
              <thead>
                  <tr>
             <th>Competencias profesionales</th>
              <th>Muy Satisfecho  </th>
              <th>Satisfecho</th>
              <th>Poco Satisfecho</th>
              <th>Regular</th>
              <th>Insatisfecho</th>
              <th>No la desempeña</th>
               </tr>
               </thead>
               <tbody>
                <tr>
                  <th>Comunicación efectiva</th>
                      <fieldset  style="border: none;">
                       <td><center><input   type="radio" name="efectiva"   value="muy satisfecho" ></center></td>
                       <td><center> <input type="radio" name="efectiva" value="satisfecho"></center></td>
                       <td><center><input  type="radio" name="efectiva" value="poco satisfecho"></center></td>
                       <td><center><input type="radio" name="efectiva" value="regular" ></center></td>
                       <td><center><input  type="radio" name="efectiva" value="insatisfecho"></center></td>
                        <td><center><input type="radio" name="efectiva" value="no la desempeña" ></center></td>
                       </fieldset>

                <tr>
                  <th>Creatividad e innovación</th>

                      <fieldset  style="border: none;">
                       <td><center><input   type="radio" name="Creatividad"   value="muy satisfecho" ></center></td>
                       <td><center> <input type="radio" name="Creatividad" value="satisfecho"></center></td>
                       <td><center><input  type="radio" name="Creatividad" value="poco satisfecho"></center></td>
                       <td><center><input type="radio" name="Creatividad" value="regular" ></center></td>
                       <td><center><input  type="radio" name="Creatividad" value="insatisfecho"></center></td>
                        <td><center><input type="radio" name="Creatividad" value="no la desempeña" ></center></td>
                       </fieldset>
                </tr>

                <tr>
                  <th>Toma de decisiones</th>

                    <fieldset  style="border: none;">
                    <td><center><input type="radio" name="Toma"   value="muy satisfecho" ></center></td>
                    <td><center> <input type="radio" name="Toma" value="satisfecho"></center></td>
                    <td><center><input type="radio" name="Toma" value="poco satisfecho"></center></td>
                    <td><center><input type="radio" name="Toma" value="regular" ></center></td>
                    <td><center><input type="radio" name="Toma" value="insatisfecho"></center></td>
                    <td><center><input type="radio" name="Toma" value="no la desempeña" ></center></td>

                    </fieldset>
                </tr>

                <tr>
                  <th>Resolución de conflictos</th>

                   <fieldset  style="border: none;">
                    <td><center><input type="radio" name="conflictos"   value="muy satisfecho" ></center></td>
                    <td><center> <input type="radio" name="conflictos" value="satisfecho"></center></td>
                    <td><center><input type="radio" name="conflictos" value="poco satisfecho"></center></td>
                    <td><center><input type="radio" name="conflictos" value="regular" ></center></td>
                    <td><center><input type="radio" name="conflictos" value="insatisfecho"></center></td>
                    <td><center><input type="radio" name="conflictos" value="no la desempeña" ></center></td>
                    </fieldset>
                </tr>

                <tr>
                  <th>Operación turística en hotelería, alimentos y bebidas.</th>

                   <fieldset  style="border: none;">
                    <td><center><input type="radio" name="Operacion"   value="muy satisfecho" ></center></td>
                    <td><center> <input type="radio" name="Operacion" value="satisfecho"></center></td>
                    <td><center><input type="radio" name="Operacion" value="poco satisfecho"></center></td>
                    <td><center><input type="radio" name="conflictos" value="poco satisfecho"></center></td>
                    <td><center><input type="radio" name="Operacion" value="insatisfecho"></center></td>
                    <td><center><input type="radio" name="Operacion" value="no la desempeña" ></center></td>
                    </fieldset>
                </tr>

                <tr>
                  <th>Manejo de relaciones humanas</th>

                    <fieldset  style="border: none;">
                    <td><center><input type="radio" name="Manejo"   value="muy satisfecho" ></center></td>
                    <td><center> <input type="radio" name="Manejo" value="satisfecho"></center></td>                
                    <td><center><input type="radio" name="Manejo" value="poco satisfecho"></center></td>
                   <td><center><input type="radio" name="Manejo" value="regular" ></center></td>
                    <td><center><input type="radio" name="Manejo" value="insatisfecho"></center></td>
                    <td><center><input type="radio" name="Manejo" value="no la desempeña" ></center></td>

                    </fieldset>
                </tr>

                <tr>
                  <th>Identificar fuentes de información confiables</th>

                    <fieldset  style="border: none;">
                    <td><center><input type="radio" name="Identificar"   value="muy satisfecho" ></center></td>
                    <td><center> <input type="radio" name="Identificar" value="satisfecho"></center></td>          
                    <td><center><input type="radio" name="Identificar" value="poco satisfecho"></center></td>
                    <td><center><input type="radio" name="Identificar" value="regular" ></center></td>
                    <td><center><input type="radio" name="Identificar" value="insatisfecho"></center></td>
                    <td><center><input type="radio" name="Identificar" value="no la desempeña" ></center></td>
                    </fieldset>
                </tr>

                <tr>
                  <th>Identificar, calificar y jerarquizar  la oferta turística</th>

                    <fieldset  style="border: none;">
                    <td><center><input type="radio" name="calificar"   value="muy satisfecho" ></center></td>
                    <td><center> <input type="radio" name="calificar" value="satisfecho"></center></td>            
                    <td><center><input type="radio" name="calificar" value="poco satisfecho"></center></td>
                    <td><center><input type="radio" name="calificar" value="regular" ></center></td>
                    <td><center><input type="radio" name="calificar" value="insatisfecho"></center></td>
                    <td><center><input type="radio" name="calificar" value="no la desempeña" ></center></td>
                    </fieldset>               
                   </tr>

                   <tr>
                     <th>Analizar el aprovechamiento turístico del Patrimonio cultural y nacional.</th>

                    <fieldset  style="border: none;">
                    <td><center><input type="radio" name="aprovechamiento"   value="muy satisfecho" ></center></td>
                    <td><center> <input type="radio" name="aprovechamiento" value="satisfecho"></center></td>     
                    <td><center><input type="radio" name="aprovechamiento" value="poco satisfecho"></center></td>
                    <td><center><input type="radio" name="aprovechamiento" value="regular" ></center></td>
                    <td><center><input type="radio" name="aprovechamiento" value="insatisfecho"></center></td>
                   <td><center><input type="radio" name="aprovechamiento" value="no la desempeña" ></center></td>
                    </fieldset>
                   </tr>

                   <tr>
                     <th>Evaluar los impactos en la comunidad receptora y el entorno ambiental</th>

                    <fieldset  style="border: none;">
                    <td><center><input type="radio" name="Evaluar"   value="muy satisfecho" ></center></td>
                    <td><center> <input type="radio" name="Evaluar" value="satisfecho"></center></td>
                    <td><center><input type="radio" name="Evaluar" value="poco satisfecho"></center></td>
                    <td><center><input type="radio" name="Evaluar" value="regular" ></center></td>
                    <td><center><input type="radio" name="Evaluar" value="insatisfecho"></center></td>
                    <td><center><input type="radio" name="Evaluar" value="no la desempeña" ></center></td>
                    </fieldset>
                   </tr>

                   <tr>
                     <th>Interpretar los resultados de un diagnóstico</th>

                    <fieldset  style="border: none;">
                    <td><center><input type="radio" name="Interpretar"   value="muy satisfecho" ></center></td>
                    <td><center> <input type="radio" name="Interpretar" value="satisfecho"></center></td>
                    <td><center><input type="radio" name="Interpretar" value="poco satisfecho"></center></td>
                    <td><center><input type="radio" name="Interpretar" value="regular" ></center></td>
                    <td><center><input type="radio" name="Interpretar" value="insatisfecho"></center></td>
                    <td><center><input type="radio" name="Interpretar" value="no la desempeña" ></center></td>
                    </fieldset>
                   </tr>

                   <tr>
                     <th>Tipificar productos y servicios logísticos.</th>

                     <fieldset  style="border: none;">
                    <td><center><input type="radio" name="Tipificar"   value="muy satisfecho" ></center></td>
                    <td><center> <input type="radio" name="Tipificar" value="satisfecho"></center></td>
                    <td><center><input type="radio" name="Tipificar" value="poco satisfecho"></center></td>
                    <td><center><input type="radio" name="Tipificar" value="regular" ></center></td>
                    <td><center><input type="radio" name="Tipificar" value="insatisfecho"></center></td>
                    <td><center><input type="radio" name="Tipificar" value="no la desempeña" ></center></td>
                    </fieldset>
                   </tr>

                   <tr>
                     <th>Evaluar la actividad turística para el desarrollo del producto y servicio analizado.</th>

                    <fieldset  style="border: none;">
                    <td><center><input type="radio" name="actividad"   value="muy satisfecho" ></center></td>
                    <td><center> <input type="radio" name="actividad" value="satisfecho"></center></td>
                    <td><center><input type="radio" name="actividad" value="poco satisfecho"></center></td>
                    <td><center><input type="radio" name="actividad" value="regular" ></center></td>
                    <td><center><input type="radio" name="actividad" value="insatisfecho"></center></td>
                    <td><center><input type="radio" name="actividad" value="no la desempeña" ></center></td>
                    </fieldset>
                   </tr>

                   <tr>
                     <th>Identificar oportunidades de desarrollo en el sector turístico bajo criterios de sustentabilidad</th>

                    <fieldset  style="border: none;">
                    <td><center><input type="radio" name="oportunidades"   value="muy satisfecho" ></center></td>
                    <td><center> <input type="radio" name="oportunidades" value="satisfecho"></center></td>
                    <td><center><input type="radio" name="oportunidades" value="poco satisfecho"></center></td>
                    <td><center><input type="radio" name="oportunidades" value="regular" ></center></td>       
                   <td><center><input type="radio" name="oportunidades" value="insatisfecho"></center></td> 
                    <td><center><input type="radio" name="oportunidades" value="no la desempeña" ></center></td>

                    </fieldset>
                   </tr>


                   <tr>
                     <th>Generar proyectos turísticos sustentables.</th>

                     <fieldset  style="border: none;">
                    <td><center><input type="radio" name="Generar"   value="muy satisfecho" ></center></td>
                    <td><center> <input type="radio" name="Generar" value="satisfecho"></center></td>
                    <td><center><input type="radio" name="Generar" value="poco satisfecho"></center></td>
                    <td><center><input type="radio" name="Generar" value="regular" ></center></td>
                    <td><center><input type="radio" name="Generar" value="insatisfecho"></center></td>
                    <td><center><input type="radio" name="Generar" value="no la desempeña" ></center></td>
                    </fieldset>
                   </tr>

                   <tr>
                     <th>Identificar posibilidades de negocio en el sector turístico.</th>
                        <fieldset  style="border: none;">
                    <td><center><input   type="radio" name="posibilidades"   value="muy satisfecho" ></center></td>
                       <td><center> <input type="radio" name="posibilidades" value="satisfecho"></center></td>
                       <td><center><input  type="radio" name="posibilidades" value="poco satisfecho"></center></td>
                       <td><center><input type="radio" name="posibilidades" value="regular" ></center></td>
                       <td><center><input  type="radio" name="posibilidades" value="insatisfecho"></center></td>
                        <td><center><input type="radio" name="posibilidades" value="no la desempeña" ></center></td>
                       </fieldset>

                 
                   </tr>


                   <tr>
                     <th>Identificar las tendencias del mercado turístico </th>

                     <fieldset  style="border: none;">
                       <td><center><input   type="radio" name="tendencias"   value="muy satisfecho" ></center></td>
                       <td><center> <input type="radio" name="tendencias" value="satisfecho"></center></td>
                       <td><center><input  type="radio" name="tendencias" value="poco satisfecho"></center></td>
                       <td><center><input type="radio" name="tendencias" value="regular" ></center></td>
                       <td><center><input  type="radio" name="tendencias" value="insatisfecho"></center></td>
                        <td><center><input type="radio" name="tendencias" value="no la desempeña" ></center></td>
                       </fieldset>
                   </tr>

                   <tr>
                     <th>Proponer estrategias de negocio</th>
                       <fieldset  style="border: none;">
                       <td><center><input   type="radio" name="Proponer"   value="muy satisfecho" ></center></td>
                       <td><center> <input type="radio" name="Proponer" value="satisfecho"></center></td>
                       <td><center><input  type="radio" name="Proponer" value="poco satisfecho"></center></td>
                       <td><center><input type="radio" name="Proponer" value="regular" ></center></td>
                       <td><center><input  type="radio" name="Proponer" value="insatisfecho"></center></td>
                        <td><center><input type="radio" name="Proponer" value="no la desempeña" ></center></td>
                       </fieldset>
                    
                   </tr>

                   <tr>
                     <th>Diseñar politicas y Liderazgo de operación y gestión.</th>

                       <fieldset  style="border: none;">
                       <td><center><input   type="radio" name="politicas"   value="muy satisfecho" ></center></td>
                       <td><center> <input type="radio" name="politicas" value="satisfecho"></center></td>
                       <td><center><input  type="radio" name="politicas" value="poco satisfecho"></center></td>
                       <td><center><input type="radio" name="politicas" value="regular" ></center></td>
                       <td><center><input  type="radio" name="politicas" value="insatisfecho"></center></td>
                        <td><center><input type="radio" name="politicas" value="no la desempeña" ></center></td>
                       </fieldset>
                   </tr>

                   <tr>
                     
                     <th>Definir requerimientos de recursos humanos y presupuestales</th>

                        <fieldset  style="border: none;">
                       <td><center><input   type="radio" name="Definir"   value="muy satisfecho" ></center></td>
                       <td><center> <input type="radio" name="Definir" value="satisfecho"></center></td>
                       <td><center><input  type="radio" name="Definir" value="poco satisfecho"></center></td>
                       <td><center><input type="radio" name="Definir" value="regular" ></center></td>
                       <td><center><input  type="radio" name="Definir" value="insatisfecho"></center></td>
                        <td><center><input type="radio" name="Definir" value="no la desempeña" ></center></td>
                       </fieldset>

                    
                   </tr>

                   <tr>
                     <th>Determinar la estructura organizacional de la empresa turística.</th>

                        <fieldset  style="border: none;">
                       <td><center><input   type="radio" name="Determinar"   value="muy satisfecho" ></center></td>
                       <td><center> <input type="radio" name="Determinar" value="satisfecho"></center></td>
                       <td><center><input  type="radio" name="Determinar" value="poco satisfecho"></center></td>
                       <td><center><input type="radio" name="Determinar" value="regular" ></center></td>
                       <td><center><input  type="radio" name="Determinar" value="insatisfecho"></center></td>
                        <td><center><input type="radio" name="Determinar" value="no la desempeña" ></center></td>
                       </fieldset>
                   </tr>

                   <tr>
                     <th>Verificar resultados financieros para la toma de decisiones.</th>
                      
                       <fieldset  style="border: none;">
                       <td><center><input   type="radio" name="Verificar"   value="muy satisfecho" ></center></td>
                       <td><center> <input type="radio" name="Verificar" value="satisfecho"></center></td>
                       <td><center><input  type="radio" name="Verificar" value="poco satisfecho"></center></td>
                       <td><center><input type="radio" name="Verificar" value="regular" ></center></td>
                       <td><center><input  type="radio" name="Verificar" value="insatisfecho"></center></td>
                        <td><center><input type="radio" name="Verificar" value="no la desempeña" ></center></td>
                       </fieldset>
                   </tr>

                   <tr>
                     <th>Asignar los recursos de la empresa estableciendo prioridades.</th>

                      <fieldset  style="border: none;">
                       <td><center><input   type="radio" name="Asignar"   value="muy satisfecho" ></center></td>
                       <td><center> <input type="radio" name="Asignar" value="satisfecho"></center></td>
                       <td><center><input  type="radio" name="Asignar" value="poco satisfecho"></center></td>
                       <td><center><input type="radio" name="Asignar" value="regular" ></center></td>
                       <td><center><input  type="radio" name="Asignar" value="insatisfecho"></center></td>
                        <td><center><input type="radio" name="Asignar" value="no la desempeña" ></center></td>
                       </fieldset>
                   </tr>

                   <tr>
                     <th>Determinar el segmento del mercado.</th>

                       <fieldset  style="border: none;">
                       <td><center><input   type="radio" name="segmento"   value="muy satisfecho" ></center></td>
                       <td><center> <input type="radio" name="segmento" value="satisfecho"></center></td>
                       <td><center><input  type="radio" name="segmento" value="poco satisfecho"></center></td>
                       <td><center><input type="radio" name="segmento" value="regular" ></center></td>
                       <td><center><input  type="radio" name="segmento" value="insatisfecho"></center></td>
                        <td><center><input type="radio" name="segmento" value="no la desempeña" ></center></td>
                       </fieldset>
                   </tr>

                   <tr>
                     <th>Elaborar estudios cuantitativos y cualitativos.</th>
                      
                        <fieldset  style="border: none;">
                       <td><center><input   type="radio" name="Elaborar"   value="muy satisfecho" ></center></td>
                       <td><center> <input type="radio" name="Elaborar" value="satisfecho"></center></td>
                       <td><center><input  type="radio" name="Elaborar" value="poco satisfecho"></center></td>
                       <td><center><input type="radio" name="Elaborar" value="regular" ></center></td>
                       <td><center><input  type="radio" name="Elaborar" value="insatisfecho"></center></td>
                        <td><center><input type="radio" name="Elaborar" value="no la desempeña" ></center></td>
                       </fieldset>

                   <tr>
                     <th>Determinar oportunidades de mercado para el producto o servicio turístico.</th>

                        <fieldset  style="border: none;">
                       <td><center><input   type="radio" name="mercado"   value="muy satisfecho" ></center></td>
                       <td><center> <input type="radio" name="mercado" value="satisfecho"></center></td>
                       <td><center><input  type="radio" name="mercado" value="poco satisfecho"></center></td>
                       <td><center><input type="radio" name="mercado" value="regular" ></center></td>
                       <td><center><input  type="radio" name="mercado" value="insatisfecho"></center></td>
                        <td><center><input type="radio" name="mercado" value="no la desempeña" ></center></td>
                       </fieldset>
                   </tr>

                   <tr>
                     <th>Establecer estrategias de precio, plaza, promoción y venta de productos o servicios turísticos.</th>

                        <fieldset  style="border: none;">
                       <td><center><input   type="radio" name="Establecer"   value="muy satisfecho" ></center></td>
                       <td><center> <input type="radio" name="Establecer" value="satisfecho"></center></td>
                       <td><center><input  type="radio" name="Establecer" value="poco satisfecho"></center></td>
                       <td><center><input type="radio" name="Establecer" value="regular" ></center></td>
                       <td><center><input  type="radio" name="Establecer" value="insatisfecho"></center></td>
                      <td><center><input type="radio" name="Establecer" value="no la desempeña" ></center></td>
                       </fieldset>
                   </tr>


                   <tr>
                     <th>Manejo de programas informáticos.</th>
                     
                        <fieldset  style="border: none;">
                       <td><center><input   type="radio" name="programas"   value="muy satisfecho" ></center></td>
                       <td><center> <input type="radio" name="programas" value="satisfecho"></center></td>
                       <td><center><input  type="radio" name="programas" value="poco satisfecho"></center></td>
                       <td><center><input type="radio" name="programas" value="regular" ></center></td>
                       <td><center><input  type="radio" name="programas" value="insatisfecho"></center></td>
                        <td><center><input type="radio" name="programas" value="no la desempeña" ></center></td>
                       </fieldset>
                   </tr>

                   <tr>
                     <th>Dominio de lenguas extranjeras (Ingles).</th>

                        <fieldset  style="border: none;">
                       <td><center><input   type="radio" name="Dominio"   value="muy satisfecho" ></center></td>
                       <td><center> <input type="radio" name="Dominio" value="satisfecho"></center></td>
                       <td><center><input  type="radio" name="Dominio" value="poco satisfecho"></center></td>
                       <td><center><input type="radio" name="Dominio" value="regular" ></center></td>
                       <td><center><input  type="radio" name="Dominio" value="insatisfecho"></center></td>
                        <td><center><input type="radio" name="Dominio" value="no la desempeña" ></center></td>
                       </fieldset>
                   </tr>
               </tbody>
             </table>

<!----------------------------segunda tabla------------------->
        <p>Indica ¿Cómo te sientes con respecto a las siguientes actitudes obtenidas durante la Licenciatura en efectiva?</p>
       
       <table class="table table-striped table-bordered" style="width:64%; margin:2% auto;" >
       <thead>
           <tr>
               <th>Competencias profesionales</th>
              <th>Muy Satisfecho  </th>
              <th>Satisfecho</th>
              <th>Poco Satisfecho</th>
              <th>Regular</th>
              <th>Insatisfecho</th>
              <th>No la desempeña</th>
           </tr>
         </thead>
         <tbody>

            <tr>
              <th>Autonomia</th>

                      <fieldset  style="border: none;">
                       <td><center><input   type="radio" name="Autonomia"   value="muy satisfecho" ></center></td>
                       <td><center> <input type="radio" name="Autonomia" value="satisfecho"></center></td>
                       <td><center><input  type="radio" name="Autonomia" value="poco satisfecho"></center></td>
                       <td><center><input type="radio" name="Autonomia" value="regular" ></center></td>
                       <td><center><input  type="radio" name="Autonomia" value="insatisfecho"></center></td>
                        <td><center><input type="radio" name="Autonomia" value="no la desempeña" ></center></td>
                       </fieldset>

            
            </tr>

            <tr>
              <th>Autoaprendizaje</th>

                       <fieldset  style="border: none;">
                       <td><center><input   type="radio" name="Autoaprendizaje"   value="muy satisfecho" ></center></td>
                       <td><center> <input type="radio" name="Autoaprendizaje" value="satisfecho"></center></td>
                       <td><center><input  type="radio" name="Autoaprendizaje" value="poco satisfecho"></center></td>
                       <td><center><input type="radio" name="Autoaprendizaje" value="regular" ></center></td>
                       <td><center><input  type="radio" name="Autoaprendizaje" value="insatisfecho"></center></td>
                        <td><center><input type="radio" name="Autoaprendizaje" value="no la desempeña" ></center></td>
                       </fieldset>

            </tr>

            <tr>
              <th>Ciudadanía</th>

                       <fieldset  style="border: none;">
                       <td><center><input   type="radio" name="Ciudadania"   value="muy satisfecho" ></center></td>
                       <td><center> <input type="radio" name="Ciudadania" value="satisfecho"></center></td>
                       <td><center><input  type="radio" name="Ciudadania" value="poco satisfecho"></center></td>
                       <td><center><input type="radio" name="Ciudadania" value="regular" ></center></td>
                       <td><center><input  type="radio" name="Ciudadania" value="insatisfecho"></center></td>
                        <td><center><input type="radio" name="Ciudadania" value="no la desempeña" ></center></td>
                       </fieldset>
            </tr>

            <tr>
              <th>Disposición a la cultura</th>
                       <fieldset  style="border: none;">
                       <td><center><input   type="radio" name="cultura"   value="muy satisfecho" ></center></td>
                       <td><center> <input type="radio" name="cultura" value="satisfecho"></center></td>
                       <td><center><input  type="radio" name="cultura" value="poco satisfecho"></center></td>
                       <td><center><input type="radio" name="cultura" value="regular" ></center></td>
                       <td><center><input  type="radio" name="cultura" value="insatisfecho"></center></td>
                        <td><center><input type="radio" name="cultura" value="no la desempeña" ></center></td>
                       </fieldset>  
            </tr>

            <tr>
              <th>Trabajo en equipo</th>

                       <fieldset  style="border: none;">
                       <td><center><input   type="radio" name="equipo"   value="muy satisfecho" ></center></td>
                       <td><center> <input type="radio" name="equipo" value="satisfecho"></center></td>
                       <td><center><input  type="radio" name="equipo" value="poco satisfecho"></center></td>
                       <td><center><input type="radio" name="equipo" value="regular" ></center></td>
                       <td><center><input  type="radio" name="equipo" value="insatisfecho"></center></td>
                        <td><center><input type="radio" name="equipo" value="no la desempeña" ></center></td>
                       </fieldset>
            </tr>

            <tr>
              <th>Liderazgo</th>

                       <fieldset  style="border: none;">
                       <td><center><input   type="radio" name="Liderazgo"   value="muy satisfecho" ></center></td>
                       <td><center> <input type="radio" name="Liderazgo" value="satisfecho"></center></td>
                       <td><center><input  type="radio" name="Liderazgo" value="poco satisfecho"></center></td>
                       <td><center><input type="radio" name="Liderazgo" value="regular" ></center></td>
                       <td><center><input  type="radio" name="Liderazgo" value="insatisfecho"></center></td>
                        <td><center><input type="radio" name="Liderazgo" value="no la desempeña" ></center></td>
                       </fieldset>
            </tr>

            <tr>
              <th>Eficiencia personal</th>
            <fieldset  style="border: none;">
                       <td><center><input   type="radio" name="Eficiencia"   value="muy satisfecho" ></center></td>
                       <td><center> <input type="radio" name="Eficiencia" value="satisfecho"></center></td>
                       <td><center><input  type="radio" name="Eficiencia" value="poco satisfecho"></center></td>
                       <td><center><input type="radio" name="Eficiencia" value="regular" ></center></td>
                       <td><center><input  type="radio" name="Eficiencia" value="insatisfecho"></center></td>
                        <td><center><input type="radio" name="Eficiencia" value="no la desempeña" ></center></td>
                       </fieldset>
            </tr>

            <tr>
              <th>Imagen personal</th>
                      <fieldset  style="border: none;">
                       <td><center><input   type="radio" name="Imagen"   value="muy satisfecho" ></center></td>
                       <td><center> <input type="radio" name="Imagen" value="satisfecho"></center></td>
                       <td><center><input  type="radio" name="Imagen" value="poco satisfecho"></center></td>
                       <td><center><input type="radio" name="Imagen" value="regular" ></center></td>
                       <td><center><input  type="radio" name="Imagen" value="insatisfecho"></center></td>
                        <td><center><input type="radio" name="Imagen" value="no la desempeña" ></center></td>
                       </fieldset>
            </tr>

            <tr>
              <th>Calidad en el trabajo</th>

              <fieldset  style="border: none;">
                       <td><center><input   type="radio" name="Calidad"   value="muy satisfecho" ></center></td>
                       <td><center> <input type="radio" name="Calidad" value="satisfecho"></center></td>
                       <td><center><input  type="radio" name="Calidad" value="poco satisfecho"></center></td>
                       <td><center><input type="radio" name="Calidad" value="regular" ></center></td>
                       <td><center><input  type="radio" name="Calidad" value="insatisfecho"></center></td>
                        <td><center><input type="radio" name="Calidad" value="no la desempeña" ></center></td>
                       </fieldset>
            </tr>

            <tr>
              <th>Atención al cliente</th>
                      <fieldset  style="border: none;">
                       <td><center><input   type="radio" name="cliente"   value="muy satisfecho" ></center></td>
                       <td><center> <input type="radio" name="cliente" value="satisfecho"></center></td>
                       <td><center><input  type="radio" name="cliente" value="poco satisfecho"></center></td>
                       <td><center><input type="radio" name="cliente" value="regular" ></center></td>
                       <td><center><input  type="radio" name="cliente" value="insatisfecho"></center></td>
                        <td><center><input type="radio" name="cliente" value="no la desempeña" ></center></td>
                       </fieldset>
            </tr>

            <tr>
              <th>Negociación</th>

                     <fieldset  style="border: none;">
                       <td><center><input   type="radio" name="Negociacion"   value="muy satisfecho" ></center></td>
                       <td><center> <input type="radio" name="Negociacion" value="satisfecho"></center></td>
                       <td><center><input  type="radio" name="Negociacion" value="poco satisfecho"></center></td>
                       <td><center><input type="radio" name="Negociacion" value="regular" ></center></td>
                       <td><center><input  type="radio" name="Negociacion" value="insatisfecho"></center></td>
                        <td><center><input type="radio" name="Negociacion" value="no la desempeña" ></center></td>
                       </fieldset>
            </tr>
         </tbody>
       </table>

 <!----------------------------tercera tabla------------------------------------------------>

 <p>Indica ¿Cómo te sientes con respecto a los siguientes valores obtenidos durante la Licenciatura en efectiva?</p>

       <table class="table table-striped table-bordered" style="width:64%; margin:2% auto;" >
           <thead>
           <tr>
              <th>Competencias profesionales</th>
              <th>Muy Satisfecho  </th>
              <th>Satisfecho</th>
              <th>Poco Satisfecho</th>
              <th>Regular</th>
              <th>Insatisfecho</th>
              <th>No la desempeña</th>
            </tr>
           </thead>
           <tbody>

            <tr>
              <th>Compromiso social</th>

           <fieldset  style="border: none;">
                       <td><center><input   type="radio" name="Compromiso"   value="muy satisfecho" ></center></td>
                       <td><center> <input type="radio" name="Compromiso" value="satisfecho"></center></td>
                       <td><center><input  type="radio" name="Compromiso" value="poco satisfecho"></center></td>
                       <td><center><input type="radio" name="Compromiso" value="regular" ></center></td>
                       <td><center><input  type="radio" name="Compromiso" value="insatisfecho"></center></td>
                        <td><center><input type="radio" name="Compromiso" value="no la desempeña" ></center></td>
                       </fieldset>
            </tr>

            <tr>
              <th>Integridad</th>

                  <fieldset  style="border: none;">
                       <td><center><input   type="radio" name="Integridad"   value="muy satisfecho" ></center></td>
                       <td><center> <input type="radio" name="Integridad" value="satisfecho"></center></td>
                       <td><center><input  type="radio" name="Integridad" value="poco satisfecho"></center></td>
                       <td><center><input type="radio" name="Integridad" value="regular" ></center></td>
                       <td><center><input  type="radio" name="Integridad" value="insatisfecho"></center></td>
                        <td><center><input type="radio" name="Integridad" value="no la desempeña" ></center></td>
                       </fieldset>
            </tr>

            <tr>
              <th>Ética</th>

        <fieldset  style="border: none;">
                       <td><center><input   type="radio" name="Etica"   value="muy satisfecho" ></center></td>
                       <td><center> <input type="radio" name="Etica" value="satisfecho"></center></td>
                       <td><center><input  type="radio" name="Etica" value="poco satisfecho"></center></td>
                       <td><center><input type="radio" name="Etica" value="regular" ></center></td>
                       <td><center><input  type="radio" name="Etica" value="insatisfecho"></center></td>
                        <td><center><input type="radio" name="Etica" value="no la desempeña" ></center></td>
                       </fieldset>

            </tr>

             <tr>
               <th>El respeto a la diversidad cultural, étnica y religiosa</th>
                     
                     <fieldset  style="border: none;">
                       <td><center><input   type="radio" name="Respecto"   value="muy satisfecho" ></center></td>
                       <td><center> <input type="radio" name="Respecto" value="satisfecho"></center></td>
                       <td><center><input  type="radio" name="Respecto" value="poco satisfecho"></center></td>
                       <td><center><input type="radio" name="Respecto" value="regular" ></center></td>
                       <td><center><input  type="radio" name="Respecto" value="insatisfecho"></center></td>
                        <td><center><input type="radio" name="Respecto" value="no la desempeña" ></center></td>
                       </fieldset>
            
                         </tr>

             <tr>
               <th>Bien común</th>
            <fieldset  style="border: none;">
                       <td><center><input   type="radio" name="bien"   value="muy satisfecho" ></center></td>
                       <td><center> <input type="radio" name="bien" value="satisfecho"></center></td>
                       <td><center><input  type="radio" name="bien" value="poco satisfecho"></center></td>
                       <td><center><input type="radio" name="bien" value="regular" ></center></td>
                       <td><center><input  type="radio" name="bien" value="insatisfecho"></center></td>
                        <td><center><input type="radio" name="bien" value="no la desempeña" ></center></td>
                       </fieldset>
             </tr>

             <tr>
               <th>Cuidado y conciencia ambiental</th>

           <fieldset  style="border: none;">
                       <td><center><input   type="radio" name="cuidado"   value="muy satisfecho" ></center></td>
                       <td><center> <input type="radio" name="cuidado" value="satisfecho"></center></td>
                       <td><center><input  type="radio" name="cuidado" value="poco satisfecho"></center></td>
                       <td><center><input type="radio" name="cuidado" value="regular" ></center></td>
                       <td><center><input  type="radio" name="cuidado" value="insatisfecho"></center></td>
                        <td><center><input type="radio" name="cuidado" value="no la desempeña" ></center></td>
                       </fieldset>             </tr>

             <tr>
               <th>Disposición de servicio</th>

            <fieldset  style="border: none;">
                       <td><center><input   type="radio" name="servicio"   value="muy satisfecho" ></center></td>
                       <td><center> <input type="radio" name="servicio" value="satisfecho"></center></td>
                       <td><center><input  type="radio" name="servicio" value="poco satisfecho"></center></td>
                       <td><center><input type="radio" name="servicio" value="regular" ></center></td>
                       <td><center><input  type="radio" name="servicio" value="insatisfecho"></center></td>
                        <td><center><input type="radio" name="servicio" value="no la desempeña" ></center></td>
                       </fieldset>
             </tr>

             <tr>
               <th>Colaboración</th>

            <fieldset  style="border: none;">
                       <td><center><input   type="radio" name="colaboracion"   value="muy satisfecho" ></center></td>
                       <td><center> <input type="radio" name="colaboracion" value="satisfecho"></center></td>
                       <td><center><input  type="radio" name="colaboracion" value="poco satisfecho"></center></td>
                       <td><center><input type="radio" name="colaboracion" value="regular" ></center></td>
                       <td><center><input  type="radio" name="colaboracion" value="insatisfecho"></center></td>
                        <td><center><input type="radio" name="colaboracion" value="no la desempeña" ></center></td>
                       </fieldset>
             </tr>

             <tr>
               <th>Honestidad</th>

            <fieldset  style="border: none;">
                       <td><center><input   type="radio" name="honestidad"   value="muy satisfecho" ></center></td>
                       <td><center> <input type="radio" name="honestidad" value="satisfecho"></center></td>
                       <td><center><input  type="radio" name="honestidad" value="poco satisfecho"></center></td>
                       <td><center><input type="radio" name="honestidad" value="regular" ></center></td>
                       <td><center><input  type="radio" name="honestidad" value="insatisfecho"></center></td>
                        <td><center><input type="radio" name="honestidad" value="no la desempeña" ></center></td>
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