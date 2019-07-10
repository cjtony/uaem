function init()
{
	$("#direccion").on("submit", function(e){
		guardaryeditar(e);
	});

	MostrarDireccion();

	ListarEstados();
	//funcion para mostrar los municipios del estado seleccionado
	$("#idestado").change(function(){
		var idestado = $("#idestado").val();

		$.ajax({
			url: "ajax/direccion.php?dato=mostrarMunicipios",
			type: "POST",
			data: {idestado:idestado},
			success: function(r)
			{
				$("#idmunicipio").html(r);
			}
		});
	});

}

function guardaryeditar(e)
{
	e.preventDefault();
	var datos = $("#direccion").serialize();

	$.ajax({
		url: "ajax/direccion.php?dato=guardar",
		type: "POST",
		data: datos,
		success: function(data)
		{
			if (data == "Tu direccion se guardo correcamente" || data == "Tu direccion se actualizo correctamente") 
			{
				swal({
					title: "Bien!",
					type: "success",
					text: data
				});
			}else{
				swal({
					title: "Error!",
					type: "error",
					text: data
				});
			}
		}
	});
}

function ListarEstados()
{
	$.ajax({
		url: "ajax/direccion.php?dato=listarestados",
		type: "GET",
		data: "?dato=listarestados",
		success: function(r){
			$("#idestado").html(r);
		}
	});
}

function DatosDireccion()
{
	var id = $("#idegresado").val();

	$.ajax({
		url: "ajax/direccion.php?dato=datosdireccion",
		type: "POST",
		data: {idegresado:id},
		success: function(datos)
		{	
			var datos = JSON.parse(datos);
			$("#idestado").val(datos.idestado);
			$("#idmunicipio").val(datos.idmunicipio);
			$("#colonia").val(datos.colonia);
			$("#cp").val(datos.cp);
			$("#calle").val(datos.calle);
			$("#ninterior").val(datos.ninterior);
			$("#nexterior").val(datos.nexterior);


		}

	});
}

function MostrarDireccion()
{
	var id = $("#idegresado").val();

	$.ajax({
		url: "ajax/direccion.php?dato=mostrardireccion",
		type: "POST",
		data: {idegresado:id},
		success: function(datos)
		{	
			//alert(datos); return false;
			if(datos != "null")
			{
				var dat = JSON.parse(datos);
				$("#idestado").val(dat.idestado);
				$("#idmunicipio").html('<option value='+dat.idmunicipio+'>'+dat.nombre+'</option>');
				$("#colonia").val(dat.colonia);
				$("#cp").val(dat.cp);
				$("#calle").val(dat.calle);
				$("#ninterior").val(dat.ninterior);
				$("#nexterior").val(dat.nexterior);
				$("#iddir").val(dat.iddir);

				$("#btnGuardar").val("Actualizar");
			}
			
		}

	});

	
}

init();