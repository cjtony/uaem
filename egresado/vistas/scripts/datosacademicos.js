function init()
{
	MostrarDatosA();
	listarLicenciaturas();
}

function MostrarDatosA()
{
	var id = $("#idegresado").val();

	$.ajax({
		url: "ajax/datosacademicos.php?dato=mostrardatosa",
		type: "POST",
		data: {idegresado:id},
		success: function(datos)
		{	
			//alert(datos); return false;
			if(datos != "null")
			{
				var dat = JSON.parse(datos);

				$("#licenciatura").html('<option value='+dat.idlic+'>'+dat.licenciatura+'</option>');
				$("#cuenta").val(dat.cuenta);
				$("#nombre").val(dat.nombre);
				$("#apepat").val(dat.apepat);
				$("#apemat").val(dat.apemat);
				$("#aingreso").val(dat.ingreso);
				$("#aegreso").val(dat.egreso);
			}
			
		}

	});
}

function listarLicenciaturas()
{
	$.ajax({
		url: "ajax/datosacademicos.php?dato=listarLic",
		data: "?op=listarLic",
		type: "get",
		success: function(r){
			$("#licenciatura").html(r);
		}
	});
}

init();