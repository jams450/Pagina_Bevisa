
$(document).ready(function()
  {
    $('#enviarmail').on('submit', function(e)
    {
      e.preventDefault();
      var datos=$(this).serializeArray();
      $.ajax({
        type: $(this).attr('method'),
        data: datos,
        url: $(this).attr('action'),
        dataType: 'json',
        success: function(data) {
          var res=data;
          alert("XX");

        }
      })
    });
  }
);
