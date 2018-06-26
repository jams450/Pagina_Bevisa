function esconder (Esp)
{
  $(".hidden").addClass("d-none");
  $(Esp).removeClass("d-none");
}

$('.disable').click(function(e){
     e.preventDefault();
})


$(window).load(function(){
   window.setTimeout( show_popup, 5000 ); // 5 seconds
})

$(window).ready(function() {
    $('#loading').hide();
    $('#header').removeClass("d-none");
    $('#main').removeClass("d-none");
    $('#intro').removeClass("d-none");
});
