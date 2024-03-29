<footer data-fragment="footer" class="uk-background-secondary uk-light">
    
    <div class="uk-child-width-auto@m uk-grid-collapse uk-flex-middle" uk-grid>
        <div>
            <div class="uk-panel">
                <img src="<?php echo _uri.'/resources/images/logo-goodman_footer.png'; ?>" alt="<?php bloginfo(); ?>">
                <span class="copyright | uk-display-block">Copyright <?php echo date('Y'); ?>. All Rights Reserved.</span>
            </div>
        </div>
        <div>
            <ul class="uk-subnav">
                <li><a href="<?php echo get_permalink( 2 ); ?>">Home</a></li>
                <li><a href="<?php echo get_permalink( 7 ); ?>">Brokerage</a></li>
                <li><a href="<?php echo get_permalink( 15 ); ?>">Property Management</a></li>
                <li><a href="<?php echo get_permalink( 19 ); ?>">Team</a></li>
                <li><a href="<?php echo get_permalink( 21 ); ?>">Testimonials</a></li>
                <li><a href="<?php echo get_permalink( 23 ); ?>">FAQ</a></li>
                <li><a href="<?php echo get_permalink( 25 ); ?>">Contact</a></li>
            </ul>
            <ul class="uk-subnav">
                <li><a href="<?php echo get_permalink( 3 ); ?>">Privacy Policy</a></li>
                <li hidden><a href="<?php echo get_permalink( 31 ); ?>">Sitemap</a></li>
            </ul>
        </div>
    </div>

</footer>

<aside class="wave-webaim | uk-background-dark uk-padding-small uk-light uk-flex-between uk-grid-small" uk-grid>
    <span class="uk-link-muted">This site conforms to web accessibility standards using the Web Accessibility Evaluation Tool. <a href="<?php echo 'https://wave.webaim.org/report#/'.get_permalink( get_the_ID() ); ?>" class="uk-link-muted" target="_blank">Validate Page Here</a></span>
    <span class="uk-link-muted">Professionally Designed By: <a href="//www.ohwowmarketing.com" class="uk-link-muted" target="_blank">Oh Wow Marketing</a>
</aside>