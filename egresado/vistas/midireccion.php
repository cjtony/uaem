<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">

      <h1>

        Tablero
        <small>Mi direccion</small>

      </h1>

      <ol class="breadcrumb">

        <li><a href="#"><i class="fa fa-home"></i> Inicio</a></li>

        <li class="active">Mi direccion</li>

      </ol>
      
    </section>

    <section class="content">

      <!--<div class="box-direccion">
      
      <div class="titulo">
            
        <p><b>¡<?php echo $nombre?></b> Los siguientes datos son los que proporcinaste a la hora de tu registro. Si deseas modificarlos da click en "Modificar"!</p>

      </div>  

      <!--=====================================
      FORMULARIO DE MI DIRECCION PARA SU ACTUALIZACION
      ======================================-->

      <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="form-horizontal form-midireccion">
          
          <p>Datos de dirección</p>

          <hr>
          
          <div class="form-group">

            <label class="control-label col-sm-2" style="color: #616A6B;">Estado:</label>

            <div class="col-sm-8">

              <select id="estado" class="form-control" name="idestado" disabled="">

                <option selected><?php echo $estado;?></option>

                  <?php

                    foreach($estados as $est){
                     echo "<option value=".$est[0].">".$est[1]."</option>";
                    }
                  
                  ?>

                </select>

            </div>

          </div>

          <div class="form-group">

            <label class="control-label col-sm-2" style="color: #616A6B;">Municipio:</label>

            <div class="col-sm-8"> 

              <select id="municipio" name="idmunicipio" class="form-control" disabled="">

                <option><?php echo $municipio;?></option>

              </select>

            </div>

          </div>

          <div class="form-group">

            <label class="control-label col-sm-2" style="color: #616A6B;">Colonia:</label>

            <div class="col-sm-8"> 

              <input type="text" class="form-control" id="colonia" name="colonia" onkeypress="return soloLetras(event)" disabled="" value="<?php echo $colonia;?>">

            </div>

          </div>

          <div class="form-group">

            <label class="control-label col-sm-2" style="color: #616A6B;">Calle:</label>

            <div class="col-sm-8"> 

              <input type="text" class="form-control" id="calle" name="calle" disabled="" value="<?php echo $calle;?>">

            </div>

          </div>

          <div class="form-group">

            <label class="control-label col-sm-2" style="color: #616A6B;">Numero interior:</label>

            <div class="col-sm-4"> 

              <input type="text" name="ninterior" maxlength="5" class="form-control" disabled="" value="<?php echo $ninterior;?>" id="ninterior">

            </div>

          </div>

          <div class="form-group">

            <label class="control-label col-sm-2" style="color: #616A6B;">Numero Exterior:</label>

            <div class="col-sm-4"> 

              <input type="text" name="nexterior" maxlength="5" class="form-control" disabled="" value="<?php echo $ninterior;?>" id="nexterior">

            </div>

          </div>
          
          <div class="form-group">

            <label class="control-label col-sm-2" style="color: #616A6B;">Codigo postal:</label>

            <div class="col-sm-4"> 

              <input type="text" name="cp" minlength="5" maxlength="6" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" class="form-control" disabled="" value="<?php echo $cp;?>" id="cp">

            </div>

          </div>

          <div class="form-group"> 

            <div class="col-sm-offset-2 col-sm-10">

              <input type="submit"  class="btn boton"  value="Guardar" name="guardar">

              <button type="button" class="btn boton modificar">Modificar</button>

            </div>
      
          </div>

      </form>

    </div>

    
    </section>

</div>