<div class="content-wrapper">        
        
  <section class="content">
    
    <div class="row">
      
      <div class="col-md-12">
        
        <div class="box">
          
          <!--Encabezado de licenciaturas-->
          <div class="box-header with-border">
          
            <h1 class="box-title">
              
              <i class="fa fa-arrow"></i>

              Datos academicos

            </h1>

            <div class="box-tools pull-right">

            </div>

          </div>
          
          <!--Cuerpo del apartado de licenciaturas-->          
          <div class="panel-body">
            
            <form name="dacademico" id="dacademico" method="POST">
            
              <p style="font-size:14pt;color:#3C6943;"><i class="fa fa-arrow-circle-right"></i> Formulario de actualizacion</p>

              <input type="hidden" name="idegresado" id="idegresado" value="<?php echo $idegresado;?>">

              <p style="color:#385D3D;">Licenciatura</p> 
              <select name="licenciatura" id="licenciatura" class="form-control">        
              </select>

              <p style="color:#385D3D;">Cuenta</p>
              <input type="text" name="cuenta" id="cuenta" class="form-control" required>

              <p style="color:#385D3D;">Nombre</p>
              <input type="text" name="nombre" id="nombre" class="form-control" required>
              
              <div class="row">
              
                <div class="form-group col-md-6">
                  <p style="color:#385D3D;">Apellido paterno</p>
                  <input type="text" name="apepat" id="apepat" class="form-control"required>
                </div>

                <div class="form-group col-md-6">
                  <p style="color:#385D3D;">Apellido materno</p>
                  <input type="text" name="apemat" id="apemat" class="form-control" required>
                </div>

              </div>
              
              <div class="row">

                <div class="form-group col-md-6">
                  <p style="color:#385D3D;">Año de ingreso</p>
                  <input type="text" name="aingreso" id="aingreso" class="form-control" required>
                </div>
                
                <div class="form-group col-md-6">
                  <p style="color:#385D3D;">Año de egresado</p>
                  <input type="text" name="aegreso" id="aegreso" class="form-control" required>
                </div>

              </div>

              <hr>

              <br><br>

              <input type="submit" class="btn btn-success pull-right" id="btnGuardar" value="Actualizar">


            </form>
          
          </div>
                   
        </div>

      </div>

    </div>

  </section>

</div>

<script type="text/javascript" src="scripts/datosacademicos.js"></script>


