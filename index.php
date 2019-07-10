 <!DOCTYPE html>

<html lang="en">

<head>

	<meta charset="UTF-8">

	<title>Bienvenido al SSE</title>

	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <link rel="stylesheet" href="init/css/index.css">

  <link rel="stylesheet" href="init/css/animate.css">

  <link rel="stylesheet" href="public/css/bootstrap.min.css">

  <link rel="stylesheet" href="public/css/font-awesome.css">

  <link rel="stylesheet" href="public/css/AdminLTE.min.css">

  <link rel="stylesheet" href="public/css/_all-skins.min.css">

  <link rel="apple-touch-icon" href="public/img/apple-touch-icon.png">

  <link rel="shortcut icon" href="public/img/favicon.ico">

  <link rel="stylesheet" type="text/css" href="public/datatables/jquery.dataTables.min.css">    

  <link href="public/datatables/buttons.dataTables.min.css" rel="stylesheet"/>
  
  <link href="public/datatables/responsive.dataTables.min.css" rel="stylesheet"/>

  <link rel="stylesheet" href="public/css/bootstrap-select.css">

  <link rel="stylesheet" href="public/swal/sweetalert2.css">

  <script src="public/js/jquery.min.js"></script>

  <script src="public/js/bootstrap.min.js"></script>

  <script src="public/js/app.min.js"></script>

  <script src="public/datatables/jquery.dataTables.min.js"></script>    

  <script src="public/datatables/dataTables.buttons.min.js"></script>

  <script src="public/datatables/buttons.html5.min.js"></script>

  <script src="public/datatables/buttons.colVis.min.js"></script>

  <script src="public/datatables/jszip.min.js"></script>

  <script src="public/datatables/pdfmake.min.js"></script>

  <script src="public/datatables/vfs_fonts.js"></script> 

  <script src="public/js/bootbox.min.js"></script> 

  <script src="public/js/bootstrap-select.js"></script>

  <script src="public/swal/sweetalert2.js"></script>

</head>

<body>

	<div id="inicio">
		
		<button class="btn btn-success btnintro btn-lg">¿Que somos?</button>

		<div>
			
			<a href="#" data-toggle="modal" data-target="#modalLogin">Iniciar Sesion</a>
			<a href="#" data-toggle="modal" data-target="#modalRegistro">Registrarme</a>

		</div>

	</div>	
	
</body>

</html>

