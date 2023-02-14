(($) => {

    // Polling for the sake of my Cookies
    var interval = setInterval(function() {
        if(document.readyState === 'complete') {
            clearInterval(interval);
            
            // Cookie
            jQuery.getScript('https://cdnjs.cloudflare.com/ajax/libs/js-cookie/2.2.0/js.cookie.min.js', function() {
                $kukie = Cookies.get('sgg-accept-cookies');
                if ( ! $kukie ) {
                    jQuery('.sgg-accept-cookies').removeAttr('hidden').attr('uk-scrollspy', 'cls: uk-animation-fast uk-animation-slide-bottom; delay: 2500');
                    jQuery('.sgg-accept-cookies').find('.uk-alert-accept').on('click', function() {
                        Cookies.set('sgg-accept-cookies', 'true', { expires: 7 });
                        UIkit.alert('.sgg-accept-cookies').close();
                    });
                }
            });

            // Elfsight Search Input Accessibility Fix
            jQuery('.eapps-google-maps-bar-search-inner').prepend('<label for="google-search">Search Property</label>').find('input').attr('id','google-search').attr('placeholder','Search Property');
            jQuery('body .eapps-google-maps-bar-button-filter').find('div:first').text( 'Sort By Property Category' );

            // Alt Tag for Image
            jQuery('.eapps-google-maps-bar-list-item').each(function() {
                var _title = jQuery(this).find('.eapps-google-maps-bar-list-item-info-title').text();
                var _title = jQuery.trim(_title);
                jQuery(this).find('.eapps-google-maps-bar-list-item-additional-picture img').attr('alt', _title);
            });
        }    
    }, 100);

    // Inject Header Paragraph Responsive Width
    jQuery('.default-header').find('h2 + p').addClass('uk-width-1-1@m uk-width-1-2@l');

    // Elfsight Search Input Accessibility Fix
    jQuery('.eapps-google-maps-bar-search-inner').prepend('<label for="google-search">Search Property</label>').find('input').attr('id','google-search').attr('placeholder','Search Property');

})(jQuery);
