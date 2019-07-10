<div id="perfil" class="modal fade" role="dialog">

  <div class="modal-dialog">
    
    <!--=====================================
    CONTENIDO DE LA MODAL
    ======================================-->    

    <div class="modal-content">
      
      <!--=====================================
      TITULO DE LA MODAL
      ======================================-->
    
      <div class="modal-header" style="background:#3C6943;">
        
        <button type="button" class="close" data-dismiss="modal">&times;</button>

        <h4 class="modal-title" style="text-align:center;color:#fff;">

          <img src="../img/user.png" width="40" height="40">

          Perfil de: <b><?php echo $nombre;?></b>

        </h4>

      </div>

      <!--=====================================
      CUERPO DE LA MODAL
      ======================================-->

      <div class="modal-body">
        
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="form-horizontal">
          
          <div class="form-group">
            
            <label class="control-label col-sm-3" style="color: #616A6B;">Correo:</label>

            <div class="col-sm-8">
              
              <input type="text" readonly class="form-control" value="<?php echo $correo; ?>">

            </div>

          </div>

          <p style="color:#3C6943; text-align: center;">Si deseas cambiar la contraseña llevas los siguentes campos</p>

          <div class="form-group">
            
            <label class="control-label col-sm-3" style="color: #616A6B;">Actual:</label>

            <div class="col-sm-8">
              
              <input type="hidden" name="passbd" value="<?php echo $pass;?>" id="pbd">

              <input type="password" class="form-control" name="pactual" placeholder="Ingresa tu contraseña actual" onkeyup="verificarPass()" id="pactual">

            </div>

          </div>

          <div class="form-group">
            
            <label class="control-label col-sm-3" style="color: #616A6B;">Nueva:</label>

            <div class="col-sm-8">
              
              <input type="password" class="form-control" name="pnueva" placeholder="Ingresa tu nueva contraseña" id="pnueva" disabled>

            </div>

          </div>

          <div class="form-group">
            
            <label class="control-label col-sm-3" style="color: #616A6B;">Confirmar:</label>

            <div class="col-sm-8">
              
              <input type="password" class="form-control" name="pconfirmar" id="pconfirmar" placeholder="Confirma tu contraseña" disabled onkeyup="verificarPass()">

            </div>

          </div>

          <div class="form-group">
        
            <label class="control-label col-sm-3" style="display: none; color: #616A6B;" id="text-men"> Mensaje:</label>

              <div class="col-sm-8">  
          
                <div class="mensaje"></div>

              </div>

          </div>

          <div class="modal-footer">
        
            <input type="submit" name="cambioPass" class="btn btn-default" value="Guardar" id="btnSend" disabled>

            <button type="button" class="btn boton" data-dismiss="modal">Cerrar</button>

          </div>

        </form>

      </div>

    </div>

  </div>
  
</div>
