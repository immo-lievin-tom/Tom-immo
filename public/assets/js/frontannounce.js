const thumbnail = document.querySelector(".thumbnail");
const imgcontain = document.querySelector(".imgcontain");
const thumbnailimg = document.querySelectorAll(".thumbnailimg");
const imgmain2 = document.querySelector(".imgmain2");
const slidecontain = document.querySelector(".slidecontain");
const slide = document.querySelector(".slide");
const announcetitle = document.querySelector(".announcetitle");

if (window.innerWidth >= 992) {
  if (slidecontain) {
    slidecontain.addEventListener("mouseover", function () {
      thumbnail.style.animation = "thumbnailshow 2s ease forwards";
    });

    slidecontain.addEventListener("mouseleave", function () {
      thumbnail.style.animation = "thumbnailhide 2s ease forwards";
    });

    thumbnail.addEventListener("mouseover", function () {
      thumbnail.style.animation = "thumbnailshow 2s ease forwards";
    });
  }
}

thumbnailimg.forEach(e => {
  e.addEventListener("click", function () {
    const getatt = e.getAttribute("src");
    imgmain2.setAttribute("src", getatt);
  });
});

// Reset animation on resize

window.addEventListener("resize", function () {
  if (window.innerWidth >= 992) {
    thumbnail.style.animation = "";
  }
});

$(document).ready(function () {
  $('.ajax-fav').click(function(){
    idproperty = $(this).attr('idproperty');
    iduser = $(this).attr('iduser');
    $.ajax({
      method: "post",
      url: "/tom-immo/public/index/addfavorite",
      data: { 'idproperty': idproperty, 'iduser': iduser },
      success: function (response) {
        console.log(response)
        if(response){
          $('.ajax-fav').text('Favoris')
        }
      }
    });
  })
})



