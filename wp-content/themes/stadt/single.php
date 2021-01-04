<?php get_header (); ?>

<?php
if (have_posts() ) {
    while (have_posts() ) {
        the_post ();
        $author_ID = get_the_author_meta ('ID');
        $author_url = get_author_posts_url ($author_ID);
        ?>

        <div class="container">

            <div class="row">

                <div class="col-sm-0 col-md-1"></div>

                <div class="col-sm-12 col-md-10">

                    <h1 id="anchorContent" class="page_title_darksite pt-3 pb-4"><?php echo esc_html( get_the_title() ); ?></h1>
                    <?php if ( function_exists( 'the_subtitle' )) {
                        do_action( 'plugins/wp_subtitle/the_subtitle', array(
                            'before'        => '<h2 class="content-subtitle">',
                            'after'         => '</h2>',
                            'post_id'       => get_the_ID(),
                            'default_value' => ''
                        ) );
                    }
                    ?>
                    <p class="small">Letzte Aktualisierung: <?php echo get_the_modified_date(); ?>, <?php echo  get_the_modified_time(); ?> Uhr</p>
                    <br>
                    <div class="mod_textandimage">
                        <div class="col_left var_float_text col_full_width">
                            <?php
                            if (has_post_thumbnail () ) {
                                ?>
                                <figure class="mod_image var_left" data-imagegallery="item" data-pswp-gid="4" data-pswp-pid="1">
                                    <picture>
                                        <?php the_post_thumbnail ('full', array( 'title' => get_the_title() )); ?>
                                        <!--[if IE 9]><video style="display: none;"><![endif]-->
                                        <!--[if IE 9]></video><![endif]-->
                                    </picture>
                                    <figcaption>
                                        <div class="text"><?php
                                            echo get_post(get_post_thumbnail_id())->post_content; ?>
                                        </div>
                                    </figcaption>
                                </figure>
                                <?php
                            }
                            ?>
                            <div class="mod_styledtext">
                                <?php the_content(); ?>
                            </div>
                        </div>
                    </div>


                    <div class="mod_blognavigation" data-init="blognavigation">
                        <div class="layout_columns var_three_columns">
                            <div class="layout_column">
                                <?php
                                $prev_post = get_previous_post($in_same_term = true, $excluded_terms = '', $taxonomy = 'category');
                                if (!empty( $prev_post )): ?>
                                    <a href="<?php echo $prev_post->guid ?>" class="blog_button blog_button_prev">
                                        <div class="blog_navigation_header">
                                            <span class="blog_nav_icon"></span>
                                            <span class="blog_entry_title"><?php _e('vorheiger Beitrag', 'stadt'); ?></span>
                                        </div>
                                        <div class="mod_styledtext">
                                            <p><?php echo $prev_post->post_title ?></p>
                                        </div>
                                    </a>
                                <?php endif ?>
                            </div>
                            <div class="layout_column"></div>
                            <div class="layout_column">
                                <?php
                                $next_post = get_next_post($in_same_term = true, $excluded_terms = '', $taxonomy = 'category');
                                if (!empty( $next_post )): ?>
                                    <a href="<?php echo $next_post->guid ?>" class="blog_button blog_button_next">
                                        <div class="blog_navigation_header">
                                            <span class="blog_entry_title"><?php _e('nächster Beitrag', 'stadt'); ?></span>
                                            <span class="blog_nav_icon"></span>
                                        </div>
                                        <div class="mod_styledtext">
                                            <p><?php echo $next_post->post_title ?></p>
                                        </div>
                                    </a>
                                <?php endif ?>
                            </div>
                        </div>
                    </div>

                    <?php
                        get_template_part('includes/front/top')
                    ?>

                </div>

                <div class="col-sm-0 col-md-1"></div>

            </div>

        </div>

            <?php
        }
    }
    ?>


<?php get_footer (); ?>
