<?php
/**
 * Render the Plugin options form
 * @since 2014.04.09
 */
function sorr_render_form() { ?>

	<div class="wrap">
		
		<!-- Display Plugin Header, and Description -->
		<h1><?php _e( 'SO Recommended Reading Settings', 'so-recommended-reading' ); ?></h1>
		
		<p><?php _e( 'Below you can change the title that shows above the list of Recommended Reading links.', 'so-recommended-reading' ); ?></p>
			
		<div id="sorr-settings">
	
			<!-- Beginning of the Plugin Options Form -->
			<form method="post" action="options.php">
			
				<?php settings_fields( 'sorr_plugin_options' ); ?>
		
				<?php $options = get_option( 'sorr_options' ); ?>
			
				<table class="form-table"><tbody>
						
					<tr valign="top">
						<th scope="row">
							<label for="sorr-title"><?php _e( 'Title above Recommended Reading list', 'so-recommended-reading' ); ?></label>
						</th>

						<td>
							<input name="sorr_options[sorr_title]" type="text" id="sorr-title" class="regular-text" value="<?php echo $options['sorr_title']; ?>" />
							<p class="description"><?php _e( 'Change the title above the Recommended Reading list into something of your liking', 'so-recommended-reading' ); ?></p>
							<input type="hidden" name="action" value="update" />
							<input type="hidden" name="page_options" value="<?php echo $options['sorr_title']; ?>" />								
						</td>
					</tr>

					<tr valign="top">
						<th scope="row">
							<label for="sorr-options">
								<?php 
									/* This can be added once the PLUS version is ready, for now just add a link to SO PLUS
printf( __( 'Get more options with<br /><a href="%s" title="SO PLUS, Premium WordPress Plugins by Senlin Online">SO Recommended Reading PLUS</a>!', 'so-recommended-reading' ),
										'https://senlinonline.com/plus/plugin/so-recommended-reading-plus/'
									);
*/
									__( 'Check out:', 'so-recommended-reading' );
								?>
							</label>
						</th>

						<td>
							<p class="description">
								<?php 
									/* This can be added once the PLUS version is ready, for now just add a link to SO PLUS
printf( __( 'Upgrade now with coupon code: %1$s for %2$s!', 'so-recommended-reading' ),
										'<span class="discount">SWITCH2PLUS</span>',
										'<strong>30% discount</strong>'
									);
*/
									printf( __( '<a href="%s" title="SO PLUS, Premium WordPress Plugins by Senlin Online">SO PLUS, Premium WordPress Plugins by Senlin Online</a>!', 'so-recommended-reading' ),
										'https://senlinonline.com/plus/'
									);
								?>
							</p>
						</td>
					</tr>
						
					<tr valign="top">
						<th scope="row">
							<label for="sorr-db-chk"><?php _e( 'Database Options', 'so-recommended-reading' ); ?></label>
						</th>
						
						<td>
							<input name="sorr_options[chk_default_options_db]" type="checkbox" id="sorr-db-chk" value="1" <?php if ( isset($options['chk_default_options_db'] ) ) { checked( '1', $options['chk_default_options_db'] ); } ?> />
								<?php _e( 'Restore defaults upon plugin deactivation/reactivation', 'so-recommended-reading' ); ?>
							<p class="description"><?php _e( 'Only check this if you want to reset plugin settings upon Plugin reactivation', 'so-recommended-reading' ); ?></p>
						</td>
					</tr>
				
				</tbody></table> <!-- end .tbody end table -->
				
				<p class="submit">
					
					<input type="submit" class="button-primary" value="<?php _e( 'Save Settings', 'so-recommended-reading' ) ?>" />
				
				</p>
			
			</form>
		
		</div><!-- #sorpp-settings -->

		<p class="rate-this-plugin">
			<?php
			/* Translators: 1 is link to WP Repo */
			printf( __( 'If you have found this plugin at all useful, please give it a favourable rating in the <a href="%s" title="Rate this plugin!">WordPress Plugin Repository</a>.', 'so-recommended-reading' ), 
				esc_url( 'http://wordpress.org/support/view/plugin-reviews/so-recommended-reading' )
			);
			?>
		</p>

		<p class="support">
			<?php
			/* Translators: 1 is link to Github Repo */
			printf( __( 'If you have an issue with this plugin or want to leave a feature request, please note that I give <a href="%s" title="Support or Feature Requests via Github">support via Github</a> only.', 'so-recommended-reading' ), 
				esc_url( 'https://github.com/senlin/so-recommended-reading/issues' )
			);
			?>
		</p>
		
		<div class="author postbox">
			
			<h3 class="hndle">
				<span><?php _e( 'About the Author', 'so-recommended-reading' ); ?></span>
			</h3>
			
			<div class="inside">
				<div class="top">
					<img class="author-image" src="http://www.gravatar.com/avatar/<?php echo md5( 'info@senlinonline.com' ); ?>" />
					<p>
						<?php printf( __( 'Hi, my name is Piet Bos, I hope you like this plugin! Please check out any of my other plugins on <a href="%s" title="SO WP Plugins">SO WP Plugins</a>. You can find out more information about me via the following links:', 'so-recommended-reading' ),
							esc_url( 'http://so-wp.com' )
						); ?>
					</p>
				</div> <!-- end .top -->
				
				<ul>
					<li><a href="http://senlinonline.com/" target="_blank" title="Senlin Online"><?php _e( 'Senlin Online', 'so-recommended-reading' ); ?></a></li>
					<li><a href="http://wpti.ps/" target="_blank" title="WP TIPS"><?php _e( 'WP Tips', 'so-recommended-reading' ); ?></a></li>
					<li><a href="https://www.linkedin.com/in/pietbos" target="_blank" title="LinkedIn profile"><?php _e( 'LinkedIn', 'so-recommended-reading' ); ?></a></li>
					<li><a href="https://github.com/senlin" title="on Github"><?php _e( 'Github', 'so-recommended-reading' ); ?></a></li>
					<li><a href="https://profiles.wordpress.org/senlin/" title="on WordPress.org"><?php _e( 'WordPress.org Profile', 'so-recommended-reading' ); ?></a></li>
				</ul>
			
			</div> <!-- end .inside -->
		
		</div> <!-- end .postbox -->

	</div> <!-- end .wrap -->

<?php }

