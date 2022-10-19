<?php
function random_testimonials( $p_count ) { 
    $testimonials = get_posts([
        'post_type'      => [ 'testimonials' ],
        'posts_per_page' => 1,
        'post_status'    => 'publish',
        'has_password'   => false,
        'orderby'        => 'rand',
        'meta_key'       => 'featured_testimony',
        'meta_value'     => 1
    ]); 

    if ( $testimonials ) : ?>
    <section class="router-testimonial | uk-section uk-section-large uk-background-cover" data-src="<?php echo _uri.'/resources/images/bg_router-testimonials.jpg'; ?>" uk-img>
        <div class="uk-container uk-position-relative">
            
            <div class="uk-grid-large uk-flex-middle" uk-grid>
                <div class="uk-width-2-3@m">
                <?php foreach ( $testimonials as $testimony ) : 
                    $post_id = $testimony->ID;
                    $post_title = $testimony->post_title;

                    $content = get_field( 'content', $post_id );
                    $ciation = get_field( 'citation', $post_id );
                    ?>
                    <blockquote class="uk-width-2xlarge">
                        <p><?php echo strip_tags($content); ?></p>
                        <footer><strong><?php echo $post_title; ?></strong><?php echo ( $ciation['citation_property'] ) ? ', '.$ciation['citation_name'].' | '.$ciation['citation_property'] :null; ?></footer>
                    </blockquote>
                <?php endforeach; ?>
                </div>
                <div class="uk-width-1-3@m uk-light">
                    <div class="uk-panel uk-text-right">
                        <span>What Our</span>
                        <span>Clients</span>
                        <span>Are Saying</span>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <?php 
    endif;
}
add_action( 'random_testimonials', 'random_testimonials', 10, 1 );