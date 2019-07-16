<?php
/* The Settings Page 
	This file creates an options page in the wp-admin area of your WordPress site 
	for specifying how many days you want for the date to show on your recent posts.
	
	This file is for use with the WP Old Post Date Remover plugin found at
	http://wordpress.org/plugins/wp-old-post-date-remover/
*/

defined( 'ABSPATH' ) or die( "No script kiddies please!" );
add_action( 'admin_menu', 'OPDR__add_admin_menu' );
add_action( 'admin_init', 'OPDR__settings_init' );


function OPDR__add_admin_menu() {

	add_options_page( 'WP Old Post Date Remover', 'Old Post Date Remover', 'manage_options', 'wp_old_post_date_remover', 'wp_old_post_date_remover_options_page' );

}


function OPDR__settings_exist() {

	if ( false == get_option( 'wp_old_post_date_remover_settings' ) ) {

		add_option( 'wp_old_post_date_remover_settings' );

	}

}


function OPDR__settings_init() {

	add_settings_section(
		'OPDR__OPDR_page_section',
		__( '', 'wp-old-post-date-remover' ),
		'OPDR__settings_section_callback',
		'OPDR_page'
	);

	add_settings_field(
		'opdr_days_to_show_date',
		__( 'How many days would you like to display the date?', 'wp-old-post-date-remover' ),
		'OPDR__text_field_0_render',
		'OPDR_page',
		'OPDR__OPDR_page_section'
	);
	register_setting( 'OPDR_page', 'opdr_days_to_show_date' );

}


function OPDR__text_field_0_render() {

	$options = get_option( 'opdr_days_to_show_date' );
	?>
	<input type='number' min='1' class='small-text' name='opdr_days_to_show_date' value='<?php echo $options; ?>'>
	<?php

}


function OPDR__settings_section_callback() {

	_e( 'Add the number of DAYS you\'d like to display the date on your recent posts.', 'wp-old-post-date-remover' );

}


function wp_old_post_date_remover_options_page() {

	?>
	<form action='options.php' method='post'>
		<div class="wrap">

			<h2><?php _e( 'Old Post Date Remover Settings', 'wp-old-post-date-remover' ); ?></h2>
			<hr/>
			<div id="opdr_admin" class="metabox-holder has-right-sidebar">
				<div class="inner-sidebar">
					<div id="normal-sortables" class="meta-box-sortables ui-sortable">
						<div class="postbox">
							<div class="inside">
								<h3 class="hndle ui-sortable-handle"><?php _e( 'About the Author', 'wp-old-post-date-remover' ); ?> </h3>

								<div id="opdr_signup">
									<form
										action="//benandjacq.us1.list-manage.com/subscribe/post?u=8f88921110b81f81744101f4d&amp;id=bd909b5f89"
										method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form"
										class="validate" target="_blank" novalidate>
										<div id="mc_embed_signup_scroll">
											<p> <?php echo sprintf( __( 'This plugin is developed by <a href="%s">Ben Meredith</a>. I am a freelance developer specializing in <a href="%s">outrunning and outsmarting hackers</a>.', 'wp-old-post-date-remover' ), esc_url( 'http://benandjacq.com' ), esc_url( 'http://benandjacq.com/wordpress-maintenance-plans' ) ); ?></p>
											<h4><?php _e( 'Sign up to receive my FREE web strategy guide', 'wp-old-post-date-remover' ); ?></h4>

											<p><input type="email" value="" name="EMAIL" class="widefat" id="mce-EMAIL"
											          placeholder="<?php _ex( 'Your Email Address', 'placeholder text for input field', 'wp-old-post-date-remover' ); ?>">
												<small><?php _e( 'No Spam. One-click unsubscribe in every message', 'wp-old-post-date-remover' ); ?></small>
											</p>
											<div style="position: absolute; left: -5000px;"><input type="text"
											                                                       name="b_8f88921110b81f81744101f4d_bd909b5f89"
											                                                       tabindex="-1"
											                                                       value="">
											</div>
											<p class="clear"><input type="submit" value="Subscribe" name="subscribe"
											                        id="mc-embedded-subscribe" class="button-secondary">
											</p>

										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
					<div class="meta-box-sortables">
						<div class="postbox">
							<div class="inside">
								<p><?php
									$url3  = 'http://benlikes.us/donate';
									$link3 = sprintf( __( 'The best way you can support this and other plugins is to <a href=%s>donate</a>', 'wp-old-post-date-remover' ), esc_url( $url3 ) );
									echo $link3; ?> .
									<?php
									$url4  = 'https://wordpress.org/support/view/plugin-reviews/wp-old-post-date-remover';
									$link4 = sprintf( __( 'The second best way is to <a href=%s>leave an honest review.</a>', 'wp-old-post-date-remover' ), esc_url( $url4 ) );
									echo $link4; ?></p>

								<p><?php
									_e( 'Did this plugin save you enough time to be worth some money?', 'wp-old-post-date-remover' ); ?></p>

								<p>
									<a href="http://benlikes.us/donate"
									   target="_blank"><?php _e( 'Click here to buy me a Coke to say thanks.', 'wp-old-post-date-remover' ); ?></a>
								</p>
							</div>
						</div>
					</div>
				</div>
				<div id="post-body" class="has-sidebar">
					<div id="post-body-content" class="has-sidebar-content">
						<div id="normal-sortables" class="meta-box-sortables">
							<div class="postbox">
								<div class="inside">
									<h2 class="hndle"><?php _e( 'Settings', 'wp-old-post-date-remover' ); ?></h2>

									<p><?php
										settings_fields( 'OPDR_page' );
										do_settings_sections( 'OPDR_page' );
										?></p>

									<p><input type="submit" class="button-primary"
									          value="<?php _e( 'Save Changes', 'wp-old-post-date-remover' ); ?>"/>
									</p><?php
									$forum_link = 'https://wordpress.org/support/plugin/wp-old-post-date-remover'
									?>
									<p> <?php $forum_link_text = sprintf( __( 'If you are having any difficulty, please post your issue in the <a href=%s>support forum</a>, where I actively help!', 'wp-old-post-date-remover' ), esc_url( $forum_link ) );
										echo $forum_link_text; ?>
									</p>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</form>
	<?php

}

