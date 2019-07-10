function init()
{
	//CODIGO PARA CERRA EL FROMULARIO DE LOGIN
  	$("#cerrarF").click(function() {
    	$("#boxlogin").hide();
  	});

  	//CODIGO PARA ABRIR EL FORMULARIO DE LGON
  	$(".ingresar").click(function() {
    	$("#boxlogin").slideToggle();
  	});
}

init();