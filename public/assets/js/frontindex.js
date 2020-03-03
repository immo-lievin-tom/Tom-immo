const imgmain = document.querySelectorAll(".imgmain");
const imgthumbnail = document.querySelectorAll(".imgthumbnail");

imgthumbnail.forEach(e => {
  e.addEventListener("click", function () {
    const getatt = e.getAttribute("src");
    e.parentNode.parentNode.previousSibling.firstChild.setAttribute("src", getatt);
  });
});