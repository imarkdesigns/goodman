<?php if ( is_front_page() ) : ?>
<header data-fragment="hero" class="home | uk-position-relative">
    
    <div class="hero-headings | uk-overlay uk-position-top-center uk-light">
        <h1>Goodman Knows Denver <br> <small>Commercial Real Estate</small></h1>
    </div>

    <div class="uk-child-width-1-2@m uk-grid-collapse uk-position-relative" uk-grid>
        <div class="management | uk-position-relative" data-src="https://goodmancommre.com/codepen/denver-skyline-left.jpg" uk-img>
            <div class="uk-overlay-primary uk-position-cover"></div>
            <div class="uk-overlay uk-position-bottom uk-padding-large uk-light">
                <h2>Property Management</h2>
                <p>Goodman specializes in commercial real estate property management with locations throughout the greater Denver area.</p>
                <a href="#" class="uk-button uk-button-outline">Learn More</a>
            </div>
        </div>
        <div class="brokerage | uk-position-relative" data-src="https://goodmancommre.com/codepen/denver-skyline-right.jpg" uk-img>
            <div class="uk-overlay-primary uk-position-cover"></div>
            <div class="uk-overlay uk-position-bottom uk-padding-large uk-light">
                <h2>Brokerage</h2>
                <p>Denver commercial real estate properties including warehouse, office and industrial are available for lease & sale now in prime Denver locations.</p>
                <a href="#" class="uk-button uk-button-outline">Learn More</a>
            </div>
        </div>
    </div>

</header>
<?php else : ?>

<?php endif;