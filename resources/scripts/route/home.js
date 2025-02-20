(function($) {

    var interval = setInterval(function() {
        if(document.readyState === 'complete') {
            clearInterval(interval);

            jQuery(window).on('resize', function() {
                var _browserX = jQuery(window).width();
                if ( _browserX > 959 ) {
                    jQuery('.homepage-modules .slider-wrapper').removeAttr('uk-slider')
                        .removeClass('uk-slider uk-slider-container')
                        .find('.uk-slider-nav').hide();
                } else {
                    jQuery('.homepage-modules').find('.slider-wrapper')
                        .attr('uk-slider', '')
                        .find('.uk-slider-nav').show();
                }
            }).resize();

            // Counter Up
            jQuery.getScript('https://cdn.jsdelivr.net/npm/jquery.counterup@2.1.0/jquery.counterup.min.js', function() {
                jQuery('span.counter').counterUp({
                    delay: 50,
                    time: 5000
                });
            });
            
        }    
    }, 100);

})(jQuery);


