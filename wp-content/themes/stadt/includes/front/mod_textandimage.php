<?php
if( $rp_query->have_posts() ) {
    while ($rp_query->have_posts() ) {
        $rp_query->the_post();
        ?>
        <div class="col_title">
            <h2 class="content-header"><?php the_title(); ?></h2>
            <?php if ( function_exists( 'the_subtitle' ) ) { ?>
                <h3 class="content-subtitle"><?php the_subtitle(); ?></h3>
                <?php
            }
            ?>
        </div>
        <div class="col_left var_float_text var_small col_full_width">
            <?php
            if ( has_post_thumbnail() ) {
                ?>
                <figure class="mod_image">
                    <picture>
                        <!--[if IE 9]><video style="display: none;"><![endif]-->
                        <!--[if IE 9]></video><![endif]-->
                        ?>
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail('',['class' => '']); ?></a>
                    </picture>
                </figure>
                <?php
            }
            ?>
            <div class="content" style="padding-bottom: 30px;">
                <?php echo get_the_excerpt() .'...'; ?>
                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><div class="icon-arrow"><span class="visuallyhidden"<?php the_title(); ?></span></div></a>
            </div>
        </div>
        <?php
    }
    wp_reset_postdata();
}