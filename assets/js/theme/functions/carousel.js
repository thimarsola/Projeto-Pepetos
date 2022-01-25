$(function () {
    $(".differentials__content__row").owlCarousel({
        rtl:true,
        loop: true,
        margin: 30,
        nav:true,
        responsive: {
            0: {
                items: 1,
                autoHeight:true,
            },
            600: {
                items: 3,
                autoHeight:false,
            },
            1025: {
                items: 4,
            }
        }
    });

   $(".testimonial__content").owlCarousel({
      loop: true,
      margin: 100,
      nav: false,
      autoplay: true,
      autoplayTimeout: 4000,
      autoplayHoverPause: true,
      autoHeight:true,
      responsive: {
         0: {
            items: 1,
         },
         600: {
            items: 1,
         },
         1000: {
            items: 1,
         }
      }
   });
});