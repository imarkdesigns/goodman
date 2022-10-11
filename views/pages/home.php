<main id="main" class="main" role="main">

    <section class="for-sale-slider | uk-section">
        <div class="uk-container">
            
            <div class="uk-grid-headings | uk-child-width-auto@m uk-grid-collapse uk-flex-middle uk-flex-between uk-margin-bottom" uk-grid>
                <div>
                    <h2>Properties For Sale</h2>
                </div>
                <div>
                    <a href="#">View All Properties</a>
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

    <section class="for-lease-slider | uk-section">
        <div class="uk-container">
            
            <div class="uk-grid-headings | uk-child-width-auto@m uk-grid-collapse uk-flex-middle uk-flex-between uk-margin-bottom" uk-grid>
                <div>
                    <h2>Properties For Lease</h2>
                </div>
                <div>
                    <a href="#">View All Properties</a>
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

    <section class="managed-properties | uk-section">
        <div class="uk-container">

            <div class="uk-grid-headings | uk-child-width-auto@m uk-grid-collapse uk-flex-middle uk-flex-between uk-margin-bottom" uk-grid>
                <div>
                    <h2>Properties We Manage</h2>
                </div>
                <div>
                    <a href="#">View All Managed Properties</a>
                </div>
            </div>
            <div class="grid-wrapper | uk-light">
                <div class="grid-item-1">
                    <figure class="uk-cover-container">
                        <img src="//placem.at/places?w=398&h=590&txt=0&random=21" alt="" uk-cover>
                        <canvas></canvas>
                        <div class="uk-overlay-primary uk-position-cover"></div>
                        <div class="uk-overlay uk-position-bottom">
                            <small>Industrial Flex</small>
                            <h3>8022 Southpark CIR, Littleton</h3>
                        </div>
                    </figure>
                </div>
                <div class="grid-item-2">
                    <figure class="uk-cover-container">
                        <img src="//placem.at/places?w=398&h=390&txt=0&random=22" alt="" uk-cover>
                        <canvas></canvas>
                        <div class="uk-overlay-primary uk-position-cover"></div>
                        <div class="uk-overlay uk-position-bottom">
                            <small>Industrial Flex</small>
                            <h3>8022 Southpark CIR, Littleton</h3>
                        </div>
                    </figure>
                </div>
                <div class="grid-item-3">
                    <figure class="uk-cover-container">
                        <img src="//placem.at/places?w=398&h=390&txt=0&random=23" alt="" uk-cover>
                        <canvas></canvas>
                        <div class="uk-overlay-primary uk-position-cover"></div>
                        <div class="uk-overlay uk-position-bottom">
                            <small>Industrial Flex</small>
                            <h3>8022 Southpark CIR, Littleton</h3>
                        </div>
                    </figure>
                </div>
                <div class="grid-item-4">
                    <figure class="uk-cover-container">
                        <img src="//placem.at/places?w=398&h=190&txt=0&random=24" alt="" uk-cover>
                        <canvas></canvas>
                        <div class="uk-overlay-primary uk-position-cover"></div>
                        <div class="uk-overlay uk-position-bottom">
                            <small>Industrial Flex</small>
                            <h3>8022 Southpark CIR, Littleton</h3>
                        </div>
                    </figure>
                </div>
                <div class="grid-item-5">
                    <figure class="uk-cover-container">
                        <img src="//placem.at/places?w=398&h=390&txt=0&random=25" alt="" uk-cover>
                        <canvas></canvas>
                        <div class="uk-overlay-primary uk-position-cover"></div>
                        <div class="uk-overlay uk-position-bottom">
                            <small>Industrial Flex</small>
                            <h3>8022 Southpark CIR, Littleton</h3>
                        </div>
                    </figure>
                </div>
                <div class="grid-item-6">
                    <figure class="uk-cover-container">
                        <img src="//placem.at/places?w=398&h=190&txt=0&random=27" alt="" uk-cover>
                        <canvas></canvas>
                        <div class="uk-overlay-primary uk-position-cover"></div>
                        <div class="uk-overlay uk-position-bottom">
                            <small>Industrial Flex</small>
                            <h3>8022 Southpark CIR, Littleton</h3>
                        </div>
                    </figure>
                </div>
                <div class="grid-item-7">
                    <figure class="uk-cover-container">
                        <img src="//placem.at/places?w=398&h=190&txt=0&random=26" alt="" uk-cover>
                        <canvas></canvas>
                        <div class="uk-overlay-primary uk-position-cover"></div>
                        <div class="uk-overlay uk-position-bottom">
                            <small>Industrial Flex</small>
                            <h3>8022 Southpark CIR, Littleton</h3>
                        </div>
                    </figure>
                </div>
            </div>

        </div>
    </section>

</main>