<main id="main" class="main" role="main">

    <section class="gmap | uk-section uk-padding-remove">
    <?php while ( have_rows( 'hdr_map' ) ) : the_row();
        echo do_shortcode( get_sub_field( 'gmap_shortcode' ) ); 
    endwhile; ?>
    </section>

    <?php
    do_action( 'managed_properties' ); ?>   

    <?php
    do_action( 'random_testimonials' ); ?>

</main>