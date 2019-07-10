var tabla;

//Función que se ejecuta al inicio
function init(){
	mostrarform(false);
	listar();
	ListarEstados();
	$("#formulario").on("submit",function(e)
	{
		guardaryeditar(e);	
	});

	//funcion para mostrar los municipios del estado seleccionado
	$("#idestado").change(function(){
		var idestado = $("#idestado").val();

		$.ajax({
			url: "../ajax/administradores.php?op=mostrarMunicipios",
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

//Función limpiar
function limpiar()
{
	$("#nombre").val("");
	$("#apepat").val("");
	$("#apemat").val("");
	$("#sexo").val("");
	$("#edad").val("");
	$("#telefono").val("");
	$("#idmunicipio").val("");
	$("#idestado").val("");
	$("#colonia").val("");
	$("#correo").val("");
	$("#password").val("");
	$("#cpassword").val("");
	$("#idadmin").val("");
}

//Función mostrar formulario
function mostrarform(flag)
{
	limpiar();
	if (flag)
	{
		$("#listadoregistros").hide();
		$("#formularioregistros").show();
		$("#btnGuardar").prop("disabled",true);
		$("#btnagregar").hide();
	}
	else
	{
		$("#listadoregistros").show();
		$("#formularioregistros").hide();
		$("#btnagregar").show();
	}
}
//Funcion para validar las contraseñas
function ValidarPass()
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

//Función cancelarform
function cancelarform()
{
	limpiar();
	mostrarform(false);
	$("#mensaje").hide();
}

//Función Listar
function listar()
{
	tabla = $('#tbllistado').dataTable(
	{
		"aProcessing": true,//Activamos el procesamiento del datatables
	    "aServerSide": true,//Paginación y filtrado realizados por el servidor
	    dom: 'Bfrtip',//Definimos los elementos del control de tabla
	    buttons: [		          
		            'copyHtml5',
		            'excelHtml5',
		            'csvHtml5',
		            'pdf'
		        ],
		"ajax":
				{
					url: '../ajax/administradores.php?op=listar',
					type : "get",
					dataType : "json",						
					error: function(e){
						console.log(e.responseText);	
					}
				},
		"bDestroy": true,
		"iDisplayLength": 10,//Paginación
	    "order": [[ 0, "desc" ]]//Ordenar (columna,orden)
	}).DataTable();
}
//Función para guardar o editar

function guardaryeditar(e)
{
	e.preventDefault(); //No se activará la acción predeterminada del evento
	$("#btnGuardar").prop("disabled",true);
	var formData = new FormData($("#formulario")[0]);

	$.ajax({
		url: "../ajax/administradores.php?op=guardaryeditar",
	    type: "POST",
	    data: formData,
	    contentType: false,
	    processData: false,

	    success: function(datos)
	    {
	    	if(datos == "Administrador agregado correctamente" || datos == "Administrador actualizado")
	    	{
		    	swal({
		    		type: 'success',
		    		title: 'Bien!',
		    		text: datos,
		    		confirmButtonColor: "#3C6943",
		    		confirmButtonText: 'Entendido'
		    	});
		    	mostrarform(false);
		    	tabla.ajax.reload();
	    	}else{
	    		swal({
		    		type: 'error',
		    		title: 'Opss!',
		    		text: datos,
		    		confirmButtonColor: "#3C6943",
		    		confirmButtonText: 'Entendido'
		    	});
		    	mostrarform(false);
		    	tabla.ajax.reload();
	    	}                    
	    }

	});
	limpiar();
}

function mostrar(idadmin)
{
	$.post("../ajax/administradores.php?op=mostrar",{idadmin : idadmin}, function(data, status)
	{
		data = JSON.parse(data);		
		mostrarform(true);

		$("#nombre").val(data.nombre);
		$("#apepat").val(data.apepat);
		$("#apemat").val(data.apemat);
		$("#sexo").val(data.sexo);
		$("#sexo").selectpicker('refresh');
		$("#edad").val(data.edad);
		$("#telefono").val(data.telefono);
		$("#idestado").val(data.idestado);
		$("#idestado").selectpicker('refresh');
		$("#colonia").val(data.colonia);
		$("#correo").val(data.correo);
		$("#password").val(data.password);
 		$("#idadmin").val(data.idadmin);

 	})
}

//Funcion para elimiar el registro
function eliminar(idadmin)
{
	Swal({
  		title: 'Aviso',
  		text: '¿Esta seguro de eliminar el administrador?',
  		type: 'warning',
  		showCancelButton: true,
  		confirmButtonColor: '#3C6943',
  		cancelButtonColor: '#BDBDBD',
  		cancelButtonText: 'Cancelar',
  		confirmButtonText: 'Eliminar'
	}).then((result) => {
  		if (result.value) {
  			$.post("../ajax/administradores.php?op=eliminar", {idadmin : idadmin}, function(e){
				Swal({
					title:'Eliminado',
					text: e,
					type: 'success'
				});
				tabla.ajax.reload();
			});
  		}
	});
}

//funcion para listar los estados de mexico 
function ListarEstados()
{
	$.ajax({
		url: "../ajax/administradores.php?op=listarestados",
		type: "GET",
		success: function(r){
			$("#idestado").html(r);
			$("#idestado").selectpicker('refresh');
		}
	});
}


init();