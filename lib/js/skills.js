jQuery(document).ready(function($) {
    $(window).on('scroll', function() {
        if($(window).scrollTop() > 1049){
            $('.bar-fill').addClass('active');
        }
    });
});