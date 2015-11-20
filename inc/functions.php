<?php

/**
 * The actual SO Recommended Reading plugin files start here
 * For the function so_register_meta_boxes below I have taken the [demo.php file](https://github.com/rilwis/meta-box/blob/master/demo/demo.php) 
 * of the Meta Box plugin and adapted it for the specific purpose of this SO Recommended Reading Plugin.
 *
 * @since 2014.01.23
 */
add_filter( 'rwmb_meta_boxes', 'sorr_register_meta_boxes' );

/**
 * Register meta box
 *
 * @since 2014.01.23
 */
function sorr_register_meta_boxes( $meta_boxes )
{

	$prefix = 'sorr_';

	$meta_boxes[] = array(
		'id' => 'SO_recommended_reading',
		'title' => __( 'Recommended Reading', 'so-recommended-reading' ),
		'post_types' => array( 'post' ),
		'context' => 'normal',
		'priority' => 'high',
		'autosave' => true,
		'fields' => array(
			// URL
			array(
				'name'  => __( 'Link(s)', 'so-recommended-reading' ),
				'id'    => "{$prefix}link",
				'desc'  => __( 'The link of the article you are recommending (must start with http:// or https://)', 'so-recommended-reading' ),
				'type'  => 'url',
				'size'  => '40',
				'clone' => true,
				'sort_clone' => true
			),

		)
	);

	return $meta_boxes;
}

/**
 * Place the output at the bottom of the_content()
 * The output comes in its own class, so you can customise it with CSS all you want.
 *
 * Improved by changing priority from 1 to 5, add conditional is_main_query(), unset foreach call and escape text/url/title-strings
 *
 * @since 2014.01.23
 * @improved 2014.02.09
 */
add_filter ( 'the_content', 'sorr_output', 5 );

function sorr_output( $content ) {

	$sorr_links = rwmb_meta( 'sorr_link', true );

	if( ! empty( $sorr_links ) ) {

		// @since 2014.02.09 added is_main_query() to make sure that Recommended Reading links don't show elsewhere
		if ( is_main_query() && is_single() ) {

			$options = get_option( 'sorr_options' );
			$sorrtitle = $options['sorr_title'];
			$content .= '<div class="so-recommended-reading"><h4>' . esc_attr__( $sorrtitle ) . '</h4><ul class="recommended-articles">';
		
			foreach ( $sorr_links as $sorr_link ) {
	
				// grabbing the title via DOMDocument seems more reliable than via regex - http://stackoverflow.com/a/4349042/1381553
				$doc = new DOMDocument();
				@$doc->loadHTMLFile( $sorr_link );
				$xpath = new DOMXPath($doc);
				$sorr_title = $xpath->query('//title')->item(0)->nodeValue;
				
				// @since 1.4 use preg_replace to remove line breaks from output
				$content .= '<li><a href="' . esc_url( $sorr_link ) . '" title="' . esc_attr( preg_replace( '/\r|\n/', '', $sorr_title ) ) . '">' . esc_attr( preg_replace( '/\r|\n/', '', $sorr_title ) ) . '</a></li>';

			}
					
			// @since 2014.02.09
			unset( $sorr_link );
			
			$content .= '</ul></div>';
	
		}
		
	}

	return $content;
}
/*** The End ***/
