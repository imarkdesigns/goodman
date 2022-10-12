<main id="main" class="main" role="main">

    <section class="gmap | uk-section uk-padding-remove">
        <?php echo do_shortcode( '[elfsight_google_maps id="2"]' ); ?>
    </section>

    <section class="for-sale-slider | uk-section">
        <div class="uk-container">
            
            <div class="uk-grid-headings | uk-child-width-auto@m uk-grid-collapse uk-flex-middle uk-flex-between uk-margin-bottom" uk-grid>
                <div>
                    <h2>Properties For Sale</h2>
                </div>
                <div>
                    <a href="<?php echo get_permalink( 9 ) ?>">View All Properties</a>
                </div>
            </div>
            <div tabindex="-1" uk-slider>
                <div class="uk-position-relative">
                    <div class="uk-slider-container">
                        <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-4@m uk-grid uk-grid-small">

                            <?php for ( $i = 0; $i < 6; $i++ ) : ?>
                            <li>
                                <div class="uk-card uk-card-small">
                                    <div class="uk-card-media-top">
                                        <a href="<?php the_permalink(); ?>"> <img src="//placem.at/places?w=290&h=285&txt=0&random=1<?=$i?>" alt=""> </a>
                                    </div>
                                    <div class="uk-card-body">
                                        <small>For Sale</small>
                                        <h3 class="uk-card-title">Multi-tenant Industrial & Yard $8,500,000</h3>
                                        <a href="<?php the_permalink(); ?>" class="uk-text-small">More Info</a>
                                    </div>
                                </div>
                            </li>
                            <?php endfor; ?>

                        </ul>
                    </div>
                    <a class="uk-position-center-left-out" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                    <a class="uk-position-center-right-out" href="#" uk-slidenav-next uk-slider-item="next"></a>
                </div>
            </div>

        </div>
    </section>

</main>