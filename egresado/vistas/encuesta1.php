<script>
	
	$(document).ready(function(){

		$('#si').click(function(){
			$('#titulado').css({"display":"block"});
		});
		$('#no').click(function(){
			$('#titulado').css({"display":"none"});
		});
	});


</script>

<div class="content-wrapper">        
        
  <section class="content">
    
    <div class="row">
      
      <div class="col-md-12">
        
        <div class="box">
          
          <!--Encabezado de licenciaturas-->
          <div class="box-header with-border">
          
            <h1 class="box-title">
              
              <i class="fa fa-arrow"></i>

              Datos academicos academicos y titulacion.

            </h1>

            <div class="box-tools pull-right">

            </div>

          </div>
          
          <?php $idegresado = $_SESSION["id"];?>    

          <div class="panel-body">
            
           <form method="POST" action="vencuesta1.php" class="form-horizontal form-encuesta1">


			<input type="hidden" name="idegresado" value="<?php echo $idegresado;?>">


			<div class="form-group">
				
				<label class="control-label col-sm-3" style="color: #616A6B;">¿Te encuentras titulado?</label>

				<div class="radio col-sm-4">
  					<fieldset>
  					<label>
    					
    					<input type="radio" name="titulado" value="si" id="si">
    					Si
  					
  					</label>
  					<label style="margin-left: 2%;">
    					
    					<input type="radio" name="titulado" value="no" id="no">
    					No
  					
  					</label>
  					</fieldset>
				
				</div>
				

			</div>

			<div id="titulado" style="display:none;">
				
				<div class="form-group">

			    	<label class="control-label col-sm-3" style="color: #616A6B;">¿Por que modalidad te titulaste?</label>

			    	<div class="radio col-sm-4">

	  					<fieldset>

	  					<label>
	    					
	    					<input type="radio" name="modalidad" value="Aprovechamiento">
	    					Aprovechamiento
	  					
	  					</label>
	  					<br>
	  					<label>
	    					
	    					<input type="radio" name="modalidad" value="EGEL">
	    					EGEL
	  					
	  					</label>
	  					<br>
	  					<label>
	    					
	    					<input type="radio" name="modalidad" value="Tesis">
	    					Tesis
	  					
	  					</label>
	  					<br>
	  					<label>
	    					
	    					<input type="radio" name="modalidad" value="Ensayo">
	    					Ensayo
	  					
	  					</label>
	  					<br>
	  					<label>
	    					
	    					<input type="radio" name="modalidad" value="Articulo">
	    					Articulo
	  					
	  					</label>
	  					<br>
	  					<label>
	    					
	    					<input type="radio" name="modalidad" value="EGEL">
	    					EGEL
	  					
	  					</label>

	  					</fieldset>
				
					</div>

				</div>
				<div class="form-group">
				
					<label class="control-label col-sm-3" style="color: #616A6B;">¿Cuanto tiempo te llevo conseguir tu titulo?</label>

					<div class="radio col-sm-4">
	  					<fieldset>
	  					<label>
	    					
	    					<input type="radio" name="tiempo" value="Menos de un año">
	    					Menos de un año
	  					
	  					</label>
						<br>
	  					<label>
	    					
	    					<input type="radio" name="tiempo" value="Entre 1 año y 2 años">
	    					Entre 1 año y 2 años
	  					
	  					</label>
	  					<br>
	  					<label>
	    					
	    					<input type="radio" name="tiempo" value="Mas de 2 años">
	    					Mas de 2 años
	  					
	  					</label>
	  					</fieldset>
					
					</div>
				

				</div>
				

			</div>
			<br>
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