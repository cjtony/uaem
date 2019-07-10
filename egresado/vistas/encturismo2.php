<div class="content-wrapper">        
        
  <section class="content">
    
    <div class="row">
      
      <div class="col-md-12">
        
        <div class="box">
          
          <!--Encabezado de licenciaturas-->
          <div class="box-header with-border">
          
            <h1 class="box-title">
              
              <i class="fa fa-arrow"></i>

           Nivel de satisfacción de los egresados con respecto a las competencias, funciones y tareas profesionales de los egresados adquiridas durante la Licenciatura en Turismo.
            </h1>

            <div class="box-tools pull-right">

            </div>

          </div>
          
          <?php $idegresado = $_SESSION["id"];?>    

          <div class="panel-body">
            
         <form method="POST" action="vturisdos.php" class="form-horizontal form-encuesta1">


       <input type="hidden" name="idegresado" value="<?php echo $idegresado;?>">
             
            <br>

            <p >Indica ¿Cómo te sientes con respecto al desempeño de las siguientes competencias profesionales adquiridas durante la Licenciatura en Turismo?</p>


       <div class="table-responsive">
          <table class="table  table-striped table-bordered" style="width:64%; margin:2% auto;" >
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
                   <th>Análisis del turismo, sus desafíos y temas emergentes a partir de los diversos enfoques y perspectivas teórico-metodológicas.</th>

                       <fieldset  style="border: none;">
                       <td><center><input   type="radio" name="turismo"   value="muy satisfecho" ></center></td>
                       <td><center> <input type="radio" name="turismo" value="satisfecho"></center></td>
                       <td><center><input  type="radio" name="turismo" value="poco satisfecho"></center></td>
                       <td><center><input type="radio" name="turismo" value="regular" ></center></td>
                       <td><center><input  type="radio" name="turismo" value="insatisfecho"></center></td>
                        <td><center><input type="radio" name="turismo" value="no la desempeña" ></center></td>
                       </fieldset>
                    </tr>

                    <tr>
                      <th>Diseño, instrumentación y evaluación de iniciativas sustentables y competitivas acordes con la política turística y el marco normativo.</th>

                       <fieldset  style="border: none;">
                       <td><center><input   type="radio" name="Diseno"   value="muy satisfecho" ></center></td>
                       <td><center> <input type="radio" name="Diseno" value="satisfecho"></center></td>
                       <td><center><input  type="radio" name="Diseno" value="poco satisfecho"></center></td>
                       <td><center><input type="radio" name="Diseno" value="regular" ></center></td>
                       <td><center><input  type="radio" name="Diseno" value="insatisfecho"></center></td>
                        <td><center><input type="radio" name="Diseno" value="no la desempeña" ></center></td>
                       </fieldset>
                    </tr>

                    <tr>
                      <th>Gestión competitiva y sustentable  de organizaciones y destinos turísticos.</th>
                                             <fieldset  style="border: none;">
                       <td><center><input   type="radio" name="competitiva"   value="muy satisfecho" ></center></td>
                       <td><center> <input type="radio" name="competitiva" value="satisfecho"></center></td>
                       <td><center><input  type="radio" name="competitiva" value="poco satisfecho"></center></td>
                       <td><center><input type="radio" name="competitiva" value="regular" ></center></td>
                       <td><center><input  type="radio" name="competitiva" value="insatisfecho"></center></td>
                        <td><center><input type="radio" name="competitiva" value="no la desempeña" ></center></td>
                       </fieldset>
                    </tr>

                    <tr>
                      <th>Innovación de  productos, procedimientos y servicios en las organizaciones relacionadas con el turismo en los sectores público, privado y social.</th>

                       <fieldset  style="border: none;">
                       <td><center><input   type="radio" name="productos"   value="muy satisfecho" ></center></td>
                       <td><center> <input type="radio" name="productos" value="satisfecho"></center></td>
                       <td><center><input  type="radio" name="productos" value="poco satisfecho"></center></td>
                       <td><center><input type="radio" name="productos" value="regular" ></center></td>
                       <td><center><input  type="radio" name="productos" value="insatisfecho"></center></td>
                        <td><center><input type="radio" name="productos" value="no la desempeña" ></center></td>
                       </fieldset>
                    </tr>

                    <tr>
                    <th>Gestión del patrimonio pregn1 y cultural bajo los principios de la sustentabilidad y responsabilidad social.</th>

                       <fieldset  style="border: none;">
                       <td><center><input   type="radio" name="patrimonio"   value="muy satisfecho" ></center></td>
                       <td><center> <input type="radio" name="patrimonio" value="satisfecho"></center></td>
                       <td><center><input  type="radio" name="patrimonio" value="poco satisfecho"></center></td>
                       <td><center><input type="radio" name="patrimonio" value="regular" ></center></td>
                       <td><center><input  type="radio" name="patrimonio" value="insatisfecho"></center></td>
                        <td><center><input type="radio" name="patrimonio" value="no la desempeña" ></center></td>
                       </fieldset>
                    </tr>

                    <tr>
                      <th>Desarrollo de estudios socioeconómicos y culturales sobre los visitantes y comunidades receptoras que permiten valorar los impactos del turismo, a fin de formular nuevas estrategias de aprovechamiento turístico.</th>
                       
                       <fieldset  style="border: none;">
                       <td><center><input   type="radio" name="Desarrollo"   value="muy satisfecho" ></center></td>
                       <td><center> <input type="radio" name="Desarrollo" value="satisfecho"></center></td>
                       <td><center><input  type="radio" name="Desarrollo" value="poco satisfecho"></center></td>
                       <td><center><input type="radio" name="Desarrollo" value="regular" ></center></td>
                       <td><center><input  type="radio" name="Desarrollo" value="insatisfecho"></center></td>
                       <td><center><input type="radio" name="Desarrollo" value="no la desempeña" ></center></td>
                       </fieldset>
                    </tr>
             </tbody>
             </table>

             <!---------segunda tabla------->

             <p class="text-center"> Indica ¿Cómo te sientes con respecto al desempeño de las siguientes competencias profesionales adquiridas durante la Licenciatura en Turismo?</p>

             <table class="table  table-striped table-bordered" style="width:64%; margin:2% auto;" >
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
                  <th>Análisis del turismo, sus desafíos y temas emergentes a partir de los diversos enfoques y perspectivas teórico-metodológicas.</th>

                     <fieldset  style="border: none;">
                       <td><center><input   type="radio" name="temas"   value="muy satisfecho" ></center></td>
                       <td><center> <input type="radio" name="temas" value="satisfecho"></center></td>
                       <td><center><input  type="radio" name="temas" value="poco satisfecho"></center></td>
                       <td><center><input type="radio" name="temas" value="regular" ></center></td>
                       <td><center><input  type="radio" name="temas" value="insatisfecho"></center></td>
                        <td><center><input type="radio" name="temas" value="no la desempeña" ></center></td>
                       </fieldset>
                </tr>

                <tr>
                  <th>Diseño, instrumentación y evaluación de iniciativas sustentables y competitivas acordes con la política turística y el marco normativo.</th>

                     <fieldset  style="border: none;">
                       <td><center><input   type="radio" name="evaluacion"   value="muy satisfecho" ></center></td>
                       <td><center> <input type="radio" name="evaluacion" value="satisfecho"></center></td>
                       <td><center><input  type="radio" name="evaluacion" value="poco satisfecho"></center></td>
                       <td><center><input type="radio" name="evaluacion" value="regular" ></center></td>
                       <td><center><input  type="radio" name="evaluacion" value="insatisfecho"></center></td>
                        <td><center><input type="radio" name="evaluacion" value="no la desempeña" ></center></td>
                       </fieldset>
                </tr>

                <tr>
                  <th>Gestión competitiva y sustentable  de organizaciones y destinos turísticos.</th>

                     <fieldset  style="border: none;">
                       <td><center><input   type="radio" name="sustentable"   value="muy satisfecho" ></center></td>
                       <td><center> <input type="radio" name="sustentable" value="satisfecho"></center></td>
                       <td><center><input  type="radio" name="sustentable" value="poco satisfecho"></center></td>
                       <td><center><input type="radio" name="sustentable" value="regular" ></center></td>
                       <td><center><input  type="radio" name="sustentable" value="insatisfecho"></center></td>
                       <td><center><input type="radio" name="sustentable" value="no la desempeña" ></center></td>
                       </fieldset>
                </tr>

                <tr>
                  <th>Innovación de  productos, procedimientos y servicios en las organizaciones relacionadas con el turismo en los sectores público, privado y social.</th>

                     <fieldset  style="border: none;">
                       <td><center><input   type="radio" name="procedimientos"   value="muy satisfecho" ></center></td>
                       <td><center> <input type="radio" name="procedimientos" value="satisfecho"></center></td>
                       <td><center><input  type="radio" name="procedimientos" value="poco satisfecho"></center></td>
                       <td><center><input type="radio" name="procedimientos" value="regular" ></center></td>
                       <td><center><input  type="radio" name="procedimientos" value="insatisfecho"></center></td>
                        <td><center><input type="radio" name="procedimientos" value="no la desempeña" ></center></td>
                       </fieldset>
                </tr>

                <tr>
                  <th>Gestión del patrimonio pregn1 y cultural bajo los principios de la sustentabilidad y responsabilidad social.</th>

                     <fieldset  style="border: none;">
                       <td><center><input   type="radio" name="pregn1"   value="muy satisfecho" ></center></td>
                       <td><center> <input type="radio" name="pregn1" value="satisfecho"></center></td>
                       <td><center><input  type="radio" name="pregn1" value="poco satisfecho"></center></td>
                       <td><center><input type="radio" name="pregn1" value="regular" ></center></td>
                       <td><center><input  type="radio" name="pregn1" value="insatisfecho"></center></td>
                        <td><center><input type="radio" name="pregn1" value="no la desempeña" ></center></td>
                       </fieldset>
                </tr>

                <tr>
                  <th>Desarrollo de estudios socioeconómicos y culturales sobre los visitantes y comunidades receptoras que permiten valorar los impactos del turismo, a fin de formular nuevas estrategias de aprovechamiento turístico.</th>

                     <fieldset  style="border: none;">
                       <td><center><input   type="radio" name="resp2"   value="muy satisfecho" ></center></td>
                       <td><center> <input type="radio" name="resp2" value="satisfecho"></center></td>
                       <td><center><input  type="radio" name="resp2" value="poco satisfecho"></center></td>
                       <td><center><input type="radio" name="resp2" value="regular" ></center></td>
                       <td><center><input  type="radio" name="resp2" value="insatisfecho"></center></td>
                        <td><center><input type="radio" name="resp2" value="no la desempeña" ></center></td>
                       </fieldset>
                </tr>
              </tbody>
          </table>

          <!------------tercer tabla------------------------------->
          <p class="text-center">Indica ¿Cómo te sientes con respecto al desempeño de las siguientes funciones y tareas profesionales adquiridas durante la Licenciatura en Turismo?</p>

          <table class="table  table-striped table-bordered" style="width:64%; margin:2% auto;" >
            <thead>
             <tr>
              <th>Funciones y tareas profesionales</th>
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
                  <th>Comprensión de los resp2, temas emergentes y las tendencias que enfrenta el turismo, el tiempo libre y la recreación.</th>

                     <fieldset  style="border: none;">
                       <td><center><input   type="radio" name="pregun2"   value="muy satisfecho" ></center></td>
                       <td><center> <input type="radio" name="pregun2" value="satisfecho"></center></td>
                       <td><center><input  type="radio" name="pregun2" value="poco satisfecho"></center></td>
                       <td><center><input type="radio" name="pregun2" value="regular" ></center></td>
                       <td><center><input  type="radio" name="pregun2" value="insatisfecho"></center></td>
                        <td><center><input type="radio" name="pregun2" value="no la desempeña" ></center></td>
                       </fieldset>
                </tr>

                <tr>
                  <th>Desarrollo de habilidades de investigación que le permitan explicar el turismo desde diferentes perspectivas teórico metodológicas.</th>

                     <fieldset  style="border: none;">
                       <td><center><input   type="radio" name="habilidades2"   value="muy satisfecho" ></center></td>
                       <td><center> <input type="radio" name="habilidades2" value="satisfecho"></center></td>
                       <td><center><input  type="radio" name="habilidades2" value="poco satisfecho"></center></td>
                       <td><center><input type="radio" name="habilidades2" value="regular" ></center></td>
                       <td><center><input  type="radio" name="habilidades2" value="insatisfecho"></center></td>
                        <td><center><input type="radio" name="habilidades2" value="no la desempeña" ></center></td>
                       </fieldset>
                </tr>

                <tr>
                  <th>Análisis de las características socioeconómicas y culturales de los visitantes, nuevos segmentos de mercado y las comunidades receptoras.</th>

                     <fieldset  style="border: none;">
                       <td><center><input   type="radio" name="caracteristicas2"   value="muy satisfecho" ></center></td>
                       <td><center> <input type="radio" name="caracteristicas2" value="satisfecho"></center></td>
                       <td><center><input  type="radio" name="caracteristicas2" value="poco satisfecho"></center></td>
                       <td><center><input type="radio" name="caracteristicas2" value="regular" ></center></td>
                       <td><center><input  type="radio" name="caracteristicas2" value="insatisfecho"></center></td>
                        <td><center><input type="radio" name="caracteristicas2" value="no la desempeña" ></center></td>
                       </fieldset>
                </tr>

                <tr>
                  <th>Análisis de los factores macroeconómicos y sociales que inciden en las corrientes turísticas y la tendencia a viajar.</th>

                       <fieldset  style="border: none;">
                       <td><center><input   type="radio" name="factores2"   value="muy satisfecho" ></center></td>
                       <td><center> <input type="radio" name="factores2" value="satisfecho"></center></td>
                       <td><center><input  type="radio" name="factores2" value="poco satisfecho"></center></td>
                       <td><center><input type="radio" name="factores2" value="regular" ></center></td>
                       <td><center><input  type="radio" name="factores2" value="insatisfecho"></center></td>
                        <td><center><input type="radio" name="factores2" value="no la desempeña" ></center></td>
                       </fieldset>
                </tr>

                <tr>
                  <th>Desarrollo de  estudios de los impactos que el turismo origina en las comunidades donde se genera.</th>

                     <fieldset  style="border: none;">
                       <td><center><input   type="radio" name="estudios2"   value="muy satisfecho" ></center></td>
                       <td><center> <input type="radio" name="estudios2" value="satisfecho"></center></td>
                       <td><center><input  type="radio" name="estudios2" value="poco satisfecho"></center></td>
                       <td><center><input type="radio" name="estudios2" value="regular" ></center></td>
                       <td><center><input  type="radio" name="estudios2" value="insatisfecho"></center></td>
                        <td><center><input type="radio" name="estudios2" value="no la desempeña" ></center></td>
                       </fieldset>
                </tr>

                <tr>
                  <th>Desarrollo de estudios de uso del tiempo libre a fin de definir estrategias de aprovechamiento atendiendo las características de los diferentes grupos sociales.</th>

                     <fieldset  style="border: none;">
                       <td><center><input   type="radio" name="uso2"   value="muy satisfecho" ></center></td>
                       <td><center> <input type="radio" name="uso2" value="satisfecho"></center></td>
                       <td><center><input  type="radio" name="uso2" value="poco satisfecho"></center></td>
                       <td><center><input type="radio" name="uso2" value="regular" ></center></td>
                       <td><center><input  type="radio" name="uso2" value="insatisfecho"></center></td>
                        <td><center><input type="radio" name="uso2" value="no la desempeña" ></center></td>
                       </fieldset>
                </tr>

                <tr>
                  <th>Elaboración de diagnósticos turísticos que permiten la acertada toma de decisiones.</th>
                     <fieldset  style="border: none;">
                       <td><center><input   type="radio" name="permiten"   value="muy satisfecho" ></center></td>
                       <td><center> <input type="radio" name="permiten" value="satisfecho"></center></td>
                       <td><center><input  type="radio" name="permiten" value="poco satisfecho"></center></td>
                       <td><center><input type="radio" name="permiten" value="regular" ></center></td>
                       <td><center><input  type="radio" name="permiten" value="insatisfecho"></center></td>
                        <td><center><input type="radio" name="permiten" value="no la desempeña" ></center></td>
                       </fieldset>
                </tr>

                <tr>
                  <th>Formulación y gestión de planes, programas y proyectos turísticos sustentables y competitivos.</th>

                     <fieldset  style="border: none;">
                       <td><center><input   type="radio" name="planes"   value="muy satisfecho" ></center></td>
                       <td><center> <input type="radio" name="planes" value="satisfecho"></center></td>
                       <td><center><input  type="radio" name="planes" value="poco satisfecho"></center></td>
                       <td><center><input type="radio" name="planes" value="regular" ></center></td>
                       <td><center><input  type="radio" name="planes" value="insatisfecho"></center></td>
                        <td><center><input type="radio" name="planes" value="no la desempeña" ></center></td>
                       </fieldset>
                </tr>

                <tr>
                  <th>Gestión de organizaciones y destinos turísticos tendientes a la sustentabilidad y competitividad.</th>

                     <fieldset  style="border: none;">
                       <td><center><input   type="radio" name="organizaciones"   value="muy satisfecho" ></center></td>
                       <td><center> <input type="radio" name="organizaciones" value="satisfecho"></center></td>
                       <td><center><input  type="radio" name="organizaciones" value="poco satisfecho"></center></td>
                       <td><center><input type="radio" name="organizaciones" value="regular" ></center></td>
                       <td><center><input  type="radio" name="organizaciones" value="insatisfecho"></center></td>
                        <td><center><input type="radio" name="organizaciones" value="no la desempeña" ></center></td>
                       </fieldset>
                </tr>

                <tr>
                  <th>Diseño y aplicación de  estrategias de planificación orientados a la creación de productos sustentables y competitivos.</th>
                     <fieldset  style="border: none;">
                       <td><center><input   type="radio" name="estrategias"   value="muy satisfecho" ></center></td>
                       <td><center> <input type="radio" name="estrategias" value="satisfecho"></center></td>
                       <td><center><input  type="radio" name="estrategias" value="poco satisfecho"></center></td>
                       <td><center><input type="radio" name="estrategias" value="regular" ></center></td>
                       <td><center><input  type="radio" name="estrategias" value="insatisfecho"></center></td>
                        <td><center><input type="radio" name="estrategias" value="no la desempeña" ></center></td>
                       </fieldset>
                </tr>

                <tr>
                  <th>Formulación de estrategias competitivas de desarrollo sustentable que inciden en su entorno local, regional, nacional e internacional.</th>

                     <fieldset  style="border: none;">
                       <td><center><input   type="radio" name="competitivas"   value="muy satisfecho" ></center></td>
                       <td><center> <input type="radio" name="competitivas" value="satisfecho"></center></td>
                       <td><center><input  type="radio" name="competitivas" value="poco satisfecho"></center></td>
                       <td><center><input type="radio" name="competitivas" value="regular" ></center></td>
                       <td><center><input  type="radio" name="competitivas" value="insatisfecho"></center></td>
                        <td><center><input type="radio" name="competitivas" value="no la desempeña" ></center></td>
                       </fieldset>
                </tr>

                <tr>
                  <th>Análisis del comportamiento de los mercados turísticos.</th>

                     <fieldset  style="border: none;">
                       <td><center><input   type="radio" name="comportamiento"   value="muy satisfecho" ></center></td>
                       <td><center> <input type="radio" name="comportamiento" value="satisfecho"></center></td>
                       <td><center><input  type="radio" name="comportamiento" value="poco satisfecho"></center></td>
                       <td><center><input type="radio" name="comportamiento" value="regular" ></center></td>
                       <td><center><input  type="radio" name="comportamiento" value="insatisfecho"></center></td>
                        <td><center><input type="radio" name="comportamiento" value="no la desempeña" ></center></td>
                       </fieldset>
                </tr>

                <tr>
                  <th>Identificación de nuevos segmentos de mercado</th>
                     <fieldset  style="border: none;">
                       <td><center><input   type="radio" name="nuevos"   value="muy satisfecho" ></center></td>
                       <td><center> <input type="radio" name="nuevos" value="satisfecho"></center></td>
                       <td><center><input  type="radio" name="nuevos" value="poco satisfecho"></center></td>
                       <td><center><input type="radio" name="nuevos" value="regular" ></center></td>
                       <td><center><input  type="radio" name="nuevos" value="insatisfecho"></center></td>
                        <td><center><input type="radio" name="nuevos" value="no la desempeña" ></center></td>
                       </fieldset>
                </tr>

                <tr>
                  <th>Aplicación de estrategias innovadoras de comercialización con un sentido ecológico, tecnológico, de hospitalidad y responsabilidad social.</th>

                     <fieldset  style="border: none;">
                       <td><center><input   type="radio" name="servicios"   value="muy satisfecho" ></center></td>
                       <td><center> <input type="radio" name="servicios" value="satisfecho"></center></td>
                       <td><center><input  type="radio" name="servicios" value="poco satisfecho"></center></td>
                       <td><center><input type="radio" name="servicios" value="regular" ></center></td>
                       <td><center><input  type="radio" name="servicios" value="insatisfecho"></center></td>
                        <td><center><input type="radio" name="servicios" value="no la desempeña" ></center></td>
                       </fieldset>
                </tr>

                <tr>
                  <th>Innovación de productos, procedimientos y servicios tendientes a la satisfacción de las necesidades de los mercados emergentes y el respeto a la diversidad cultural.</th>

                     <fieldset  style="border: none;">
                       <td><center><input   type="radio" name="tendientes"   value="muy satisfecho" ></center></td>
                       <td><center> <input type="radio" name="tendientes" value="satisfecho"></center></td>
                       <td><center><input  type="radio" name="tendientes" value="poco satisfecho"></center></td>
                       <td><center><input type="radio" name="tendientes" value="regular" ></center></td>
                       <td><center><input  type="radio" name="tendientes" value="insatisfecho"></center></td>
                        <td><center><input type="radio" name="tendientes" value="no la desempeña" ></center></td>
                       </fieldset>
                </tr>

                <tr>
                  <th>Formulación y operación de productos y servicios turísticos innovadores a partir de la vigilancia tecnológica y la inteligencia competitiva</th>
                     
                       <fieldset  style="border: none;">
                       <td><center><input   type="radio" name="innovadores"   value="muy satisfecho" ></center></td>
                       <td><center> <input type="radio" name="innovadores" value="satisfecho"></center></td>
                       <td><center><input  type="radio" name="innovadores" value="poco satisfecho"></center></td>
                       <td><center><input type="radio" name="innovadores" value="regular" ></center></td>
                       <td><center><input  type="radio" name="innovadores" value="insatisfecho"></center></td>
                        <td><center><input type="radio" name="innovadores" value="no la desempeña" ></center></td>
                       </fieldset>
                </tr>

                <tr>
                  <th>Gestión del capital intelectual, en el marco de competitividad global, facilitando el emprendimiento de las organizaciones turísticas.</th>
                    
                       <fieldset  style="border: none;">
                       <td><center><input   type="radio" name="marco"   value="muy satisfecho" ></center></td>
                       <td><center> <input type="radio" name="marco" value="satisfecho"></center></td>
                       <td><center><input  type="radio" name="marco" value="poco satisfecho"></center></td>
                       <td><center><input type="radio" name="marco" value="regular" ></center></td>
                       <td><center><input  type="radio" name="marco" value="insatisfecho"></center></td>
                        <td><center><input type="radio" name="marco" value="no la desempeña" ></center></td>
                       </fieldset>
                </tr>

                <tr>
                  <th>Facilidad para catalogar e inventariar recursos pregn1es y culturales.</th>

                     <fieldset  style="border: none;">
                       <td><center><input   type="radio" name="catalogar"   value="muy satisfecho" ></center></td>
                       <td><center> <input type="radio" name="catalogar" value="satisfecho"></center></td>
                       <td><center><input  type="radio" name="catalogar" value="poco satisfecho"></center></td>
                       <td><center><input type="radio" name="catalogar" value="regular" ></center></td>
                       <td><center><input  type="radio" name="catalogar" value="insatisfecho"></center></td>
                        <td><center><input type="radio" name="catalogar" value="no la desempeña" ></center></td>
                       </fieldset>
                </tr>

                <tr>
                  <th>Evaluación e interpretación del patrimonio en sus diversas dimensiones.</th>

                     <fieldset  style="border: none;">
                       <td><center><input   type="radio" name="diversas"   value="muy satisfecho" ></center></td>
                       <td><center> <input type="radio" name="diversas" value="satisfecho"></center></td>
                       <td><center><input  type="radio" name="diversas" value="poco satisfecho"></center></td>
                       <td><center><input type="radio" name="diversas" value="regular" ></center></td>
                       <td><center><input  type="radio" name="diversas" value="insatisfecho"></center></td>
                        <td><center><input type="radio" name="diversas" value="no la desempeña" ></center></td>
                       </fieldset>
                </tr>

                <tr>
                  <th>Definición de  estrategias para la valorización, conservación y aprovechamiento sustentable del patrimonio local, regional, nacional y mundial.</th>

                     <fieldset  style="border: none;">
                       <td><center><input   type="radio" name="valorizacion"   value="muy satisfecho" ></center></td>
                       <td><center> <input type="radio" name="valorizacion" value="satisfecho"></center></td>
                       <td><center><input  type="radio" name="valorizacion" value="poco satisfecho"></center></td>
                       <td><center><input type="radio" name="valorizacion" value="regular" ></center></td>
                       <td><center><input  type="radio" name="valorizacion" value="insatisfecho"></center></td>
                        <td><center><input type="radio" name="valorizacion" value="no la desempeña" ></center></td>
                       </fieldset>
                </tr>

                <tr>
                  <th>Capacidad para diseñar, desarrollar, conducir y facilitar emprendimientos locales que permitan el aprovechamiento turístico y recreativo del patrimonio pregn1 y cultural, tendiente al desarrollo comunitario y la atención a diversos grupos sociales.</th>

                     <fieldset  style="border: none;">
                       <td><center><input   type="radio" name="Capacidad"   value="muy satisfecho" ></center></td>
                       <td><center> <input type="radio" name="Capacidad" value="satisfecho"></center></td>
                       <td><center><input  type="radio" name="Capacidad" value="poco satisfecho"></center></td>
                       <td><center><input type="radio" name="Capacidad" value="regular" ></center></td>
                       <td><center><input  type="radio" name="Capacidad" value="insatisfecho"></center></td>
                        <td><center><input type="radio" name="Capacidad" value="no la desempeña" ></center></td>
                       </fieldset>
                </tr>

                <tr>
                  <th>Generación de estrategias de aprovechamiento del patrimonio para satisfacer necesidades de recreación y esparcimiento de la sociedad.</th>

                     <fieldset  style="border: none;">
                       <td><center><input   type="radio" name="aprovechamiento"   value="muy satisfecho" ></center></td>
                       <td><center> <input type="radio" name="aprovechamiento" value="satisfecho"></center></td>
                       <td><center><input  type="radio" name="aprovechamiento" value="poco satisfecho"></center></td>
                       <td><center><input type="radio" name="aprovechamiento" value="regular" ></center></td>
                       <td><center><input  type="radio" name="aprovechamiento" value="insatisfecho"></center></td>
                        <td><center><input type="radio" name="aprovechamiento" value="no la desempeña" ></center></td>
                       </fieldset>
                </tr>

                <tr>
                  <th>Facilidad para difundir y promover el patrimonio pregn1 y cultural con un sentido ético y de responsabilidad social.</th>

                     <fieldset  style="border: none;">
                       <td><center><input   type="radio" name="difundir"   value="muy satisfecho" ></center></td>
                       <td><center> <input type="radio" name="difundir" value="satisfecho"></center></td>
                       <td><center><input  type="radio" name="difundir" value="poco satisfecho"></center></td>
                       <td><center><input type="radio" name="difundir" value="regular" ></center></td>
                       <td><center><input  type="radio" name="difundir" value="insatisfecho"></center></td>
                        <td><center><input type="radio" name="difundir" value="no la desempeña" ></center></td>
                       </fieldset>
                </tr>

                <tr>
                  <th>Elaboración de planes de manejo y estudios de impacto que permitan el aprovechamiento sustentable del patrimonio.</th>
                     <fieldset  style="border: none;">
                       <td><center><input   type="radio" name="manejo"   value="muy satisfecho" ></center></td>
                       <td><center> <input type="radio" name="manejo" value="satisfecho"></center></td>
                       <td><center><input  type="radio" name="manejo" value="poco satisfecho"></center></td>
                       <td><center><input type="radio" name="manejo" value="regular" ></center></td>
                       <td><center><input  type="radio" name="manejo" value="insatisfecho"></center></td>
                        <td><center><input type="radio" name="manejo" value="no la desempeña" ></center></td>
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