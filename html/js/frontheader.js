document.addEventListener("DOMContentLoaded", function() {
  const hamburger = document.querySelector(".hamburger");
  const bar1 = document.querySelector(".bar1");
  const bar2 = document.querySelector(".bar2");
  const bar3 = document.querySelector(".bar3");
  const mobilemenu = document.querySelector(".mobilemenu");
  const ulmenu = document.querySelector(".ulmenu");
  const iconsearch = document.querySelector(".iconsearch");
  const searchinput = document.querySelector(".searchinput");
  const formsearch = document.querySelector(".formsearch");
  const limenucat = document.querySelector(".limenucat");
  const submenu = document.querySelector(".submenu");
  const licat = document.querySelectorAll(".licat");

  // Clone the menu list in order to put it in the mobile menu

  const cln = ulmenu.cloneNode(true);
  mobilemenu.appendChild(cln);
  const clnmenucat = cln.querySelector(".limenucat");
  const clnsubmenu = cln.querySelector(".submenu");

  // Toggle variable count

  let valmenu;

  // Reset animation on resize

  window.addEventListener("resize", function() {
    if (window.innerWidth < 991) {
      mobilemenu.style.animation = "";
      bar1.style.animation = "";
      bar3.style.animation = "";
      bar2.style.display = "block";
      valmenu = false;
    } else {
      submenu.style.animation = "";
    }
  });

  // Animation to the mobile menu

  hamburger.addEventListener("click", function() {
    if (!valmenu) {
      valmenu = true;
      bar2.style.display = "none";
      bar1.style.animation = "bar1animation ease 1s forwards";
      bar3.style.animation = "bar3animation ease 1s forwards";
      mobilemenu.style.animation = "transfermenu ease 1s forwards";
    } else {
      valmenu = false;
      bar2.style.display = "block";
      bar1.style.animation = "bar1backanimation ease 1s forwards";
      bar3.style.animation = "bar3backanimation ease 1s forwards";
      mobilemenu.style.animation = "transfermenuback ease 1s forwards";
    }
  });

  //  Show the search input

  iconsearch.addEventListener("click", function() {
    if (!searchinput.classList.contains("searchinputshow")) {
      formsearch.focus();
      searchinput.classList.add("searchinputshow");
    } else {
      searchinput.classList.remove("searchinputshow");
    }
  });

  //  Show the submenu category on hover

  limenucat.addEventListener("mouseover", function() {
    submenu.style.animation = "showsubmenu ease-in-out 500ms forwards";
  });

  limenucat.addEventListener("mouseout", function() {
    submenu.style.animation = "hidesubmenu ease-in 350ms forwards";
  });

  licat.forEach(e => {
    e.addEventListener("click", function() {
      submenu.style.animation = "hidesubmenu ease-in 350ms forwards";
    });
  });

  let valsub = false;

  clnmenucat.addEventListener("click", function() {
    if (valsub == false) {
      valsub = true;
      clnsubmenu.style.animation = "showsubmenu ease-in-out 500ms forwards";
    } else {
      valsub = false;
      clnsubmenu.style.animation = "hidesubmenu ease-in-out 350ms forwards";
    }
  });
});
