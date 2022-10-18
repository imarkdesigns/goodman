<?php if ( is_front_page() ) : 

$hdr_heading = get_field( 'hdr_heading' );
$hdr_sscreen = get_field( 'hdr_split_screen' ); ?>
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

<?php elseif ( is_page([ 7,17,19,21,23,25 ]) ) :

$hdr_type  = get_field( 'hdr_type' );
$hdr_group = get_field( 'hdr_background' );
$hdr_title = get_the_title();

// echo '<pre>';
// var_dump($hdr_group);
// echo '</pre>';

if ( $hdr_group && $hdr_type == 'hdr' ) : ?>
<header data-fragment="hero" class="default-header | uk-position-relative">
    <div class="uk-cover-container">
        <?php if ( $hdr_group['hdr_bgphoto'] ) {
            echo wp_get_attachment_image( $hdr_group['hdr_bgphoto']['ID'], 'full', '', [ 'uk-cover' => '' ] );
        } ?>
        <canvas width="1920" height="980"></canvas>
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

endif; // End of Conditional Header