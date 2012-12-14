<?php
get_header(); ?>

	<div id="container">
		<div id="content" role="main">

			<div id="post-0" class="post error404 not-found">
				<h1 class="entry-title"><?php _e( 'Not Found', 'adams-razor' ); ?></h1>
				<div class="entry-content">
					<p><?php _e( 'The page you requested was not found. ', 'adams-razor' ); ?></p>
					<?php get_search_form(); ?>
				</div>
			</div>

		</div>
	</div>	

<?php get_footer(); ?>