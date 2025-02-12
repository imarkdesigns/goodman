(function($) {

    var interval = setInterval(function() {
        if(document.readyState === 'complete') {
            clearInterval(interval);

            jQuery.getScript('https://unpkg.com/counterup2@2.0.2/dist/index.js', function() {
                const counterUp = window.counterUp.default
                const callback = entries => {
                    entries.forEach( entry => {
                        const el = entry.target
                        if ( entry.isIntersecting && ! el.classList.contains( 'is-visible' ) ) {
                            counterUp( el, {
                                duration: 5000,
                                delay: 16,
                            } )
                            el.classList.add( 'is-visible' )
                        }
                    } )
                }

                const IO = new IntersectionObserver( callback, { threshold: 1 } )
                const el = document.querySelector( '.counter' )
                IO.observe( el )
            }); // End CounterUp

            var _browserX = jQuery(window).width();
            if ( _browserX < 959 ) {
                jQuery('.homepage-modules').find('.slider-wrapper').attr('uk-slider','');
                jQuery('.homepage-modules').find('.uk-slider-nav').show();
            }

            if ( _browserX > 959 ) {
                jQuery('.homepage-modules').find('.slider-wrapper').removeAttr('uk-slider').removeClass('uk-slider uk-slider-container');
                jQuery('.homepage-modules').find('.uk-slider-nav').hide();
            }

            jQuery(window).resize(function() {
                var _browserX = jQuery(window).width();
                if ( _browserX < 959 ) {
                    jQuery('.homepage-modules').find('.slider-wrapper').attr('uk-slider','');
                    jQuery('.homepage-modules').find('.uk-slider-nav').show();
                }

                if ( _browserX > 959 ) {
                    jQuery('.homepage-modules').find('.slider-wrapper').removeAttr('uk-slider').removeClass('uk-slider').removeClass('uk-slider-container');
                    jQuery('.homepage-modules').find('.uk-slider-nav').hide();
                }
            });

        }    
    }, 100);

})(jQuery);