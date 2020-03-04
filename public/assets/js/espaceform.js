$(document).ready(function () {
  $(".disa").click(function (e) {
    e.preventDefault();
    $("input").each(function () {
      $(this).attr("disabled", false);
    });
    $(this).addClass("d-none");
    $(".send").removeClass("d-none");
  });
  $(".bb").click(function () {
    $(".bb").each(function () {
      $(".bb").removeClass("buttonespace");
    });
    $(this).addClass("buttonespace");
  });
  $(".property-select").on("change", function () {
    if ($(this).val() == "3") {
      $(".no-garage").each(function () {
        $(".no-garage").addClass("d-none");
        $(".no-garage").removeClass("d-flex");
      });
    } else {
      $(".no-garage").each(function () {
        $(".no-garage").addClass("d-flex");
        $(".no-garage").removeClass("d-none");
      });
    }
  });

  if ($(".property-select").val() == "3") {
    $(".no-garage").each(function () {
      $(".no-garage").addClass("d-none");
      $(".no-garage").removeClass("d-flex");
    });
  } else {
    $(".no-garage").each(function () {
      $(".no-garage").addClass("d-flex");
      $(".no-garage").removeClass("d-none");
    });
  }

  $("#formaddproperty").validate({
    rules: {
      title: "required",
      price: "required",
      desc: "required",
      ref: "required",
      price: "required",
      num: "required",
      address: "required",
      city: "required",
      zipcode: "required",
      country: "required",
      surface: "required",
      room: "required",
      bedroom: "required",
      nb_bathroom: "required",
      heating: "required",
      energy: "required",
      photo1: "required",
      photo2: "required",
      photo3: "required"
    },
    messages: {
      title: "Ce titre est requis",
      price: "required",
      desc: "required",
      ref: "required",
      price: "required",
      num: "required",
      address: "required",
      city: "required",
      zipcode: "required",
      country: "required",
      surface: "required",
      room: "required",
      bedroom: "required",
      nb_bathroom: "required",
      photo1: "Please provide a file image",
      photo2: "Please provide a file image",
      photo3: "Please provide a file image"
    },
    submitHandler: function (form) {
      form.submit();
    }
  });

  $(".textdelete").hide();

  $(".modifyimg").click(function () {
    $(".imggroup").toggleClass("d-flex");
  });

  $(".isact").mousedown(function () {
    idproperty = $(this)
      .children()
      .attr("property");
    val = $(this)
      .children()
      .attr("val");
    $.ajax({
      method: "post",
      url: "isactive",
      data: { isact: idproperty, val: val }
    });
  });

  $(".isvis").mousedown(function () {
    idproperty = $(this)
      .children()
      .attr("property");
    val = $(this)
      .children()
      .attr("val");
    $.ajax({
      method: "post",
      url: "isvisible",
      data: { isvis: idproperty, val: val }
    });
  });

  $(".istop").mousedown(function () {
    idproperty = $(this)
      .children()
      .attr("property");
    val = $(this)
      .children()
      .attr("val");
    $.ajax({
      method: "post",
      url: "istop",
      data: { istop: idproperty, val: val }
    });
  });

  $(".delete").mousedown(function () {
    idproperty = $(this).attr("property");
    $.ajax({
      method: "post",
      url: "desactive",
      data: { desactive: idproperty }
    }).done(function () {
      let message = setInterval(function () {
        $(".textdelete").show();
      }, 200);

      setTimeout(function () {
        clearInterval(message);
        $(".textdelete").hide();
        location.reload();
      }, 2000)
    });
  });
  $(".heart").click(function () {
    idproperty = $(this).attr('idproperty');
    iduser = $(this).attr('iduser');
    $.ajax({
      method: "post",
      url: "/tom-immo/public/espace/myaccount/deletefavorite",
      data: { 'idproperty': idproperty, 'iduser': iduser }
    }).done(function (res) {
      $('.favorite-espace').html(res)
    })
  });
});
