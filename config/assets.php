<?php
//! ===
//! Do not edit anything in this file unless you know what you're doing
//! ===

//* Assets Resources
add_action('wp_enqueue_scripts', function() {

    global $post;

    # UIkit version
    # 3.14.3
    wp_enqueue_style( 'uikit', _ui.'uikit.min.css' );
    wp_enqueue_script( 'uikit', _ui.'uikit.min.js', null, null, true );
    wp_enqueue_script( 'uikit-icon', _ui.'uikit-icons.min.js', null, null, true );

    wp_enqueue_style( 'fragments', _css.'fragments.css' );
    wp_enqueue_script( 'router', _js.'router.js', ['jquery'], null, true );
        
    # Localize Scripts
    $dirPath = [ 'dirPath' => get_template_directory_uri() ];
    wp_localize_script( 'router', 'directory_uri', $dirPath );

    $gmapKey = [ 'gmapKey' => $_ENV['ACF_GOOGLEMAP'] ];
    wp_localize_script( 'router', 'google_key', $gmapKey );


    # Reset PostName
    $postName = '';

    if ( is_page() ) {

        # Enqueue Styles for Page
        switch ( $post->ID ) {

            case '7':  // Why Goodman
            case '9':  // For Sale
            case '11': // For Lease
            case '13': // Transactions
            case '15': // Properties
            case '17': // Services
            case '19': // Team
            case '21': // Testimonials
            case '23': // FAQ
                $pageName = 'overview';
                break;

            case '2':  // Home
            case '25': // Contact
            case '31': // Sitemap
            case '403': // Download Brochure
            case '1301': // Property Alerts
            case '1499': // New Homepage
            case '1532': // Case Studies
                    $pageName = 'main';
                break;

            case '3': // Privacy
                $pageName = 'legal';
                break;

        }
        if ( is_page([ 9,11,13,15,17,19,23 ]) ) {
            wp_enqueue_style( 'page-main', _css.'main.css' );
            wp_enqueue_style( 'page', _css.$pageName.'.css' );
        } else {
            wp_enqueue_style( 'page', _css.$pageName.'.css' );
        }

    }

    elseif ( is_singular( 'properties' ) ) {
        wp_enqueue_style( 'post', _css.'overview.built.css' );
        wp_enqueue_script( 'acf-map', _js.'acf-map.js' );
    }

    elseif ( is_singular( 'team-list' ) || is_singular( 'case-studies' ) ) {
        wp_enqueue_style( 'post', _css.'overview.built.css' );
    }

    // elseif ( is_front_page() ) {
    //     wp_enqueue_script( 'count-up-js', _js.'counterup.min.js' );
    // }

}, 100);
