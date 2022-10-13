<main id="main" class="main" role="main">

    <section class="gmap | uk-section uk-padding-remove">
        <?php echo do_shortcode( '[elfsight_google_maps id="1"]' ); ?>
    </section>

    <section class="for-lease-slider | uk-section">
        <div class="uk-container">
            
            <div class="uk-grid-headings | uk-child-width-auto@m uk-grid-collapse uk-flex-middle uk-flex-between uk-margin-bottom" uk-grid>
                <div>
                    <h2>Properties For Lease</h2>
                </div>
                <div>
                    <a href="<?php echo get_permalink( 11 ) ?>">View All Properties</a>
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
                                        <a href="<?php the_permalink(); ?>"> <img src="//placem.at/places?w=290&h=285&txt=0&random=2<?=$i?>" alt=""> </a>
                                    </div>
                                    <div class="uk-card-body">
                                        <small>For Lease</small>
                                        <h3 class="uk-card-title">4640 N Pecos St Unit H Industrial | Office | Warehouse</h3>
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

    <section class="router-testimonial | uk-section uk-section-large uk-background-cover" data-src="<?php echo _uri.'/resources/images/bg_router-testimonials.jpg'; ?>" uk-img>
        <div class="uk-container uk-position-relative uk-light">
            
            <div class="uk-grid-large uk-flex-middle" uk-grid>
                <div class="uk-width-2-3@m">
                    <blockquote class="uk-width-2xlarge">
                        <p>Our company was growing after we had purchased an existing business and we were in need of a bigger shop. <strong>Mark Goodman worked hard to find us a space that would work perfect for us.</strong>  After several months of searching, we thought we had found our ideal space, but even then they never stopped looking and found an even better space that we are currently leasing.  He continues to keep in touch to make sure that we are happy and he works to resolve any issues we may have with our landlord.  I highly recommend their services to anyone looking for space.  Mark will get the job done and will get it done right.</p>
                        <footer><strong>Kenneth Moore</strong>, President | Custom Concepts Fabrication</footer>
                    </blockquote>
                </div>
                <div class="uk-width-1-3@m">
                    <div class="uk-panel uk-text-right">
                        <span>What Our</span>
                        <span>Clients</span>
                        <span>Are Saying</span>
                    </div>
                </div>
            </div>

        </div>
    </section>

</main>