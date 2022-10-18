<?php get_header();

$profile_pnominal    = get_field( 'profile_postnominal' );
$profile_designation = get_field( 'profile_designation' );
$profile_email       = get_field( 'profile_email' );
$profile_phone       = get_field( 'profile_office_phone' );
$profile_direct      = get_field( 'profile_direct_phone' );
$profile_fax         = get_field( 'profile_fax' );
$profile_linkedin    = get_field( 'profile_linkedin' );
$profile_vcard       = get_field( 'profile_vcard' );
$profile_title       = get_the_title();

$profile_image       = get_field( 'profile_image' );
$profile_bio         = get_field( 'profile_bio' );

$profile_hdr_bg      = get_field( 'hdr_background' );

?>
<header data-fragment="hero" class="profile-info | uk-position-relative uk-light" data-src="<?php echo $profile_hdr_bg['url']; ?>" uk-img>
    <hgroup class="uk-container">
        <h1><?php echo $profile_title; ?></h1>
        <h2><?php echo $profile_designation; echo ( $profile_pnominal ) ? ', <span>'.$profile_pnominal.'</span>' : ''; ?></h2>
    </hgroup>
</header>

<main id="main" class="main" role="main">

    <section class="profile | uk-section">
        <div class="uk-container">

            <div class="uk-child-width-1-2@s" uk-grid>
                <div class="profile-details">
                    <article class="uk-article">
                    <?php echo $profile_bio; ?>
                    </article>
                </div>
                <div class="profile-social | uk-flex-first uk-flex-last@s">
                    <div class="uk-panel">
                        <figure class="uk-position-relative">
                            <?php if ( $profile_image ) {
                                echo wp_get_attachment_image( $profile_image['ID'], 'full' );
                            } ?>
                            <div class="uk-overlay uk-position-bottom-right">
                                <a href="<?php echo $profile_linkedin; ?>" target="_blank"> <img class="profile-icon" src="<?php echo _uri.'/resources/images/icon-linkedin.png'; ?>" alt="View LinkedIn Profile"> </a>
                                <a href="<?php echo 'mailto:'.$profile_email; ?>" target="_blank"> <img class="profile-icon" src="<?php echo _uri.'/resources/images/icon-mail.png'; ?>" alt="Send Private Message"> </a>
                                <a href="<?php echo $profile_vcard['url']; ?>" download="<?php echo $profile_title; ?> - VCard"> <img class="profile-icon" src="<?php echo _uri.'/resources/images/icon-contact.png'; ?>" alt="Download VCard"> </a>
                            </div>
                        </figure>
                        <div class="contact-info | uk-text-center">
                            <span class="uk-text-uppercase">Contact Information</span>
                            <ul class="contact-wrapper">
                                <?php if ( $profile_phone ) : ?>
                                <li>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 7V3H2v18h20V7H12zM6 19H4v-2h2v2zm0-4H4v-2h2v2zm0-4H4V9h2v2zm0-4H4V5h2v2zm4 12H8v-2h2v2zm0-4H8v-2h2v2zm0-4H8V9h2v2zm0-4H8V5h2v2zm10 12h-8v-2h2v-2h-2v-2h2v-2h-2V9h8v10zm-2-8h-2v2h2v-2zm0 4h-2v2h2v-2z"/></svg>
                                    <small>Office</small> <?php echo $profile_phone; ?>
                                </li>
                                <?php endif; 
                                if ( $profile_direct ) : ?>
                                <li>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/></svg>
                                    <small>Direct</small> <?php echo $profile_direct; ?>
                                </li>
                                <?php endif; 
                                if ( $profile_fax ) : ?>
                                <li>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M22 3H2C.9 3 0 3.9 0 5v14c0 1.1.9 2 2 2h20c1.1 0 1.99-.9 1.99-2L24 5c0-1.1-.9-2-2-2zM8 6c1.66 0 3 1.34 3 3s-1.34 3-3 3-3-1.34-3-3 1.34-3 3-3zm6 12H2v-1c0-2 4-3.1 6-3.1s6 1.1 6 3.1v1zm3.85-4h1.64L21 16l-1.99 1.99c-1.31-.98-2.28-2.38-2.73-3.99-.18-.64-.28-1.31-.28-2s.1-1.36.28-2c.45-1.62 1.42-3.01 2.73-3.99L21 8l-1.51 2h-1.64c-.22.63-.35 1.3-.35 2s.13 1.37.35 2z"/></svg>
                                    <small>Fax</small> <?php echo $profile_fax; ?>
                                </li>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <?php 
    do_action( 'other_team', get_the_ID() ); ?>

</main>
<?php get_footer();