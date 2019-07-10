$(document).ready(function(){
	$("#estado").change(function(){
		$("#estado option:selected").each(function() {
			idestado = $(this).val();
			$.post("../formularios/municipios.php", {idestado: idestado}, function(data) {
			$("#municipio").html(data);
			});
		});
	});
});