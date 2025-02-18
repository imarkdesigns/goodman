<?php
function case_list() {

    $cases = get_posts([
        'post_type'      => [ 'case-studies' ],
        'posts_per_page' => -1,
        'post_status'    => 'publish',
        'has_password'   => false,
        'orderby'        => 'menu_order',
    ]);


    if ( $cases ) :

        foreach ( $cases as $case ) :

        $post_ID = $case->ID;
        $post_title = $case->post_title; ?>
            <div>
                <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin" uk-grid>
                    <div class="uk-card-media-left uk-padding uk-flex uk-flex-center">
                        <?php if ( has_post_thumbnail() ) {
                            echo wp_get_attachment_image( get_post_thumbnail_id(), [ 640, 360, true ] );
                        } 
                        /* <img src="https://placehold.co/640x360?text=Photo+Placeholder" alt=""> */ ?>
                    </div>
                    <div>
                        <div class="uk-card-body">
                            <h3 class="uk-card-title"><?php echo $post_title; ?></h3>
                            <p><strong>Introduction:</strong></p>
                            <p><?php echo get_field( 'acc_background', $post_ID ); ?></p>
                            <p><a href="<?php echo get_permalink( $post_ID ); ?>">Read More <span uk-icon="icon: chevron-double-right"></span></a></p>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach;

    endif;

}
add_action( 'case_list', 'case_list' );