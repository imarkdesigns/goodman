<?php get_header(); 


?>


<header data-fragment="hero" class="property-info | uk-position-relative">
    <div class="uk-container">
        <div class="uk-grid-small uk-flex-bottom" uk-grid>
            
        </div>
    </div>
</header>

<main id="main" class="main" role="main">

    <section class="uk-section">
        <div class="uk-container">

            <div class="uk-grid-large" uk-grid>
                <div class="uk-width-1-3@m">
                    <div class="uk-card uk-card-secondary uk-card-body uk-border-rounded">
                        <h3>Contents</h3>
                        <ul class="uk-list uk-list-divider">
                            <li><a href="#">Challenges</a></li>
                            <li><a href="#">Strategy & Execution</a></li>
                            <li><a href="#">Results</a></li>
                            <li><a href="#">Conclusion</a></li>
                        </ul>
                    </div>
                </div>
                <div class="uk-width-2-3@m">
                    <?php the_content(); ?>
                </div>
            </div>

        </div>
    </section>


    <?php
    do_action( 'all_property_listings', 'uk-padding-remove-top' ); ?>

</main>
<?php get_footer();