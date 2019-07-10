<div class="content-wrapper">        
        
  <section class="content">
    
    <div class="row">
      
      <div class="col-md-12">
        
        <div class="box">
          
          <!--Encabezado de licenciaturas-->
          <div class="box-header with-border">
          
            <h1 class="box-title">
              
              <i class="fa fa-arrow"></i>
            Nivel de satisfacción de los egresados con respecto a las capacidades, habilidades, actitudes y valores adquiridos durante la Licenciatura en Ingeniero Agrónomo Zootecnist.

            </h1>

            <div class="box-tools pull-right">

            </div>

          </div>
          
          <?php $idegresado = $_SESSION["id"];?>    

          <div class="panel-body">
            
         <form method="POST" action="vagronomo.php" class="form-horizontal form-encuesta1">


           <input type="hidden" name="idegresado" value="<?php echo $idegresado;?>">
             
            <br>

            <p >Indica ¿Cómo te sientes con respecto a las siguientes habilidades obtenidas durante la Licenciatura en Ingeniero Agrónomo Zootecnista?</p>


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
                <th>Capacidad para analizar e interpretar los problemas de los productores agropecuarios ubicados en las diferentes regiones agroecológicas y socioeconómicas de México</th>

                    <fieldset  style="border: none;">
                    <td><center><input type="radio" name="capacidad"   value="muy satisfecho" ></center></td>
                    <td><center> <input type="radio" name="capacidad" value="satisfecho"></center></td>
                    <td><center><input type="radio" name="capacidad" value="regular" ></center></td>
                    <td><center><input type="radio" name="capacidad" value="poco satisfecho"></center></td>
                    <td><center><input type="radio" name="capacidad" value="insatisfecho"></center></td>
                    </fieldset>

            </tr>

            <tr>
                <th>Capacidad de optimizar el uso de áreas de pastoreo, producción y conservación de forrajes, procesos agroecológicos y sistemas agrosilvopastoriles.</th>

                    <fieldset  style="border: none;">
                    <td><center><input type="radio" name="optimizar"   value="muy satisfecho" ></center></td>
                    <td><center> <input type="radio" name="optimizar" value="satisfecho"></center></td>
                    <td><center><input type="radio" name="optimizar" value="regular" ></center></td>
                    <td><center><input type="radio" name="optimizar" value="poco satisfecho"></center></td>
                    <td><center><input type="radio" name="optimizar" value="insatisfecho"></center></td>
                    </fieldset>
            </tr>

            <tr>
                <th>Capacidad de analizar y evaluar diversas estrategias de capacitación, demostración y difusión</th>

                    <fieldset  style="border: none;">
                    <td><center><input type="radio" name="analizar"   value="muy satisfecho" ></center></td>
                    <td><center> <input type="radio" name="analizar" value="satisfecho"></center></td>
                    <td><center><input type="radio" name="analizar" value="regular" ></center></td>
                    <td><center><input type="radio" name="analizar" value="poco satisfecho"></center></td>
                    <td><center><input type="radio" name="analizar" value="insatisfecho"></center></td>
                    </fieldset>
            </tr>

            <tr>
                <th>Elaboración y operación de proyectos agropecuarios con viabilidad técnica, económica y social</th>

                    <fieldset  style="border: none;">
                    <td><center><input type="radio" name="elaboracion"   value="muy satisfecho" ></center></td>
                    <td><center> <input type="radio" name="elaboracion" value="satisfecho"></center></td>
                    <td><center><input type="radio" name="elaboracion" value="regular" ></center></td>
                    <td><center><input type="radio" name="elaboracion" value="poco satisfecho"></center></td>
                    <td><center><input type="radio" name="elaboracion" value="insatisfecho"></center></td>
                    </fieldset>
            </tr>

            <tr>
                <th>Desarrollo de estrategias de producción, conservación y utilización de granos y forrajes para la alimentación animal de una manera rentable con un enfoque holístico, agroecológico, sustentable y que propicie el cuidado del medio ambiente</th>

                    <fieldset  style="border: none;">
                    <td><center><input type="radio" name="desarrollo"   value="muy satisfecho" ></center></td>
                    <td><center> <input type="radio" name="desarrollo" value="satisfecho"></center></td>
                    <td><center><input type="radio" name="desarrollo" value="regular" ></center></td>
                    <td><center><input type="radio" name="desarrollo" value="poco satisfecho"></center></td>
                    <td><center><input type="radio" name="desarrollo" value="insatisfecho"></center></td>
                    </fieldset>
            </tr>

            <tr>
                <th>Conocimiento de las propiedades físico-químicas de productos y subproductos agroindustriales factibles de uso en la alimentación animal que coadyuven en la disminución de costos de producción, eliminación de la contaminación ambiental, con el fin de producir alimentos sanos de origen animal para la población</th>

                    <fieldset  style="border: none;">
                    <td><center><input type="radio" name="conocimiento"   value="muy satisfecho" ></center></td>
                    <td><center> <input type="radio" name="conocimiento" value="satisfecho"></center></td>
                    <td><center><input type="radio" name="conocimiento" value="regular" ></center></td>
                    <td><center><input type="radio" name="conocimiento" value="poco satisfecho"></center></td>
                    <td><center><input type="radio" name="conocimiento" value="insatisfecho"></center></td>
                    </fieldset>
            </tr>

            <tr>
                <th>Conocimiento de la estructura y función de los sistemas orgánicos-anatómicos de plantas y animales con el fin de explicar los fenómenos fisiológicos y metabólicos que inciden en la producción y reproducción, así como su adaptación a los diferentes ambientes agroecológicos</th>

                    <fieldset  style="border: none;">
                    <td><center><input type="radio" name="estrutura"   value="muy satisfecho" ></center></td>
                    <td><center> <input type="radio" name="estrutura" value="satisfecho"></center></td>
                    <td><center><input type="radio" name="estrutura" value="regular" ></center></td>
                    <td><center><input type="radio" name="estrutura" value="poco satisfecho"></center></td>
                    <td><center><input type="radio" name="estrutura" value="insatisfecho"></center></td>
                    </fieldset>
            </tr>

            <tr>
                <th>Conocimiento de las leyes que rigen la herencia y su aplicación en diseño de sistemas de mejoramiento genético y reproducción animal que permitan optimizar la eficiencia y aumentar el nivel de producción y calidad de carne, leche y huevo en beneficio de la nutrición y alimentación de la población de México</th>

                    <fieldset  style="border: none;">
                    <td><center><input type="radio" name="leyes"   value="muy satisfecho" ></center></td>
                    <td><center> <input type="radio" name="leyes" value="satisfecho"></center></td>
                    <td><center><input type="radio" name="leyes" value="regular" ></center></td>
                    <td><center><input type="radio" name="leyes" value="poco satisfecho"></center></td>
                    <td><center><input type="radio" name="leyes" value="insatisfecho"></center></td>
                    </fieldset>

            </tr>

            <tr>
                <th>Conocimiento de las leyes que rigen la herencia y su aplicación en diseño de sistemas de mejoramiento genético y reproducción animal que permitan optimizar la eficiencia y aumentar el nivel de producción y calidad de carne, leche y huevo en beneficio de la nutrición y alimentación de la población de México</th>

                    <fieldset  style="border: none;">
                    <td><center><input type="radio" name="rigen"   value="muy satisfecho" ></center></td>
                    <td><center> <input type="radio" name="rigen" value="satisfecho"></center></td>
                    <td><center><input type="radio" name="rigen" value="regular" ></center></td>
                    <td><center><input type="radio" name="rigen" value="poco satisfecho"></center></td>
                    <td><center><input type="radio" name="rigen" value="insatisfecho"></center></td>
                    </fieldset>
            </tr>


            <tr>
                <th>Conocimiento sobre estrategias de prevención, control y erradicación de plagas agrícolas y enfermedades parasitarias, infecciosas y metabólicas en las especies pecuarias, así como medidas cuarentenarias para proteger a México de la introducción y dispersión de enfermedades exóticas y prevenir patogenias endémicas y epidémicas que puedan afectar a la ganadería y agricultura nacional</th>

                   <fieldset  style="border: none;">
                    <td><center><input type="radio" name="sobre"   value="muy satisfecho" ></center></td>
                    <td><center> <input type="radio" name="sobre" value="satisfecho"></center></td>
                    <td><center><input type="radio" name="sobre" value="regular" ></center></td>
                    <td><center><input type="radio" name="sobre" value="poco satisfecho"></center></td>
                    <td><center><input type="radio" name="sobre" value="insatisfecho"></center></td>
                    </fieldset>
            </tr>

            <tr>
                <th>Conocimiento sobre procesos de transformación e industrialización de productos y subproductos agrícolas y pecuarios, que permitan dar valor agregado a los productos del campo y aumentar la rentabilidad del proceso productivo</th>

                    <fieldset  style="border: none;">
                    <td><center><input type="radio" name="procesos"   value="muy satisfecho" ></center></td>
                    <td><center> <input type="radio" name="procesos" value="satisfecho"></center></td>
                    <td><center><input type="radio" name="procesos" value="regular" ></center></td>
                    <td><center><input type="radio" name="procesos" value="poco satisfecho"></center></td>
                    <td><center><input type="radio" name="procesos" value="insatisfecho"></center></td>
                    </fieldset>
            </tr>

            <tr>
            <th>Conocimiento sobre sistemas de comercialización y mercadotecnia que permitan eliminar el intermediarismo y el agiotismo con el fin de que los productores obtengan los beneficios económicos que merecen por su trabajo desarrollado en el campo</th>
                    
                    <fieldset  style="border: none;">
                    <td><center><input type="radio" name="sistemas"   value="muy satisfecho" ></center></td>
                    <td><center> <input type="radio" name="sistemas" value="satisfecho"></center></td>
                    <td><center><input type="radio" name="sistemas" value="regular" ></center></td>
                    <td><center><input type="radio" name="sistemas" value="poco satisfecho"></center></td>
                    <td><center><input type="radio" name="sistemas" value="insatisfecho"></center></td>
                    </fieldset>
            </tr>

            <tr>
                <th>Conocimiento de la cultura de los diversos grupos étnicos de México que le permita entender las relaciones sociales y económicas intrafamiliares con el fin de apoyar su desarrollo e integrarlos a los avances en el terreno de la educación, la salud, la nutrición y la política</th>

                   <fieldset  style="border: none;">
                    <td><center><input type="radio" name="diversos"   value="muy satisfecho" ></center></td>
                    <td><center> <input type="radio" name="diversos" value="satisfecho"></center></td>
                    <td><center><input type="radio" name="diversos" value="regular" ></center></td>
                    <td><center><input type="radio" name="diversos" value="poco satisfecho"></center></td>
                    <td><center><input type="radio" name="diversos" value="insatisfecho"></center></td>
                    </fieldset>
            </tr>


            <tr>
                <th>Elaboración de diagnósticos sobre grados de sobrepastoreo, deforestación, degradación y contaminación de los recursos naturales (suelo, agua, aire) que inciden en la producción de alimentos de origen animal y vegetal</th>

                    <fieldset  style="border: none;">
                    <td><center><input type="radio" name="grados"   value="muy satisfecho" ></center></td>
                    <td><center> <input type="radio" name="grados" value="satisfecho"></center></td>
                    <td><center><input type="radio" name="grados" value="regular" ></center></td>
                    <td><center><input type="radio" name="grados" value="poco satisfecho"></center></td>
                    <td><center><input type="radio" name="grados" value="insatisfecho"></center></td>
                    </fieldset>
            </tr>

            <tr>
                <th>Identificar y evaluar los factores bióticos, abióticos, socioeconómicos e institucionales que inciden en los sistemas de producción agropecuarios</th>

                    <fieldset  style="border: none;">
                    <td><center><input type="radio" name="evaluar"   value="muy satisfecho" ></center></td>
                    <td><center> <input type="radio" name="evaluar" value="satisfecho"></center></td>
                    <td><center><input type="radio" name="evaluar" value="regular" ></center></td>
                    <td><center><input type="radio" name="evaluar" value="poco satisfecho"></center></td>
                    <td><center><input type="radio" name="evaluar" value="insatisfecho"></center></td>
                    </fieldset>
            </tr>

            <tr>
                <th>Identificar y caracterizar las fortalezas, oportunidades, debilidades y amenazas (FODA) del sector agropecuario local, regional, nacional e internacional que permitan elaborar diagnósticos para apoyar y mejorar la producción de alimentos en México</th>

                    <fieldset  style="border: none;">
                    <td><center><input type="radio" name="indentificar"   value="muy satisfecho" ></center></td>
                    <td><center> <input type="radio" name="indentificar" value="satisfecho"></center></td>
                    <td><center><input type="radio" name="indentificar" value="regular" ></center></td>
                    <td><center><input type="radio" name="indentificar" value="poco satisfecho"></center></td>
                    <td><center><input type="radio" name="indentificar" value="insatisfecho"></center></td>
                    </fieldset>
            </tr>

            <tr>
                <th>Identificación de nichos de mercado y explotación de nuevas especies de plantas y animales que permitan aumentar los rendimientos económicos y la rentabilidad de las empresas agropecuarias mexicanas</th>

                    <fieldset  style="border: none;">
                    <td><center><input type="radio" name="nichos"   value="muy satisfecho" ></center></td>
                    <td><center> <input type="radio" name="nichos" value="satisfecho"></center></td>
                    <td><center><input type="radio" name="nichos" value="regular" ></center></td>
                    <td><center><input type="radio" name="nichos" value="poco satisfecho"></center></td>
                    <td><center><input type="radio" name="nichos" value="insatisfecho"></center></td>
                    </fieldset>


            </tr>

            <tr>
                <th>Diseñar mecanismos de consultaría a productores mediante la organización y establecimiento de despachos o agencias de asistencia técnica que asesore y oriente a ganaderos y agricultores en la solución de problemas organizativos, agrarios, bancario-crediticios, transporte, comercialización, tecnológicos, industrialización, etc.</th>

                    <fieldset  style="border: none;">
                    <td><center><input type="radio" name="mecanismos"   value="muy satisfecho" ></center></td>
                    <td><center> <input type="radio" name="mecanismos" value="satisfecho"></center></td>
                    <td><center><input type="radio" name="mecanismos" value="regular" ></center></td>
                    <td><center><input type="radio" name="mecanismos" value="poco satisfecho"></center></td>
                    <td><center><input type="radio" name="mecanismos" value="insatisfecho"></center></td>
                    </fieldset>
            </tr>


            <tr>
                <th>Diseño y ejecución de proyectos agropecuarios que propicien la generación de empleos y el arraigo de los habitantes del campo</th>

                    <fieldset  style="border: none;">
                    <td><center><input type="radio" name="campo"   value="muy satisfecho" ></center></td>
                    <td><center> <input type="radio" name="campo" value="satisfecho"></center></td>
                    <td><center><input type="radio" name="campo" value="regular" ></center></td>
                    <td><center><input type="radio" name="campo" value="poco satisfecho"></center></td>
                    <td><center><input type="radio" name="campo" value="insatisfecho"></center></td>
                    </fieldset>
            </tr>


            <tr>
                <th>Desarrollar sistemas de control de calidad de los productos alimenticios que se generan en el sector agropecuario con el fin de ofrecer a la sociedad productos libres de patógenos y parásitos que puedan amenazar su salud y bienestar reforzando la cultura de la “seguridad </th>

                    <fieldset  style="border: none;">
                    <td><center><input type="radio" name="seguridad"   value="muy satisfecho" ></center></td>
                    <td><center> <input type="radio" name="seguridad" value="satisfecho"></center></td>
                    <td><center><input type="radio" name="seguridad" value="regular" ></center></td>
                    <td><center><input type="radio" name="seguridad" value="poco satisfecho"></center></td>
                    <td><center><input type="radio" name="seguridad" value="insatisfecho"></center></td>
                    </fieldset>
            </tr>


            <tr>
                <th>Adquisición, promoción y desarrollo de los valores fundamentales del individuo como son la honradez, honestidad, responsabilidad, trabajo, lealtad, patriotismo, puntualidad; además, el desarrollo de la creatividad, colaboración, trabajo en equipo, espíritu de servicio, tolerancia, humildad</th>

                    <fieldset  style="border: none;">
                    <td><center><input type="radio" name="equipo"   value="muy satisfecho" ></center></td>
                    <td><center> <input type="radio" name="equipo" value="satisfecho"></center></td>
                    <td><center><input type="radio" name="equipo" value="regular" ></center></td>
                    <td><center><input type="radio" name="equipo" value="poco satisfecho"></center></td>
                    <td><center><input type="radio" name="equipo" value="insatisfecho"></center></td>
                    </fieldset>
            </tr>

            <tr>
                <th>Capacidad para trabajar bajo presión siendo creativo, analítico y propositivo</th>

                    <fieldset  style="border: none;">
                    <td><center><input type="radio" name="creaticvo"   value="muy satisfecho" ></center></td>
                    <td><center> <input type="radio" name="creaticvo" value="satisfecho"></center></td>
                    <td><center><input type="radio" name="creaticvo" value="regular" ></center></td>
                    <td><center><input type="radio" name="creaticvo" value="poco satisfecho"></center></td>
                    <td><center><input type="radio" name="creaticvo" value="insatisfecho"></center></td>
                    </fieldset>
            </tr>

            <tr>
                <th>Capacidad para integrarse a las áreas rurales con grupos marginados, comprender su problemática e impulsar su desarrollo</th>

                   <fieldset  style="border: none;">
                    <td><center><input type="radio" name="areas"   value="muy satisfecho" ></center></td>
                    <td><center> <input type="radio" name="areas" value="satisfecho"></center></td>
                    <td><center><input type="radio" name="areas" value="regular" ></center></td>
                    <td><center><input type="radio" name="areas" value="poco satisfecho"></center></td>
                    <td><center><input type="radio" name="areas" value="insatisfecho"></center></td>
                    </fieldset>
            </tr>

            <tr>
                <th>Capacidad para actuar y desarrollarse en el sector empresarial con el manejo de recursos con alta tecnología</th>

                    <fieldset  style="border: none;">
                    <td><center><input type="radio" name="actuar"   value="muy satisfecho" ></center></td>
                    <td><center> <input type="radio" name="actuar" value="satisfecho"></center></td>
                    <td><center><input type="radio" name="actuar" value="regular" ></center></td>
                    <td><center><input type="radio" name="actuar" value="poco satisfecho"></center></td>
                    <td><center><input type="radio" name="actuar" value="insatisfecho"></center></td>
                    </fieldset>
            </tr>

            <tr>
                <th>Capacidad de liderazgo dentro de la comunidad agropecuaria rural, empresarial, académica, científica y social</th>

                    <fieldset  style="border: none;">
                    <td><center><input type="radio" name="dentro"   value="muy satisfecho" ></center></td>
                    <td><center> <input type="radio" name="dentro" value="satisfecho"></center></td>
                    <td><center><input type="radio" name="dentro" value="regular" ></center></td>
                    <td><center><input type="radio" name="dentro" value="poco satisfecho"></center></td>
                    <td><center><input type="radio" name="dentro" value="insatisfecho"></center></td>
                    </fieldset>

            </tr>

            <tr>
                <th>Capacidad de expresión oral y escrita en el idioma propio y en otra (s) lenguas extranjeras (inglés, francés, etc.); además, la comprensión de dialectos de lenguas de etnias indígenas en México</th>
                 <fieldset  style="border: none;">
                    <td><center><input type="radio" name="oral"   value="muy satisfecho" ></center></td>
                    <td><center> <input type="radio" name="oral" value="satisfecho"></center></td>
                    <td><center><input type="radio" name="oral" value="regular" ></center></td>
                    <td><center><input type="radio" name="oral" value="poco satisfecho"></center></td>
                    <td><center><input type="radio" name="oral" value="insatisfecho"></center></td>
                    </fieldset>
            </tr>

         </tbody>
         </table>


