<?php	
	if ( is_active_sidebar( 'primary-widget-area' ) ) : ?>

		<div id="primary" class="widget-area" role="complementary">
			<ul class="xoxo">
				<?php dynamic_sidebar( 'primary-widget-area' ); ?>
			</ul>
		</div>

<?php endif; ?>		
	
	
	
<?php	
	if ( is_active_sidebar( 'first-footer-widget-area' ) || 
			is_active_sidebar( 'second-footer-widget-area' ) ||
			is_active_sidebar( 'third-footer-widget-area' ) ) : ?>
		
		<div id="pre-footer" role="complementary">	
			<div id="first-pre-footer" class="widget-area">
				<ul class="xoxo">
					<?php dynamic_sidebar( 'first-footer-widget-area' ); ?>
				</ul>
			</div>
			<div id="second-pre-footer" class="widget-area">
				<ul class="xoxo">
					<?php dynamic_sidebar( 'second-footer-widget-area' ); ?>
				</ul>
			</div>
			<div id="third-pre-footer" class="widget-area">
				<ul class="xoxo">
					<?php dynamic_sidebar( 'third-footer-widget-area' ); ?>
				</ul>
			</div>
		</div>
		
<?php endif; ?>

	