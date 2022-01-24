$(function () {
    var $win = $(window);

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
});