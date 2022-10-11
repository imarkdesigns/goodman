<?php
// Main Menu
$navMenu = [
    'theme_location' => 'Main Menu',
    'menu_class'     => 'uk-navbar-nav',
    'container'      => '',
    'items_wrap'     => '<ul class="%2$s">%3$s</ul>',
    'depth'          => 2,
    'walker'         => new subMenuWrap()
];

// Mobile Menu
$mobMenu = [
    'theme_location' => 'Mobile Menu',
    'menu_class'     => 'uk-navbar-dropdown-nav',
    'container'      => '',
    'items_wrap'     => '<ul uk-nav class="%2$s">%3$s</ul>',
    'depth'          => 2,
    'walker'         => new mobileMenuWrap()
]; 

?>
<a href="#main" id="skipToLink" class="skip-to-content-link">Skip to Content</a>
<div data-fragment="menu">
    
    <nav class="uk-navbar-container" uk-navbar uk-sticky="show-on-up: true; animation: uk-animate-slide-top">
        <div class="uk-navbar-left">
            <a href="<?php echo home_url(); ?>" class="uk-navbar-item uk-logo"> <span hidden><?php bloginfo(); ?></span> </a>
        </div>
        <div class="uk-navbar-right uk-visible@m">
            <?php wp_nav_menu( $navMenu ); ?>
        </div>
        <div class="uk-navbar-right uk-hidden@m">
            <button type="button" class="mobile-menu | uk-navbar-toggle" aria-label="Sidebar Menu" uk-toggle>
                <span>menu</span>
                <span uk-navbar-toggle-icon></span>
            </button>
            <div class="navbar-mobile-menu | uk-dropbar uk-dropbar-top uk-background-secondary" uk-drop="mode: click; stretch: true; target: !.uk-navbar-container; animation: slide-top; animate-out: true; duration: 300">
                <?php wp_nav_menu( $mobMenu ); ?>
            </div>
        </div>
    </nav>

</div>