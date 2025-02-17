<?php get_header();

    // global $post;
    switch ( get_the_ID() ) {

        case '7':  $pageName = 'why-goodman'; break;
        case '9':  $pageName = 'for-sale'; break;
        case '11': $pageName = 'for-lease'; break;
        case '13': $pageName = 'transactions'; break;
        case '15': $pageName = 'properties'; break;
        case '17': $pageName = 'services'; break;
        case '19': $pageName = 'team'; break;
        case '21': $pageName = 'testimonials'; break;
        case '23': $pageName = 'faq'; break;
        case '25': $pageName = 'contact'; break;
        case '31': $pageName = 'sitemap'; break;

        case '3': $pageName = 'legal'; break;

        case '403' : $pageName = '-download'; break;
        case '1301': $pageName = '-alerts'; break;

        case '1499': $pageName = 'homepage'; break;
        case '1528': $pageName = 'case'; break;

        default:
            $pageName = 'home';
            break;

    }

    if ( post_password_required() ) : ?>
        <main class="main" role="main">
            <section class="uk-section uk-section-muted">
                <div class="uk-container uk-container-small uk-height-meidum uk-flex uk-flex-middle uk-flex-center uk-text-center">
                    
                    <article>
                        <span uk-icon="icon: lock; ratio: 5"></span>
                        <hr class="uk-divider-small uk-margin-auto">
                        <?php the_content(); ?>
                    </article>

                </div>
            </section>
        </main>
    <?php else :
        get_template_part( _page.$pageName );
    endif;
    
get_footer();