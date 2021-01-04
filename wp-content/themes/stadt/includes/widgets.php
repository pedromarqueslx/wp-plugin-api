<?php
function sz_widgets() {
	// Register Side Bar and add HTML
	register_sidebar(array(
		'name'			=> __( 'Stadt Zürich Theme Side Bar', 'stadt' ),
		'id'			=> 'sz_sidebar',
		'description'	=> __( 'Side bar for Stadt Zürich Theme', 'stadt' ),
		'before_widget'	=> '<div id="%1$s" class="widget clearfix %2$s">',
		'after_widget'	=> '</div>',
		'before_title'	=> '<h4>',
		'after_title'	=> '</h4>'
	));
}
