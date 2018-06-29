$('.disable').click(function(e){
     e.preventDefault();
})

$(window).ready(function() {
  setTimeout(function () {
    $(".bg").fadeOut("slow");
    $("#loading").fadeOut("slow");
  }, 200);
});
