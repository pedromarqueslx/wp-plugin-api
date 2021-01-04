    <!DOCTYPE html>
    <html <?php language_attributes(); ?> >
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <?php wp_head(); ?>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
    </head>

    <body <?php body_class ('no-transition stretched'); ?> >

    <main class="main">

        <div class="container-fluid header-background_darksite">

            <div class="container">

                <div class="row mod_header_darksite pt-2">

                    <div class="col-sm-0 col-md-1"></div>

                    <div class="col-4 col-md-4 d-flex pt-lg-4">

                        <?php
                        if( has_custom_logo() ) {
                            $custom_logo_id = get_theme_mod( 'custom_logo' );
                            $image = wp_get_attachment_image_src($custom_logo_id , '');
                            $image_alt = get_post_meta($custom_logo_id, '_wp_attachment_image_alt', true);
                            $image_title = get_the_title($custom_logo_id);
                            ?>
                            <a href="<?php echo get_home_url() ?>" class="mod_logo_darksite img-fluid" rel="home"><img src="<?php echo $image[0]; ?>" alt="<?php echo $image_alt ?>" title="<?php echo $image_title ?>"></a>
                            <?php //the_custom_logo();
                        } else {
                            ?><?php bloginfo('name'); ?><?php
                        }
                        ?>

                    </div>

                    <div class="col-8 col-md-6 d-flex pt-lg-4 justify-content-end p-0 m-0">

                        <div class="mod_cta__item" data-cta-item="">
                            <a href="#" id="RequestLinkHeader">
                                <span class="label mod_cta__label">Zu stadt-zuerich.ch</span>
                            </a>
                        </div>

                    </div>

                    <div class="col-sm-0 col-md-1"></div>

                </div>

            </div>

        </div>
