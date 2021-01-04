    <footer>

        <div class="container">

            <div class="row mt-5">

                <div class="col-xs-0 col-sm-0 col-md-1 col-lg-1"></div>

                <div class="col-4 col-xs-6 col-sm-6 col-md-6 col-lg-7 pt-3 pr-0">

                    <div class="d-lg-flex flex-row-lg-reverse float-lg-right m-lg-3">

                    <?php
                    if (get_theme_mod( 'ju_footer_copyright_text' )) {
                        ?><div class="footer-menu pt-1 d-lg-inline float-lg-right pr-lg-2 pl-lg-2"><?php echo get_theme_mod( 'ju_footer_copyright_text' ); ?></div><?php
                    }
                    ?>

                    <?php
                    if (get_theme_mod ( 'ju_footer_privacy_page' )) {
                        ?><div class="footer-menu pt-1 d-lg-inline float-lg-right pr-lg-2 pl-lg-2"><a href="<?php the_permalink(get_theme_mod( 'ju_footer_privacy_page' )); ?>"><?php _e('Rechtliche Hinweise', 'stadt'); ?></a></div><?php
                    }
                    ?>

                    <?php
                    if (get_theme_mod( 'ju_portal_text' )) {
                        ?><div class="footer-menu pt-1 d-lg-inline float-lg-right pr-lg-2 pl-lg-2"><a href="<?php echo get_theme_mod( 'ju_portal_url' ); ?>" target="_blank"><?php echo get_theme_mod( 'ju_portal_text' ); ?></a></div><?php
                    }
                    ?>

                    </div>

                </div>

                <div class="col-8 col-xs-6 col-sm-6 col-md-4 col-lg-3 pt-4 pr-xs-2 pr-md-0 pl-0 m-0">

                    <div class="mod_cta__item float-right" data-cta-item="">
                        <a href="#" id="RequestLinkFooter">
                            <span class="label mod_cta__label">Zu stadt-zuerich.ch</span>
                        </a>
                    </div>

                </div>

                <div class="col-xs-0 col-sm-0 col-md-1 col-lg-1"></div>

            </div>

        </div>

    </footer>

</main>


    <script>
        // Twitter Overrides -----------------------------------------------------------------------------
        jQuery('#twitter-feed').delegate('#twitter-widget-0', 'DOMSubtreeModified propertychange', function () {
            customizeTweetMedia();
        });

        let customizeTweetMedia = function () {
            // CSS Overrides
            //jQuery('.twitter-feed').find('.twitter-timeline').contents().find('.timeline-Tweet-media').css('display', 'none');
            //jQuery('.twitter-feed').find('.twitter-timeline').contents().find('img.Avatar').css('display', 'none');
            //jQuery('.twitter-feed').find('.twitter-timeline').contents().find('span.TweetAuthor-avatar.Identity-avatar').remove();
            jQuery('#twitter-feed').find('.twitter-timeline').contents().find('span.TweetAuthor-screenName').css('font-size', '16px');
            jQuery('#twitter-feed').find('.twitter-timeline').contents().find('span.TweetAuthor-screenName').css('font-family', 'HelveticaNeueLTW01_55Roman,"Helvetica Neue",Helvetica,Arial,sans-serif');
            jQuery('#twitter-feed').find('.twitter-timeline').contents().find('p.timeline-Tweet-text').css('font-family', 'HelveticaNeueLTW01_55Roman,"Helvetica Neue",Helvetica,Arial,sans-serif');
            jQuery('#twitter-feed').find('.twitter-timeline').contents().find('p.timeline-Tweet-text').css('font-size', '1.2rem');
            jQuery('#twitter-feed').find('.twitter-timeline').contents().find('p.timeline-Tweet-text').css('line-height', '1.6');
            jQuery('#twitter-feed').find('.twitter-timeline').contents().find('p.timeline-Tweet-text').css('color', '#666666');
            //jQuery('.twitter-feed').find('.twitter-timeline').contents().find('ul.timeline-tweet-actions').css('display', 'none');

            // Call the function on dynamic updates in addition to page load
            jQuery('.twitter-feed').find('.twitter-timeline').contents().find('.timeline-TweetList').bind('DOMSubtreeModified propertychange', function () {
                customizeTweetMedia(this);
            });
        }
    </script>

    <script>

        // Redirect settings
        // parses and returns the parameters
        function getUrlVars() {
            let vars = {};
            let parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
            vars[key] = value;
            });
            return vars;
        }

        // pick value from variable array
        let RedirectRequest = getUrlVars()["REQUEST"];

        // if parameter is missing from URL
        function getUrlParam(parameter) {
            let urlparameter = 'https://www.stadt-zuerich.ch';
            if(window.location.href.indexOf(parameter) > -1) {
                urlparameter = getUrlVars()[parameter];
            }
            return urlparameter;
        }

        let Link = getUrlParam('REQUEST','Empty');
        let RedirectLink = (decodeURIComponent(Link));
        let Darksitevisited = '/?DarksiteVisited=true';
        document.getElementById("RequestLinkHeader").href = RedirectLink + Darksitevisited;
        document.getElementById("RequestLink").href = RedirectLink + Darksitevisited;
        document.getElementById("RequestLinkFooter").href = RedirectLink + Darksitevisited;

    </script>

<?php wp_footer(); ?>

</body>
</html>
