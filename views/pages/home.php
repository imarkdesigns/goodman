<main id="main" class="main" role="main">

    <?php
    do_action( 'property_listings', 'sale', null, false ); ?>

    <?php
    do_action( 'property_listings', 'lease', null, false ); ?>

    <?php
    do_action( 'managed_properties' ); ?>    

</main>