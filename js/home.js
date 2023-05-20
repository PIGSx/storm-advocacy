//Javacript for video slider navigation
const btns = document.querySelectorAll(".nav-btn");
const slides = document.querySelectorAll(".video-slide");
const contents = document.querySelectorAll(".content");

var sliderNav = function (manual) {
  btns.forEach((btn) => {
    btn.classList.remove("active");
  });

  slides.forEach((slide) => {
    slide.classList.remove("active");
  });

  contents.forEach((content) => {
    content.classList.remove("active");
  });

  btns[manual].classList.add("active");
  slides[manual].classList.add("active");
  contents[manual].classList.add("active");
}

btns.forEach((btn, i) => {
  btn.addEventListener("click", () => {
    sliderNav(i);
  });
});

//Javacript for video slider auto
const videoSlides = document.querySelectorAll('.video-slide');
const navBtns = document.querySelectorAll('.nav-btn');
const textSlides = document.querySelectorAll('.content');
const slideDuration = 6000;
let currentSlide = 0;

function showNextSlide() {
  videoSlides[currentSlide].classList.remove('active');
  navBtns[currentSlide].classList.remove('active');
  textSlides[currentSlide].classList.remove('active');

  currentSlide++;
  if (currentSlide >= videoSlides.length) {
    currentSlide = 0;
  }

  videoSlides[currentSlide].classList.add('active');
  navBtns[currentSlide].classList.add('active');
  textSlides[currentSlide].classList.add('active');
}

setInterval(showNextSlide, slideDuration);