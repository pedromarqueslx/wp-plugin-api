<?php get_header (); ?>


<div class="container">

    <div class="row mt-4">

        <div class="col-sm-0 col-md-1"></div>

        <div class="col-sm-12 col-md-10 pt-3 pb-3 mt-3 mb-3" style="min-height: 35rem">

            <?php if ( have_posts() ) : ?>
                <h1 id="anchorContent" class="page_title"><?php printf( __( 'Suchergebnis: %s', 'stadt' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
            <?php else : ?>
                <h1 id="anchorContent" class="page_title"><?php _e( 'Suchergebnis: keine Treffer', 'stadt' ); ?></h1>
            <?php endif; ?>
            <?php
            if ( have_posts() ) :
                /* Start the Loop */
                while ( have_posts() ) :
                    the_post();
                    get_template_part('partials/post/content-excerpt');
                endwhile; // End of the loop.
                ?>
                <h2 class="section_heading"></h2><br>
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
            else :
                get_search_form();
            endif;
            ?>

            <?php
                get_template_part('includes/front/top')
            ?>

         </div>

        <div class="col-sm-0 col-md-1"></div>

    </div>

</div>


<?php get_footer (); ?>
