const theWrapper = document.getElementById('swiperWrapper');
const swiper = new Swiper('.swiper', {
    // Optional parameters
    loop: true,
    slidesPerView: 1.83,
    spaceBetween: 10,
    centeredSlides : true,
    initialSlide: 2,
    freeMode: true,
    speed: 10000,
    autoplay: {
        delay: 0,
    },
    on: {
        slideChangeTransitionStart: function(){
          theWrapper.style.transitionTimingFunction = 'linear';
        }
      }, 
      breakpoints: {
        767: {
          slidesPerView: 4,
          spaceBetween: 20,
        }
      }




  });
