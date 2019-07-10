<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">

      <h1>

        Tablero
        <small>Datos personales</small>

      </h1>

      <ol class="breadcrumb">

        <li><a href="#"><i class="fa fa-home"></i> Inicio</a></li>

        <li class="active">Datos personales</li>

      </ol>
      
    </section>

    <section class="content">

      <div class="box-direccion">
      
      <div class="titulo">
            
        <p><b>¡<?php echo $nombre?></b> Los siguientes datos son los que proporcinaste a la hora de tu registro. Si deseas modificarlos da click en "Modificar"!</p>

      </div>  

      <!--=====================================
      FORMULARIO DE MI DIRECCION PARA SU ACTUALIZACION
      ======================================-->

      <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="form-horizontal form-midireccion">
          
          <p>Datos personales</p>

          <hr>
          
          <div class="form-group">

            <label class="control-label col-sm-2" style="color: #616A6B;">Nombre:</label>

            <div class="col-sm-8">

              <input type="text" class="form-control" id="nombrep" name="nombrep" onkeypress="return soloLetras(event)" disabled="" value="<?php echo $nombrep;?>">

            </div>

          </div>

          <div class="form-group">

            <label class="control-label col-sm-2" style="color: #616A6B;">Apellido paterno:</label>

            <div class="col-sm-8"> 

              <input type="text" class="form-control" id="apepatp" name="apepatp" onkeypress="return soloLetras(event)" disabled="" value="<?php echo $apepatp;?>">

            </div>

          </div>

          <div class="form-group">

            <label class="control-label col-sm-2" style="color: #616A6B;">Apellido materno:</label>

            <div class="col-sm-8"> 

              <input type="text" class="form-control" id="apematp" name="apematp" onkeypress="return soloLetras(event)" disabled="" value="<?php echo $apematp;?>">

            </div>

          </div>

          <div class="form-group">

            <label class="control-label col-sm-2" style="color: #616A6B;">Edad:</label>

            <div class="col-sm-8"> 

              <input type="text" class="form-control" id="edadp" name="edadp" disabled="" value="<?php echo $edadp;?>" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;">

            </div>

          </div>

          <div class="form-group">

            <label class="control-label col-sm-2" style="color: #616A6B;">Sexo:</label>

            <div class="col-sm-4"> 

              <input type="text" name="sexop"  class="form-control" disabled="" value="<?php echo $sexop;?>" id="sexop">

            </div>

          </div>

          <div class="form-group">

            <label class="control-label col-sm-2" style="color: #616A6B;">Telefono:</label>

            <div class="col-sm-4"> 

              <input type="text" name="telefonop" maxlength="5" class="form-control" disabled="" value="<?php echo $telefonop;?>" id="telefonop">

            </div>

          </div>
         
          <div class="form-group"> 

            <div class="col-sm-offset-2 col-sm-10">

              <input type="submit"  class="btn boton"  value="Guardar" name="guardarp">

              <button type="button" class="btn boton modificarp">Modificar</button>

            </div>
      
          </div>

      </form>

    </div>

    </section>

</div>