function init()
{

	ListarEgresados();

	ListarEstados();

	//mandamos a llamr nuestra funcion guardar egresado cuando presione el boton de guardar
	$("#register").on("submit", function(e){
		RegistrarEgresados(e);
	});


	$("#registroUsuario").hide();

	$("#registroEmpresa").hide();

	$("#mensaje").hide();

	$("#btnGuardar").prop("disabled",true);

	$("#btnRegistrar").prop("disabled",true);

	//funcion para mostrar el formulario de registro de usuarios
	$("#rUsuario").click(function(){
		$("#registroUsuario").show();
		$("#tipoRegistro").hide();	
	});

	//funcion para mostrar el formulario de registro de empresas
	$("#rEmpresa").click(function(){
		$("#registroEmpresa").show();
		$("#tipoRegistro").hide();
	});

	//funcion para mostrar el noombre del egresado de acuerdo al num de cuenta ingresado
	$("#idegresado").change(function(){
		var idegresado = $("#idegresado").val();

		$.ajax({
			url: "ajax/index.php?dato=mostrarNombre",
			type: "POST",
			data: {idegresado:idegresado},
			success: function(r)
			{
				$("#nombre").html(r);
			}
		});
	});

	//funcion para mostrar los municipios del estado seleccionado
	$("#idestado").change(function(){
		var idestado = $("#idestado").val();

		$.ajax({
			url: "ajax/index.php?dato=mostrarMunicipios",
			type: "POST",
			data: {idestado:idestado},
			success: function(r)
			{
				$("#idmunicipio").html(r);
				$("#idmunicipio").selectpicker('refresh');
			}
		});
	});

}

//funcion para cancelar login y limpiar los campos
function cancelarLogin()
{
	$("#passwordl").val("");
	$("#correol").val("");
	$("#mensaje1").hide();
}

//funcion para cancelar el registro de egresado
function cancelarRegistroEgresado()
{
	cancelarform();
	$("#correo").val("");
	$("#password").val("");
	$("#cpassword").val("");
	$("#mensaje").hide("");
}
//funcion para cancelar el registro de usuario y mostrar de nuevo la div de opciones
function cancelarform()
{
	$("#registroUsuario").hide();
	$("#registroEmpresa").hide();
	$("#tipoRegistro").show();
}

//funcion para listar los egresados registrados en el sistema
function ListarEgresados()
{
	$.ajax({
		url: "ajax/index.php?dato=listar",
		type: "GET",
		data: "?dato=listar",
		success: function(r){
			$("#idegresado").html(r);
			$("#idegresado").selectpicker('refresh');
		}
	});
}
//funcion para verificar la contaseña
function VerificarPass()
{
	var password = $("#password").val();
	var cpassword = $("#cpassword").val();

	if(cpassword.length > 0){
		if(password.length < 6){
	
			$("#mensaje").text("La contraseña debe tener al menos 6 caracteres.").css({"color":"red","border-bottom":"1px solid red","padding":"5px","font-size":"12pt"}).show();
			$("#btnGuardar").prop("disabled",true);
		}else{
			if (password == cpassword) 
			{
				$("#mensaje").text("Bien! Las contraseñas coinciden.").css({"color":"green","border-bottom":"1px solid green","padding":"5px","font-size":"12pt"}).show();
				$("#btnGuardar").prop("disabled",false);
			}else
			{
				$("#mensaje").text("Las contraseñas no coinciden.").css({"color":"red","border-bottom":"1px solid red","padding":"5px","font-size":"12pt"}).show();
				$("#btnGuardar").prop("disabled",true);
			}
		}
	}
}
//funcion para registrar el egresado
function RegistrarEgresados(e)
{
	e.preventDefault();
	$("#btnGuardar").prop("disabled", true);

	var valores = $("#register").serialize();

	$.ajax({
		url: "ajax/index.php?dato=registrar",
		type: "POST",
		data: valores,
		success: function(datos)
		{
			swal({
				type: 'success',
				title: 'Registro exitoso!',
				text: 'Ya puedes iniciar sesion'
			}).then(function(){
    			window.location = "index.php";
			});
		}
	});
	
}

//funcion para registrar emmpresas al sistema
function RegistrarEmpresas()
{
	$("#btnRegistrar").prop("disabled",true);

	var datosEmpresa = $("#registerEmpresa").serialize();

	$.ajax({
		url: "ajax/index.php?dato=registrarempresas",
		type: "POST",
		data: datosEmpresa,	
		success: function(datos)
		{
			swal({
				type: 'success',
				title: 'Bien!',
				text: 'La empresa se registro con exito',
				confirmButtonText: 'Entendido',
				confirmButtonColor:'#3C6943'
			}).then(function(){
    			window.location = "index.php";
			});
		}
	})
}

//funcion para listar los estados de mexico 
function ListarEstados()
{
	$.ajax({
		url: "ajax/index.php?dato=listarestados",
		type: "GET",
		data: "?dato=listarestados",
		success: function(r){
			$("#idestado").html(r);
			$("#idestado").selectpicker('refresh');
		}
	});
}

//funcion para verificar la contraseñas de la empresa
function VerificarPassEmp()
{
	var passwordemp = $("#passwordemp").val();
	var cpasswordemp = $("#cpasswordemp").val();

	if(cpasswordemp.length > 0){
		if(passwordemp.length < 6){
	
			$("#mensajeemp").text("La contraseña debe tener al menos 6 caracteres.").css({"color":"red","border-bottom":"1px solid red","padding":"5px","font-size":"12pt"}).show();
			$("#btnRegistrar").prop("disabled",true);
		}else{
			if (passwordemp == cpasswordemp) 
			{
				$("#mensajeemp").text("Bien! Las contraseñas coinciden.").css({"color":"green","border-bottom":"1px solid green","padding":"5px","font-size":"12pt"}).show();
				$("#btnRegistrar").prop("disabled",false);
			}else
			{
				$("#mensajeemp").text("Las contraseñas no coinciden.").css({"color":"red","border-bottom":"1px solid red","padding":"5px","font-size":"12pt"}).show();
				$("#btnRegistrar").prop("disabled",true);
			}
		}
	}
}

init();