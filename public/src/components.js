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
});