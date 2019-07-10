<div class="content-wrapper">        
        
  <section class="content">
    
    <div class="row">
      
      <div class="col-md-12">
        
        <div class="box">
          
          <!--Encabezado de licenciaturas-->
          <div class="box-header with-border">
          
            <h1 class="box-title">
              
              <i class="fa fa-arrow"></i>

              Fortalezas y debilidades en el desempeño profesional de los egresados

             </h1>

            <div class="box-tools pull-right">

            </div>

          </div>
          
          <?php $idegresado = $_SESSION["id"];?>    

          <div class="panel-body">
            
         <form method="POST" action="vencuesta6.php" class="form-horizontal form-encuesta1">

           <input type="hidden" name="idegresado" value="<?php echo $idegresado;?>">

           <div class="form-group">

            <label class="control-label col-sm-3" style="color: #616A6B;">¿Menciona una fortaleza que destaque en el desempeño profesional de los egresados de tu Licenciatura.?</label>
          
              <div class="col-sm-6">
            
              <input type="text" class="form-control" name="fortaleza">
             
             </div>
            
            </div>
            
            <div class="form-group">

             <label class="control-label col-sm-3" style="color: #616A6B;">¿Mencione una debilidad que destaque en el desempeño profesional de los egresados tu Licenciatura.?</label>
          
             <div class="col-sm-6">
            
             <input type="text" class="form-control" name="debilidad">
            
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