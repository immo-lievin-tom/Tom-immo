$("document").ready(function () {
  $(".filterbtn").click(function () {
    $(".check").toggleClass("flex");
    $(".inputfilter").toggle();
  });

  $('.txtdescannounce').mouseover(function () {
    $(this).css("animation", "mousein ease 2s forwards");
  })

  $('.txtdescannounce').mouseout(function () {
    $(this).css("animation", "mouseout ease 2s forwards");
  })

  $("#sale").click(function () {
    if ($("#sale").prop("checked")) {
      $.ajax({
        method: "post",
        url: "selectrental"
      }).done(function (res) {
        $(".contentannouncecat").html(res);
      })
    }
  });

  $("#rent").click(function () {
    if ($("#rent").prop("checked")) {
      $.ajax({
        method: "post",
        url: "selectsale"
      }).done(function (res) {
        $(".contentannouncecat").html(res);
      })
    }
  });

});

