<?php get_header(); ?>

	<div id="container">
		<div id="content" role="main">
		<?php
		 get_template_part( 'loop', 'index' );
		?>
		</div>
		<?php get_sidebar(); ?>
	</div>

<?php get_footer(); ?>
