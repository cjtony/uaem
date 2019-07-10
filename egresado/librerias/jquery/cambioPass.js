function verificarPass(){
        let pbd = $('#pbd').val();
        let pactual = $('#pactual').val();
        let pnueva = $('#pnueva').val();
        let pconfirmar = $('#pconfirmar').val();
          if (pbd == pactual) {
            $('#pnueva').prop("disabled",false);
            $('#pconfirmar').prop("disabled",false);
            if(pconfirmar.length > 0){
                if(pnueva.length < 6){
                  $('#text-men').css({"display":"block"});
                  $('.mensaje').text("La contraseña debe tener al menos 6 caracteres").css({"color":"red"}).show();
                }else{
                  if(pnueva == pactual){
                    $('#text-men').css({"display":"block"});
                    $('.mensaje').text("La contraseña debe ser diferente a la actual").css({"color":"red"}).show();
                  }else{
                  if(pnueva == pconfirmar){
                    $('#text-men').css({"display":"block"});
                    $('.mensaje').text("¡Muy bien! Las contraseñas coiciden.").css({"color":"green"}).show();
                    $('#btnSend').prop("disabled",false);
                  }else{
                    $('#text-men').css({"display":"block"});
                    $('.mensaje').text("Las contraseñas no coiciden.").css({"color":"red"}).show();
                    $('#btnSend').prop("disabled",true);
                  }
                  }
                }
            }else{
              $('#btnSend').prop("disabled",true);
            }
          }else{
            $('#pnueva').prop("disabled",true);
            $('#pconfirmar').prop("disabled",true);
          }
          
      }