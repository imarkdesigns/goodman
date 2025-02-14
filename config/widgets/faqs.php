<?php
function faq_list() {

    $faqs = get_posts([
        'post_type'      => [ 'faqs' ],
        'posts_per_page' => -1,
        'post_status'    => 'publish',
        'has_password'   => false,
        'orderby'        => 'menu_order',
    ]);

    if ( $faqs ) :

        foreach ( $faqs as $faq ) : 
        
        $postID = $faq->ID;
        $post_title = $faq->post_title;
        $post_content = get_field( 'faq_content', $postID ); 
        $post_toggle = get_field( 'toggle_faq', $postID ); 

        // var_dump($faq);
        
            if ( $post_toggle ) : ?>
                <li>
                    <a href="#" class="uk-accordion-title"> <?php echo $post_title; ?> </a>
                    <div class="uk-accordion-content">
                        <?php echo $post_content; ?>
                    </div>
                </li>
            <?php endif;
        
        endforeach;

    endif;

}
add_action( 'faq_list', 'faq_list' );