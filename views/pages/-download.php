<?php
// Set the Property ID
$pid = $_GET['pid'];

// Get Post
$properties = get_posts([
    'post_type'      => [ 'properties' ],
    'p'              => $pid ,
    'post_status'    => 'publish',
    'has_password'   => false,
]);

foreach ( $properties as $property ) : 
    $post_id = $property->ID;
    $brochure = get_field( 'property_brochure', $post_id );
endforeach;

$url = $brochure;
$abspath = wp_upload_dir();

$path = $abspath['basedir'] .'/property-brochure/'. $url['filename'];

if ( $path ) {
    header('Content-Description: File Transfer');
    header("Content-type: application/pdf");
    header('Content-Disposition: attachment; filename="'.$brochure['filename'].'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($path));
    ob_clean();
    flush(); // Flush system output buffer
    readfile($path);
    exit();
} else {
    http_response_code(404);
    exit;
}