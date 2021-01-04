<?php
// Load Includes
include ( get_template_directory() . '/includes/front/enqueue.php' );
// Add primary menu
include ( get_template_directory() . '/includes/setup.php' );
// Add widgets
include ( get_template_directory() . '/includes/widgets.php' );
// WP Customizer
include ( get_template_directory() . '/includes/theme-customizer.php' );
// WP Customizer Adresse
include ( get_template_directory() . '/includes/customizer/startseite.php' );
// WP Customizer Informationen
include ( get_template_directory() . '/includes/customizer/informationen.php' );
// WP Customizer Twitter
include ( get_template_directory() . '/includes/customizer/twitter.php' );
// WP JS Theme Customizer
//include ( get_template_directory() . '/includes/customizer/enqueue.php' );


// Enqueue Hooks API
add_action ( 'wp_enqueue_scripts', 'sz_enqueue' );
// Add primary menu
add_action ( 'after_setup_theme', 'sz_setup_theme' );
// Add widgets
add_action ( 'widgets_init', 'sz_widgets' );
// WP Customizer
add_action ( 'customize_register', 'sz_customize_register' );
// WP JS Theme Customizer for load changes without reloading page
//add_action ( 'customize_preview_init', 'sz_customize_preview_init' );
// Shortcodes


add_filter( 'get_custom_logo', 'change_logo_class' );

function change_logo_class( $html ) {

    $html = str_replace( 'custom-logo-link', 'mod_logo', $html );
    $html = str_replace( 'custom-logo', '', $html );

    return $html;
}

// remove width & height attributes from images
//
function remove_img_attr ($html)
{
    return preg_replace('/(width|height)="\d+"\s/', "", $html);
}

add_filter( 'post_thumbnail_html', 'remove_img_attr' );


// add new excerpt end
//
function new_excerpt_more($more) {
    return ' <a class="icon extern" href="' . get_permalink( get_the_ID() ) . '"></a>';
}
add_filter('excerpt_more', 'new_excerpt_more');


// Add class on submenu li //
function add_additional_class_on_li($classes, $item, $args) {
    if($args->add_li_class) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}

add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

