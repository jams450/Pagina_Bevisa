$('.disable').click(function(e){
     e.preventDefault();
})

$(window).load(function() {
  setTimeout(function () {
    $(".bg").fadeOut("slow");
    $("#loading").fadeOut("slow");
  }, 200);
});


function quitar(clase)
{
  $('.serv').addClass('d-none');
  $(clase).removeClass('d-none');
}
