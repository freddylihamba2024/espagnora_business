//menu scripts
var menu_hamburger = document.querySelector("#menu-hamburger");
var navdrawer = document.querySelector(".navdrawer");
var closeDrawerBtn = document.querySelector("#closeDrawerBtn");

menu_hamburger.addEventListener("click", function () {
  navdrawer.classList.add("showDrawer");
});

closeDrawerBtn.addEventListener("click", function () {
  navdrawer.classList.remove("showDrawer");
});

navdrawer.addEventListener("click", function () {
  navdrawer.classList.remove("showDrawer");
});

//slider scripts
let slideIndex = 0;
showSlides();

function showSlides() {
  const slides = document.querySelectorAll('.slide');
  
  // Masquer toutes les diapositives
  slides.forEach((slide) => {
    slide.style.display = "none";
  });

  slideIndex++;
  
  // Si le diaporama atteint la fin, recommence
  if (slideIndex > slides.length) {
    slideIndex = 1;
  }

  // Afficher la diapositive active
  slides[slideIndex - 1].style.display = "block";

  // Changer la diapositive toutes les 5 secondes
  setTimeout(showSlides, 5000);
}

// Contrôles manuels
function changeSlide(n) {
  const slides = document.querySelectorAll('.slide');
  slideIndex += n;

  if (slideIndex > slides.length) {
    slideIndex = 1;
  }
  if (slideIndex < 1) {
    slideIndex = slides.length;
  }

  slides.forEach((slide) => {
    slide.style.display = "none";
  });

  slides[slideIndex - 1].style.display = "block";
}
