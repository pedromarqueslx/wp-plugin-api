
<?php
    $languages_fields = get_field('languages_fields_group');
?>

<?php if( $languages_fields && $languages_fields['english'] ) : ?>
    <div class="mod_accordion">
        <div class="mod_accordion" data-init="accordion">
            <div class="var_small">
                <a href="#" class="trigger" data-accordion="trigger" aria-expanded="false">
                    <span class="trigger_title"><?php _e('English', 'stadt'); ?>
                        <span class="trigger_title__additonal-text--closed"></span>
                        <span class="trigger_title__additonal-text--opened"></span>
                    </span>
                    <span class="trigger_icon is_collapsed" data-accordion="triggerIcon"></span>
                </a>
                <?php
                if ( is_user_logged_in() ) {
                    ?>
                    <div class="" data-accordion="content">
                    <?php
                } else {
                    ?>
                    <div class="content is_hidden" data-accordion="content">
                    <?php
                }
                ?>
                    <div class="content parsys">
                        <div class="mod_textandimage">
                            <div class="col_left var_float_text col_full_width">
                                <div class="mod_styledtext">
                                    <?php echo $languages_fields['english']; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>


<?php if( $languages_fields && $languages_fields['italiano'] ) : ?>
    <div class="mod_accordion">
        <div class="mod_accordion" data-init="accordion">
            <div class="var_small">
                <a href="#" class="trigger" data-accordion="trigger" aria-expanded="false">
                    <span class="trigger_title"><?php _e('Italiano', 'stadt'); ?>
                        <span class="trigger_title__additonal-text--closed"></span>
                        <span class="trigger_title__additonal-text--opened"></span>
                    </span>
                    <span class="trigger_icon is_collapsed" data-accordion="triggerIcon"></span>
                </a>
                <?php
                if ( is_user_logged_in() ) {
                    ?>
                    <div class="" data-accordion="content">
                    <?php
                } else {
                    ?>
                    <div class="content is_hidden" data-accordion="content">
                    <?php
                }
                ?>
                    <div class="content parsys">
                        <div class="mod_textandimage">
                            <div class="col_left var_float_text col_full_width">
                                <div class="mod_styledtext">
                                    <?php echo $languages_fields['italiano']; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>


<?php if( $languages_fields && $languages_fields['francais'] ) : ?>
    <div class="mod_accordion">
        <div class="mod_accordion" data-init="accordion">
            <div class="var_small">
                <a href="#" class="trigger" data-accordion="trigger" aria-expanded="false">
                    <span class="trigger_title"><?php _e('Français', 'stadt'); ?>
                        <span class="trigger_title__additonal-text--closed"></span>
                        <span class="trigger_title__additonal-text--opened"></span>
                    </span>
                    <span class="trigger_icon is_collapsed" data-accordion="triggerIcon"></span>
                </a>
                <?php
                if ( is_user_logged_in() ) {
                ?>
                <div class="" data-accordion="content">
                    <?php
                } else {
                    ?>
                    <div class="content is_hidden" data-accordion="content">
                    <?php
                }
                ?>
                    <div class="content parsys">
                        <div class="mod_textandimage">
                            <div class="col_left var_float_text col_full_width">
                                <div class="mod_styledtext">
                                    <?php echo $languages_fields['francais']; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
