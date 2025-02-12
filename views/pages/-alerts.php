<main id="main" class="main" role="main">

    <section class="mailing-list-form | uk-section">
        <div class="uk-container">

            <div class="uk-grid-large" uk-grid>
                <div class="uk-width-1-2@m">
                    <div class="uk-panel">
                        <?php the_field( 'contact_content' ); ?>
                    </div>
                </div>
                <div class="uk-width-1-2@m">
                    <div class="uk-panel uk-background-muted uk-padding">
                        <?php gravity_form( 1, false, false, false, '', true ); ?>
                    </div>
                </div>
            </div>

        </div>
    </section>

</main>