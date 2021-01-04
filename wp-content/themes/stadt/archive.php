<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage stadt
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

    <div class="container">

        <div class="row">

            <div class="col-sm-0 col-md-1">

                <!--
                <div class="layout_column var_column_left">
                    <div class="mod_leftnav" data-modules="leftnav">
                        <ul>
                            <li class="var_wrapping_node">
                                <a href="<?php //echo get_home_url(); ?>" class=""><?php //_e('Über Zürich', 'stadt'); ?></a>
                            </li>
                            <?php //the_category(''); ?>
                        </ul>
                    </div>

                    <div class="mod_asidesearch" data-init="asidesearch">
                        <h5>Suchen</h5>
                        <div class="row_search" data-searchfield="wrapper">
                            <div class="mod_searchfield " data-init="searchfield">
                                <form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get" class="search_field" data-searchfield="container" role="search">
                                    <label class="search_field__label" for="form_search_keywords">
                                    </label>
                                    <input id="form_search_keywords" type="text" class="text" name="s" value="" placeholder="Suche" onkeyup="validateSearchInput(this.value, 'searchboxform_dep_submit', 'searchboxform_dep');" data-searchfield="field" autocomplete="off">
                                    <input id="searchboxform_dep_submit" type="submit" class="search_button " name="search" value="Finden" data-searchfield="button">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                -->

            </div>

            <div class="col-sm-12 col-md-10">

                <div class="mod_blog">
                    <div class="mod_pagetitle">
                        <?php if ( have_posts() ) : ?>
                            <h1 id="anchorContent" class="page_title"><?php the_archive_title(); ?></h1>
                            <p><?php the_archive_description( ); ?></p>
                        <?php endif; ?>
                    </div>
                    <?php
                    if ( have_posts() ) :
                        ?>
                        <?php
                        /* Start the Loop */
                        while ( have_posts() ) :
                            the_post();
                            get_template_part('partials/post/content-excerpt');
                        endwhile;
                        ?>
                        <div class="" style="padding-top: 30px;">

                        <?php

                        the_posts_pagination(
                            array(
                                'prev_text'          => '<span class="">' . __( '&laquo; Zurück', 'stadt' ) . '</span>',
                                'next_text'          => '<span class="">' . __( 'Weiter &raquo;', 'stadt' ) . '</span>',
                                'before_page_number' => '<span class="">' . __( 'Seite', 'stadt' ) . '</span>',
                            )
                        );
                        ?>

                        <?php
                            get_template_part('includes/front/top')
                        ?>

                        </div>
                        <?php
                    else :
                        get_template_part( 'partials/content', 'none' );
                    endif;
                    ?>
                </div>
            </div>

            <div class="col-sm-0 col-md-1"></div>

        </div>
    </div>

<?php
get_footer();
