function init()
{
	$("#formLogin").on("submit",function(e)
	{
		Login(e);	
	})
}
//funcion para loguear usuarios al sistema
function Login(e)
{
	e.preventDefault();
	$("#btnIngresar").val("Procesando...");
	var valores = $("#formLogin").serialize();
	const loadGif = document.getElementById('loadGif');
	//alert(valores);return false;
	loadGif.classList.remove('ocult');
	loadGif.classList.add('animated', 'fadeInDown');
	setTimeout( () => {
		loadGif.classList.add('ocult');
		loadGif.classList.remove('animated', 'fadeInDown');
	}, 5000);
	setTimeout( () => {
		$.ajax({
			url: "ajax/login.php?dato=loguear",
			type: "POST",
			data: valores,
			success: function(data)
			{
				datos = JSON.parse(data);
				//alert(data);return false;
				if(data == "null"){

					$("#mensaje1").css({"display":"block"});

				}else{

					if (datos.tipo == 0) 
					{
				
						$(location).attr('href','admin/vistas/plantilla.php');

					}else if (datos.tipo == 1) 

					{
				            $(location).attr('href','egresado/vistas/plantillaegresado.php');
				            
						
					}else if (datos.tipo = 2) 
					{

						window.location = "empresa/vistas/plantilla.php";

					}
				}
				
			}
		});
	}, 5000);
}

init();