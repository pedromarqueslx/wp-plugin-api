<?php get_header (''); ?>

<?php
if ( have_posts() ) {
    while ( have_posts() ) {
        the_post ();
        ?>

    <div class="container">

        <div class="row">

            <div class="col-sm-0 col-md-1"></div>

            <div class="col-sm-12 col-md-10">

                <h1 id="anchorContent" class="page_title_darksite pt-3 pb-4"><?php echo esc_html( get_the_title() ); ?></h1>
                <p class="small mt-n2 pb-4"><?php _e('Letzte Aktualisierung: ', 'stadt'); ?><?php echo get_the_modified_date(); ?>, <?php echo  get_the_modified_time(); ?> Uhr</p>

            </div>

            <div class="col-sm-0 col-md-1"></div>

        </div>

        <div class="row">

            <div class="col-sm-0 col-md-1"></div>

            <div class="col-sm-12 col-md-10">

                <?php the_content (); ?>

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
