/////////////////////////////////////////////////// Fixed Navigation Bar ///////////////////////////////////////////////////

window.onscroll = function() {FixedNavBar()};

var navbar = document.getElementById("navigation-bar");
var sticky = navbar.offsetTop;

function FixedNavBar() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}

/////////////////////////////////////////////////// Menu Icon on Mobile ///////////////////////////////////////////////////

function toggleMenu() {
  var navLinks = document.getElementById("nav-links");
  if (navLinks.classList.contains("show")) {
      navLinks.classList.remove("show");
  } else {
      navLinks.classList.add("show");
  }
}