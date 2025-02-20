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

            // Force form to open in new tab
            jQuery('#wpforms-form-398').attr('target', '_blank');

            // Force refresh the property page
            jQuery('#gforms-brochure button.uk-modal-close-default').on('click', function(e) {
                e.preventDefault();
                location.reload(true); 
            });
        }    
    }, 100);

    // Inject Header Paragraph Responsive Width
    jQuery('.default-header').find('h2 + p').addClass('uk-width-1-1@m uk-width-1-2@l');

    // Elfsight Search Input Accessibility Fix
    jQuery('.eapps-google-maps-bar-search-inner').prepend('<label for="google-search">Search Property</label>').find('input').attr('id','google-search').attr('placeholder','Search Property');

    // document.addEventListener('touchmove', function(e) {
    //     e.preventDefault();
    //     jQuery('#swipe-action').hide();
    // }, false);

    jQuery('#swipe-action').on('touchstart click', function() {
        jQuery('#swipe-action').hide();
    });

})(jQuery);

// // duration of scroll animation
// var scrollDuration = 800;
// // paddles
// var leftPaddle = document.getElementsByClassName('left-paddle');
// var rightPaddle = document.getElementsByClassName('right-paddle');
// // get items dimensions
// var itemsLength = jQuery('.counter-item').length;
// var itemSize = jQuery('.counter-item').outerWidth(true);
// console.log(itemSize);
// // get some relevant size for the paddle triggering point
// var paddleMargin = 20;

// get wrapper width
// var getMenuWrapperSize = function() {
//     return jQuery('.counter-wrapper').outerWidth();
// }
// var menuWrapperSize = getMenuWrapperSize();
// the wrapper is responsive
// jQuery(window).on('resize', function() {
//     menuWrapperSize = getMenuWrapperSize();
// });
// // size of the visible part of the menu is equal as the wrapper size 
// var menuVisibleSize = menuWrapperSize;

// // get total width of all menu items
// var getMenuSize = function() {
//     return itemsLength * itemSize;
// };
// var menuSize = getMenuSize();
// // get how much of menu is invisible
// var menuInvisibleSize = menuSize - menuWrapperSize;

// // get how much have we scrolled to the left
// var getMenuPosition = function() {
//     return jQuery('.counter-list').scrollLeft();
// };

// // finally, what happens when we are actually scrolling the menu
// jQuery('.counter-list').on('scroll', function() {

//     // get how much of menu is invisible
//     menuInvisibleSize = menuSize - menuWrapperSize;
//     // get how much have we scrolled so far
//     var menuPosition = getMenuPosition();

//     var menuEndOffset = menuInvisibleSize - paddleMargin;

//     // show & hide the paddles 
//     // depending on scroll position
//     if (menuPosition <= paddleMargin) {
//         jQuery(leftPaddle).addClass('hidden');
//         jQuery(rightPaddle).removeClass('hidden');
//     } else if (menuPosition < menuEndOffset) {
//         // show both paddles in the middle
//         jQuery(leftPaddle).removeClass('hidden');
//         jQuery(rightPaddle).removeClass('hidden');
//     } else if (menuPosition >= menuEndOffset) {
//         jQuery(leftPaddle).removeClass('hidden');
//         jQuery(rightPaddle).addClass('hidden');
//     }
// });

// // scroll to left
// jQuery(rightPaddle).on('click', function() {
//     jQuery('.counter-list').animate( { scrollLeft: menuSize}, scrollDuration);
// });

// // scroll to right
// jQuery(leftPaddle).on('click', function() {
//     jQuery('.counter-list').animate( { scrollLeft: '0' }, scrollDuration);
// });

// const leftArrow = document.getElementById('leftArrow');
// const rightArrow = document.getElementById('rightArrow');
// const menu = document.getElementById('counter-list');

