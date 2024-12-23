<?php
/**
 * Definition of demo content for Cream Blog Lite theme.
 *
 * @since 1.0.0
 *
 * @package Themebeez_Toolkit
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Class - TT_Theme_Demo_Cream_Blog_Lite.
 *
 * @since 1.0.0
 */
class TT_Theme_Demo_Cream_Blog_Lite extends TT_Theme_Demo {

	/**
	 * Defines demo content files sources.
	 *
	 * @since 1.0.0
	 */
	public static function import_files() {

		$server_url = 'https://themebeez.com/demo-contents/cream-blog-lite/';

		$demo_urls = array(
			array(
				'import_file_name'           => esc_html__( 'Demo One', 'themebeez-toolkit' ),
				'import_file_url'            => $server_url . 'contents.xml',
				'import_widget_file_url'     => $server_url . 'widgets.wie',
				'import_customizer_file_url' => $server_url . 'customizer.dat',
				'import_preview_image_url'   => $server_url . 'screenshot.png',
				'demo_url'                   => 'https://themebeez.com/demos/?theme=cream-blog-lite',
			),
		);

		return $demo_urls;
	}

	/**
	 * Action to perfom after demo content import.
	 *
	 * @since 1.0.0
	 *
	 * @param string $selected_import Selected import.
	 */
	public static function after_import( $selected_import ) {

		update_option( 'widget_block', array() );

		$primary_menu = get_term_by( 'name', 'Main Menu', 'nav_menu' );

		set_theme_mod(
			'nav_menu_locations',
			array(
				'menu-1' => $primary_menu->term_id,
			)
		);

		$travel_category = get_term_by( 'slug', 'travel', 'category' );

		$banner_cats = array( $travel_category->term_id );

		set_theme_mod( 'cream_blog_banner_categories', $banner_cats );
	}
}
