	<!-- Sidebar
    ============================================= -->
	<div class="sidebar nobottommargin col_last clearfix">
		<div class="sidebar-widgets-wrap">
			<?php
			// Dysplay Stadt Zürich Side Bar
			if ( is_active_sidebar ( 'sz_sidebar' )) {
				dynamic_sidebar ( 'sz_sidebar' );
			}

			?>
		</div>
	</div><!-- .sidebar end -->