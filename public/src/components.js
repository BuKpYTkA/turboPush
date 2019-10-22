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
        var scroll = $(window).scrollTop();
        var width = $(window).width();
        if (width < 769) {
            if (scroll > 95.7) {
                $('.header').addClass("top-header").removeClass('sticky-header');
                $('.top-menu').addClass('invisible');
            } else {
                $('.top-menu').removeClass('invisible');

                $('.header').removeClass('top-header').addClass('sticky-header');
            }
        }
    });

    $('.fixed-contact-button').click(function () {
        var windowWidth = $(window).width();
        if (windowWidth > 768) {
            document.getElementsByClassName("contact-modal")[0].click();
        } else {
            window.location = "tel:+380935138448";
        }
    })
});