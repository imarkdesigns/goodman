<?php
function property_listings( $property_type, $property_id, $class ) {

    $properties = get_posts([
        'post_type'      => [ 'properties' ],
        'posts_per_page' => -1,
        'post_status'    => 'publish',
        'has_password'   => false,
        'orderby'        => 'rand',
        'post__not_in'   => [ $property_id ],
        'meta_key'       => 'property_type',
        'meta_value'     => $property_type
    ]);

    switch ( $property_type ) {
        case 'sale':
            $post_type = 'For Sale';
            $post_pid   = 9;
            break;
        
        case 'lease':
            $post_type = 'For Lease';
            $post_pid   = 11;
            break;
    }

    if ( $properties ) : ?>
    <section class="brokerage-slider | uk-section <?php echo ( $class ) ? 'uk-section-muted' :null; ?> ">
        <div class="uk-container">
            
            <div class="uk-grid-headings | uk-child-width-auto@m uk-grid-collapse uk-flex-middle uk-flex-between uk-margin-bottom" uk-grid>
                <div>
                    <?php echo '<h2 id="for-'.$property_type.'-heading"> Properties '.$post_type.' </h2>'; ?>
                </div>
                <div>
                    <a href="<?php echo get_permalink( $post_pid ) ?>">View All Properties</a>
                </div>
            </div>
            <div tabindex="-1" uk-slider role="presentation">
                <div class="uk-position-relative">
                    <div class="uk-slider-container">
                        <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-4@m uk-grid uk-grid-small" role="list">
                        <?php foreach ( $properties as $property ) : 
                            $post_id = $property->ID;
                            $post_title = $property->post_title;

                            $post_type = get_field( 'property_type', $post_id );
                            $post_gallery = get_field( 'property_photos', $post_id ); ?>
                            <li role="listitem">
                                <div class="uk-card uk-card-small">
                                    <div class="uk-card-media-top">
                                    <?php if ( !empty( get_the_post_thumbnail( $post_id ) ) ) {
                                        echo '<a href="'.get_permalink( $post_id ).'">'.get_the_post_thumbnail($post_id, [ 285, 290 ]).'</a>';
                                    } else {
                                        echo '<a href="'.get_permalink( $post_id ).'"><img href="//placem.at/places?=w285&h=290&txt=placeholder&random='.$post_id.'" alt="'.$post_title.'"></a>';
                                    } ?>
                                    </div>
                                    <div class="uk-card-body">
                                        <small><?php echo $post_type['label']; ?></small>
                                        <h3 class="uk-card-title"><?php echo $post_title; ?></h3>
                                        <a href="<?php echo get_permalink( $post_id ); ?>" class="uk-text-small">More Info</a>
                                    </div>
                                </div>
                            </li>
                            <?php 

                        endforeach; ?>
                        </ul>
                    </div>
                    <a class="uk-position-center-left-out" aria-label="Previous" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                    <a class="uk-position-center-right-out" aria-label="Next" href="#" uk-slidenav-next uk-slider-item="next"></a>
                </div>
            </div>

        </div>
    </section>
    <?php endif;

}
add_action( 'property_listings', 'property_listings', 10, 3 );


function all_property_listings( $class ) {

    $properties = get_posts([
        'post_type'      => [ 'properties' ],
        'posts_per_page' => -1,
        'post_status'    => 'publish',
        'has_password'   => false,
        'orderby'        => 'rand',
        // 'post__not_in'   => [ $property_id ],
        // 'meta_key'       => 'property_type',
        // 'meta_value'     => $property_type
    ]);

    // switch ( $property_type ) {
    //     case 'sale':
    //         $post_type = 'For Sale';
    //         $post_pid   = 9;
    //         break;
        
    //     case 'lease':
    //         $post_type = 'For Lease';
    //         $post_pid   = 11;
    //         break;
    // }

    if ( $properties ) : ?>
    <section class="brokerage-slider | uk-section <?php echo ( $class ) ? 'uk-section-muted' :null; ?> ">
        <div class="uk-container">
            
            <div class="uk-grid-headings | uk-child-width-auto@m uk-grid-collapse uk-flex-middle uk-flex-between uk-margin-bottom" uk-grid>
                <div>
                    <h2>Other Properties For Sale/Lease</h2>
                </div>
                <div hidden>
                    <a href="<?php echo get_permalink( $post_pid ) ?>">View All Properties</a>
                </div>
            </div>
            <div tabindex="-1" uk-slider role="presentation">
                <div class="uk-position-relative">
                    <div class="uk-slider-container">
                        <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-4@m uk-grid uk-grid-small" role="list">
                        <?php foreach ( $properties as $property ) : 
                            $post_id = $property->ID;
                            $post_title = $property->post_title;

                            $post_type = get_field( 'property_type', $post_id );
                            $post_gallery = get_field( 'property_photos', $post_id ); ?>
                            <li role="listitem">
                                <div class="uk-card uk-card-small">
                                    <div class="uk-card-media-top">
                                    <?php if ( !empty( get_the_post_thumbnail( $post_id ) ) ) {
                                        echo '<a href="'.get_permalink( $post_id ).'">'.get_the_post_thumbnail($post_id, [ 285, 290 ]).'</a>';
                                    } else {
                                        echo '<a href="'.get_permalink( $post_id ).'"><img href="//placem.at/places?=w285&h=290&txt=placeholder&random='.$post_id.'" alt="'.$post_title.'"></a>';
                                    } ?>
                                    </div>
                                    <div class="uk-card-body">
                                        <small><?php echo $post_type['label']; ?></small>
                                        <h3 class="uk-card-title"><?php echo $post_title; ?></h3>
                                        <a href="<?php echo get_permalink( $post_id ); ?>" class="uk-text-small">More Info</a>
                                    </div>
                                </div>
                            </li>
                            <?php 

                        endforeach; ?>
                        </ul>
                    </div>
                    <a class="uk-position-center-left-out" aria-label="Previous" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                    <a class="uk-position-center-right-out" aria-label="Next" href="#" uk-slidenav-next uk-slider-item="next"></a>
                </div>
            </div>

        </div>
    </section>
    <?php endif;

}
add_action( 'all_property_listings', 'all_property_listings', 10, 1);