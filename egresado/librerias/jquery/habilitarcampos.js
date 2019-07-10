$(document).ready(function(){
			
	$('.modificar').click(function(){
	
		$('#guardar').prop("disabled",false);

		$('#estado').prop("disabled",false);
		
		$('#municipio').prop("disabled",false);
		
		$('#colonia').prop("disabled",false);
		
		$('#calle').prop("disabled",false);
		
		$('#ninterior').prop("disabled",false);
		
		$('#nexterior').prop("disabled",false);
		
		$('#cp').prop("disabled",false);

					
		
	});


	$('.modificarp').click(function(){

		$('#nombrep').prop("disabled",false);

		$('#apepatp').prop("disabled",false);
		
		$('#apematp').prop("disabled",false);
		
		$('#edadp').prop("disabled",false);
		
		$('#sexop').prop("disabled",false);
		
		$('#telefonop').prop("disabled",false);


	});

});

