
<div class="content-wrapper">        
        
  <section class="content">
    
    <div class="row">
      
      <div class="col-md-12">
        
        <div class="box">
          
          <!--Encabezado de licenciaturas-->
          <div class="box-header with-border">
          
            <h1 class="box-title">
              
              <i class="fa fa-arrow"></i>

             Datos generales del jefe inmediato de los egresados de las Licenciaturas

             </h1>

            <div class="box-tools pull-right">

            </div>

          </div>
          
          <?php $idegresado = $_SESSION["id"];?>    

          <div class="panel-body">
            
          <form method="POST" action="vencuesta4.php" class="form-horizontal form-encuesta1">

            <br>

            <input type="hidden" name="idegresado" value="<?php echo $idegresado;?>">

         <div class="form-group">

            <label class="control-label col-sm-3" style="color: #616A6B;">¿Nombre completo?</label>
          
            <div class="col-sm-6">
            
             <input type="text" class="form-control" name="nombre">

             </div>

         </div>

           <div class="form-group">

            <label class="control-label col-sm-3" style="color: #616A6B;">¿Correo electrónico?</label>
          
           <div class="col-sm-6">

            <input type="text" class="form-control" name="correo">

            </div>

           </div>

         <div class="form-group">

            <label class="control-label col-sm-3" style="color: #616A6B;">¿Números telefónicos?</label>
          
           <div class="col-sm-6">
            
            <input type="text" class="form-control" name="numtel">

           </div>

         </div>

         <div class="form-group">

            <label class="control-label col-sm-3" style="color: #616A6B;">¿Extensión?</label>
          
          <div class="col-sm-6">
            
            <input type="text" class="form-control" name="extension">

          </div>

        </div>


         <div class="form-group">

            <label class="control-label col-sm-3" style="color: #616A6B;">¿Número de teléfono celular?</label>
          
             <div class="col-sm-6">
            
             <input type="text" class="form-control" name="numcel">

             </div>

           </div>

          <div class="form-group">

            <label class="control-label col-sm-3" style="color: #616A6B;">¿Edad?</label>
          
           <div class="col-sm-6">
            
            <input type="text" class="form-control" name="edad">

           </div>

           </div>
  
          <div class="form-group">

            <label class="control-label col-sm-3" style="color: #616A6B;">¿Grado máximo de estudios *?</label>

            <div class="radio col-ms-4">

             <fieldset>

             <label >
              
              <input type="radio" name="grado" value="Primaria">
              Primaria
            
             </label><br>

             <label >
              
              <input type="radio" name="grado" value="Secundaria"> 
              Secundaria
            
             </label><br>

             <label >
              
              <input type="radio" name="grado" value="Preparatoria"> 
              Preparatoria

             </label><br>

             <label >
              
              <input type="radio" name="grado" value="Licenciatura"> 
              Licenciatura
            
             </label><br>
             
             <label >
              
              <input type="radio" name="grado" value="Maestría">
              Maestría 
            
             </label><br>
            
             <label >
              
              <input type="radio" name="grado" value="Doctorado">
              Doctorado 
            
                   </label><br>
                   
                 </fieldset>

               </div>  

            </div>

             <div class="form-group">

             <label class="control-label col-sm-3" style="color: #616A6B;">¿Nombre del Puesto que desempeña?</label>
          
                <div class="col-sm-6">
            
                <input type="text" class="form-control" name="puesto">

               </div>

              </div>
  
           <div class="form-group">

           <label class="control-label col-sm-3" style="color: #616A6B;">¿Nivel al que pertenece?</label>

          <div class="radio col-ms-4">

             <fieldset>

             <label >
              
              <input type="radio" name="nivel" value="alto mando o director">
              Alto mando o director
            
             </label><br>

             <label >
              
              <input type="radio" name="nivel" value="Mando medio- jefe de departamento, supervisor, ejecutivo">
              Mando medio- jefe de departamento, supervisor, ejecutivo 
            
             </label><br>
           
             <label >
              
              <input type="radio" name="nivel" value="Nivel inferior- técnico u operativo"> 
              Nivel inferior- técnico u operativo
            
                    </label><br>

                  </fieldset>

                 </div> 

             </div>

          <div class="form-group">

           <label class="control-label col-sm-3" style="color: #616A6B;">¿Antigüedad en el puesto?</label>

        <div class="radio col-ms-4">

             <fieldset>

             <label >
              
              <input type="radio" name="puestodos" value="menos de 6 meses">
              menos de 6 meses
            
             </label><br>

             <label >
              
              <input type="radio" name="puestodos" value="de 6 meses a 3 años">
              de 6 meses a 3 años
            
             </label><br>

             <label >
              
              <input type="radio" name="puestodos" value="de 3 a 5 años">
              de 3 a 5 años
      
             </label><br>

             <label >
              
              <input type="radio" name="puestodos" value="de 5  a 10 años">
              de 5  a 10 años
            
             </label><br>

             <label >
              
              <input type="radio" name="puestodos" value="10 0 mas años">
              10 0 mas años
            
                     </label><br>

               </fieldset>

               </div>

            </div>

          <div class="form-group">

         <label class="control-label col-sm-3" style="color: #616A6B;">¿Antigüedad en la empresa?</label>

         <div class="radio col-ms-4">

            <fieldset>

             <label>
              
              <input type="radio" name="antigueda" value="menos de 6 meses">
              menos de 6 meses
            
             </label><br>

             <label >
              
              <input type="radio" name="antigueda" value="de 6 meses a 3 años">
              de 6 meses a 3 años
            
             </label><br>

             <label >
              
              <input type="radio" name="antigueda" value="de 3 a 5 años">
              de 3 a 5 años
      
             </label><br>

             <label>
              
              <input type="radio" name="antigueda" value="de 5  a 10 años">
              de 5  a 10 años
            
             </label><br>
             <label >
              
              <input type="radio" name="antigueda" value="10 0 mas años">
              10 0 mas años
            
                 </label><br>

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