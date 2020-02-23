$("document").ready(function() {
  $(".filterbtn").click(function() {
    $(".check").toggleClass("flex");
    $(".inputfilter").toggle();
  });

  $('.announcecat').mouseover(function(){
    $(this).children( ".txtdescannounce" ).css("animation", "mousein ease 2s forwards");
  })

  $('.announcecat').mouseout(function(){
    $(this).children( ".txtdescannounce" ).css("animation", "mouseout ease 2s forwards");
  })

});

