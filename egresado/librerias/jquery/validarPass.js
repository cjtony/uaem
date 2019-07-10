//VALIDAR CONTRAEÑAS DE PERSONA
function verificarPass(){
	let newPass = $('#password').val();
	let repPass = $('#password2').val();
	if(repPass.length > 0){
		if(newPass.length < 6){
			$('#mensaje').text("Tu contraseña debe tener al menos 6 caracteres").css({"color":"red"}).show();
		}else{
			if (newPass === repPass) {
				$('#mensaje').text("¡Muy bien! Las contraseñas coiciden y cumple con la longitud requerida").css({"color":"green"}).show();
				$('.posicion').prop("disabled",false);
			}else{
				$('#mensaje').text("¡Incorrecto! Las contraseñas no coiciden").css({"color":"red"}).show();
				$('.posicion').prop("disabled",true);
			}
		}
	}
}
