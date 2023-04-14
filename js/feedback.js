var mySwiper = new Swiper(".swiper-container", {
    speed: 1100,
    slidesPerView: 1,
    loop: true,
    autoplay: {
      delay: 3000,
    },
    navigation: {
      prevEl: ".swiper-button-prev",
      nextEl: ".swiper-button-next",
    },
  });