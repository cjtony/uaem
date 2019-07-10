function init()
{	
	//Llamamos nuestra funcion para mostrar los dato personales del administrador
	MostrarDatosPersonales();

	//Llamamos la funcion que muestra los estados
	ListarEstados();

	//Desabilatamos nuestro boton de guardar por defecto
	$("#btnGuardarPass").prop("disabled", true);

	//Llamamos nuestra funcion para actulizar la contraseña
	$("#formPass").on("submit", function(e){
		ActualizarPass(e);
	});

	//Creamos una funcion para mostrar los municipios del estado seleccionado
	$("#idestado").change(function(){
		var idestado = $("#idestado").val();

		$.ajax({
			url: "../ajax/dpersonales.php?op=mostrarMunicipios",
			type: "POST",
			data: {idestado:idestado},
			success: function(r)
			{
				$("#idmunicipio").html(r);
			}
		});
	});
}

//Creamos una funcion para mostrar los datos de la administrador
function MostrarDatosPersonales()
{	
	var id = $("#idadmin").val();
	//alert(id);return false;
	$.ajax({
		url: "../ajax/dpersonales.php?dato=MostrarDatosPersonales",
		type: "POST",
		data: {id:id},
		success: function(e)
		{
			data = JSON.parse(e);
			var d = data.idestado;
			$("#nombre").val(data.nombre);
			$("#apepat").val(data.apepat);
			$("#apemat").val(data.apemat);
			$("#telefono").val(data.telefono);	
			$("#edad").val(data.edad);
			$("#idestado > option[value="+data.idestado+"]").attr("selected",true);
			$("#idmunicipio").html("<option>"+data.municipio+"</option>");
			$("#colonia").val(data.colonia);
			$("#calle").val(data.calle);
			$("#correo").val(data.correo);
		}
	});
}

//Creamos una funcion para comparar si la contraseña nueva es diferente a la actual
function CompararPassword()
{	
	var password = $("#password").val();
	var passactual = $("#passactual").val();

	if (passactual != "") {

		if(password == passactual)
		{
			$("#intro").hide();
			$("#nueva").show();
			$("#mensaje").text("Bien! ahora escribe tu nueva contraseña").css({"color":"green","border-bottom":"1px solid green","padding":"5px","font-size":"12pt"});

		}else{
			$("#nueva").hide();
			$("#intro").show();
			$("#mensaje").text("La contraseña es incorrecta").css({"color":"red","border-bottom":"1px solid red","padding":"5px","font-size":"12pt"});

		}

	}else{
		$("#mensaje").text("");
		$("#intro").show();
	}
}

//Creamos un funcion para validar la contraseña ingresada
function ValidarNuevaPassword()
{
	var password = $("#password").val();
	var npassword = $("#npassword").val();
	var cpassword = $("#cpassword").val();

	if(cpassword.length > 0){
		if(npassword.length < 6){
	
			$("#mensaje2").text("La contraseña debe tener al menos 6 caracteres.").css({"color":"red","border-bottom":"1px solid red","padding":"5px","font-size":"12pt"}).show();
			$("#btnGuardarPass").prop("disabled",true);
		}else{
			if(password == npassword){
				$("#mensaje2").text("Las contraseña debe ser diferente a la actual.").css({"color":"red","border-bottom":"1px solid red","padding":"5px","font-size":"12pt"}).show();
				$("#btnGuardarPass").prop("disabled",true);	
			}else{
				if (npassword == cpassword) 
				{
					$("#mensaje2").text("Bien! Las contraseñas coinciden.").css({"color":"green","border-bottom":"1px solid green","padding":"5px","font-size":"12pt"}).show();
					$("#btnGuardarPass").prop("disabled",false);
				}else
				{
					$("#mensaje2").text("Las contraseñas no coinciden.").css({"color":"red","border-bottom":"1px solid red","padding":"5px","font-size":"12pt"}).show();
					$("#btnGuardarPass").prop("disabled",true);
				}
			}
		}
	}
}

//Creamos un funcion para actualizar nuestra contraseña
function ActualizarPass(e)
{	
	e.preventDefault();

	var datos = $("#formularioPass").serialize();
	//alert(datos);return false;
	$.ajax({
		url: "../ajax/dpersonales.php?dato=ActualizarPass",
		type: "POST",
		data: datos,
		success: function(e)
		{
			swal({
				title: "Aviso",
				type: "info",
				text: e,
				confirmButtonText: "Entendido",
				confirmButtonColor: "#3C6943"

			}).then(function(){
				window.location = "cerrarSesion.php";
			});
		}
	});
}

//Creamos una funcion para mostrar los estados
function ListarEstados()
{
	$.ajax({
		url: "../ajax/dpersonales.php?dato=ListarEstados",
		type: "GET",
		success: function(r)
		{
			$("#idestado").html(r);
			//$("#idestado").selectpicker('refresh');
		}
	});
}

//Creamos una funcion para mostrar los municipios relacionados al estado seleccionado


init();

