const imgmain = document.querySelectorAll(".imgmain");
const imgthumbnail = document.querySelectorAll(".imgthumbnail");

imgthumbnail.forEach(e => {
  e.addEventListener("click", function() {
    const getatt = e.getAttribute("src");
    e.parentNode.parentNode.previousSibling.previousElementSibling.childNodes.forEach(
      e => {
        if (e.nodeType == 1) e.setAttribute("src", getatt);
      }
    ); 
  });
});