function esconder (Esp)
{
  $(".hidden").addClass("d-none");
  $(Esp).removeClass("d-none");
}

$('.disable').click(function(e){
     e.preventDefault();
})


$(window).ready(function() {
  setTimeout(function () {
    $(".bg").fadeOut("slow");
    $("#loading").fadeOut("slow");
  }, 200);  
});
