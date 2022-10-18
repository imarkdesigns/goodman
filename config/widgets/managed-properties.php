<?php
function managed_properties() { 
    $properties = [ 'post_type' => [ 'page' ], 'page_id' => 15 ];
    query_posts( $properties );

    if ( have_posts() ) :
        while ( have_posts() ) : the_post(); ?>
        <section class="managed-properties | uk-section">
            <div class="uk-container">

                <div class="uk-grid-headings | uk-child-width-auto@m uk-grid-collapse uk-flex-middle uk-flex-between uk-margin-bottom" uk-grid>
                    <div>
                        <h2>Properties We Manage</h2>
                    </div>
                    <div>
                        <a href="<?php echo get_permalink( 15 ) ?>">View All Managed Properties</a>
                    </div>
                </div>
                <div class="grid-wrapper | uk-light">
                    <?php $i = 0;
                    while ( have_rows( 'property_list' ) ) : the_row(); 
                    $i++; 

                    // Break rows and do not display the last item
                    if ( $i > 7 ) {
                        break;
                    } ?>
                    <div class="grid-item-<?=$i?>">
                        <figure class="uk-cover-container">
                            <?php $featured_image = get_sub_field( 'property_photo' );
                            echo wp_get_attachment_image( $featured_image['ID'], 'full', '', [ 'uk-cover' => '' ] ); ?>
                            <canvas></canvas>
                            <div class="uk-overlay-primary uk-position-cover"></div>
                            <div class="uk-overlay uk-position-bottom">
                                <small><?php the_sub_field( 'property_type' ); ?></small>
                                <h3><?php the_sub_field( 'property_location' ); ?></h3>
                            </div>
                        </figure>
                    </div>
                    <?php endwhile; ?>
                </div>

            </div>
        </section>
        <?php 
        endwhile; 
        wp_reset_query();
    endif;
}
add_action( 'managed_properties', 'managed_properties' );