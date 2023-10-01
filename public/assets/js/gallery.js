// $(".gallery").slick({
//   autoplay: false,
//   lazyLoad: "ondemand",
//   infinite: true,
//   slidesToShow: 4,
//   slidesToScroll: 1,
//   arrows: true,
//   responsive: [
//     {
//       breakpoint: 1024,
//       settings: {
        
//         slidesToShow: 3,
//         slidesToScroll: 1,
//       },
//     },
//     {
//       breakpoint: 600,
//       settings: {
//         slidesToShow: 2,
//         slidesToScroll: 1,
//       },
//     },
//     {
//       breakpoint: 480,
//       settings: {
//         slidesToShow: 1,
//         slidesToScroll: 1,
//       },
//     },
//     {
//       breakpoint: 400,
//       settings: {
//         arrows: true,
//         slidesToShow: 1,
//         slidesToScroll: 1,
//       },
//     },
//   ],
// });

const swiper = new Swiper(".mySwiper", {
  // Optional parameters
  direction: "horizontal",
  loop: true,
  spaceBetween: 30,
  slidesPerView: 3,
  // If we need pagination
  // pagination: {
  //   el: ".swiper-pagination",
  // },

  // Navigation arrows
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },

  breakpoints: {
    320: {
      slidesPerView: 1,
    },
    670: {
      slidesPerView: 2,
      spaceBetween: 20,
    },
    768: {
      slidesPerView: 2,
      spaceBetween: 30,
    },
    1024: {
      slidesPerView: 3,
      spaceBetween: 30,
    },
  },
  // And if we need scrollbar
  // scrollbar: {
  //   el: ".swiper-scrollbar",
  // },
});