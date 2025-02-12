<?php
function wBanner( $postID, $display ) {

if ( $display ) : 

    if ( $postID != 1256 ) : ?>

    <div class="featured-banner" uk-alert>
        <a href class="uk-alert-close" uk-close aria-label="Close Banner"></a>
        <a href="<?php echo get_permalink( 1256 ); ?>" class="post-link"><img src="<?php echo _uri.'/resources/images/banner/goodman-wide-banner.png'; ?>" alt="Prime Englewood Location"></a>
    </div>

    <?php endif;

endif;

}
add_action( 'wBanner', 'wBanner', 10, 2 );