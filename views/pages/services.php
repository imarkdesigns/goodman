<main id="main" class="main" role="main">

    <section class="services-list | uk-section">
        <div class="uk-container">

            <h2>Property Management Services</h2>

            <div class="uk-child-width-1-2@m uk-child-width-1-3@l" uk-grid uk-height-match="target: div > .uk-card > .uk-card-body">
                <?php $services = get_field( 'mgmt_services' );
                foreach ( $services as $service ) : ?>
                    <div>
                        <div class="uk-card uk-card-small">
                            <div class="uk-card-body">
                                <?php echo $service['services']; ?>
                            </div>                        
                            <div class="uk-card-footer">
                                <?php if ( $service['cc_selection'] == 'link' && ! empty($service['button_link']) ) :                    
                                    echo '<a href="'.$service['button_link']['url'].'" class="uk-button uk-button-primary">'.$service['button_link']['title'].'</a>';
                                elseif ( $service['cc_selection'] == 'download' && ! empty($service['button_download_file']) ) :
                                    echo '<a download target="_blank" href="'.$service['button_download_file']['url'].'" class="uk-button uk-button-primary" download>'.$service['button_download_file']['caption'].'</a>';
                                endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

        </div>
    </section>

    <aside class="services-flyer | uk-panel uk-background-secondary">
    <?php while ( have_rows( 'property_management_flyer' ) ) : the_row();
        $bgFlyer = get_sub_field( 'pm_flyer_background' );
        $pdfFlyer = get_sub_field( 'pm_flyer_pdf_file' );
        ?>
        <figure class="uk-cover-container uk-height-medium uk-width-expand">
            <img src="<?php echo $bgFlyer['url']; ?>" alt="Property Management - BG" uk-cover>

            <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-text-center uk-light">
                <h2><?php the_sub_field( 'pm_flyer_heading' ); ?></h2>
                <a href="<?php echo $pdfFlyer['url']; ?>" class="uk-link-reset" download> <?php the_sub_field( 'pm_flyer_button_label' ); ?> </a>
            </div>
        </figure>
    <?php endwhile; ?>
    </aside>

    <section class="services-list-additional | uk-section uk-section-large uk-section-muted">
        <div class="uk-container">

            <div class="uk-grid-large uk-flex-middle uk-flex-between" uk-grid>
            <?php $i = 0;
            while ( have_rows( 'mgmt_expertise' ) ) : the_row(); $i++; ?>
                <div class="uk-width-1-2@m">
                    <article class="uk-article">
                        <?php the_sub_field( 'services' ); ?>
                    </article>
                </div>
                <div class="uk-width-1-2@m">
                    <figure class="uk-panel">
                    <?php $img = get_sub_field( 'services_photo' );
                    if ( $img ) {
                        echo wp_get_attachment_image( $img['ID'], 'medium' );
                    } else {
                        echo '<img src="https://picsum.photos/640/360/?random='.$i.'" alt="Sample Image '.$i.'">';
                    } ?>
                    </figure>
                </div>
            <?php endwhile; ?>
            </div>

        </div>
    </section>

    <?php
    do_action( 'random_testimonials' ); ?>

</main>