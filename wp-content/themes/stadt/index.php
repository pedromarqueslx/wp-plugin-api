<?php get_header (); ?>


    <div class="layout_wrapper">
        <div class="layout_columns var_aside_columns">
            <div class="layout_column var_column_right">
                <div class="mod_blog">
                    <div class="mod_pagetitle">
                        <h1 id="anchorContent" class="page_title">Suchen</h1>
                    </div>

                    <!-- Posts
                    ============================================= -->
                    <?php
                    if ( have_posts() ) {
                        while ( have_posts() ) {
                            // function the_post used to stop the loop // one post per iteration
                            the_post();

                            get_template_part('partials/post/content-excerpt');

                        }
                    }
                    ?>

                    <?php
                        get_template_part('includes/front/top')
                    ?>

                </div>
            </div>

            <div class="layout_column var_column_left">
                <div class="mod_leftnav" data-modules="leftnav">
                    <ul>
                        <li class="var_back">
                            <a href="<?php echo get_home_url(); ?>"><?php _e('Zurück', 'stadt'); ?></a>
                        </li>
                    </ul>
                </div>
                <div class="mod_asidesearch" data-init="asidesearch">
                    <h5>Suche im Open Data Blog</h5>
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
        </div>
    </div>


<?php get_footer (); ?>
