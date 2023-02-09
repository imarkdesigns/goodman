<?php
function other_team( $p_ID ) {
    $otherTeam = get_posts([
        'post_type'      => [ 'team-list' ],
        'posts_per_page' => -1,
        'post_status'    => 'publish',
        'has_password'   => false,
        'order'          => 'DESC',
        'orderby'        => 'rand',
        'post__not_in'   => [ $p_ID ]
    ]); ?>
    <section class="team-slider | uk-section">
        <div class="uk-container">
            <h2>Goodman Commercial Real Estate Team</h2>
            <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider>
                <ul class="uk-slider-items uk-child-width-auto uk-child-width-1-3@m uk-grid-small uk-grid" role="list">
                <?php foreach ( $otherTeam as $team ) :
                    $post_id = $team->ID;
                    $post_title = $team->post_title;
                    $post_pnominal    = get_field( 'profile_postnominal', $post_id );
                    $post_designation = get_field( 'profile_designation', $post_id );
                    $post_profile     = get_field( 'profile_image', $post_id );
                    $post_thumbnail   = get_the_post_thumbnail( $post_id, [ 390, 460 ] );
                    ?>
                    <li role="listitem">
                        <div class="uk-panel">
                            <?php if ( $post_thumbnail ) {
                                if ( $post_id != 671 ) {
                                    echo '<a href="'.get_permalink( $post_id ).'">'.$post_thumbnail.'</a>';
                                } else {
                                    echo '<a href="#">'.$post_thumbnail.'</a>';
                                }
                            } else {
                                echo '<a href="'.get_permalink( $post_id ).'"><img src="https://placem.at/people?w=390&h=460&txt=placeholder&random='.$post_id.'" alt="'.$post_title.'">';
                            } ?>
                            <div class="uk-position-bottom-right uk-panel">
                                <h3><?php 
                                    echo $post_title; 
                                    echo ( $post_pnominal ) ? ', <span class="uk-text-capitalize">'. $post_pnominal.'</span>' : ''; ?>
                                    <small><?php echo $post_designation; ?></small>
                                </h3>
                            </div>
                        </div>
                    </li>
                    <?php 
                endforeach; ?>
                </ul>
                <a class="uk-position-center-left uk-position-small uk-hidden-hover" aria-label="Previous" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                <a class="uk-position-center-right uk-position-small uk-hidden-hover" aria-label="Next" href="#" uk-slidenav-next uk-slider-item="next"></a>
            </div>            
        </div>
    </section>
<?php }
add_action( 'other_team', 'other_team', 10, 1 );