<!-----------------------------segunda tabla---------------------------------->

          <p class="text-center">Indica ¿Cómo te sientes con respecto a las siguientes actitudes obtenidas durante la Licenciatura en Ingeniero Agrónomo Zootecnista?</p>

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
                <th>Voluntad</th>
                    <fieldset  style="border: none;">
                    <td><center><input type="radio" name="voluntad"   value="muy satisfecho" ></center></td>
                    <td><center> <input type="radio" name="voluntad" value="satisfecho"></center></td>
                    <td><center><input type="radio" name="voluntad" value="regular" ></center></td>
                    <td><center><input type="radio" name="voluntad" value="poco satisfecho"></center></td>
                    <td><center><input type="radio" name="voluntad" value="insatisfecho"></center></td>
                    </fieldset>
            </tr>

            <tr>
                <th>Disciplina</th>
                    
                    <fieldset  style="border: none;">
                    <td><center><input type="radio" name="diciplina"   value="muy satisfecho" ></center></td>
                    <td><center> <input type="radio" name="diciplina" value="satisfecho"></center></td>
                    <td><center><input type="radio" name="diciplina" value="regular" ></center></td>
                    <td><center><input type="radio" name="diciplina" value="poco satisfecho"></center></td>
                    <td><center><input type="radio" name="diciplina" value="insatisfecho"></center></td>
                    </fieldset>
            </tr>

            <tr>
                <th>Perseverancia</th>

                   <fieldset  style="border: none;">
                    <td><center><input type="radio" name="perseverancia"   value="muy satisfecho" ></center></td>
                    <td><center> <input type="radio" name="perseverancia" value="satisfecho"></center></td>
                    <td><center><input type="radio" name="perseverancia" value="regular" ></center></td>
                    <td><center><input type="radio" name="perseverancia" value="poco satisfecho"></center></td>
                    <td><center><input type="radio" name="perseverancia" value="insatisfecho"></center></td>
                    </fieldset>
            </tr>

            <tr>
                <th>Sistemático</th>

                    <fieldset  style="border: none;">
                    <td><center><input type="radio" name="sistematico"   value="muy satisfecho" ></center></td>
                    <td><center> <input type="radio" name="sistematico" value="satisfecho"></center></td>
                    <td><center><input type="radio" name="sistematico" value="regular" ></center></td>
                    <td><center><input type="radio" name="sistematico" value="poco satisfecho"></center></td>
                    <td><center><input type="radio" name="sistematico" value="insatisfecho"></center></td>
                    </fieldset>
            </tr>

            <tr>
                <th>Orden</th>
                 <fieldset  style="border: none;">
                    <td><center><input type="radio" name="orden"   value="muy satisfecho" ></center></td>
                    <td><center> <input type="radio" name="orden" value="satisfecho"></center></td>
                    <td><center><input type="radio" name="orden" value="regular" ></center></td>
                    <td><center><input type="radio" name="orden" value="poco satisfecho"></center></td>
                    <td><center><input type="radio" name="orden" value="insatisfecho"></center></td>
                    </fieldset>
            </tr>

            <tr>
                <th>Proactivo</th>

                    <fieldset  style="border: none;">
                    <td><center><input type="radio" name="proativo"   value="muy satisfecho" ></center></td>
                    <td><center> <input type="radio" name="proativo" value="satisfecho"></center></td>
                    <td><center><input type="radio" name="proativo" value="regular" ></center></td>
                    <td><center><input type="radio" name="proativo" value="poco satisfecho"></center></td>
                    <td><center><input type="radio" name="proativo" value="insatisfecho"></center></td>
                    </fieldset>
            </tr>

            <tr>
                <th>Congruencia entre lo que se piensa, dice y hace</th>

                    <fieldset  style="border: none;">
                    <td><center><input type="radio" name="piensa"   value="muy satisfecho" ></center></td>
                    <td><center> <input type="radio" name="piensa" value="satisfecho"></center></td>
                    <td><center><input type="radio" name="piensa" value="regular" ></center></td>
                    <td><center><input type="radio" name="piensa" value="poco satisfecho"></center></td>
                    <td><center><input type="radio" name="piensa" value="insatisfecho"></center></td>
                    </fieldset>
            </tr>
         </tbody>
         </table>


