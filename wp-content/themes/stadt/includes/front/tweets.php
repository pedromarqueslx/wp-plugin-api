<?php
if( get_theme_mod( 'ju_twitter_tweets_sichtbar' ) ) {
    ?>
    <div class="mod_textandimage">
        <div class="col_title">
            <h2 class="content-header"></h2>
        </div>

        <div class="col_left var_float_text var_small col_full_width">
            <div class="mod_styledtext" id="twitter-feed" style="padding-bottom: 30px;">
                <a class="twitter-timeline" data-chrome="nofooter" data-lang="de" data-link-color="#0070bc" data-aria-polite="assertive" data-tweet-limit="<?php echo get_theme_mod( 'ju_twitter_tweets' ); ?>" href="<?php echo get_theme_mod( 'ju_twitter_url' ); ?>"><?php echo get_theme_mod( 'ju_twitter_text' ); ?></a>
            </div>
        </div>

    </div>
    <?php
}
?>