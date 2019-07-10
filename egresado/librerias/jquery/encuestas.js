$(document).ready(function(){
	$('.contestar').click(function(){
		swal({ 
			title: "¡Aviso!",
			text: "La encuesta se realiza en un solo intento, sin estas seguro de contestarla en este momento presiona ok.",
			type: "warning",
			showCancelButton: true,
			confirmButtonColor: "#3C6943",
			cancelButtonText: "No estoy seguro", 
			closeOnConfirm: false,
			closeOnCancel: false
		}).then(function(isConfirm){
			if (isConfirm.value) {
				window.location = "?ruta=encuesta1";
			}else{ 
				swal({
					title: "¡Cancelado!",
					text: "Haz cancelado el proceso, pero recuerda que es importante que contestes la encuesta en otro momento",
					type: "error",
					confirmButtonColor: "#3C6943"
				}); 
			} 
		});

	});

	$(".tabla").DataTable({

	"language": {

		"sProcessing":     "Procesando...",
		"sLengthMenu":     "Mostrar _MENU_ registros",
		"sZeroRecords":    "No se encontraron resultados",
		"sEmptyTable":     "Ningún dato disponible en esta tabla",
		"sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_",
		"sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0",
		"sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
		"sInfoPostFix":    "",
		"sSearch":         "Buscar:",
		"sUrl":            "",
		"sInfoThousands":  ",",
		"sLoadingRecords": "Cargando...",
		"oPaginate": {
		"sFirst":    "Primero",
		"sLast":     "Último",
		"sNext":     "Siguiente",
		"sPrevious": "Anterior"
		},
		"oAria": {
			"sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
			"sSortDescending": ": Activar para ordenar la columna de manera descendente"
		}

	}

});
});