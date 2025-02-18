<?php get_header(); 

$toggle_address = get_field( 'toggle_address' );
$address = get_field( 'property_full_address' );

?>

<header data-fragment="hero" class="case-study-info | uk-position-relative uk-background-muted">
    <div class="uk-container uk-container-small uk-padding-large uk-text-center">
        <?php if ( $toggle_address && ! empty( $address ) ) : ?>
            <address> <?php echo $address; ?> </address>
            <hr class="uk-divider-small">
        <?php endif; ?>
        <h1><?php the_title(); ?></h1>
        <figure class="uk-margin-top">
            <?php if ( has_post_thumbnail() ) {
                echo wp_get_attachment_image( get_post_thumbnail_id(), 'full', '', [ 'class' => 'uk-border-rounded uk-box-shadow-xlarge' ] );
            } ?>
        </figure>
    </div>
</header>

<main id="main" class="main" role="main">

    <section class="case-study-post | uk-section">
        <div class="uk-container">

            <div class="uk-grid-large" uk-grid>
                <div class="uk-width-1-4@m">
                    <div class="uk-card uk-card-secondary uk-card-body uk-card-small uk-border-rounded uk-position-z-index" uk-sticky="end: !.case-study-post; offset: 40">
                        <h3>Contents</h3>
                        <ul class="uk-list uk-list-divider">
                            <li><a href="#challenges" class="uk-link-reset" uk-scroll="offset: 100">Challenges</a></li>
                            <li><a href="#strategy-and-execution" class="uk-link-reset" uk-scroll="offset: 100">Strategy & Execution</a></li>
                            <li><a href="#results" class="uk-link-reset" uk-scroll="offset: 100">Results</a></li>
                            <li><a href="#conclusion" class="uk-link-reset" uk-scroll="offset: 100">Conclusion</a></li>
                        </ul>
                    </div>
                </div>

                <div class="uk-width-3-4@m">
                    <article class="uk-article">

                        <h2 id="background">Background</h2>
                        <?php the_field( 'acc_background' ); ?>

                        <h2 id="challenges">Challenges</h2>
                        <?php the_field( 'acc_challenges' ); ?>

                        <h2 id="strategy-and-execution">Strategy & Execution</h2>
                        <?php the_field( 'acc_strategy_execution' ); ?>

                        <h2 id="results">Results</h2>
                        <?php the_field( 'acc_results' ); ?>

                        <h2 id="conclusion">Conclusion</h2>
                        <?php the_field( 'acc_conclusion' ); ?>

                    </article>
                </div>
            </div>

        </div>
    </section>

    <?php
    do_action( 'all_property_listings', 'uk-padding-remove-top' ); ?>

</main>
<?php get_footer();