<?php get_header(); 

$property_info = get_field( 'property_info' );
$property_details = get_field( 'property_description' );
$property_contact = get_field( 'property_contact_persons' );
$property_brochure = get_field( 'property_brochure' );
$property_photos = get_field( 'property_photos' );
$property_map = get_field( 'property_map' );
$property_type = get_field( 'property_type' );
$property_title = get_the_title();
$property_id = get_the_ID();

// echo '<pre>';
// var_dump($property_contact);
// echo '</pre>';
?>
<header data-fragment="hero" class="property-info | uk-position-relative">
    <div class="uk-container">
        <div class="uk-grid-small uk-flex-bottom" uk-grid>
            <div class="uk-width-2-3@m">
                <div class="uk-panel">
                    <address> <span uk-icon="icon: location"></span> <?php echo $property_info['address']; ?></address>
                    <h1 id="property-heading"><?php echo $property_title; ?></h1>
                    <div class="uk-text-lead">
                        <?php 
                        if ( $property_type['value'] == 'sale' ) {
                            $tag = 'Sale';
                        } elseif ( $property_type['value'] == 'lease' ) {
                            $tag = 'Lease';
                        } ?>
                        <?php echo $tag.' Price: $ '.$property_info['sale_price']; ?>
                        <small> <span uk-icon="info"></span> <?php echo $property_info['price_description']; ?> </small>
                    </div>
                </div>
            </div>
            <div class="cta | uk-width-1-3@m">
                <div class="uk-panel">
                    <a hidden href="#" class="calendar | uk-button uk-button-primary">
                        <span class="uk-text-left"> Make Property <br> Viewing Appointment </span>
                    </a>
                    <?php if ( $property_brochure ) : 
                    $url = wp_get_attachment_url( $property_brochure['ID'] ); ?>
                    <a href="#wpforms-brochure" uk-toggle class="brochure |  uk-button uk-button-primary"> 
                        <span class="uk-text-left"> Download Brochure </span>
                    </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</header>

<div id="wpforms-brochure" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <button class="uk-modal-close-default" type="button" aria-label="Close Modal" uk-close></button>
        <?php echo do_shortcode( '[wpforms id="398" title="false"]' ); ?>
    </div>
</div>

<main id="main" class="main" role="main">

    <section class="property-gallery | uk-section uk-padding-remove" aria-labelledby="property-heading">
        <div class="uk-position-relative" tabindex="-1" uk-slider="center: true">
            <ul class="uk-slider-items uk-grid-small uk-grid" role="list">
                <?php foreach( $property_photos as $photo ): ?>
                <li class="uk-width-3-4" role="listitem">
                    <div class="uk-cover-container">
                        <?php echo wp_get_attachment_image( $photo['ID'], 'full', '', [ 'uk-cover' => '' ] ); ?>
                        <canvas width="1280" height="720"></canvas>
                    </div>
                </li>
                <?php endforeach; ?>
            </ul>

            <a class="uk-position-center-left uk-position-small uk-hidden-hover" aria-label="Previous" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
            <a class="uk-position-center-right uk-position-small uk-hidden-hover" aria-label="Next" href="#" uk-slidenav-next uk-slider-item="next"></a>
        </div>
    </section>

    <section class="property-details | uk-section">
        <div class="uk-container">

            <div class="uk-grid-large" uk-grid>
                <div class="uk-width-expand@m">
                    <h2>Property Description</h2>
                    <hr class="uk-divider-small uk-margin-medium-bottom">
                    <?php echo $property_details; ?>
                </div>
                <div class="uk-width-auto@m">
                    <h2>Contacts</h2>
                    <hr class="uk-divider-small uk-margin-medium-bottom">

                    <div class="contact-wrapper">
                        <?php foreach ( $property_contact as $post ) : 
                        setup_postdata( $post ); 

                        $contact_postnominal = get_field( 'profile_postnominal' );
                        $contact_designation = get_field( 'profile_designation' );
                        $contact_email = get_field( 'profile_email' );
                        $contact_phone = get_field( 'profile_office_phone' );
                        $contact_title = get_the_title(); ?>
                        <div class="contact-item">
                            <div class="uk-card uk-card-small uk-grid-small uk-flex-middle" uk-grid>
                                <div class="uk-card-media-left uk-cover-container">
                                <?php if ( has_post_thumbnail() ) {
                                    echo '<a href="'.get_permalink().'">'. the_post_thumbnail( [150, 150] ) .'</a>';
                                } ?>
                                </div>
                                <div class="uk-width-expand">
                                    <div class="uk-card-body">
                                        <h3 class="uk-card-title">
                                            <?php echo $contact_title; ?>
                                            <span><?php echo ( $contact_postnominal ) ? ', '.$contact_postnominal : ''; ?> </span>
                                            <small><?php echo $contact_designation; ?></small>
                                        </h3>
                                        <div class="uk-text-meta">
                                            <span class="contact-phone"><?php echo $contact_phone; ?></span>
                                            <span class="contact-email"><a href="mailto:<?php echo $contact_email; ?>"><?php echo $contact_email; ?></a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="property-map | uk-section uk-padding-remove-top">
        <div class="uk-container">
            <div class="acf-map | uk-height-large" data-zoom="16">
                <div class="marker" data-lat="<?php echo esc_attr($property_map['lat']); ?>" data-lng="<?php echo esc_attr($property_map['lng']); ?>"></div>
            </div>
        </div>
    </section>

    <?php
    do_action( 'property_listings', $property_type['value'], $property_id, true ); ?>

</main>
<?php get_footer();