$("document").ready(function() {
  $(".filterbtn").click(function() {
    $(".check").toggleClass("flex");
    $(".inputfilter").toggle();
  });

  $('.txtdescannounce').mouseover(function(){
    $(this).css("animation", "mousein ease 2s forwards");
  })

  $('.txtdescannounce').mouseout(function(){
    $(this).css("animation", "mouseout ease 2s forwards");
  })

});

