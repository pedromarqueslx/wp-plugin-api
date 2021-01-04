<?php get_header (); ?>

    <div class="container">

        <div class="row m-4">

            <div class="col-sm-0 col-md-1"></div>

            <div class="col-sm-12 col-md-10 pt-3 pb-3 mt-3 mb-3">

                <h1 id="anchorContent" class="page_title"><?php _e('Ooopps.! Die von Ihnen gesuchte Seite konnte nicht gefunden werden.', 'stadt'); ?>.</h1>

                <p><?php _e('Suchen Sie nach dem besten Treffer oder navigieren Sie zur ', 'stadt'); ?><a href="<?php echo home_url(); ?>" class="font-weight-bold">Startseite</a></p>

                <hr>

                <h2><?php _e('Suchen', 'stadt'); ?></h2>

                <?php echo get_search_form(); ?>

            </div>

            <div class="col-sm-0 col-md-1"></div>

        </div>

    </div>


<?php get_footer ('v2'); ?>
