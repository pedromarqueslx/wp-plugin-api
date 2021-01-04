<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>

		<?php
		if  ( is_search() ) :
			?>

            <h1><?php _e('Was suchst du heute?', 'stadt'); ?></h1>

            <?php get_search_form(); ?>

			<p><?php _e( 'Es tut uns leid, aber es stimmt nichts mit Ihren Suchbegriffen überein. Bitte versuchen Sie es mit anderen Suchbegriffen erneut.', 'stadt' ); ?></p>

            <?php get_search_form();

		else :
			?>

            <h1><?php _e('Was suchst du heute?', 'stadt'); ?></h1>
            <p><?php _e( 'Anscheinend können wir nicht finden, wonach Sie suchen. Vielleicht kann die Suche helfen.', 'stadt' ); ?></p>

            <?php get_search_form(); ?>

			<?php

		endif;
		?>
