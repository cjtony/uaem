function init()
{
	ListarEgresados();
}

function ListarEgresados()
{
	$.ajax({
		url: "ajax/register.php?dato=listar",
		type: "GET",
		data: "?dato=listar",
		success: function(r){
			$("#idegresado").html(r);
			$("#idegresado").selectpicker('refresh');
		}
	});
}

function RegistrarEgresados()
{
	$("#btnGuardar").prop("disabled",true);
	var valores = $("#register").serialize();

	$.ajax({
		url: "ajax/register.php?dato=registrar",
		type: "POST",
		data: valores,
		success: function(datos)
		{
			bootbox.alert(datos);
		}
	});
}
init();