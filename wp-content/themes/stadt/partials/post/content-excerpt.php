    <?php
    // get post format gallery and return array
    if( get_post_format()          == 'gallery' ) {
    // false option return html
    $gallery = get_post_gallery( get_the_ID(), false );
    /*
    foreach( $gallery['src'] as $src ) {
        ?>
        <div class="slide">
            <a href="<?php echo $src; ?>">
                <img src="<?php echo $src; ?>">
            </a>
        </div>
        <?php
    }
    */
    ?>

    <?php

    } else if ( get_post_format() == 'video' ) {
        $content                  =   apply_filters( 'the_content', get_the_content() );
        $video                    =   false;

        if( !strpos( $content, 'wp-playlist-script' )) {
            $video                =   get_media_embedded_in_content(
                $content,
                array( 'video', 'object', 'embed', 'iframe' )
            );
        }

        if( $video ){
            echo '<div class="entry-video">';
            echo $video[0];
            echo '</div>';
        }

    } else if ( get_post_format() == 'audio' ){
        $content                  =   apply_filters( 'the_content', get_the_content() );
        $audio                    =   false;

        if( !strpos( $content, 'wp-playlist-script' )) {
            $audio                =   get_media_embedded_in_content(
                $content,
                array( 'audio', 'iframe' )
            );
        }

        if( $audio ){
            echo $audio[0];
        }
    }
    ?>

    <h2 class="section_heading mt-4"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <p class="small" style="padding-bottom: 5px;"><?php _e('Veröffentlicht am, ', 'stadt'); ?><?php echo get_the_date(); ?></p>

    <div class="mod_textandimage">
        <div class="col_left var_large">
            <?php
                if (has_post_thumbnail () ) {
            ?>
            <figure class="mod_image" data-imagegallery="item" data-pswp-gid="4" data-pswp-pid="1">
                <picture>
                    <!--[if IE 9]><video style="display: none;"><![endif]-->
                    <!--[if IE 9]></video><![endif]-->
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail ('full', array( 'title' => get_the_title() )); ?></a>
                </picture>
                <figcaption>
                    <div class="text" style="padding-bottom: 10px;"><?php
                        echo get_post(get_post_thumbnail_id())->post_content; ?>
                    </div>
                </figcaption>
            </figure>
                <?php
            }
            ?>
        </div>

        <div class="col_right">
            <div class="mod_styledtext">
                <?php the_excerpt(); ?>
            </div>
        </div>
    </div>
