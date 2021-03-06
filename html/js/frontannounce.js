const thumbnail = document.querySelector(".thumbnail");
const imgcontain = document.querySelector(".imgcontain");
const thumbnailimg = document.querySelectorAll(".thumbnailimg");
const imgmain = document.querySelector(".imgmain");

if (window.innerWidth >= 992) {
  thumbnail.addEventListener("mouseover", function() {
    thumbnail.style.animation = "thumbnailshow 2s ease forwards";
  });

  thumbnail.addEventListener("mouseleave", function() {
    thumbnail.style.animation = "thumbnailhide 2s ease forwards";
  });
}

thumbnailimg.forEach(e => {
  e.addEventListener("click", function() {
    const getatt = e.getAttribute("src");
    imgmain.setAttribute("src", getatt);
  });
});

// Reset animation on resize

window.addEventListener("resize", function() {
  if (window.innerWidth >= 992) {
    thumbnail.style.animation = "";
  }
});
