<header data-fragment="hero" class="team-header | uk-position-relative">
    <div class="uk-cover-container">
        <img src="<?php echo _uri.'/resources/images/bg_header-team.jpg'; ?>" alt="" uk-cover>
        <canvas width="1920" height="980"></canvas>
    </div>
    <div class="uk-overlay-primary uk-position-cover"></div>
    <div class="uk-overlay uk-position-bottom uk-light">
        <h1>Our Team</h1>
        <h2>Meet the <br> <span class="uk-text-uppercase">Goodman Commercial Team</span></h2>
        <div class="uk-text-lead uk-width-1-1@m uk-width-1-2@l">Since 2006, Mark Goodman has brokered more than 350 transactions in the Denver commercial real estate market.  He has now assembled a team of talented professionals dedicated to achieving his vision of matching quality real estate to the needs of clients looking for prime locations in the Denver metro area.</div>
    </div>
</header>

<main id="main" class="main" role="main">

    <section class="team-list | uk-section">
        <div class="uk-container">

            <h2>Leadership Team</h2>
            <hr class="uk-divider-small uk-margin-medium-bottom">
            <div class="uk-grid-small uk-child-width-1-2 uk-child-width-1-2@s uk-child-width-1-3@m" uk-grid>
                <?php for ( $i = 0; $i < 3; $i++ ) : ?>
                <div>
                    <div class="uk-card uk-card-small">
                        <div class="uk-card-media-top uk-margin-bottom">
                            <a href="<?php the_permalink(); ?>"> <img src="//placem.at/people?w=410&h=540&txt=0&random=1<?=$i?>" alt=""> </a>
                        </div>
                        <h3 class="uk-card-title">
                            <a href="<?php the_permalink(); ?>"> Mark Goodman </a>
                        </h3>
                        <span class="uk-text-meta">Principal, SIOR</span>
                    </div>
                </div>
                <?php endfor; ?>
            </div>

        </div>
    </section>

    <section class="for-sale-slider | uk-section uk-section-muted">
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