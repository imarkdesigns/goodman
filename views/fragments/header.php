<?php if ( is_front_page() ) : 

$headline = get_field( 'hdr_split_headline' );
$subheadline = get_field( 'hdr_split_subheadline' );
$background = get_field( 'background_header' );
$split_hdr = get_field( 'split_headings' ); 

?>

    <header data-fragment="hero" class="home | uk-position-relative">
        <div class="uk-cover-container" uk-height-viewport="offset-top: true; offset-bottom: 255px; min-height: 667px">
            <!-- offset-bottom: 255; min-height: 667 -->
            <video muted autoplay loop playsinline class="video-bg | uk-position-absolute uk-transform-center" uk-cover>
                <?php if ( ! empty($background) ) : ?>
                    <source src="<?php echo $background['url']; ?>" type="video/mp4">
                <?php else : ?>
                    <source src="<?php echo _uri.'/resources/video/denver-intro-video.mp4'; ?>" type="video/mp4">
                <?php endif; ?>
            </video>

            <div class="uk-container uk-container-large uk-position-relative" uk-height-viewport="offset-top: true; offset-bottom: 255px">
                <!-- offset-top: true; offset-bottom: 255 -->
                <div class="uk-width-expand uk-child-width-1-2@s uk-flex-between uk-light" uk-grid uk-height-match="target: > div > .uk-card > .uk-card-body">
                    <div class="uk-width-1-1 uk-height-medium uk-flex uk-flex-center uk-flex-middle">
                        <h1 class="uk-text-uppercase uk-text-center">
                            <span><?php echo $headline; ?></span>
                            <span class="uk-display-block uk-text-small"><?php echo $subheadline; ?></span>
                        </h1>
                    </div>
                    <div>
                        <div class="uk-card">
                            <div class="uk-card-body uk-width-xlarge">
                                <?php echo $split_hdr['left_content']; ?>
                            </div>
                            <div class="uk-card-footer">
                                <a href="<?php echo $split_hdr['left_content_link']; ?>" class="uk-button uk-button-default" aria-label="Learn More About Property Management">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="uk-card">
                            <div class="uk-card-body uk-width-xlarge">
                                <?php echo $split_hdr['right_content']; ?>
                            </div>
                            <div class="uk-card-footer">
                                <a href="<?php echo $split_hdr['right_content_link']; ?>" class="uk-button uk-button-default" aria-label="Learn More About Brokerage">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </header>

<?php elseif ( is_page([ 7, 17, 19, 21, 23, 25, 1301, 1532 ]) ) :

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
            <div class="uk-overlay uk-position-bottom uk-light">
                <h1><?php echo $hdr_title; ?></h1>
                <?php
                    echo $hdr_group['hdr_bgtext'];

                    if ( $hdr_group['hdr_txtformat'] == 'blockquote' ) {
                        $bquote  = '';
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

endif; 
// End of Conditional Header
