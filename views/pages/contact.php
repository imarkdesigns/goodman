<header data-fragment="hero" class="contact-header | uk-position-relative">
    <div class="uk-cover-container">
        <img src="<?php echo _uri.'/resources/images/bg_header-contact.jpg'; ?>" alt="" uk-cover>
        <canvas width="1920" height="980"></canvas>
    </div>
    <div class="uk-overlay-primary uk-position-cover"></div>
    <div class="uk-overlay uk-position-bottom uk-light">
        <h1>Contact Us</h1>
        <h2>Want to know more about <br> <span class="uk-text-uppercase">Goodman Commercial Real Estate</span></h2>
        <div class="uk-text-lead uk-width-2xlarge">Get in touch!</div>
    </div>
</header>

<main id="main" class="main" role="main">

    <section class="contact-form | uk-section">
        <div class="uk-container">

            <div class="uk-grid-large" uk-grid>
                <div class="uk-width-1-2@m">
                    <div class="uk-panel">
                        <h2>We’d love to hear <br> from you!</h2>
                        <div class="contact-numbers">
                            <span><strong>Telephone:</strong> 720.440.6270</span>
                            <span><strong>Fax:</strong> 720.440.6275</span>
                        </div>
                        <h3>Visit us</h3>
                        <address class="contact-address">
                            <h4>Goodman Commercial Real Estate</h4>
                            789 Sherman Street, <br> Ste. 660 Denver, CO 80203
                        </address>
                    </div>
                </div>
                <div class="uk-width-1-2@m">
                    <div class="uk-panel uk-background-secondary uk-padding">
                        <?php echo do_shortcode( '[wpforms id="94" title="false"]' ); ?>
                    </div>
                </div>
            </div>

        </div>
    </section>

</main>