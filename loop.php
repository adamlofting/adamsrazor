

<?php if ( ! have_posts() ) : ?>
	<div id="post-0" class="post error404 not-found">
		<h1 class="entry-title"><?php _e( 'Not Found', 'adams-razor' ); ?></h1>
		<div class="entry-content">
			<p><?php _e( 'No results were found for the requested archive.', 'adams-razor' ); ?></p>
			<?php get_search_form(); ?>
		</div>
	</div>
<?php endif; ?>

<?php while ( have_posts() ) : the_post(); ?>
			
		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>			
			<?php $article_heading_tag = ( is_singular() ) ? 'h1' : 'h2'; ?>
			<<?php echo $article_heading_tag; ?> class="entry-title">
				<?php 
					$ar_title = the_title('', '', false);
					if ($ar_title == '') $ar_title = "Untitled";					
				?>
				<a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'adams-razor' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php echo $ar_title; ?></a>
			</<?php echo $article_heading_tag; ?>>
			
	<?php if ( is_archive() || is_search() ) :  ?>
			<div class="entry-summary">
				<?php the_excerpt(); ?>
			</div>
	<?php else : ?>
			<div class="entry-content">
				<?php the_content( __( 'Continue reading <span class="meta-nav">&raquo;</span>', 'adams-razor' ) ); ?>
				<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'adams-razor' ), 'after' => '</div>' ) ); ?>
			</div>
	<?php endif; ?>

		</div><!-- #post-## -->

		<?php comments_template( '', true ); ?>	

<?php endwhile; // End the loop. ?>

<?php if (  $wp_query->max_num_pages > 1 ) : ?>
				<div id="nav-below" class="navigation">
					<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&laquo;</span> Older posts', 'adams-razor' ) ); ?></div>
					<div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&raquo;</span>', 'adams-razor' ) ); ?></div>
				</div>
<?php endif; ?>
