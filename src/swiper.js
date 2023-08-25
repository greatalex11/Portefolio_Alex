 

  const swiper = new Swiper('.swiper', {

   slidesPerView: 3,
   grid: {
     rows: 3,
   },
   mousewheel: {
     forceToAxis: true,
   },


  // Optional parameters
  direction: 'vertical',
  loop: true,

  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  // And if we need scrollbar
  scrollbar: {
    el: '.swiper-scrollbar',
  },

});


