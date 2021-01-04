<?php
function sz_twitter_customizer_section ( $wp_customize ) {

    /*
    $wp_customize->add_setting( 'ju_twitter_tweets_sichtbar', array(
        'default'       => '© 2019 Stadt Zürich',
    ));

    $wp_customize->add_setting( 'ju_twitter_tweets', array(
        'default'       => '2',
    ));

    $wp_customize->add_setting( 'ju_twitter_text', array(
        'default'       => 'Tweets von stadtzuerich',
    ));

    $wp_customize->add_setting( 'ju_twitter_url', array(
        'default' 		=> '',
    ));


    // ::::::::::::::::::::: ADD SECTION :::::::::::::::::::::::::::: //
    // ADD SECTION
    $wp_customize->add_section( 'ju_twitter_section', array(
        'title'          => __( 'Stadt Zürich Twitter Tweets', 'stadt' ),
        'priority'       => 30,
        'panel'          => 'stadt'
    ));
    // ::::::::::::::::::::: ADD SECTION :::::::::::::::::::::::::::: //


    // ADD CONTROL
    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'ju_twitter_tweets_sichtbar',
        array(
            'label'          => __( 'Twitter Tweets Sichtbar', 'stadt' ),
            'section'        => 'ju_twitter_section',
            'settings'       => 'ju_twitter_tweets_sichtbar',
            'type'           => 'checkbox'
        )
    ));

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'ju_twitter_tweets_input',
        array(
            'label'          => __( 'Anzahl der Tweets', 'stadt' ),
            'section'        => 'ju_twitter_section',
            'settings'       => 'ju_twitter_tweets',
            'type'           => 'number'
        )
    ));

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'ju_twitter_text_input',
        array(
            'label'          => __( 'Tweets Titel', 'stadt' ),
            'section'        => 'ju_twitter_section',
            'settings'       => 'ju_twitter_text',
            'type'           => 'text'
        )
    ));

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'ju_twitter_url_input',
        array(
            'label'          => __( 'Tweets URL', 'stadt' ),
            'section'        => 'ju_twitter_section',
            'settings'       => 'ju_twitter_url',
            'type'           => 'url'
        )
    ));
    */
}
