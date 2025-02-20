(function($) {

    var interval = setInterval(function() {
        if(document.readyState === 'complete') {
            clearInterval(interval);

            jQuery('figure.uk-table-wrapper').find('table').addClass('uk-table uk-table-divider');

            // FAQs Search Input
            jQuery('#faqsInput').on('keyup', function() {
                var _value = jQuery(this).val().toLowerCase();
                jQuery('#faqs-list-wrapper li.faqs-item').filter(function() {
                    jQuery(this).toggle( jQuery(this).text().toLowerCase().indexOf(_value) > -1 );
                });

                var _total = jQuery('#faqs-list-wrapper li.faqs-item').length;
                var _hidden = jQuery('#faqs-list-wrapper li[style="display: none;"]').length; 

                if ( _total == _hidden ) {
                    jQuery('.not-found').show();
                } else {
                    jQuery('.not-found').hide();
                }

                var amount = _total - _hidden;
                if( amount == 1 ){
                    jQuery('.faqs-result').text('1 item found');
                }

                if( amount == 0 ){
                    jQuery('.faqs-result').text('');
                }

                if( amount >= 2 ){
                    jQuery('.faqs-result').text( amount + ' items found');
                }

                if ( jQuery(this).val() == '' ) {
                    jQuery('.faqs-result').text('');
                }
            });

        }
    }, 100);

})(jQuery);