<!----------------------------------------tercer tabla------------------------>

         <p class="text-center">Indica ¿Cómo te sientes con respecto a los siguientes valores obtenidos durante la Licenciatura en Ingeniero Agrónomo Zootecnista?</p>

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
                <th>Ética</th>

                   <fieldset  style="border: none;">
                    <td><center><input type="radio" name="etica"   value="muy satisfecho" ></center></td>
                    <td><center> <input type="radio" name="etica" value="satisfecho"></center></td>
                    <td><center><input type="radio" name="etica" value="regular" ></center></td>
                    <td><center><input type="radio" name="etica" value="poco satisfecho"></center></td>
                    <td><center><input type="radio" name="etica" value="insatisfecho"></center></td>
                    </fieldset>
            </tr>

            <tr>
                <th>Tolerancia y respeto</th>

                    <fieldset  style="border: none;">
                    <td><center><input type="radio" name="tolerancia"   value="muy satisfecho" ></center></td>
                    <td><center> <input type="radio" name="tolerancia" value="satisfecho"></center></td>
                    <td><center><input type="radio" name="tolerancia" value="regular" ></center></td>
                    <td><center><input type="radio" name="tolerancia" value="poco satisfecho"></center></td>
                    <td><center><input type="radio" name="tolerancia" value="insatisfecho"></center></td>
                    </fieldset>
            </tr>

            <tr>
                <th>Espíritu de colaboración</th>

                    <fieldset  style="border: none;">
                    <td><center><input type="radio" name="colabaracion"   value="muy satisfecho" ></center></td>
                    <td><center> <input type="radio" name="colabaracion" value="satisfecho"></center></td>
                    <td><center><input type="radio" name="colabaracion" value="regular" ></center></td>
                    <td><center><input type="radio" name="colabaracion" value="poco satisfecho"></center></td>
                    <td><center><input type="radio" name="colabaracion" value="insatisfecho"></center></td>
                    </fieldset>
            </tr>


            <tr>
                <th>Solidaridad</th>

                    <fieldset  style="border: none;">
                    <td><center><input type="radio" name="solidaridad"   value="muy satisfecho" ></center></td>
                    <td><center> <input type="radio" name="solidaridad" value="satisfecho"></center></td>
                    <td><center><input type="radio" name="solidaridad" value="regular" ></center></td>
                    <td><center><input type="radio" name="solidaridad" value="poco satisfecho"></center></td>
                    <td><center><input type="radio" name="solidaridad" value="insatisfecho"></center></td>
                    </fieldset>
            </tr>

            <tr>
                <th>Disposición para el trabajo</th>

                    <fieldset  style="border: none;">
                    <td><center><input type="radio" name="trabaj"   value="muy satisfecho" ></center></td>
                    <td><center> <input type="radio" name="trabaj" value="satisfecho"></center></td>
                    <td><center><input type="radio" name="trabaj" value="regular" ></center></td>
                    <td><center><input type="radio" name="trabaj" value="poco satisfecho"></center></td>
                    <td><center><input type="radio" name="trabaj" value="insatisfecho"></center></td>
                    </fieldset>
            </tr>

            <tr>
                <th>Interés por el autoaprendizaje</th>

                    <fieldset  style="border: none;">
                    <td><center><input type="radio" name="interes"   value="muy satisfecho" ></center></td>
                    <td><center> <input type="radio" name="interes" value="satisfecho"></center></td>
                    <td><center><input type="radio" name="interes" value="regular" ></center></td>
                    <td><center><input type="radio" name="interes" value="poco satisfecho"></center></td>
                    <td><center><input type="radio" name="interes" value="insatisfecho"></center></td>
                    </fieldset>
            </tr>


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
                <th>Trabajo en equipo</th>

                    <fieldset  style="border: none;">
                    <td><center><input type="radio" name="trabajo"   value="muy satisfecho" ></center></td>
                    <td><center> <input type="radio" name="trabajo" value="satisfecho"></center></td>
                    <td><center><input type="radio" name="trabajo" value="regular" ></center></td>
                    <td><center><input type="radio" name="trabajo" value="poco satisfecho"></center></td>
                    <td><center><input type="radio" name="trabajo" value="insatisfecho"></center></td>
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
                <th>Honradez</th>

                    <fieldset  style="border: none;">
                    <td><center><input type="radio" name="honradez"   value="muy satisfecho" ></center></td>
                    <td><center> <input type="radio" name="honradez" value="satisfecho"></center></td>
                    <td><center><input type="radio" name="honradez" value="regular" ></center></td>
                    <td><center><input type="radio" name="honradez" value="poco satisfecho"></center></td>
                    <td><center><input type="radio" name="honradez" value="insatisfecho"></center></td>
                    </fieldset>
            </tr>

            <tr>
                <th>Puntualidad</th>

                    <fieldset  style="border: none;">
                    <td><center><input type="radio" name="puntualidad"   value="muy satisfecho" ></center></td>
                    <td><center> <input type="radio" name="puntualidad" value="satisfecho"></center></td>
                    <td><center><input type="radio" name="puntualidad" value="regular" ></center></td>
                    <td><center><input type="radio" name="puntualidad" value="poco satisfecho"></center></td>
                    <td><center><input type="radio" name="puntualidad" value="insatisfecho"></center></td>
                    </fieldset>


            </tr>

            <tr>
                <th>Lealtad </th>

                    <fieldset  style="border: none;">
                    <td><center><input type="radio" name="lealtad"   value="muy satisfecho" ></center></td>
                    <td><center> <input type="radio" name="lealtad" value="satisfecho"></center></td>
                    <td><center><input type="radio" name="lealtad" value="regular" ></center></td>
                    <td><center><input type="radio" name="lealtad" value="poco satisfecho"></center></td>
                    <td><center><input type="radio" name="lealtad" value="insatisfecho"></center></td>
                    </fieldset>
            </tr>
         </tbody>
         </table> 

