<?php 
/* Registrera meny */
add_action('init', 'register_my_menus');

function register_my_menus() {
    register_nav_menus(array(
        'main-menu' => 'Top menu'
    ));
}



/* Thumbnail support */
add_theme_support('post-thumbnails');
set_post_thumbnail_size(300);
add_image_size('media-thumb', 300);
add_image_size('media-medium', 600);
add_image_size('media-big', 1200);




/* Logotyp support */
add_theme_support( 'custom-logo' );
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );

function themename_custom_logo_setup() {
    $defaults = array(
    // 'height'      => 100,
    'width'       => 500,
    'flex-height' => true,
    'flex-width'  => true,
    'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
}



/* Use JS files */
wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array ( 'jquery' ), 1.1, true);
