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
        autoplay:false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:5
            },
            1200: {
                items:6
            }
        }
    });
});