<?php get_header(); ?>
<header data-fragment="hero" class="property-info | uk-position-relative">
    <div class="uk-container">

        <div class="uk-grid-small uk-flex-bottom" uk-grid>
            <div class="uk-width-2-3@m">
                <div class="uk-panel">
                    <address> <span uk-icon="icon: location"></span> 8805 E 12th Ave, Denver, CO., 80220</address>
                    <h1>99 Total Unit Multifamily Portfolio</h1>
                    <div class="uk-text-lead">
                        Sale Price: $ 18,067,500<sup>.00</sup>
                    </div>
                </div>
            </div>
            <div class="cta | uk-width-1-3@m">
                <div class="uk-panel">
                    <a href="#" class="calendar | uk-button uk-button-primary">
                        <span class="uk-text-left">
                            Make Property <br> Viewing Appointment
                        </span>
                    </a>
                    <a href="#" class="brochure | uk-button uk-button-primary"> 
                        <span class="uk-text-left">
                            Download Brochure
                        </span>
                    </a>
                </div>
            </div>
        </div>


    </div>
</header>

<main id="main" class="main" role="main">

    <section class="property-gallery | uk-section uk-padding-remove">
        <div class="uk-position-relative" tabindex="-1" uk-slider="center: true">
            <ul class="uk-slider-items uk-grid-small uk-grid">
                <?php for ( $i = 0; $i < 5; $i++ ) : ?>
                <li class="uk-width-3-4">
                    <div class="uk-cover-container">
                        <img src="//placem.at/places?w=1280&h=720&txt=0&random=1<?=$i?>" alt="" uk-cover>
                        <canvas width="1280" height="720"></canvas>
                    </div>
                </li>
                <?php endfor; ?>
            </ul>

            <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
            <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>
        </div>
    </section>

    <section class="property-details | uk-section">
        <div class="uk-container">

            <div class="uk-grid-large" uk-grid>
                <div class="uk-width-expand@m">
                    <h2>Property Description</h2>
                    <hr class="uk-divider-small uk-margin-medium-bottom">
                    <p>99 TOTAL UNIT MULTIFAMILY PORTFOLIO <br> 8805 E. 12th Ave, Denver | 500 Dayton St, Aurora</p>
                    <ul>
                        <li>13 Total Studios, 80 Total 1-Bedroom, and 6 Total</li>
                        <li>2-Bedroom, 1-Bathroom Units</li>
                        <li>Well-Maintained and Professionally Managed</li>
                        <li>Multiple Recent Capital Expenditure Improvements (Security Cameras & Gates, Parking Lots, Roofs, Boilers, etc.)</li>
                        <li>Individually Metered for Electric</li>
                        <li>Ample Parking at Both Properties</li>
                    </ul>
                    <h3>Property Details</h3>
                    <ul>
                        <li>Total Building Size: 56,776 SF</li>
                        <li>Year Built 8805 E. 12th: 1973</li>
                        <li>Year Built 500 Dayton: 1962</li>
                        <li>Property Taxes (2021): $63,026 ($1.11/SF)</li>
                        <li>Total Site Size: 84,637 SF</li>
                        <li>Total Units: 99</li>
                        <li>Price Per Unit: $182,500</li>
                        <li>Cap Rate (Actual): 4.39%</li>
                        <li>Cap Rate (Proforma): 5.39%</li>
                    </ul>
                </div>
                <div class="uk-width-auto@m">
                    <h2>Contacts</h2>
                    <hr class="uk-divider-small uk-margin-medium-bottom">

                    <div class="contact-wrapper">
                        <div class="contact-item">
                            <div class="uk-card uk-card-small uk-grid-small uk-flex-middle" uk-grid>
                                <div class="uk-card-media-left uk-cover-container">
                                    <img src="//placem.at/people?w=150&h=150&txt=0&random=2" alt="">
                                </div>
                                <div class="uk-width-expand">
                                    <div class="uk-card-body">
                                        <h3 class="uk-card-title">Mark Goodman <small>Principal, SIOR</small></h3>
                                        <div class="uk-text-meta">
                                            <span class="contact-phone">720 440-6270 x101</span>
                                            <span class="contact-email"><a>mark@goodmancommre.com</a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="uk-card uk-card-small uk-grid-small uk-flex-middle" uk-grid>
                                <div class="uk-card-media-left uk-cover-container">
                                    <img src="//placem.at/people?w=150&h=150&txt=0&random=3" alt="">
                                </div>
                                <div class="uk-width-expand">
                                    <div class="uk-card-body">
                                        <h3 class="uk-card-title">Drew Goodman, <span>ACoM</span> <small>Vice President</small></h3>
                                        <div class="uk-text-meta">
                                            <span class="contact-phone">720 440-6270</span>
                                            <span class="contact-email"><a>drew@goodmancommre.com</a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="uk-card uk-card-small uk-grid-small uk-flex-middle" uk-grid>
                                <div class="uk-card-media-left uk-cover-container">
                                    <img src="//placem.at/people?w=150&h=150&txt=0&random=3" alt="">
                                </div>
                                <div class="uk-width-expand">
                                    <div class="uk-card-body">
                                        <h3 class="uk-card-title">Drew Goodman, <span>ACoM</span> <small>Vice President</small></h3>
                                        <div class="uk-text-meta">
                                            <span class="contact-phone">720 440-6270</span>
                                            <span class="contact-email"><a>drew@goodmancommre.com</a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="uk-card uk-card-small uk-grid-small uk-flex-middle" uk-grid>
                                <div class="uk-card-media-left uk-cover-container">
                                    <img src="//placem.at/people?w=150&h=150&txt=0&random=3" alt="">
                                </div>
                                <div class="uk-width-expand">
                                    <div class="uk-card-body">
                                        <h3 class="uk-card-title">Drew Goodman, <span>ACoM</span> <small>Vice President</small></h3>
                                        <div class="uk-text-meta">
                                            <span class="contact-phone">720 440-6270</span>
                                            <span class="contact-email"><a>drew@goodmancommre.com</a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="property-map | uk-section uk-padding-remove-top">
        <div class="uk-container">

            <div class="acf-map uk-cover-container">
                <img src="//placem.at/places?w=1280&h=480&txt=0&random=1" alt="" uk-cover>
                <canvas width="1200" height="480"></canvas>
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
<?php get_footer();