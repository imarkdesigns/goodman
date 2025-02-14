<main id="main" class="main" role="main">

    <section class="faq-list | uk-section">
        <div class="uk-container">

            <div uk-grid>
                <div class="uk-width-1-4@m">
                    <?php the_field( 'faq_content' ); ?>
                </div>
                <div class="uk-width-3-4@m">
                    
                    <ul uk-accordion>
                        <?php do_action( 'faq_list' ); ?>
                    </ul>

                </div>
            </div>

        </div>
    </section>

    <?php
    do_action( 'property_listings', 'sale', null, true ); ?>

    <?php
    do_action( 'property_listings', 'lease', null, false ); ?>

</main>