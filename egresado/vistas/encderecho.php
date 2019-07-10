<div class="content-wrapper">        
        
  <section class="content">
    
    <div class="row">
      
      <div class="col-md-12">
        
        <div class="box">
          
          <!--Encabezado de licenciaturas-->
          <div class="box-header with-border">
          
            <h1 class="box-title">
              
              <i class="fa fa-arrow"></i>
              
             Nivel de satisfacción de los egresados con respecto a las sertpreg4es, habilidades, actitudes y valores adquiridos durante la Licenciatura en Derecho.

            </h1>

            <div class="box-tools pull-right">

            </div>

          </div>
          
          <?php $idegresado = $_SESSION["id"];?>    

          <div class="panel-body">
            
         <form method="POST" action="vderecho.php" class="form-horizontal form-encuesta1">


       <input type="hidden" name="idegresado" value="<?php echo $idegresado;?>">
             
            <br>

            <p >Indica ¿Cómo te sientes con respecto a las siguientes habilidades obtenidas durante la Licenciatura en Derecho?</p>


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
                  <th>Análisis y comprensión de documentos legales</th>

                    <fieldset  style="border: none;">
                    <td><center><input type="radio" name="Analisis"   value="muy satisfecho" ></center></td>
                    <td><center> <input type="radio" name="Analisis" value="satisfecho"></center></td>
                    <td><center><input type="radio" name="Analisis" value="regular" ></center></td>
                    <td><center><input type="radio" name="Analisis" value="poco satisfecho"></center></td>
                    <td><center><input type="radio" name="Analisis" value="insatisfecho"></center></td>
                    </fieldset>
                  </tr>

                  <tr>
                    <th>Comunicación asertiva</th>

                     <fieldset  style="border: none;">
                     <td><center><input type="radio" name="preguta1"   value="muy satisfecho" ></center></td>
                     <td><center> <input type="radio" name="preguta1" value="satisfecho"></center></td>
                     <td><center><input type="radio" name="preguta1" value="regular" ></center></td>
                     <td><center><input type="radio" name="preguta1" value="poco satisfecho"></center></td>
                     <td><center><input type="radio" name="preguta1" value="insatisfecho"></center></td>
                     </fieldset>
  
                  <tr>
                    <th>Dialogo y conciliación</th>

                    <fieldset  style="border: none;">
                    <td><center><input type="radio" name="Dialogo"   value="muy satisfecho" ></center></td>
                    <td><center> <input type="radio" name="Dialogo" value="satisfecho"></center></td>
                    <td><center><input type="radio" name="Dialogo" value="regular" ></center></td>
                    <td><center><input type="radio" name="Dialogo" value="poco satisfecho"></center></td>
                    <td><center><input type="radio" name="Dialogo" value="insatisfecho"></center></td>
                    </fieldset>
                  </tr>

                  <tr>
                    <th>asertiva y debatir</th>

                  <fieldset  style="border: none;">
                  <td><center><input type="radio" name="sertpreg4"   value="muy satisfecho" ></center></td>
                  <td><center> <input type="radio" name="sertpreg4" value="satisfecho"></center></td>
                  <td><center><input type="radio" name="sertpreg4" value="regular" ></center></td>
                  <td><center><input type="radio" name="sertpreg4" value="poco satisfecho"></center></td>
                  <td><center><input type="radio" name="sertpreg4" value="insatisfecho"></center></td>
                  </fieldset>
                  </tr>


                  <tr>
                    <th>Interrelacionarse y adaptarse con su entorno</th>

                  <fieldset  style="border: none;">
                    <td><center><input type="radio" name="Interrelacionarse"   value="muy satisfecho" ></center></td>
                    <td><center> <input type="radio" name="Interrelacionarse" value="satisfecho"></center></td>
                    <td><center><input type="radio" name="Interrelacionarse" value="regular" ></center></td>
                    <td><center><input type="radio" name="Interrelacionarse" value="poco satisfecho"></center></td>
                    <td><center><input type="radio" name="Interrelacionarse" value="insatisfecho"></center></td>
                    </fieldset>
                  </tr>

                  <tr>
                    <th>Resolución de problemas y toma de decisiones</th>

                  <fieldset  style="border: none;">
                    <td><center><input type="radio" name="Resolucion"   value="muy satisfecho" ></center></td>
                    <td><center> <input type="radio" name="Resolucion" value="satisfecho"></center></td>
                    <td><center><input type="radio" name="Resolucion" value="regular" ></center></td>
                    <td><center><input type="radio" name="Resolucion" value="poco satisfecho"></center></td>
                    <td><center><input type="radio" name="Resolucion" value="insatisfecho"></center></td>
                    </fieldset>

                  </tr>

                </tbody>
              </table>

              <!----segunda tabla--------------------------------------------------------------->

              <p>Indica ¿Cómo te sientes con respecto a las siguientes actitudes obtenidas durante la Licenciatura en Derecho?</p>

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
                  <th>Autocontrol</th>

                   <fieldset  style="border: none;">
                    <td><center><input type="radio" name="Autocontrol"   value="muy satisfecho" ></center></td>
                    <td><center> <input type="radio" name="Autocontrol" value="satisfecho"></center></td>
                    <td><center><input type="radio" name="Autocontrol" value="regular" ></center></td>
                    <td><center><input type="radio" name="Autocontrol" value="poco satisfecho"></center></td>
                    <td><center><input type="radio" name="Autocontrol" value="insatisfecho"></center></td>
                    </fieldset>
                </tr>

                <tr>
                  <th>sertpreg4 de servicio</th>

                  <fieldset  style="border: none;">
                    <td><center><input type="radio" name="Capacidad"   value="muy satisfecho" ></center></td>
                    <td><center> <input type="radio" name="Capacidad" value="satisfecho"></center></td>
                    <td><center><input type="radio" name="Capacidad" value="regular" ></center></td>
                    <td><center><input type="radio" name="Capacidad" value="poco satisfecho"></center></td>
                    <td><center><input type="radio" name="Capacidad" value="insatisfecho"></center></td>
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
                  <th>Conciencia crítica en la solución de problemas</th>

                  <fieldset  style="border: none;">
                    <td><center><input type="radio" name="Conciliador"   value="muy satisfecho" ></center></td>
                    <td><center> <input type="radio" name="Conciliador" value="satisfecho"></center></td>
                    <td><center><input type="radio" name="Conciliador" value="regular" ></center></td>
                    <td><center><input type="radio" name="Conciliador" value="poco satisfecho"></center></td>
                    <td><center><input type="radio" name="Conciliador" value="insatisfecho"></center></td>
                    </fieldset>
                </tr>

                <tr>
                  <th>Conciliador y diplomático</th>

                    <fieldset  style="border: none;">
                    <td><center><input type="radio" name="diplomado"   value="muy satisfecho" ></center></td>
                    <td><center> <input type="radio" name="diplomado" value="satisfecho"></center></td>
                    <td><center><input type="radio" name="diplomado" value="regular" ></center></td>
                    <td><center><input type="radio" name="diplomado" value="poco satisfecho"></center></td>
                    <td><center><input type="radio" name="diplomado" value="insatisfecho"></center></td>
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
                  <th>Disciplina y orden</th>

                  <fieldset  style="border: none;">
                    <td><center><input type="radio" name="Disciplina"   value="muy satisfecho" ></center></td>
                    <td><center> <input type="radio" name="Disciplina" value="satisfecho"></center></td>
                    <td><center><input type="radio" name="Disciplina" value="regular" ></center></td>
                    <td><center><input type="radio" name="Disciplina" value="poco satisfecho"></center></td>
                    <td><center><input type="radio" name="Disciplina" value="insatisfecho"></center></td>
                    </fieldset>
                </tr>

                <tr>
                  <th>Disposición para el trabajo colaborativo y en equipo</th>

                    <fieldset  style="border: none;">
                    <td><center><input type="radio" name="trabajo"   value="muy satisfecho" ></center></td>
                    <td><center> <input type="radio" name="trabajo" value="satisfecho"></center></td>
                    <td><center><input type="radio" name="trabajo" value="regular" ></center></td>
                    <td><center><input type="radio" name="trabajo" value="poco satisfecho"></center></td>
                    <td><center><input type="radio" name="trabajo" value="insatisfecho"></center></td>
                    </fieldset>
                </tr>

                <tr>
                  <th>Emprendedor y dinámico</th>

                    <fieldset  style="border: none;">
                    <td><center><input type="radio" name="Emprendedor"   value="muy satisfecho" ></center></td>
                    <td><center> <input type="radio" name="Emprendedor" value="satisfecho"></center></td>
                    <td><center><input type="radio" name="Emprendedor" value="regular" ></center></td>
                    <td><center><input type="radio" name="Emprendedor" value="poco satisfecho"></center></td>
                    <td><center><input type="radio" name="Emprendedor" value="insatisfecho"></center></td>
                    </fieldset>
                </tr>

                <tr>
                  <th>Liderazgo</th>

                  <fieldset  style="border: none;">
                    <td><center><input type="radio" name="Liderazgo"   value="muy satisfecho" ></center></td>
                    <td><center> <input type="radio" name="Liderazgo" value="satisfecho"></center></td>
                    <td><center><input type="radio" name="Liderazgo" value="regular" ></center></td>
                    <td><center><input type="radio" name="Liderazgo" value="poco satisfecho"></center></td>
                    <td><center><input type="radio" name="Liderazgo" value="insatisfecho"></center></td>
                    </fieldset>
                </tr>

                <tr>
                  <th>Perseverancia</th>

                  <fieldset  style="border: none;">
                    <td><center><input type="radio" name="Perseverancia"   value="muy satisfecho" ></center></td>
                    <td><center> <input type="radio" name="Perseverancia" value="satisfecho"></center></td>
                    <td><center><input type="radio" name="Perseverancia" value="regular" ></center></td>
                    <td><center><input type="radio" name="Perseverancia" value="poco satisfecho"></center></td>
                    <td><center><input type="radio" name="Perseverancia" value="insatisfecho"></center></td>
                    </fieldset>
                </tr>

                <tr>
                  <th>Ser objetivo e imparcial</th>

                    <fieldset  style="border: none;">
                    <td><center><input type="radio" name="objetivo"   value="muy satisfecho" ></center></td>
                    <td><center> <input type="radio" name="objetivo" value="satisfecho"></center></td>
                    <td><center><input type="radio" name="objetivo" value="regular" ></center></td>
                    <td><center><input type="radio" name="objetivo" value="poco satisfecho"></center></td>
                    <td><center><input type="radio" name="objetivo" value="insatisfecho"></center></td>
                    </fieldset>
                </tr>

              </tbody>
          </table>

          <!-----------tercer tabla--------->

          <p>Indica ¿Cómo te sientes con respecto a los siguientes valores obtenidos durante la Licenciatura en  Derecho?</p>

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
                  <th>Compromiso</th>

                    <fieldset  style="border: none;">
                    <td><center><input type="radio" name="Compromiso2"   value="muy satisfecho" ></center></td>
                    <td><center> <input type="radio" name="Compromiso2" value="satisfecho"></center></td>
                    <td><center><input type="radio" name="Compromiso2" value="regular" ></center></td>
                    <td><center><input type="radio" name="Compromiso2" value="poco satisfecho"></center></td>
                    <td><center><input type="radio" name="Compromiso2" value="insatisfecho"></center></td>
                    </fieldset>
                </tr>

                <tr>
                  <th>Diligencia</th>

                    <fieldset  style="border: none;">
                    <td><center><input type="radio" name="Diligencia"   value="muy satisfecho" ></center></td>
                    <td><center> <input type="radio"name="Diligencia" value="satisfecho"></center></td>
                    <td><center><input type="radio" name="Diligencia" value="regular" ></center></td>
                    <td><center><input type="radio" name="Diligencia" value="poco satisfecho"></center></td>
                    <td><center><input type="radio" name="Diligencia" value="insatisfecho"></center></td>
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
                  <th>Honestidad</th>

                    <fieldset  style="border: none;">
                    <td><center><input type="radio" name="Honestidad"   value="muy satisfecho" ></center></td>
                    <td><center> <input type="radio" name="Honestidad" value="satisfecho"></center></td>
                    <td><center><input type="radio" name="Honestidad" value="regular" ></center></td>
                    <td><center><input type="radio" name="Honestidad" value="poco satisfecho"></center></td>
                    <td><center><input type="radio" name="Honestidad" value="insatisfecho"></center></td>
                    </fieldset>
                </tr>

                <tr>
                  <th>Humanismo</th>

                    <fieldset  style="border: none;">
                    <td><center><input type="radio" name="Humanismo"   value="muy satisfecho" ></center></td>
                    <td><center> <input type="radio" name="Humanismo" value="satisfecho"></center></td>
                    <td><center><input type="radio" name="Humanismo" value="regular" ></center></td>
                    <td><center><input type="radio" name="Humanismo" value="poco satisfecho"></center></td>
                    <td><center><input type="radio" name="Humanismo" value="insatisfecho"></center></td>
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
                  <th>Lealtad</th>

                  <fieldset  style="border: none;">
                    <td><center><input type="radio" name="Lealtad"   value="muy satisfecho" ></center></td>
                    <td><center> <input type="radio" name="Lealtad" value="satisfecho"></center></td>
                    <td><center><input type="radio" name="Lealtad" value="regular" ></center></td>
                    <td><center><input type="radio" name="Lealtad" value="poco satisfecho"></center></td>
                    <td><center><input type="radio" name="Lealtad" value="insatisfecho"></center></td>
                    </fieldset>
                </tr>

                <tr>
                  <th>Respeto</th>

                    <fieldset  style="border: none;">
                    <td><center><input type="radio" name="Respeto"   value="muy satisfecho" ></center></td>
                    <td><center> <input type="radio" name="Respeto" value="satisfecho"></center></td>
                    <td><center><input type="radio" name="Respeto" value="regular" ></center></td>
                    <td><center><input type="radio" name="Respeto" value="poco satisfecho"></center></td>
                    <td><center><input type="radio" name="Respeto" value="insatisfecho"></center></td>
                    </fieldset>
                </tr>
               </tbody>
           </table>

           <!-----------cuarta  tabla----------------------------------------------------------------------->

           <p>Indica ¿Cómo te sientes con respecto al desempeño de las siguientes competencias profesionales adquiridas durante la Licenciatura en Derecho? </p>

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
                    <th>Conocer los principios generales del Derecho, la jurisprudencia y los ordenamientos jurídicos.</th>

                    <fieldset  style="border: none;">
                    <td><center><input type="radio" name="Conocer"   value="muy satisfecho" ></center></td>
                    <td><center> <input type="radio" name="Conocer" value="satisfecho"></center></td>
                    <td><center><input type="radio" name="Conocer" value="regular" ></center></td>
                    <td><center><input type="radio" name="Conocer" value="poco satisfecho"></center></td>
                    <td><center><input type="radio" name="Conocer" value="insatisfecho"></center></td>
                    </fieldset>
                  </tr>

                 <tr>
                  <th>Interpretar los principios generales del Derecho, la jurisprudencia y los ordenamientos jurídicos.</th>

                    <fieldset  style="border: none;">
                    <td><center><input type="radio" name="Interpretar"   value="muy satisfecho" ></center></td>
                    <td><center> <input type="radio" name="Interpretar" value="satisfecho"></center></td>
                    <td><center><input type="radio" name="Interpretar" value="regular" ></center></td>
                    <td><center><input type="radio" name="Interpretar" value="poco satisfecho"></center></td>
                    <td><center><input type="radio" name="Interpretar" value="insatisfecho"></center></td>
                    </fieldset>
                 </tr>

                 <tr>
                  <th>Aplicar los principios generales del Derecho, la jurisprudencia y los ordenamientos jurídicos.</th>

                    <fieldset  style="border: none;">
                    <td><center><input type="radio"  name="Aplicar" value="muy satisfecho" ></center></td>
                    <td><center> <input type="radio" name="Aplicar" value="satisfecho"></center></td>
                    <td><center><input type="radio"  name="Aplicar" value="regular" ></center></td>
                    <td><center><input type="radio"  name="Aplicar" value="poco satisfecho"></center></td>
                    <td><center><input type="radio"  name="Aplicar" value="insatisfecho"></center></td>
                    </fieldset>
                 </tr>

                 <tr>
                  <th>sertpreg4 de argumentar jurídicamente.</th>

                    <fieldset  style="border: none;">
                    <td><center><input type="radio" name="argumentar"   value="muy satisfecho" ></center></td>
                    <td><center> <input type="radio" name="argumentar" value="satisfecho"></center></td>
                    <td><center><input type="radio" name="argumentar" value="regular" ></center></td>
                    <td><center><input type="radio" name="argumentar" value="poco satisfecho"></center></td>
                    <td><center><input type="radio" name="argumentar" value="insatisfecho"></center></td>
                    </fieldset>
                 </tr>

                 <tr>
                  <th>sertpreg4 de sistematizar e integrar los conocimientos y ordenamientos jurídicos.</th>

                     <fieldset  style="border: none;">
                    <td><center><input type="radio" name="sistematizar"   value="muy satisfecho" ></center></td>
                    <td><center> <input type="radio" name="sistematizar" value="satisfecho"></center></td>
                    <td><center><input type="radio" name="sistematizar" value="regular" ></center></td>
                    <td><center><input type="radio" name="sistematizar" value="poco satisfecho"></center></td>
                    <td><center><input type="radio" name="sistematizar" value="insatisfecho"></center></td>
                    </fieldset>
                 </tr>

                 <tr>
                  <th>Actuar de manera ética en la defensa de intereses de las personas a las que representas.</th>

                    <fieldset  style="border: none;">
                    <td><center><input type="radio" name="manera"   value="muy satisfecho" ></center></td>
                    <td><center> <input type="radio" name="manera" value="satisfecho"></center></td>
                    <td><center><input type="radio" name="manera" value="regular" ></center></td>
                    <td><center><input type="radio" name="manera" value="poco satisfecho"></center></td>
                    <td><center><input type="radio" name="manera" value="insatisfecho"></center></td>
                    </fieldset>
                 </tr>

                 <tr>
                  <th>Actuar de manera diligente en la defensa de intereses de las personas a las que representas.</th>

                  <fieldset  style="border: none;">
                    <td><center><input type="radio" name="diligente"   value="muy satisfecho" ></center></td>
                    <td><center> <input type="radio" name="diligente" value="satisfecho"></center></td>
                    <td><center><input type="radio" name="diligente" value="regular" ></center></td>
                    <td><center><input type="radio" name="diligente" value="poco satisfecho"></center></td>
                    <td><center><input type="radio" name="diligente" value="insatisfecho"></center></td>
                    </fieldset>
                 </tr>

                 <tr>
                  <th>Actuar de manera transparente en la defensa de intereses de las personas a las que representas.</th>

                    <fieldset  style="border: none;">
                    <td><center><input type="radio" name="comunicacion"   value="muy satisfecho" ></center></td>
                    <td><center> <input type="radio" name="comunicacion" value="satisfecho"></center></td>
                    <td><center><input type="radio" name="comunicacion" value="regular" ></center></td>
                    <td><center><input type="radio" name="comunicacion" value="poco satisfecho"></center></td>
                    <td><center><input type="radio" name="comunicacion" value="insatisfecho"></center></td>
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