// // Establish unchanging constants and initialize variables.
// const menuWrapperSize = document.getElementById('counter-wrapper').offsetWidth; // Unchanging area of the screen where the menu is always visible.
// const menuSize = document.getElementById('counter-list').offsetWidth;   // Includes itemsCount * itemSize but also factors in space between items added by flexbox.
// const menuInvisibleSize = Math.max(menuSize - menuWrapperSize, 0);  // Fixed portion of scrollable menu that is hidden at all times, or zero if menu fits within container.
// const arrowSize = rightArrow.offsetWidth;   // Width of each arrow div. In current design, this equates to 12px. Still computes value even if right arrow is hidden, which it is at time this line is executed.
// const menuEndOffset = Math.max(menuInvisibleSize - arrowSize, 0);   // Fixed portion of scrollable menu that is not obscured by an overlapping arrow key, or zero if no arrow keys are needed.
// const itemsCount = document.getElementsByClassName('counter-item').length; // Number of menu items.
// const itemSize = document.getElementsByClassName('counter-item')[0].offsetWidth; // offsetWidth includes borders and padding but not margins of a menu item (since all the same, choose first one in array). FYI, clientWidth includes padding but NOT borders and margins.
// const itemsSpaceBetween = (menuSize - (itemsCount * itemSize)) / (itemsCount - 1);  // Space between menu items is deliberately set to equal menu wrapper padding left/right. In this design it is 20 pixels.
// const distanceInPixels = itemSize + itemsSpaceBetween;  // Distance to scroll per arrow button click equals width of a menu item plus the space to its right or left. In this design, it is 75 + 20 = 95.
// const durationInMilliseconds = 300;
// let starttime = null;

// // Iniitially, on page load menu items are left aligned and left arrow is hidden. Let's hide right arrow also if there is no need for it (as when all menu items fit within visible container).
// if (menuInvisibleSize === 0) {
//     rightArrow.classList.add("hidden");
// }

// // Get current left position of menu in pixels.
// const getMenuPosition = function() {
//     return parseFloat(menu.style.left) || 0;    // First time, left property is not set so initialize to 0.
// };

// // Get current distance (in pixels) that we have scrolled.
// const getScrolledDistance = function() {
//     return -1 * getMenuPosition();  // Negate value because this is the only way it will work.
// };

// // After an arrow key is clicked and menu is animating, check to see where we are and determine which arrow key(s) to show, always resulting in at least one arrow key visible. Also, update data at bottom.
// // Notes: o This function is only applicable when all menu items cannot be seen in container at one time and an arrow key is clicked to animate menu. 
// //        o If all menu items fit in visible container, UI will be initially rendered without any arrow keys and this function will never be called.
// const checkPosition = function() {
//     // Calculate where we are right now.
//     const menuPosition = getScrolledDistance();

//     // Determine which arrow key(s) to display based on position.
//     if (menuPosition <= arrowSize) {            // SHOW RIGHT ARROW if we are scrolling from far left.
//         leftArrow.classList.add("hidden");      // FYI, this will NOT create duplicate hidden class if leftArrow already contains it.   
//         rightArrow.classList.remove("hidden");
//     } else if (menuPosition < menuEndOffset) {  // SHOW BOTH ARROWS when in the middle of the menu.
//         leftArrow.classList.remove("hidden");
//         rightArrow.classList.remove("hidden");
//     } else if (menuPosition >= menuEndOffset) { // SHOW LEFT ARROW if we are scrolling as far right as we can go.
//         leftArrow.classList.remove("hidden");
//         rightArrow.classList.add("hidden");
//     }

//     // Print changing scroll position under the menu for informational purposes.
//     // document.querySelector("#print-menu-position span").textContent = menuPosition + 'px';
// };

// const animateMenu = function(timestamp, startingPoint, distance) {
//     const runtime = timestamp - starttime;
//     let progress = runtime / durationInMilliseconds;
//     progress = Math.min(progress, 1);
//     let newValue = (startingPoint + (distance * progress)).toFixed(2) + 'px';
//     menu.style.left = newValue;

//     if (runtime < durationInMilliseconds) { // If we still have time remaining...
//         requestAnimationFrame(function(timestamp) { // Request another animation frame and recursively call THIS function.
//             animateMenu(timestamp, startingPoint, distance);
//         })
//     }
//     checkPosition();
// };
 
// const animationFramesSetup = function(timestamp, travelDistanceInPixels) {
//     timestamp = timestamp || new Date().getTime();  // if browser doesn't support requestAnimationFrame, generate our own timestamp using Date.
//     starttime = timestamp;
//     const startingPoint = getMenuPosition();        // This cannot be defined up top in constants. Need to read current value only during initial setup of arrow button click.
//     animateMenu(timestamp, startingPoint, travelDistanceInPixels);
// };

// rightArrow.addEventListener('click', function(){ 
//     requestAnimationFrame(timestamp => animationFramesSetup(timestamp, -1 * distanceInPixels))
// });
    
// leftArrow.addEventListener('click', function() {
//     requestAnimationFrame(timestamp => animationFramesSetup(timestamp, distanceInPixels))
// });
