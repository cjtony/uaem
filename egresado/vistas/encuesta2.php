 <script>
	
	$(document).ready(function(){

		$('#si').click(function(){
			$('#estudio').css({"display":"block"});
		});
		$('#no').click(function(){
			$('#estudio').css({"display":"none"});
		});

		$('#si2').click(function(){
			$('#queestudio').css({"display":"block"});
			$('#tematica').css({"display":"block"});
			$('#horario').css({"display":"block"});
			$('#modalidad').css({"display":"block"});
		});
		$('#no2').click(function(){
			$('#queestudio').css({"display":"none"});
			$('#tematica').css({"display":"none"});
			$('#horario').css({"display":"none"});
			$('#modalidad').css({"display":"none"});
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

             Formacion y capacitacion de los egresados

            </h1>

            <div class="box-tools pull-right">

            </div>

          </div>
          
          <?php $idegresado = $_SESSION["id"];?>    

          <div class="panel-body">
            
         <form method="POST" action="vencuesta2.php" class="form-horizontal form-encuesta1">
			<br>

			<input type="hidden" name="idegresado" value="<?php echo $idegresado;?>">

			<div class="form-group">

				<label class="control-label col-sm-3" style="color: #616A6B;">¿Haz realizado algun estudio posterior a la licenciatura?</label>

				<div class="radio col-ms-4">

  					<fieldset>
  					<label>
    					
    				 <input type="radio" name="estudioposterior" value="si" id="si">
    					Si
  					
  					 </label>
 
  					 <label style="margin-left: 2%;">
    					
    				 <input type="radio" name="estudioposterior" value="no" id="no">
    					No
  					
  					</label>

  					</fieldset>
				
				</div>

			</div>

			<div style="display: none" id="estudio">
				
				<div class="form-group">

			    	<label class="control-label col-sm-3" style="color: #616A6B;">¿Cual estudio haz realizado?</label>

			    	<div class="radio col-sm-8">

	  					<fieldset>

	  					<label>
	    					
	    				 <input type="radio" name="estudiocual" value="Doctorado">
	    				Doctorado
	  					
	  					 </label>

						 <br><br>

	  					 <label>
	    					
	    				 <input type="radio" name="estudiocual" value="Maestria">
	    				Maestria
	  					
	  					 </label>

	  					 <br><br>

	  					 <label>
	    					
	    					<input type="radio" name="estudiocual" value="Especialidad">
	    					Especialidad
	  					
	  					 </label>

	  					 <br><br>

	  					 <label>
	    					
	    				 <input type="radio" name="estudiocual" value="Diplomado">
	    					Diplomado
	  					
	  					 </label>
	  					 <br><br>
	  					 <label>
	    					
	    				 <input type="radio" name="estudiocual" value="Curso">
	    					Curso
	  					
	  					 </label>
	  					 <br><br>
	  					 <label>
	    					
	    					<input type="radio" name="estudiocual" value="Taller">
	    					Taller
	  					
	  					 </label>

	  					 </fieldset>
				
					 </div>

			 	 </div>

			 </div>

			 <div class="form-group">

				<label class="control-label col-sm-3" style="color: #616A6B;">¿Te gustaria realizar algun estudio posterior?</label>

				<div class="radio col-ms-4">
  					 <fieldset>
  					 <label>
    					
    				 <input type="radio" name="tegustariaestudio" value="Si" id="si2">
    					Si
  					
  					 </label>
  					 <label style="margin-left: 2%;">
    					
    					<input type="radio" name="tegustariaestudio" value="No" id="no2">
    					No
  					
  					</label>
  					<label style="margin-left: 2%;">
    					
    					<input type="radio" name="tegustariaestudio" value="Tal Vez" id="si2">
    					Tal Vez
  					
  					</label>
  					</fieldset>
				
				</div>

			</div>

			<div style="display:none;" id="queestudio">
				
				<div class="form-group">

			    	<label class="control-label col-sm-3" style="color: #616A6B;">¿Que estudio posterior te gustaria realizar?</label>

			    	<div class="radio col-sm-4">

	  					<fieldset>

	  					<label>
	    					
	    					<input type="radio" name="queestudio" value="Doctorado">
	    					Doctorado
	  					
	  					</label>
						<br><br>
	  					<label>
	    					
	    					<input type="radio" name="queestudio" value="Maestria">
	    					Maestria
	  					
	  					</label>
	  					<br><br>
	  					<label>
	    					
	    					<input type="radio" name="queestudio" value="Especialidad">
	    					Especialidad
	  					
	  					</label>
	  					<br><br>
	  					<label>
	    					
	    					<input type="radio" name="queestudio" value="Diplomado">
	    					Diplomado
	  					
	  					</label>
	  					<br><br>
	  					<label>
	    					
	    					<input type="radio" name="queestudio" value="Curso">
	    					Curso
	  					
	  					</label>
	  					<br><br>
	  					<label>
	    					
	    					<input type="radio" name="queestudio" value="Taller">
	    					Taller
	  					
	  					</label>

	  					</fieldset>
				
					</div>

			 	</div>

			</div>

			<div style="display:none;" id="tematica">
				
				<div class="form-group">

			    	<label class="control-label col-sm-3" style="color: #616A6B;">¿Sobre que tematica te gustaria realizar algun curso o estudio de actualizacion?</label>
					
					<div class="col-sm-6">
						
						<input type="text" class="form-control" name="tematica">

					</div>
					
			 	</div>

			</div>

			<div style="display:none;" id="horario">
				
				<div class="form-group">

			    	<label class="control-label col-sm-3" style="color: #616A6B;">¿Que horario seria el mas conveniente para ti, para tomar algun curso o estudio de actualizacion?</label>

					<div class="radio col-sm-6">
	  					<fieldset>

		  					<label>
		    					
		    					<input type="radio" name="horario" value="Lunes a Viernes Matutino">
		    					Lunes a Viernes Matutino
		  					
		  					</label>
							<br><br>
		  					<label>
		    					
		    					<input type="radio" name="horario" value="Lunes a Viernes Vespertino">
		    					Lunes a Viernes Vespertino
		  					
		  					</label>
		  					<br><br>
		  					<label>
		    					
		    					<input type="radio" name="horario" value="Sabatino">
		    					Sabatino
		  					
		  					</label>

	  					</fieldset>
				
					</div>
			    	

			 	</div>

			</div>

			<div style="display:none;" id="modalidad">
				
				<div class="form-group">

			    	<label class="control-label col-sm-3" style="color: #616A6B;">¿Que modalidad prefieres para tomar algun curso o estudio de actualizacion?</label>

					<div class="radio col-sm-6">
  					
	  					<fieldset>
		  					
		  					<label>
		    					
		    					<input type="radio" name="modalidad" value="Presencial">
		    					Presencial
		  					
		  					</label>
							<br><br>
		  					<label>
		    					
		    					<input type="radio" name="modalidad" value="Distancia">
		    					Distancia
		  					
		  					</label>
		  					<br><br>
		  					<label>
		    					
		    					<input type="radio" name="modalidad" value="Semipresencial">
		    					Semipresencial
		  					
		  					</label>

	  					</fieldset>
				
					</div>
			    	

			 	</div>
		
			</div>

			<div class="form-group">

				<label class="control-label col-sm-3" style="color: #616A6B;">¿Que habilidades son necesarias para que te puedas desempeñar profesionalmente?</label>

				<div class="col-sm-6">
					
					<input type="text" class="form-control" name="habilidades" >

				</div>
				
			</div>

			<div class="form-group">

			    <label class="control-label col-sm-3" style="color: #616A6B;">¿Que conocimientos son necesarios para que te puedas desempeñar profesionalmente?</label>

			    <div class="col-sm-6">
			    	
					<input type="text" class="form-control" name="conocimientos">

			    </div>
				
			</div>

			<div class="form-group">

			    <label class="control-label col-sm-3" style="color: #616A6B;">¿Que actitudes son necesarios para que te puedas desempeñar profesionalmente?</label>

			    <div class="col-sm-6">
			    	
					<input type="text" class="form-control" name="actitudes">

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