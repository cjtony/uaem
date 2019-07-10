<div class="content-wrapper">        
        
  <section class="content">
    
    <div class="row">
      
      <div class="col-md-12">
        
        <div class="box">
          
          <!--Encabezado de licenciaturas-->
          <div class="box-header with-border">
          
            <h1 class="box-title">
              
              <i class="fa fa-arrow"></i>

            Nivel de satisfacción integral del egresado

             </h1>

            <div class="box-tools pull-right">

            </div>

          </div>
          
          <?php $idegresado = $_SESSION["id"];?>    

          <div class="panel-body">
            
         <form method="POST" action="vencuesta7.php" class="form-horizontal form-encuesta1">
           <br>

           <input type="hidden" name="idegresado" value="<?php echo $idegresado;?>">

            <br>
           <div class="form-group">

              <label class="control-label col-sm-3" style="color: #616A6B;">¿Qué tan satisfecho te sientes con respecto a la formación obtenida en tu Licenciatura? ?</label>

               <div class="radio col-sm-8">

                 <fieldset>

                 <label>
                
                 <input type="radio" name="licenciatura" value="Muy Satisfecho">
                  Muy Satisfecho
              
                  </label>
                 
                 <br><br>
                 
                 <label>
                
                  <input type="radio" name="licenciatura" value="Satisfecho">
                  Satisfecho
              
                  </label>
                   
                   <br><br>
                  
                   <label>
                
                  <input type="radio" name="licenciatura" value="Regularmente Satisfecho">
                   Regularmente Satisfecho
              
                   </label>
                  
                   <br><br>
                  
                   <label>
                
                    <input type="radio" name="licenciatura" value="Poco Satisfecho">
                    Insatisfactoria
              
                    </label>
               
                    <br><br>
                   
                    <label>
                
                   <input type="radio" name="licenciatura" value="Insatisfecho">
                   Insatisfecho
                    
                    </label>
                   
                    </fieldset>
        
                 </div>
            </div>


           <div class="form-group">

            <label class="control-label col-sm-3" style="color: #616A6B;">¿Qué tan satisfecho te sientes con respecto a clima universitario (instalaciones, capacidad y cumplimiento de profesores, limpieza, respeto a los derechos y obligaciones, equipamiento, laboratorio, bibliotecas, comportamiento de las autoridades, transparencia en el uso de los recursos citados?</label>

             <div class="radio col-sm-8">

              <fieldset>

               <label>
                
                <input type="radio" name="clima" value="Muy Satisfecho">
                Muy Satisfecho
              
                 </label>
                
                 <br><br>
                 
                 <label>
                
                 <input type="radio" name="clima" value="Satisfecho">
                 Satisfecho
              
                 </label>
                
                 <br><br>
                
                 <label>
                
                 <input type="radio" name="clima" value="Regularmente Satisfecho">
                 Regularmente Satisfecho
              
                 </label>
                 <br><br>
                 <label>
                
                  <input type="radio" name="clima" value="Poco Satisfecho">
                 Insatisfactoria
              
                  </label>
                  <br><br>
                  <label>
                
                  <input type="radio" name="clima" value="Insatisfecho">
                  Insatisfecho
                 </label>
                 
                 </fieldset>
             
               </div>
             </div>

          <p style="margin-left:20px; font-size: 14px" ">Recomendaciones de mejora para el Programa de Estudios cursado</p>


           <div class="form-group">
            
            <label class="control-label col-sm-3" style="color: #616A6B;">¿En tu experiencia ¿qué propondría al C. U. UAEM Temascaltepec para mejorar la formación profesional de los egresados del programa de estudios cursado?</label>
          
          <div class="col-sm-6">
            
            <input type="text" class="form-control" name="cursado">

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