<main id="main" class="main" role="main">

    <section class="case-study-list | uk-section">
        <div class="uk-container uk-container-large">

            <div class="uk-child-width-1-2@l" uk-grid>
                <?php do_action( 'case_list' ); ?>
            </div>

        </div>
    </section>

    <?php
    do_action( 'all_property_listings', 'uk-padding-remove-top' ); ?>

</main>