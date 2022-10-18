<?php
$testimonies = [ 'post_type' => [ 'testimonials' ], 'posts_per_page' => -1, 'order' => 'DESC' ];
query_posts( $testimonies );

?>
<main id="main" class="main" role="main">

    <section class="testimonials-list | uk-section">
        <div class="uk-container">
        <?php while ( have_posts() ) : the_post(); ?>
            <blockquote>
                <h3><?php the_field( 'lead' ); ?></h3>
                <?php the_field( 'content' ); ?>
                <footer><?php echo get_the_title(); ?>
                <?php while ( have_rows( 'citation' ) ) : the_row();
                    $designation = get_sub_field( 'citation_name' );
                    $property    = get_sub_field( 'citation_property' );
                    echo ( $designation ) ? ', '.$designation :null;
                    echo '<span class="uk-text-meta">'.$property.'</span>';
                endwhile; ?>
                </footer>
            </blockquote>
        <?php endwhile; wp_reset_query(); ?>
        </div>
    </section>

</main>