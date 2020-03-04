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

  $(".filter").click(function () {
    if (!$(".checktest").is(":checked")) {
      $.ajax({
        method: "post",
        url: "selectallproperty"
      }).done(function (res) {
        $(".contentannouncecat").html(res);
      })
    }
    
    if ($("#sale").prop("checked") && $("#rent").prop("checked")) {
      $.ajax({
        method: "post",
        url: "selectallproperty"
      }).done(function (res) {
        $(".contentannouncecat").html(res);
      })
      return false
    }

    if ($("#sale").prop("checked")) {
      $.ajax({
        method: "post",
        url: "selectrental"
      }).done(function (res) {
        $(".contentannouncecat").html(res);
      })
    }

    if ($("#rent").prop("checked")) {
      $.ajax({
        method: "post",
        url: "selectsale"
      }).done(function (res) {
        $(".contentannouncecat").html(res);
      })
    }

    if ($("#house").prop("checked") && $("#apartment").prop("checked") && $("#garage").prop("checked")) {
      $.ajax({
        method: "post",
        url: "selectallproperty"
      }).done(function (res) {
        $(".contentannouncecat").html(res);
      })
      return false;
    }

    // if ($("#apartment").prop("checked")) {
    //   $.ajax({
    //     method: "post",
    //     url: "selectapartment"
    //   }).done(function (res) {
    //     $(".contentannouncecat").html(res);
    //   })
    // }

    // if ($("#rent").prop("checked")) {
    //   $.ajax({
    //     method: "post",
    //     url: "selectsale"
    //   }).done(function (res) {
    //     $(".contentannouncecat").html(res);
    //   })
    // }

    if ($("#apartment").prop("checked")) {
      $.ajax({
        method: "post",
        url: "selectapartment"
      }).done(function (res) {
        $(".contentannouncecat").html(res);
      })
    }

    if ($("#house").prop("checked")) {
      $.ajax({
        method: "post",
        url: "selecthouse"
      }).done(function (res) {
        $(".contentannouncecat").html(res);
      })
    }

    if ($("#garage").prop("checked")) {
      $.ajax({
        method: "post",
        url: "selectgarage"
      }).done(function (res) {
        $(".contentannouncecat").html(res);
      })
    }
  });
});