<!---------------------------------------CUARTA TABLA------>

           <p class="text-center">Indica ¿Cómo te sientes con respecto al desempeño de las siguientes competencias profesionales adquiridas durante la Licenciatura en Ingeniero Agrónomo Zootecnista?</p>

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
                <th>Gestionar y canalizar programas y servicios de apoyo social que incidan en el desarrollo rural integral.</th>

                    <fieldset  style="border: none;">
                    <td><center><input type="radio" name="canalizar"   value="muy satisfecho" ></center></td>
                    <td><center> <input type="radio" name="canalizar" value="satisfecho"></center></td>
                    <td><center><input type="radio" name="canalizar" value="regular" ></center></td>
                    <td><center><input type="radio" name="canalizar" value="poco satisfecho"></center></td>
                    <td><center><input type="radio" name="canalizar" value="insatisfecho"></center></td>
                    </fieldset>
            </tr>

            <tr>
                <th>Diseñar estrategias de comercialización de los productos del campo y modelos de desarrollo</th>

                   <fieldset  style="border: none;">
                    <td><center><input type="radio" name="camercializar"   value="muy satisfecho" ></center></td>
                    <td><center> <input type="radio" name="camercializar" value="satisfecho"></center></td>
                    <td><center><input type="radio" name="camercializar" value="regular" ></center></td>
                    <td><center><input type="radio" name="camercializar" value="poco satisfecho"></center></td>
                    <td><center><input type="radio" name="camercializar" value="insatisfecho"></center></td>
                    </fieldset>
            </tr>

            <tr>
                <th>Diseñar estrategias en el ámbito regional, estatal y nacional para la planificación y organización de la producción agropecuaria.</th>

                   <fieldset  style="border: none;">
                    <td><center><input type="radio" name="ambito"   value="muy satisfecho" ></center></td>
                    <td><center> <input type="radio" name="ambito" value="satisfecho"></center></td>
                    <td><center><input type="radio" name="ambito" value="regular" ></center></td>
                    <td><center><input type="radio" name="ambito" value="poco satisfecho"></center></td>
                    <td><center><input type="radio" name="ambito" value="insatisfecho"></center></td>
                    </fieldset>
            </tr>

            <tr>
                <th>Gestionar programas y proyectos para el desarrollo de infraestructura de captación y almacenamiento de agua.</th>

                    <fieldset  style="border: none;">
                    <td><center><input type="radio" name="gestionar"   value="muy satisfecho" ></center></td>
                    <td><center> <input type="radio" name="gestionar" value="satisfecho"></center></td>
                    <td><center><input type="radio" name="gestionar" value="regular" ></center></td>
                    <td><center><input type="radio" name="gestionar" value="poco satisfecho"></center></td>
                    <td><center><input type="radio" name="gestionar" value="insatisfecho"></center></td>
                    </fieldset>
            </tr>

            <tr>
                <th>Aplicar cálculos matemáticos y datos estadísticos en determinaciones agronómicas y zootécnicas; así como en modelos experimentales y de investigación.</th>

                    <fieldset  style="border: none;">
                    <td><center><input type="radio" name="calculos"   value="muy satisfecho" ></center></td>
                    <td><center> <input type="radio" name="calculos" value="satisfecho"></center></td>
                    <td><center><input type="radio" name="calculos" value="regular" ></center></td>
                    <td><center><input type="radio" name="calculos" value="poco satisfecho"></center></td>
                    <td><center><input type="radio" name="calculos" value="insatisfecho"></center></td>
                    </fieldset>
            </tr>

            <tr>
                <th>Aplicar conocimientos de matemáticas y física para el diseño de sistemas hidráulicos y de modelos topográficos.</th>

                    <fieldset  style="border: none;">
                    <td><center><input type="radio" name="mamaticas"   value="muy satisfecho" ></center></td>
                    <td><center> <input type="radio" name="mamaticas" value="satisfecho"></center></td>
                    <td><center><input type="radio" name="mamaticas" value="regular" ></center></td>
                    <td><center><input type="radio" name="mamaticas" value="poco satisfecho"></center></td>
                    <td><center><input type="radio" name="mamaticas" value="insatisfecho"></center></td>
                    </fieldset>
            </tr>

            <tr>
                <th>Realizar el análisis físico, químico y biológico de suelos, agua y plantas.</th>

                    <fieldset  style="border: none;">
                    <td><center><input type="radio" name="fisico"   value="muy satisfecho" ></center></td>
                    <td><center> <input type="radio" name="fisico" value="satisfecho"></center></td>
                    <td><center><input type="radio" name="fisico" value="regular" ></center></td>
                    <td><center><input type="radio" name="fisico" value="poco satisfecho"></center></td>
                    <td><center><input type="radio" name="fisico" value="insatisfecho"></center></td>
                    </fieldset>
            </tr>

            <tr>
                <th>Conocer con profundidad el metabolismo de grasas, lípidos, proteínas, carbohidratos, vitaminas y minerales; además, aditivos utilizados en la nutrición animal y vegetal.</th>

                    <fieldset  style="border: none;">
                    <td><center><input type="radio" name="metabolismo"   value="muy satisfecho" ></center></td>
                    <td><center> <input type="radio" name="metabolismo" value="satisfecho"></center></td>
                    <td><center><input type="radio" name="metabolismo" value="regular" ></center></td>
                    <td><center><input type="radio" name="metabolismo" value="poco satisfecho"></center></td>
                    <td><center><input type="radio" name="metabolismo" value="insatisfecho"></center></td>
                    </fieldset>
            </tr>

            <tr>
                <th>Identificar el funcionamiento de células, tejidos y órganos en plantas y animales y su ubicación en los taxones correspondientes.</th>

                    <fieldset  style="border: none;">
                    <td><center><input type="radio" name="celulas"   value="muy satisfecho" ></center></td>
                    <td><center> <input type="radio" name="celulas" value="satisfecho"></center></td>
                    <td><center><input type="radio" name="celulas" value="regular" ></center></td>
                    <td><center><input type="radio" name="celulas" value="poco satisfecho"></center></td>
                    <td><center><input type="radio" name="celulas" value="insatisfecho"></center></td>
                    </fieldset>
            </tr>

            <tr>
                <th>Aplicar adecuadamente los métodos algebraicos estadísticos y estocásticos, para determinar leyes de la herencia y heredabilidad.</th>

                     <fieldset  style="border: none;">
                    <td><center><input type="radio" name="algebra"   value="muy satisfecho" ></center></td>
                    <td><center> <input type="radio" name="algebra" value="satisfecho"></center></td>
                    <td><center><input type="radio" name="algebra" value="regular" ></center></td>
                    <td><center><input type="radio" name="algebra" value="poco satisfecho"></center></td>
                    <td><center><input type="radio" name="algebra" value="insatisfecho"></center></td>
                    </fieldset>
            </tr>

            <tr>
                <th>Aplicar estrategias para el mejoramiento genético (métodos de selección, hibridación y consanguinidad).</th>

                    <fieldset  style="border: none;">
                    <td><center><input type="radio" name="genetico"   value="muy satisfecho" ></center></td>
                    <td><center> <input type="radio" name="genetico" value="satisfecho"></center></td>
                    <td><center><input type="radio" name="genetico" value="regular" ></center></td>
                    <td><center><input type="radio" name="genetico" value="poco satisfecho"></center></td>
                    <td><center><input type="radio" name="genetico" value="insatisfecho"></center></td>
                    </fieldset>
            </tr>

            <tr>
                <th>Comprender procesos hormonales y endocrinos que influyen en el comportamiento reproductivo de las especies pecuarias.</th>

                    <fieldset  style="border: none;">
                    <td><center><input type="radio" name="hormonales"   value="muy satisfecho" ></center></td>
                    <td><center> <input type="radio" name="hormonales" value="satisfecho"></center></td>
                    <td><center><input type="radio" name="hormonales" value="regular" ></center></td>
                    <td><center><input type="radio" name="hormonales" value="poco satisfecho"></center></td>
                    <td><center><input type="radio" name="hormonales" value="insatisfecho"></center></td>
                    </fieldset>
            </tr>

            <tr>
                <th>Manipular órganos reproductivos, equipos, instrumentos y técnicas para lograr la sincronización de calores.</th>

                    <fieldset  style="border: none;">
                    <td><center><input type="radio" name="calores"   value="muy satisfecho" ></center></td>
                    <td><center> <input type="radio" name="calores" value="satisfecho"></center></td>
                    <td><center><input type="radio" name="calores" value="regular" ></center></td>
                    <td><center><input type="radio" name="calores" value="poco satisfecho"></center></td>
                    <td><center><input type="radio" name="calores" value="insatisfecho"></center></td>
                    </fieldset>


            </tr>

            <tr>
                <th>Realizar inseminación artificial y dar bases para la transferencia de embriones.</th>

                    <fieldset  style="border: none;">
                    <td><center><input type="radio" name="embriones"   value="muy satisfecho" ></center></td>
                    <td><center> <input type="radio" name="embriones" value="satisfecho"></center></td>
                    <td><center><input type="radio" name="embriones" value="regular" ></center></td>
                    <td><center><input type="radio" name="embriones" value="poco satisfecho"></center></td>
                    <td><center><input type="radio" name="embriones" value="insatisfecho"></center></td>
                    </fieldset>
            </tr>

            <tr>
                <th>Identificar los componentes de la tríada epidemiológica y su influencia en los procesos de morbilidad.</th>

                    <fieldset  style="border: none;">
                    <td><center><input type="radio" name="morbilidad"   value="muy satisfecho" ></center></td>
                    <td><center> <input type="radio" name="morbilidad" value="satisfecho"></center></td>
                    <td><center><input type="radio" name="morbilidad" value="regular" ></center></td>
                    <td><center><input type="radio" name="morbilidad" value="poco satisfecho"></center></td>
                    <td><center><input type="radio" name="morbilidad" value="insatisfecho"></center></td>
                    </fieldset>
            </tr>

            <tr>
                <th>Identificar las especies forrajeras nativas e introducidas de importancia zootécnica.</th>

                    <fieldset  style="border: none;">
                    <td><center><input type="radio" name="zootecnica"   value="muy satisfecho" ></center></td>
                    <td><center> <input type="radio" name="zootecnica" value="satisfecho"></center></td>
                    <td><center><input type="radio" name="zootecnica" value="regular" ></center></td>
                    <td><center><input type="radio" name="zootecnica" value="poco satisfecho"></center></td>
                    <td><center><input type="radio" name="zootecnica" value="insatisfecho"></center></td>
                    </fieldset>
            </tr>

            <tr>
                <th>Comprender los sistemas de producción pecuaria.</th>

                    <fieldset  style="border: none;">
                    <td><center><input type="radio" name="pecuaria"   value="muy satisfecho" ></center></td>
                    <td><center> <input type="radio" name="pecuaria" value="satisfecho"></center></td>
                    <td><center><input type="radio" name="pecuaria" value="regular" ></center></td>
                    <td><center><input type="radio" name="pecuaria" value="poco satisfecho"></center></td>
                    <td><center><input type="radio" name="pecuaria" value="insatisfecho"></center></td>
                    </fieldset>
            </tr>

            <tr>
                <th>Diseñar, construir y operar instalaciones agropecuarias.</th>

                    <fieldset  style="border: none;">
                    <td><center><input type="radio" name="agropecuaria"   value="muy satisfecho" ></center></td>
                    <td><center> <input type="radio" name="agropecuaria" value="satisfecho"></center></td>
                    <td><center><input type="radio" name="agropecuaria" value="regular" ></center></td>
                    <td><center><input type="radio" name="agropecuaria" value="poco satisfecho"></center></td>
                    <td><center><input type="radio" name="agropecuaria" value="insatisfecho"></center></td>
                    </fieldset>
            </tr>

            <tr>
                <th>Comprenderá el funcionamiento y mantenimiento de herramienta, equipo y maquinaria agrícola, pecuaria y agroindustrial.</th>

                    <fieldset  style="border: none;">
                    <td><center><input type="radio" name="agroindrustrial"   value="muy satisfecho" ></center></td>
                    <td><center> <input type="radio" name="agroindrustrial" value="satisfecho"></center></td>
                    <td><center><input type="radio" name="agroindrustrial" value="regular" ></center></td>
                    <td><center><input type="radio" name="agroindrustrial" value="poco satisfecho"></center></td>
                    <td><center><input type="radio" name="agroindrustrial" value="insatisfecho"></center></td>
                    </fieldset>
            </tr>

            <tr>
                <th>Organizará acciones educativas que motiven a los productores en el uso racional del agua, el suelo y las plantas</th>

                    <fieldset  style="border: none;">
                    <td><center><input type="radio" name="plantas"   value="muy satisfecho" ></center></td>
                    <td><center> <input type="radio" name="plantas" value="satisfecho"></center></td>
                    <td><center><input type="radio" name="plantas" value="regular" ></center></td>
                    <td><center><input type="radio" name="plantas" value="poco satisfecho"></center></td>
                    <td><center><input type="radio" name="plantas" value="insatisfecho"></center></td>
                    </fieldset>
            </tr>

            <tr>
                <th>Diseñar e instalar practicas mecánicas y vegetativas para evitar la deforestación, erosión de suelos, sobrepastoreo, desertificación y contaminación ambiental.</th>

                    <fieldset  style="border: none;">
                    <td><center><input type="radio" name="ambiental"   value="muy satisfecho" ></center></td>
                    <td><center> <input type="radio" name="ambiental" value="satisfecho"></center></td>
                    <td><center><input type="radio" name="ambiental" value="regular" ></center></td>
                    <td><center><input type="radio" name="ambiental" value="poco satisfecho"></center></td>
                    <td><center><input type="radio" name="ambiental" value="insatisfecho"></center></td>
                    </fieldset>
            </tr>

            <tr>
                <th>Organizará acciones para prevenir, evitar y controlar la sobreexplotación y extracción irracional de recursos naturales que pongan en peligro la extinción de especies de plantas y animales</th>

                    <fieldset  style="border: none;">
                    <td><center><input type="radio" name="aniamales"   value="muy satisfecho" ></center></td>
                    <td><center> <input type="radio" name="aniamales" value="satisfecho"></center></td>
                    <td><center><input type="radio" name="aniamales" value="regular" ></center></td>
                    <td><center><input type="radio" name="aniamales" value="poco satisfecho"></center></td>
                    <td><center><input type="radio" name="aniamales" value="insatisfecho"></center></td>
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