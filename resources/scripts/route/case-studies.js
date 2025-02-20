(function($) {

    var interval = setInterval(function() {
        if(document.readyState === 'complete') {
            clearInterval(interval);

            jQuery(window).on('resize', function() {
                var _browserX = jQuery(window).width();
                if ( _browserX > 959 ) {
                    jQuery('.case-study-post').find('.uk-card')
                        .attr('uk-sticky','end: !.case-study-post; offset: 100');
                    console.log('large window');
                } else {
                    jQuery('.case-study-post').find('.uk-card')
                        .removeAttr('uk-sticky')
                        .removeClass('uk-slider')
                        .removeClass('uk-sticky uk-active uk-sticky-below uk-sticky-fixed');
                }
            }).resize();
        }
    }, 100);

})(jQuery);