<!--=====================================
MODAL OPCION DE REGISTRO
======================================-->
<div id="modalRegistro" class="modal" role="dialog" data-backdrop="false">

  <div class="modal-dialog">

    <div class="modal-content" style="width:650px;">

      <div class="modal-header" style="background:#3C6943; color:#fff;padding:2px 10px;">

        <button type="button" class="close" data-dismiss="modal">&times;</button>

        <h3 class="text-center" style="color:#fff;"><i class="fa fa-user-plus"></i>Modulo de registro</h3>

      </div>

      <div class="modal-body">

      	<div class="row" id="tipoRegistro">

          <h4 class="text-center text-success">¿Quien eres?</h4>

      		<div class="tusuario col-lg-6 col-xs-6" style="text-align: center;">

      			<h1 style="font-size: 40pt; color:#8a8a8a;"><i class="fa fa-users"></i></h1>
      			
      			<button class="btn btn-default" id="rUsuario"><i class="fa fa-user-plus"> Soy egresado</i></button>

      		</div>

      		<div class="tusuario col-lg-6 col-xs-6" style="text-align: center;">

      			<h1 style="font-size: 40pt; color:#8a8a8a;"><i class="fa fa-industry"></i></h1>
      			
      			<button class="btn btn-default" id="rEmpresa"><i class="fa fa-industry"> Soy empresa</i></button>

      		</div>

      	</div>

		    <div id="registroUsuario">
      		
      	 <form name="register" id="register" method="POST" style="width:600px; margin:auto;">
    
          <p style="font-size:14pt;color:#3C6943;"><i class="fa fa-arrow-circle-right"></i> Proporcionanos tus datos!</p>

          <p style="color:#385D3D;">Numero de cuenta<b>*</b></p>
          <select name="idegresado" id="idegresado" class="form-control selectpicker" data-live-search="true"></select>

          <p style="color:#385D3D;">Nombre<b>*</b></p>
          <div id="nombre"></div>

          <p style="color:#385D3D;">Correo<b>*</b></p>
          <input type="email" name="correo" id="correo" class="form-control" placeholder="ejemplo.2018@gmail.com" required>

          <p style="color:#385D3D;">Contraseña<b>*</b></p>
          <input type="password" name="password" id="password" class="form-control" onkeyup="VerificarPass()" placeholder="Ingrese una contraseña">

          <p style="color:#385D3D;">Confirmar contraseña<b>*</b></p>
          <input type="password" name="cpassword" id="cpassword" class="form-control" onkeyup="VerificarPass()" placeholder="Confirme su contraseña">
          <br>

          <div name="mensaje" id="mensaje">
            
          </div><br>

          <button type="submit" class="btn btn-success pull-right" id="btnGuardar"><i class="fa fa-save" style="margin-right:10px;"></i>Registrar</button>

          <button type="button" class="btn btn-default" onclick="cancelarRegistroEgresado()"><i class="fa fa-arrow-circle-left" style="margin-right:10px;"></i>Cancelar</button>

          </form>

        </div>

        <div id="registroEmpresa">
            
          <form name="registerEmpresa" id="registerEmpresa" method="POST" style="width:600px; margin:auto;">
            
            <p style="font-size:14pt;color:#3C6943;"><i class="fa fa-arrow-circle-right"></i> Datos de la empresa</p>

            <p style="color:#385D3D;">Nombre de la empresa <b>*</b></p>
            <input type="text" name="nombreemp" id="nombreemp" class="form-control" placeholder="Nombre de la empresa" required>

            <p style="color:#385D3D;">Telefono <b>*</b></p>
            <input type="text" name="telefonoemp" id="telefonoemp" class="form-control" placeholder="Telefono de la empresa" required>

            <p style="color:#385D3D;">Página web de la empresa</p>
            <input type="text" name="pagemp" id="pagemp" class="form-control" placeholder="www.ejemplo.com.mx">

            <p style="color:#385D3D;">Estado <b>*</b></p> 
            <select name="idestado" id="idestado" class="form-control selectpicker" data-live-search="true" required>
              
            </select>

            <p style="color:#385D3D;">Municipio <b>*</b></p> 
            <select name="idmunicipio" id="idmunicipio" class="form-control selectpicker" data-live-search="true" required>
              <option>--Seleccione su municipio--</option>
            </select>

            <p style="color:#385D3D;">Colonia <b>*</b></p>
            <input type="text" name="coloniaemp" id="coloniaemp" class="form-control" placeholder="Colonia donde se ubica la empresa" required>
            
            <div class="form-row">

              <div class="form-group col-md-6">
                <p style="color:#385D3D;">Codigo postal <b>*</b></p>
                <input type="text" name="cpemp" id="cpemp" class="form-control" placeholder="Codigo postal empresa" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" required>
              </div>
            
              <div class="form-group col-md-6">
                <p style="color:#385D3D;">Calle</p>
                <input type="text" name="calleemp" id="calleemp" class="form-control" placeholder="Calle donde se ubica la empresa">
              </div>

            </div>
            
            <div class="form-row">

              <div class="form-group col-md-6">
                <p style="color:#385D3D;">Numero interior</p>
                <input type="text" name="numintemp" id="numintemp" class="form-control" placeholder="Numero interior de la empresa">
              </div>
              
              <div class="form-group col-md-6">
                <p style="color:#385D3D;">Numero exterior</p>
                <input type="text" name="numextemp" id="numextemp" class="form-control" placeholder="Numero exterior de la empresa">
              </div>

            </div>

            <div class="form-row">

              <div class="form-group col-md-6">
                <p style="color:#385D3D;">Año de creacion <b>*</b></p>
                <input type="text" name="acreacionemp" id="acreacionemp" class="form-control" placeholder="Año de creacion de la empresa" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" required>
              </div>

              <div class="form-group col-md-6">  
                <p style="color:#385D3D;">Numero de empleados <b>*</b></p>
                <input type="text" name="numempemp" id="numempemp" class="form-control" placeholder="Numero de empleados en la empresa" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" required>
              </div>

            </div>

            <hr>

            <p style="font-size:14pt;color:#3C6943;"><i class="fa fa-arrow-circle-right"></i> Datos para la cuenta de la empresa</p>

            <p style="color:#385D3D;">Correo<b>*</b></p>
            <input type="text" name="correoemp" id="correoemp" class="form-control" placeholder="ejemplo.2018@gmail.com" required>

            <p style="color:#385D3D;">Contraseña<b>*</b></p>
            <input type="password" name="passwordemp" id="passwordemp" class="form-control" placeholder="Ingrese una contraseña" onkeyup="VerificarPassEmp()" required>

            <p style="color:#385D3D;">Confirmar contraseña<b>*</b></p>
            <input type="password" name="cpasswordemp" id="cpasswordemp" class="form-control" placeholder="Confirme la contraseña" onkeyup="VerificarPassEmp()" required>
            <br>

            <div id="mensajeemp">
              
            </div> 

            <br><br>

            <button type="button" class="btn btn-default" onclick="cancelarform()"><i class="fa fa-arrow-circle-left"></i> Cancelar</button>

            <button class="btn btn-success pull-right" id="btnRegistrar" onclick="RegistrarEmpresas()"><i class="fa fa-save"></i>Guardar</button>


          </form>

        </div>    

      </div>

      <div class="modal-footer">
		
		<p><i class=" fa fa-arrow-right"></i> Sistema segumiento de egresados (<b>SSE</b>)</p>

      </div>

    </div>

  </div>

