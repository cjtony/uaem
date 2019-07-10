<div class="content-wrapper">        
        
  <section class="content">
    
    <div class="row">
      
      <div class="col-md-12">
        
        <div class="box">
          
          <!--Encabezado de licenciaturas-->
          <div class="box-header with-border">
          
            <h1 class="box-title">
              
              <i class="fa fa-graduation-cap"></i>

              Modulo de egresados 

              <button class="btn btn-success" id="btnagregar" onclick="mostrarform(true)">

                <i class="fa fa-plus-circle"></i> Agregar

              </button>

            </h1>

            <div class="box-tools pull-right">

            </div>

          </div>
          
          <!--Cuerpo del apartado de licenciaturas-->          
          <div class="panel-body table-responsive" id="listadoregistros">
            
            <!--Tabla de los registros de licenciatura-->
            <table id="tbllistado" class="table table-striped table-bordered table-condensed table-hover">
              
              <thead>

                <th>Idegresado</th>
                <th>Licenciatura</th>
                <th>Cuenta</th>
                <th>Nombre</th>
                <th>Apepat</th>
                <th>Apemat</th>
                <th>ingreso</th>
                <th>egreso</th>

              </thead>

              <tbody>                            

              </tbody>
                          
            </table>

          </div>
          
          <div class="panel-body" style="height: 500px;" id="formularioregistros">
            
            <!--Formulario para agregar nuevos registros de licenciaturas-->
            <form name="formulario" id="formulario" method="POST">

              <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                
                <label style="color:#8a8a8a;">Cuenta<i style="color:#df0101;">*</i></label>

                <input type="hidden" name="idegresado" id="idegresado">
                
                <input type="text" class="form-control" name="cuenta" id="cuenta" maxlength="10" minlength="10" placeholder="Numero de cuenta" required>
              
              </div>
              
              <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                
                <label style="color:#8a8a8a;">Nombre<i style="color:#df0101;">*</i></label>
                
                <input type="text" class="form-control" name="nombre" id="nombre" maxlength="50" placeholder="Nombre del egresado" required>
              
              </div>
              
              <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                
                <label style="color:#8a8a8a;">Apellido Paterno<i style="color:#df0101;">*</i></label>
                
                <input type="text" class="form-control" name="apepat" id="apepat" maxlength="50" placeholder="Apellido paterno del egresado" required>
              
              </div>
              
              <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                
                <label style="color:#8a8a8a;">Apellido Materno:</label>
                
                <input type="text" class="form-control" name="apemat" id="apemat" maxlength="50" placeholder="Apellido materno del egresado">
              
              </div>

              <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                
                <label style="color:#8a8a8a;">Licenciatura<i style="color:#df0101;">*</i></label>

                <select name="licenciatura" id="licenciatura" class="form-control selectpicker" data-live-search="true" required>

                </select>  
                
              </div>

              <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                
                <label style="color:#8a8a8a;">Año de ingreso<i style="color:#df0101;">*</i></label>
                
                <input type="number" class="form-control" name="ingreso" id="ingreso" maxlength="4" minlength="4" placeholder="Año de ingreso" required>
              
              </div>

              <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                
                <label style="color:#8a8a8a;">Año de egreso<i style="color:#df0101;">*</i></label>
                
                <input type="number" class="form-control" name="egreso" id="egreso" maxlength="4" minlength="4" placeholder="Año de egreso" required>
              
              </div>

              <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                
                <button class="btn btn-success pull-right" type="submit" id="btnGuardar">

                  <i class="fa fa-save"></i> Guardar

                </button>

                <button class="btn btn-default" onclick="cancelarform()" type="button">

                  <i class="fa fa-arrow-circle-left"></i> Cancelar

                </button>
              
              </div>
            
            </form>
          
          </div>
                   
        </div>

      </div>

    </div>

  </section>

</div>

<script type="text/javascript" src="scripts/egresado.js"></script>