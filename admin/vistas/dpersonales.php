<div class="content-wrapper">        
        
  <section class="content">
    
    <div class="row">
      
      <div class="col-md-12">
        
        <div class="box">
          
          <!--Encabezado de datos personales-->
          <div class="box-header with-border">
          
            <h1 class="box-title">

              Datos personales del administrador 

              <?php 
                $idadmin = $_SESSION["id"];
                $password = $_SESSION["pass"];
              ?>

            </h1>

            <div class="box-tools pull-right">

            </div>

          </div>
          
          <!--Cuerpo del apartado de datos personales-->          
          <div class="panel-body">
  
            <!--Formulario para agregar nuevos registros de licenciaturas-->
            <form name="formulario" id="formulario" method="POST">

              <input type="hidden" id="idadmin" value="<?php echo $idadmin?>">
              
              <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                
                <label style="color:#8a8a8a;">Nombre</label>
                
                <input type="text" class="form-control" name="nombre" id="nombre" required>
              
              </div>
              
              <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                
                <label style="color:#8a8a8a;">Apellido paterno</label>
                
                <input type="text" class="form-control" name="apepat" id="apepat">
              
              </div>
              
              <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                
                <label style="color:#8a8a8a;">Apellido materno</label>
                
                <input type="text" class="form-control" name="apemat" id="apemat">
              
              </div>

              <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                
                <label style="color:#8a8a8a;">Sexo</label>
                
                <select name="sexo" id="sexo" class="form-control selectpicker" data-live-search="true" required>
                  <option value="Masculino">Masculino</option>
                  <option value="Femenino">Femenino</option>
                </select>
              
              </div>

              <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                
                <label style="color:#8a8a8a;">Edad</label>
                
                <input type="text" name="edad" id="edad" class="form-control">
              
              </div>

              <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                
                <label style="color:#8a8a8a;">Telefono</label>
                
                <input type="text" class="form-control" name="telefono" id="telefono" maxlength="10" minlength="10">
              
              </div>

              <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                
                <label style="color:#8a8a8a;">Estado</label>
                
                <select name="idestado" id="idestado" class="form-control">
                  <option value=""></option>
                </select>
              
              </div>

              <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                
                <label style="color:#8a8a8a;">Municipio</label>
                
                <select name="idmunicipio" id="idmunicipio" class="form-control">
                  
                </select>
              
              </div>

              <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                
                <label style="color:#8a8a8a;">Colonia</label>
                
                <input type="text" class="form-control" name="colonia" id="colonia" required>
              
              </div>

              <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                
                <label style="color:#8a8a8a;">Calle</label>
                
                <input type="text" class="form-control" name="calle" id="calle" required>
              
              </div>

              <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                
                <label style="color:#8a8a8a;">Correo</label>
                
                <input type="text" class="form-control" name="correo" id="correo">
              
              </div>

              <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
               
                <a href=""data-toggle="modal" data-target="#formPass">¡Cambiar de contraseña!</a>
              
              </div>

              <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                
                <button class="btn btn-success pull-right" type="submit" id="btnGuardar">

                  <i class="fa fa-save"></i> Guardar

                </button>
              
              </div>
            
            </form>

          </div>
          
        </div>

      </div>

    </div>

  </section>

</div>

<!--=====================================
MODAL PARA EDITAR LA CONTRASEÑA
======================================-->
<div id="formPass" class="modal fade" role="dialog" data-backdrop="false">

  <div class="modal-dialog">

    <div class="modal-content">

      <div class="modal-header" style="background:#3C6943; color:#fff;padding:2px 10px;">

        <button type="button" class="close" data-dismiss="modal">&times;</button>

        <h3 class="text-center" style="color:#fff;"><i class="fa fa-user-secret"></i> Mi contraseña</h3>

      </div>

      <div class="panel-body table-responsive">

        <form id="formularioPass" method="POST">

          <input type="hidden" name="id" id="id" value="<?php echo $idadmin;?>">

          <p id="intro" style="color:#3C6943;font-size:12pt;">¡Para actualizar su contraseña, debe introducir la contraseña actual!</p>

          <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                
            <label style="color:#8a8a8a;">Contraseña actual<i style="color:#df0101;">*</i></label>
            <input type="hidden" name="password" id="password" value="<?php echo $password;?>">
            <input type="password" class="form-control" name="passactual" id="passactual"placeholder="Contraseña actual" onkeyup="CompararPassword();">
              
          </div>

          <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                
              <div id="mensaje"></div>
              
          </div>

          <div id="nueva" style="display:none;">
            
            <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                
              <label style="color:#8a8a8a;">Nueva contraseña<i style="color:#df0101;">*</i></label>
              <input type="password" name="npassword" id="npassword" class="form-control" onkeyup="ValidarNuevaPassword()">

            </div>

            <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                
              <label style="color:#8a8a8a;">Confirmar contraseña<i style="color:#df0101;">*</i></label>
              <input type="password" name="cpassword" id="cpassword" class="form-control" onkeyup="ValidarNuevaPassword()">

            </div>

            <div id="mensaje2"></div><br>

            <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">

                <input class="btn btn-success pull-right" type="submit" name="btnGuardarPass" id="btnGuardarPass" value="Guardar">
              
            </div>

          </div>

        </form>

      </div>

    </div>

  </div>

</div>

<script type="text/javascript" src="scripts/dpersonales.js"></script>