</div>

<!--=====================================
MODAL DE LOGIN
======================================-->

<div id="modalLogin" class="modal fade" role="dialog" data-backdrop="false">

  <div class="modal-dialog">

    <div class="modal-content">

      <div class="modal-header" style="background:#3C6943; color:#fff;padding:2px 10px;">

        <button type="button" class="close" data-dismiss="modal">&times;</button>

        <h3 class="text-center"><i class="fa fa-user-secret" style="margin-right:10px;"></i>Inicio de sesion</h3>

      </div>

      <div class="modal-body">
        
        <form name="formLogin" id="formLogin" method="POST" style="width:500px;margin:auto;">

          <br>
          <label style="color:#8a8a8a;">Correo</label>
          <input type="email" name="correol" id="correol" class="form-control" placeholder="ejemplo2018@gmail.com" required>
          <br>

          <label style="color:#8a8a8a;">Contraseña</label>
          <input type="password" name="passwordl" id="passwordl" class="form-control" placeholder="Escriba su contraseña" required>
          <br>
          
          <div class="text-center ocult" id="loadGif">
            <img src="public/img/load4.gif" width="200">
            <h4 class="font-weight-bold">Validando información...</h4>
          </div>

          <div id="mensaje1" style="display:none;font-size:12pt;border-bottom:1px solid red;padding:5px;">
            <p style="color:red;"><i class="fa fa-exclamation-circle"></i> Las credenciales no son validades</p>
          </div><br>

          <button class="btn btn-default" data-dismiss="modal" onclick="cancelarLogin()"><i class="fa fa-arrow-circle-left" ></i> Cancelar</button>

          <button class="btn btn-success pull-right" id="btnIngresar" type="submit"><i class=" fa fa-arrow-right"></i> Ingresar</button>
          <br>

        </form>
        
      </div>

      <div class="modal-footer">
    
        <p><i class=" fa fa-arrow-right"></i> Sistema segumiento de egresados (<b>SSE</b>)</p>

      </div>

    </div>

  </div>

</div>


<script src="scripts/index.js"></script>
<script src="scripts/login.js"></script>



