<?php
function sz_customize_register( $wp_customize ) {
	// add wp customizer - ID title_tagline
    $wp_customize->get_section ( 'title_tagline' )->title = 'Site Identity';

	// WP customize classes - Add Panel Customizer
    $wp_customize->add_panel ( 'stadt', array(
		'title' => __( 'Stadt Zürich','stadt' ),
		'description' => '<p>Stadt Zürich</p>',
		'priority' => 160
	));

    sz_adresse_customizer_section ( $wp_customize );
    sz_informationen_customizer_section ( $wp_customize );
    sz_twitter_customizer_section ( $wp_customize );


    //echo '<pre>';
	//var_dump($wp_customize);
	//echo '</pre>';
}
