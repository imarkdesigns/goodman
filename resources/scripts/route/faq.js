(function($) {

    var interval = setInterval(function() {
        if(document.readyState === 'complete') {
            clearInterval(interval);

            jQuery('figure.uk-table-wrapper').find('table').addClass('uk-table uk-table-divider');


        }
    }, 100);

})(jQuery);