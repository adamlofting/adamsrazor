<?php
add_action( 'admin_init', 'adamsrazor_options_init' );
add_action( 'admin_menu', 'adamsrazor_options_add_page' );

function adamsrazor_options_init(){
	register_setting( 'adamsrazor_options', 'adamsrazor_theme_options', 'adamsrazor_options_validate' );
}

function adamsrazor_options_add_page() {
	add_theme_page( __( 'Adam\'s Razor Options', 'adams-razor' ), __( 'Adam\'s Razor Options', 'adams-razor' ), 'edit_theme_options', 'adamsrazor-theme-options', 'adamsrazor_options_create_page' );
}

function adamsrazor_options_create_page() {
	
	if ( ! isset( $_REQUEST['settings-updated'] ) )
		$_REQUEST['settings-updated'] = false;

	?>
	<div class="wrap">
		<?php screen_icon(); echo "<h2>" . __( ' Adam\'s Razor Options', 'adams-razor' ) . "</h2>"; ?>

		<?php if ( false !== $_REQUEST['settings-updated'] ) : ?>
		<div class="updated fade"><p><strong><?php _e( 'Options saved', 'adams-razor' ); ?></strong></p></div>
		<?php endif; ?>
		
		<form method="post" action="options.php">
			<?php settings_fields( 'adamsrazor_options' ); ?>
			<?php $options = get_option( 'adamsrazor_theme_options' ); ?>

			<table class="form-table">

				<tr valign="top"><th scope="row"><?php _e( 'Supress wp_generator output in &lt;head&gt;', 'adams-razor' ); ?></th>
					<td>
						<input id="adamsrazor_theme_options[supress_wp_generator]" name="adamsrazor_theme_options[supress_wp_generator]" type="checkbox" value="1" <?php checked( '1', $options['supress_wp_generator'] ); ?> />
						<label class="description" for="adamsrazor_theme_options[supress_wp_generator]"><?php _e( 'Tick this box if you would prefer to hide which version of WordPress your website is currently running. Some consider this a minor security improvement.', 'adams-razor' ); ?></label>
					</td>
				</tr>
				
			</table>

			<p class="submit">
				<input type="submit" class="button-primary" value="<?php _e( 'Save Options', 'adams-razor' ); ?>" />
			</p>
		</form>
	</div>
	<?php
}

function adamsrazor_options_validate( $input ) {
	
	if ( ! isset( $input['supress_wp_generator'] ) )
		$input['supress_wp_generator'] = null;
	$input['supress_wp_generator'] = ( $input['supress_wp_generator'] == 1 ? 1 : 0 );
	
	return $input;
}