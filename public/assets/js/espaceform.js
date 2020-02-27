$(document).ready(function() {
  $(".disa").click(function(e) {
    e.preventDefault();
    $("input").each(function() {
      $(this).attr("disabled", false);
    });
    $(this).addClass("d-none");
    $(".send").removeClass("d-none");
  });
  $(".bb").click(function() {
    $(".bb").each(function() {
      $(".bb").removeClass("buttonespace");
    });
    $(this).addClass("buttonespace");
  });
  $(".property-select").on("change", function() {
    if ($(this).val() == "3") {
      $(".no-garage").each(function() {
        $(".no-garage").addClass("d-none");
        $(".no-garage").removeClass("d-flex");
      });
    } else {
      $(".no-garage").each(function() {
        $(".no-garage").addClass("d-flex");
        $(".no-garage").removeClass("d-none");
      });
    }
  });

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
      photo1: "required",
      photo2: "required",
      photo3: "required"
    },
    messages: {
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
      photo1: "Please provide a file image",
      photo2: "Please provide a file image",
      photo3: "Please provide a file image"
    },
    submitHandler: function(form) {
      form.submit();
    }
  });
});
