var tabla;

//Función que se ejecuta al inicio
function init(){
	mostrarform(false);
	listar();
	listarLicenciaturas();

	$("#formulario").on("submit",function(e)
	{
		guardaryeditar(e);	
	});

	
}
function listarLicenciaturas()
{
	$.ajax({
		url: "../ajax/egresado.php?op=listarLic",
		data: "?op=listarLic",
		type: "get",
		success: function(r){
			$("#licenciatura").html(r);
			$("#licenciatura").selectpicker('refresh');
		}
	});
}

//Función limpiar
function limpiar()
{	
	$("#cuenta").val("");
	$("#nombre").val("");
	$("#apepat").val("");
	$("#apemat").val("");
	$("#ingreso").val("");
	$("#egreso").val("");
	$("#idegresado").val("");
	
}

//Función mostrar formulario
function mostrarform(flag)
{
	limpiar();
	if (flag)
	{	
		$("#alerta2").hide();
		$("#listadoregistros").hide();
		$("#formularioregistros").show();
		$("#btnGuardar").prop("disabled",false);
		$("#btnagregar").hide();
	}
	else
	{
		$("#listadoregistros").show();
		$("#formularioregistros").hide();
		$("#btnagregar").show();
	}
}

//Función cancelarform
function cancelarform()
{
	limpiar();
	mostrarform(false);
}

//Función Listar
function listar()
{
	tabla=$('#tbllistado').dataTable(
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
					url: '../ajax/egresado.php?op=listar',
					type : "get",
					dataType : "json",						
					error: function(e){
						console.log(e.responseText);	
					}
				},
		"bDestroy": true,
		"iDisplayLength": 6,//Paginación
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
		url: "../ajax/egresado.php?op=guardaryeditar",
	    type: "POST",
	    data: formData,
	    contentType: false,
	    processData: false,

	    success: function(datos)
	    {
	    	if(datos == "Egresado agregado correctamente" || datos == "Egresado actualizado correctamente")
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

function mostrar(idegresado)
{
	$.post("../ajax/egresado.php?op=mostrar",{idegresado : idegresado}, function(data, status)
	{
		data = JSON.parse(data);		
		mostrarform(true);

		$("#licenciatura").val(data.idlic);
		$("#licenciatura").selectpicker('refresh');
		$("#cuenta").val(data.cuenta);
		$("#nombre").val(data.nombre);
		$("#apepat").val(data.apepat);
		$("#apemat").val(data.apemat);
		$("#ingreso").val(data.ingreso);
		$("#egreso").val(data.egreso);
 		$("#idegresado").val(data.idegresado);
 		if($("#idegresado")!=''){
 			$("#alerta").hide();
 			$("#alerta2").show();
 		}else{
 			$("#alerta").show();
 			$("#alerta2").hide();
 		}
 		

 	})
}

//Funcion para elimiar el registro
function eliminar(idegresado)
{
	Swal({
  		title: 'Aviso',
  		text: '¿Esta seguro de eliminar al egresado?',
  		type: 'warning',
  		showCancelButton: true,
  		confirmButtonColor: '#3C6943',
  		cancelButtonColor: '#BDBDBD',
  		cancelButtonText: 'Cancelar',
  		confirmButtonText: 'Eliminar'
	}).then((result) => {
  		if (result.value) {
  			$.post("../ajax/egresado.php?op=eliminar", {idegresado : idegresado}, function(e){
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

init();