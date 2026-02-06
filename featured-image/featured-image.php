<?php
/**
 * @package Featured Image
 * @author Mervin Praison
 * @version 2.2
 */
/*
    Plugin Name: Featured Image
    Plugin URI: https://mer.vin/wordpress-featured-image
    Description: Provides you with a featured image shortcode [ featured-img ] and Featured Image widget. Very Easy to implement. 
    Author: Mervin Praison
    Version: 2.2
    License: GPLv2 or later
    License URI: https://www.gnu.org/licenses/gpl-2.0.html
    Author URI: https://mer.vin/
    Last change: 2025-01-08
*/
/**
* Example for use inside the loop: <?php if ( function_exists('get_featured_img') ) get_featured_img(); ?>
 */

/* Getting Featured Image [featured-img] */

function getting_featured_img() {
	global $post;
	$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
	$alt = get_post_meta(get_post_thumbnail_id( $post->ID ), '_wp_attachment_image_alt', true);

	if ( $image ) {
		// Escape URL and alt text to prevent XSS
		$image_url = esc_url( $image[0] );
		$alt_text = esc_attr( $alt );
		
		if ( $alt ) {
			$mpfeatureimg = sprintf(
				'<div id="featured-img-id"><img src="%s" alt="%s" /></div>',
				$image_url,
				$alt_text
			);
		} else {
			$mpfeatureimg = sprintf(
				'<div id="featured-img-id"><img src="%s" alt="" /></div>',
				$image_url
			);
		}
	} else {
		$mpfeatureimg = '';
	}

	return $mpfeatureimg;
}

add_shortcode('featured-img', 'getting_featured_img');

function get_featured_img() {
	// Output is already escaped in getting_featured_img()
	// phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	echo getting_featured_img();
}

/* Getting Featured Image Caption [featured-img-caption] */

function getting_featured_img_caption() {
	global $post;
	
	if ( ! $post ) {
		return '';
	}
	
	$thumbnail_id = get_post_thumbnail_id( $post->ID );
	
	if ( ! $thumbnail_id ) {
		return '';
	}
	
	$thumbnail_image = get_posts( array(
		'p' => $thumbnail_id,
		'post_type' => 'attachment'
	) );
	
	if ( empty( $thumbnail_image ) ) {
		return '';
	}
	
	// Escape caption output to prevent XSS
	return wp_kses_post( $thumbnail_image[0]->post_excerpt );
}

add_shortcode('featured-img-caption', 'getting_featured_img_caption');

function get_featured_img_caption() {
	// Output is already escaped in getting_featured_img_caption() with wp_kses_post()
	// phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	echo getting_featured_img_caption();
}


wp_register_sidebar_widget(
    'mp_featuredimg_1',        // your unique widget id
    'Featured Image',          // widget name
    'get_featured_img',  // callback function
    array(                  // options
        'description' => 'Displays featured image on each individual post/page.'
    )
);
?>