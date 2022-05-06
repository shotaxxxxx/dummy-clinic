jQuery(function($) {

                 // drawerメニュー
                 $('.drawer-icon').on('click', function (e) {
                  e.preventDefault();
          
                  $('.drawer-icon').toggleClass('is-active');
                  $('.drawer-icon-bars').toggleClass('is-active');
                  $('.drawer-content').toggleClass('is-active');
                  $('.header').toggleClass('is-active');
                  $('.main').toggleClass('is-active');
                  $('.drawer-icon-bar1').toggleClass('is-active');
                  $('.drawer-icon-bar3').toggleClass('is-active');
                  $('.footer-reserve-button').toggleClass('is-active');
          
                  return false;
              }); 

});