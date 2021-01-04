<?php
function sz_informationen_customizer_section ( $wp_customize ) {

    $wp_customize->add_setting( 'ju_footer_copyright_text', array(
        'default'       => '© 2019 Stadt Zürich',
    ));

    $wp_customize->add_setting( 'ju_portal_url', array(
        'default' 		=> '',
    ));

    $wp_customize->add_setting( 'ju_portal_text', array(
        'default'       => '',
        ));

    $wp_customize->add_setting( 'ju_footer_privacy_page', array(
        'default'       => 0
        ));


    // ::::::::::::::::::::: ADD SECTION :::::::::::::::::::::::::::: //
    // ADD SECTION
    $wp_customize->add_section( 'ju_informationen_section', array(
        'title'          => __( 'Stadt Zürich Fußzeile Informationen', 'stadt' ),
        'priority'       => 30,
        'panel'          => 'stadt'
        ));
    // ::::::::::::::::::::: ADD SECTION :::::::::::::::::::::::::::: //



    // ADD CONTROL
    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'ju_footer_copyright_text_input',
        array(
            'label'          => __( 'Urheberrechte', 'stadt' ),
            'section'        => 'ju_informationen_section',
            'settings'       => 'ju_footer_copyright_text'
        )
    ));

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'ju_footer_privacy_page_input',
        array(
            'label'          => __( 'Rechtliche Hinweise', 'stadt' ),
            'section'        => 'ju_informationen_section',
            'settings'       => 'ju_footer_privacy_page',
            'type'           => 'dropdown-pages'
        )
    ));

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'ju_portal_text_input',
        array(
            'label'          => __( 'Portal', 'stadt' ),
            'section'        => 'ju_informationen_section',
            'settings'       => 'ju_portal_text',
            'type'           => 'text'
        )
    ));

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'ju_portal_url_input',
        array(
            'label'          => __( 'Portal URL', 'stadt' ),
            'section'        => 'ju_informationen_section',
            'settings'       => 'ju_portal_url',
            'type'           => 'url'
        )
    ));

}
