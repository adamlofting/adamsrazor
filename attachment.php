<?php
get_header(); ?>

		<div id="container" class="single-attachment">
			<div id="content" role="main">

			<?php
			get_template_part( 'loop', 'attachment' );
			?>

			</div>
		</div>

<?php get_footer(); ?>
