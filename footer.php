	</div><!-- #main -->

	<div id="footer" role="contentinfo">
		<div id="colophon">
			
			<?php if (is_singular()) : ?>
				<div class="entry-meta">
					<?php adamsrazor_post_meta_date(); ?>				
			
				<?php if ( count( get_the_category() ) ) : ?>
					<span class="cat-links">
						<?php printf( __( '<span class="%1$s">In categories: </span> %2$s', 'adams-razor' ), 'entry-utility-prep entry-utility-prep-cat-links', get_the_category_list( ', ' ) ); ?>
					</span>					
				<?php endif; ?>
				<?php
					$tags_list = get_the_tag_list( '', ', ' );
					if ( $tags_list ):
				?>
					<span class="tag-links">
						<?php printf( __( '<span class="%1$s">Tagged:</span> %2$s', 'adams-razor' ), 'entry-utility-prep entry-utility-prep-tag-links', $tags_list ); ?>
					</span>					
				<?php endif; ?>
				
				</div>
			<?php endif; ?>			
			
		</div>
		
		<div id="site-info">
			&copy; <a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
				<?php bloginfo( 'name' ); ?>
			</a>
		</div>

		<div id="site-generator">				
			<?php echo __( 'Powered by', 'adams-razor' ); ?> <a href="http://wordpress.org/">WordPress</a>. <?php echo __( 'Design made simple with', 'adams-razor' ); ?> <a href="http://adamlofting.com/adams-razor/">Adam's Razor</a>.
		</div>
	</div>

</div><!-- #wrapper -->

<?php wp_footer(); ?>
</body>
</html>
