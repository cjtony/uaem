<div class="content-wrapper">        
        
  <section class="content">
    
    <div class="row">
      
      <div class="col-md-12">
        
        <div class="box">
          
          <!--Encabezado de licenciaturas-->
          <div class="box-header with-border">
          
            <h1 class="box-title">
              
              <i class="fa fa-arrow"></i>

              Mi direccion 

            </h1>

            <div class="box-tools pull-right">

            </div>

          </div>
          
          <!--Cuerpo del apartado de licenciaturas-->          
          <div class="panel-body">
            
            <form name="direccion" id="direccion" method="POST">
            
              <p style="font-size:14pt;color:#3C6943;"><i class="fa fa-arrow-circle-right"></i> Proporcionanos tus datos de direccion</p>

              <input type="hidden" name="idegresado" id="idegresado" value="<?php echo $idegresado;?>">

              <input type="hidden" name="iddir" id="iddir">
              
              <div class="row">

                <div class="col-lg-6 col-md-6 col-sm-6">
                  
                  <p style="color:#385D3D;">Estado <b>*</b></p> 
                  <select name="idestado" id="idestado" class="form-control" required>
                    
                  </select>

                </div>

                <div class="col-lg-6 col-md-6 col-sm-6">

                  <p style="color:#385D3D;">Municipio <b>*</b></p> 
                  <select name="idmunicipio" id="idmunicipio" class="form-control" required>
                    <option>--Seleccione su municipio--</option>
                  </select>

                </div>

              </div>

              <p style="color:#385D3D;">Colonia <b>*</b></p>
              <input type="text" name="colonia" id="colonia" class="form-control" placeholder="Colonia" required>
              
              <div class="row">

                <div class="form-group col-md-6">
                  <p style="color:#385D3D;">Codigo postal <b>*</b></p>
                  <input type="text" name="cp" id="cp" class="form-control" placeholder="Codigo postal" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" required>
                </div>
              
                <div class="form-group col-md-6">
                  <p style="color:#385D3D;">Calle <b>*</b></p>
                  <input type="text" name="calle" id="calle" class="form-control" placeholder="Calle" required>
                </div>

              </div>
              
              <div class="row">

                <div class="form-group col-md-6">
                  <p style="color:#385D3D;">Numero interior <b>*</b></p>
                  <input type="text" name="ninterior" id="ninterior" class="form-control" placeholder="Numero interior" required>
                </div>
                
                <div class="form-group col-md-6">
                  <p style="color:#385D3D;">Numero exterior <b>*</b></p>
                  <input type="text" name="nexterior" id="nexterior" class="form-control" placeholder="Numero exterior" required>
                </div>

              </div>

              <hr>

              <br><br>

              <input type="submit" class="btn btn-success pull-right" id="btnGuardar" value="Guardar">


            </form>
          
          </div>
                   
        </div>

      </div>

    </div>

  </section>

</div>

<script type="text/javascript" src="scripts/direccion.js"></script>


