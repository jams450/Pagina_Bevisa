
$(document).ready(function()
  {
    $('#enviarmail').on('submit', function(e){
      e.preventDefault();
      var datos=$(this).serializeArray();
      $.ajax({
        type: $(this).attr('method'),
        data: datos,
        url: $(this).attr('action'),
        dataType: 'json',
        success: function(data) {
          var res=data;
          if (res.respuesta=="Correcto") {
              swal({
                type: 'success',
                title: 'Su mensaje ha sido enviado',
                text: 'Muy pronto recibirá una respuesta',
              })
              document.enviarmail.reset();
          }
          else {
            swal({
              type: 'error',
              title: 'Hubo un error al enviar su mensaje',
              text: 'Por favor intente de nuevo',
            })
          }

        }
      })
    });
  }
);
