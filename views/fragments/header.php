<?php if ( is_front_page() ) : 

$hdr_heading = get_field( 'hdr_heading' );
$hdr_sscreen = get_field( 'hdr_split_screen' ); ?>

    <header data-fragment="hero" class="homepage | uk-position-relative">
        <div class="uk-cover-container" uk-height-viewport="offset-top: true; offset-bottom: 255; min-height: 768">
            <video muted autoplay loop playsinline class="video-background uk-transform-center" uk-cover>
                <?php /* <source src="https://player.vimeo.com/external/260695954.hd.mp4?s=fedcd3cc68c5afdff509cbafc8aa8fb26d0d7d43&profile_id=175" type="video/mp4"> */ ?>
                <source src="<?php echo _uri.'/resources/video/denver-intro-video.mp4'; ?>" type="video/mp4">
            </video>
            
            <div class="uk-container uk-container-large" uk-height-viewport="offset-top: true; offset-bottom: 255">
                <div class="uk-width-expand uk-child-width-1-2@s uk-flex-between uk-light" uk-grid uk-height-match="target: > div > .uk-card > .uk-card-body">
                    <div class="uk-width-1-1 uk-height-medium uk-flex uk-flex-center uk-flex-middle">
                        <h1 class="uk-text-uppercase uk-text-center">
                            <span>Goodman Knows Denver</span>
                            <span class="uk-display-block uk-text-small">Commercial Real Estate</span>
                        </h1>
                    </div>
                    <div>
                        <div class="uk-card">
                            <div class="uk-card-body uk-width-xlarge">
                                <h2>Property Management</h2>
                                <p>Goodman specializes in commercial real estate property management with locations throughout the greater Denver area.</p>
                            </div>
                            <div class="uk-card-footer">
                                <a href="#" class="uk-button uk-button-default">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="uk-card">
                            <div class="uk-card-body uk-width-xlarge">
                                <h2>Brokerage</h2>
                                <p>Denver commercial real estate properties including warehouse, office and industrial are available for lease & sale now in prime Denver locations.</p>
                            </div>
                            <div class="uk-card-footer">
                                <a href="#" class="uk-button uk-button-default">Learn More</a>
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </header>

<?php elseif ( is_page([ 7,17,19,21,23,25,1301, 1532 ]) ) :

$hdr_type  = get_field( 'hdr_type' );
$hdr_group = get_field( 'hdr_background' );
$hdr_title = get_the_title();

if ( $hdr_group && $hdr_type == 'hdr' ) : ?>
<header data-fragment="hero" class="default-header | uk-position-relative">
    <div class="uk-cover-container">
        <?php if ( $hdr_group['hdr_bgphoto'] ) {
            echo wp_get_attachment_image( $hdr_group['hdr_bgphoto']['ID'], 'full', '', [ 'uk-cover' => '' ] );
        } ?>
        <canvas width="1920" height="735"></canvas>
    </div>
    <div class="uk-overlay-primary uk-position-cover"></div>
    <div class="uk-overlay uk-position-bottom uk-light">
        <h1><?php echo $hdr_title; ?></h1>
        <?php 
            echo $hdr_group['hdr_bgtext']; 
            
            if ( $hdr_group['hdr_txtformat'] == 'blockquote' ) {
                $bquote = '';
                $bquote .= '<blockquote class="uk-text-lead uk-width-1-1@m uk-width-1-2@l">';
                $bquote .= '<p>'.$hdr_group['hdr_txtquote'].'</p>';
                $bquote .= '<footer>'.$hdr_group['hdr_txtfooter'].'</footer>';
                $bquote .= '</blockquote>';

                echo $bquote;
            }

        ?>
    </div>
</header>
<?php endif;

elseif ( is_page([ 1499 ]) ) :

if ( isset($_GET['version']) && $_GET['version'] == '2.0' ) : ?>

    <header data-fragment="hero" class="home | uk-position-relative">
        <div class="hero-headings | uk-overlay uk-position-top-center uk-light">
            <h1><?php echo $hdr_heading; ?></h1>
        </div>
        <div class="uk-child-width-1-2@m uk-grid-collapse uk-position-relative" uk-grid>
            <div class="management | uk-position-relative" data-src="<?php echo $hdr_sscreen['hdr_left_screen']['url']; ?>" uk-img>
                <div class="uk-overlay-primary uk-position-cover"></div>
                <div class="uk-overlay uk-position-bottom uk-padding-large uk-light">
                    <h2><?php echo $hdr_sscreen['hdr_left_screen']['title']; ?></h2>
                    <p><?php echo $hdr_sscreen['hdr_left_screen']['description']; ?></p>
                    <a href="<?php echo $hdr_sscreen['hdr_link_left']; ?>" class="uk-button uk-button-outline">Learn More</a>
                </div>
            </div>
            <div class="brokerage | uk-position-relative" data-src="<?php echo $hdr_sscreen['hdr_right_screen']['url']; ?>" uk-img>
                <div class="uk-overlay-primary uk-position-cover"></div>
                <div class="uk-overlay uk-position-bottom uk-padding-large uk-light">
                    <h2><?php echo $hdr_sscreen['hdr_right_screen']['title']; ?></h2>
                    <p><?php echo $hdr_sscreen['hdr_right_screen']['description']; ?></p>
                    <a href="<?php echo $hdr_sscreen['hdr_link_right']; ?>" class="uk-button uk-button-outline">Learn More</a>
                </div>
            </div>
        </div>
    </header>

<?php endif;

endif; // End of Conditional Header