<div class="content-wrapper">        
        
  <section class="content">
    
    <div class="row">
      
      <div class="col-md-12">
        
        <div class="box">
          
          <!--Encabezado de licenciaturas-->
          <div class="box-header with-border">
          
            <h1 class="box-title">Lincenciaturas 

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

                <th>Opciones</th>
                <th>Nombre</th>
                <th>Descripción</th>

              </thead>

              <tbody>                            

              </tbody>
                          
            </table>

          </div>
          
          <div class="panel-body" style="height: 400px;" id="formularioregistros">
            
            <!--Formulario para agregar nuevos registros de licenciaturas-->
            <form name="formulario" id="formulario" method="POST">
              
              <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                
                <label style="color:#8a8a8a;">Nombre<i style="color:#df0101;">*</i></label>
                
                <input type="hidden" name="idlic" id="idlic">
                
                <input type="text" class="form-control" name="nombre" id="nombre" maxlength="50" placeholder="Nombre de la licenciatura" required>
              
              </div>
              
              <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                
                <label style="color:#8a8a8a;">Descripción:</label>
                
                <input type="text" class="form-control" name="descripcion" id="descripcion" maxlength="256" placeholder="Descripción">
              
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

<script type="text/javascript" src="scripts/licenciatura.js"></script>