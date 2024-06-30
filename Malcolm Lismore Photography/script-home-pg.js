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

///////////////////////////////////////////////////  Gallery preview section - Picture cards Slideshows ///////////////////////////////////////////////////

var myIndex1 = 0;
carousel1();

function carousel1() {
  var i;
  var x = document.getElementsByClassName("gallery-preview-slideshow1");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex1++;
  if (myIndex1 > x.length) {myIndex1 = 1}    
  x[myIndex1-1].style.display = "block";  
  setTimeout(carousel1, 3000);    
}

var myIndex2 = 0;
carousel2();

function carousel2() {
  var i;
  var x = document.getElementsByClassName("gallery-preview-slideshow2");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex2++;
  if (myIndex2 > x.length) {myIndex2 = 1}    
  x[myIndex2-1].style.display = "block";  
  setTimeout(carousel2, 3000);    
}


var myIndex3 = 0;
carousel3();

function carousel3() {
  var i;
  var x = document.getElementsByClassName("gallery-preview-slideshow3");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex3++;
  if (myIndex3 > x.length) {myIndex3 = 1}    
  x[myIndex3-1].style.display = "block";  
  setTimeout(carousel3, 3000);    
}

