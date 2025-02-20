<?php
$counters = get_field( 'counter_up' ); ?>

<main id="main" class="main" role="main">

    <section class="counter-up | uk-section">
        <div class="uk-container uk-container-large">

            <div id="counter-wrapper" class="counter-wrapper | uk-position-relative" tabindex="0" role="region" aria-label="scrollable region">
                <ul id="counter-list" class="counter-list">
                    <?php foreach ( $counters as $counter ) : ?>
                    <li class="counter-item">
                        <?php 
                        $labels = explode(' ', $counter['counter_label']);
                        $label  = $labels[0].' '.$labels[1].' <br> '.$labels[2]; 

                        $value = $counter['counter_value'];
                        $note  = $counter['dollar'];

                        ?>
                        <h2><?php echo $label; ?></h2>
                        <h3>
                            <?php echo ($note) ? '$' : ''; ?>
                            <span class="counter"><?php echo $value; ?></span>
                        </h3>
                    </li>
                    <?php endforeach; ?>
                </ul>

                <div class="tabnav-paddles">
                    <button id="leftArrow" class="left-paddle paddle hidden">
                        <span uk-icon="icon: chevron-left"></span>
                    </button>
                    <button id="rightArrow" class="right-paddle paddle">
                        <span uk-icon="icon: chevron-right"></span>
                    </button>
                </div>
            </div>

        </div>
    </section>

    <?php $modules = get_field( 'home_modules' );
    $n = 0;
    $width_arr = [ '', 'uk-width-2-3@m', 'uk-width-1-3@m', 'uk-width-1-2@m', 'uk-width-1-2@m', 'uk-width-1-3@m', 'uk-width-1-3@m', 'uk-width-1-3@m' ]; 
    $media_arr = [ 
        '',
        '',
        '/resources/images/bg-property-for-sale.jpg',
        '/resources/images/bg-property-for-sale.jpg',
        '/resources/images/bg-property-for-lease.jpg',
        '/resources/images/bg_header-faq.jpg',
        '/resources/images/bg_header-why_goodman.jpg',
        '/resources/images/bg_header-contact.jpg'
    ];
    ?>
    <section class="homepage-modules | uk-section uk-padding-remove-top">
        <div class="uk-container uk-container-large uk-overflow-hidden">

            <div class="slider-wrapper">
                <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">

                    <div class="uk-slider-items uk-grid-small" uk-grid>
                        <?php foreach ( $modules as $module ) : $n++; ?>
                        <div class="<?php echo $width_arr[$n]; ?>">
                            <div class="uk-panel">
                                <figure class="uk-cover-container uk-transition-toggle uk-light">
                                    <?php $media = $module['module_media']; 
                                    if ( ! empty($media) ) :
                                        echo wp_get_attachment_image( $media['ID'], [ 9999, 480, true ], '', [ 'class' => 'uk-transition-scale-up uk-transition-opaque', 'uk-cover' => '' ] );
                                    else :
                                        echo '<img src="'._uri.$media_arr[$n].'" alt="" class="uk-transition-scale-up uk-transition-opaque" uk-cover>';
                                    endif; ?>
                                    <canvas width="100%" height="480"></canvas>

                                    <div class="uk-overlay uk-overlay-primary uk-position-cover uk-flex uk-flex-center uk-flex-middle">
                                        <h2><?php echo $module['module_title']; ?></h2>
                                    </div>
                                    <?php if ( ! empty($media['description']) ) : ?>
                                        <div class="uk-transition-slide-bottom uk-position-bottom uk-overlay uk-width-xlarge">
                                            <p><?php echo $media['description']; ?> <span uk-icon="arrow-right"></span></p>
                                        </div>
                                    <?php endif; ?>
                                    <a href="<?php echo $module['module_link']; ?>" class="uk-position-cover" aria-label="Learn more about <?php echo $module['module_title']; ?>"></a>
                                </figure>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>

                </div>
                <ul class="uk-slider-nav uk-dotnav"></ul>
            </div>

        </div>
    </section>

    <?php
    do_action( 'all_property_listings', 'uk-padding-remove-top' ); ?>

</main>
