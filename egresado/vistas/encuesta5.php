<div class="content-wrapper">        
        
  <section class="content">
    
    <div class="row">
      
      <div class="col-md-12">
        
        <div class="box">
          
          <!--Encabezado de licenciaturas-->
          <div class="box-header with-border">
          
            <h1 class="box-title">
              
              <i class="fa fa-arrow"></i>

             Formas de ingreso y posición en la estructura laboral del egresado

             </h1>

              <div class="box-tools pull-right">

              </div>

           </div>
          
            <?php $idegresado = $_SESSION["id"];?>    

           <div class="panel-body">
            
           <form method="POST" action="vencuesta5.php" class="form-horizontal form-encuesta1">

            <br>

            <input type="hidden" name="idegresado" value="<?php echo $idegresado;?>">

            <br>

           <div class="form-group">
            
           <label class="control-label col-sm-3" style="color: #616A6B;">Regularmente ¿A través de qué medio te enteraste del empleo que tienes?</label>
           
           <div class="radio col-ms-4">
             
             <fieldset>
            
             <label >
              
             <input type="radio" name="atraves" value="Medios de comunicación impresos (periódico, boletines, revistas locales, etc.)">
             Medios de comunicación impresos (periódico, boletines, revistas locales, etc.)
            
             </label><br><br>
            
             <label >
              
             <input type="radio" name="atraves" value="Internet"> 
             Internet
            
             </label><br><br>
             
             <label >
              
             <input type="radio" name="atraves" value="Bolsas de trabajo gubernamentales (Municipal o Estatal)"> 
              Bolsas de trabajo gubernamentales (Municipal o Estatal)
             
             </label><br><br>
             

             <label >
              
              <input type="radio" name="atraves" value="Bolsa de trabajo de la propia empresa"> 
             Bolsa de trabajo de la propia empresa
            
             </label><br><br>
             
             <label >
              
              <input type="radio" name="atraves" value="Bolsa de trabajo de Instituciones de Educación Superior en la región">
              Bolsa de trabajo de Instituciones de Educación Superior en la región
                
             </label><br><br>
             
             <label >
              
              <input type="radio" name="atraves" value="Agencias privadas de colocación">
              Agencias privadas de colocación

             </label><br> <br>
             
             <label >
              
              <input type="radio" name="atraves" value="Anuncio en la calle o distribuyen volantes">
               Anuncio en la calle o distribuyen volantes
             
             </label><br><br>
            
             <label >
              
              <input type="radio" name="atraves" value="Por recomendación">
              Por recomendación
            
             </label><br><br>
            
             <label >
              
              <input type="radio" name="atraves" value="A partir del servicio social, las prácticas profesionales y/o estancias">
              A partir del servicio social, las prácticas profesionales y/o estancias
            
             </label><br><br>
            
             <label >
              
              <input type="radio" name="atraves" value="otros">
              Otros
              
              </label><br><br>
          
            </fieldset>
         
           </div>    
           
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