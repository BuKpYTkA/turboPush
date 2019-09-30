$(function($) {
    // For modal-1
    $('.contact-modal').magnificPopup(getModalParams());
    $('#success-modal').magnificPopup(getModalParams());

    function getModalParams() {
        return {
            type: 'inline',
            fixedContentPos: false,
            fixedBgPos: true,
            overflowY: 'auto',
            closeBtnInside: true,
            preloader: false,
            midClick: true,
            removalDelay: 300,
            mainClass: 'my-mfp-zoom-in'
        }
    }

    $('.owl-carousel-3').owlCarousel({
        loop:true,
        margin:10,
        autoplay:true,
        responsive:{
            0:{
                items:2
            },
            600:{
                items:4
            },
            1000:{
                items:8
            },
        }
    });
    $(window).scroll(function () {
        var scroll = $(window).scrollTop
        if (scroll > 10) {
            $('.navbar-phone').addClass('text-center')
        }
    })
});