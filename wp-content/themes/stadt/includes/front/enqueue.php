<?php
function sz_enqueue () {
    wp_register_style( 'sz_main_min', get_template_directory_uri() .'/assets/css/main.css' );
    wp_register_style( 'sz_bootstrap4', get_template_directory_uri() .'/assets/css/bootstrap.css' );
    wp_register_style( 'sz_style', get_template_directory_uri() .'/assets/css/style.css' );

    wp_enqueue_style( 'sz_main_min' );
    wp_enqueue_style( 'sz_bootstrap4' );
    wp_enqueue_style( 'sz_style' );

    wp_register_script( 'sz_twitter_widgets', get_template_directory_uri().'/assets/js/widgets.js', array(), false, true );
    wp_register_script( 'sz_jquery', '/assets/js/jquery.min.js', array(), null, true );
    wp_enqueue_script( 'sz_twitter_widgets' );
    wp_enqueue_script( 'jquery' );
}