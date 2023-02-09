<?php

$teamList = [ 'post_type' => [ 'team-list' ], 'posts_per_page' => -1, 'order' => 'ASC' ];
query_posts( $teamList );

?>
<main id="main" class="main" role="main">

    <section class="team-list | uk-section">
        <div class="uk-container">

            <h2>Leadership Team</h2>
            <hr class="uk-divider-small uk-margin-medium-bottom">
            <div class="uk-grid-small uk-child-width-1-2 uk-child-width-1-2@s uk-child-width-1-3@m" uk-grid>
                <?php while ( have_posts() ) : the_post(); ?>
                <div>
                    <div class="uk-card uk-card-small">
                        <div class="uk-card-media-top uk-margin-bottom">
                            <a href="<?php echo ( get_the_ID() != 671 ) ? get_the_permalink() : '#'; ?>">
                                <?php
                                if ( has_post_thumbnail() ) {
                                    echo the_post_thumbnail( [ 410, 540 ] );
                                } else {
                                    echo '<img src="https://placem.at/people?w=410&h=540&txt=placeholder&random=4'.get_the_ID().'" alt="'.get_the_title().'">';
                                } ?>
                            </a>
                        </div>
                        <h3 class="uk-card-title">
                            <a href="<?php echo ( get_the_ID() != 671 ) ? get_the_permalink() : '#'; ?>"> <?php the_title(); ?> </a>
                        </h3>
                        <span class="uk-text-meta"><?php the_field( 'profile_designation' ); echo (get_field( 'profile_postnominal' )) ? ', '.get_field( 'profile_postnominal' ) :null; ?></span>
                    </div>
                </div>
                <?php endwhile; wp_reset_query(); ?>
            </div>

        </div>
    </section>

    <?php
    do_action( 'property_listings', 'sale', null, true ); ?>

</main>