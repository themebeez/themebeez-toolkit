<?php
/**
 * Theme Info Configurations - Fascinate.
 *
 * @since 1.0.0
 *
 * @package Themebeez_Toolkit
 */

if ( ! function_exists( 'themebeez_toolkit_fascinate_config' ) ) {
	/**
	 * Configuration of theme page - Fascinate.
	 *
	 * @since 1.0.0
	 */
	function themebeez_toolkit_fascinate_config() {

		$config = array(
			'sale_plan'       => 'Free',
			'menu_name'       => esc_html__( 'Fascinate Info', 'themebeez-toolkit' ),
			'page_name'       => esc_html__( 'Fascinate Info', 'themebeez-toolkit' ),
			'pro_version'     => array(
				'name' => 'Fascinate Pro',
				'url'  => 'https://themebeez.com/themes/fascinate-pro/',
			),
			'changelog_url'   => '',
			'theme_url'       => 'https://themebeez.com',
			// Tabs.
			'tabs'            => array(
				'getting_started'   => esc_html__( 'Getting Started', 'themebeez-toolkit' ),
				'starter_templates' => esc_html__( 'Starter Templates', 'themebeez-toolkit' ),
				'plugins'           => esc_html__( 'Plugins', 'themebeez-toolkit' ),
				'changelog'         => esc_html__( 'Changelog', 'themebeez-toolkit' ),
			),
			// Quick links.
			'quick_links'     => array(
				'pro_url'           => array(
					'title'      => esc_html__( 'Upgrade to Pro', 'themebeez-toolkit' ),
					'desc'       => esc_html__( 'Get advance customization and premium support from our team of WordPress experts via email.', 'themebeez-toolkit' ),
					'icon'       => 'dashicons-superhero',
					'link_title' => esc_html__( 'Get it today', 'themebeez-toolkit' ),
					'link_url'   => 'https://themebeez.com/themes/fascinate-pro/',
					'link_class' => 'button tt-button button-primary',
				),
				'demo_import_url'   => array(
					'title'      => esc_html__( 'Documentation', 'themebeez-toolkit' ),
					'desc'       => esc_html__( 'Stuck due to an issue? Our detailed documentation will surely clear up any confusions you have!', 'themebeez-toolkit' ),
					'icon'       => 'dashicons-media-document',
					'link_title' => esc_html__( 'Read Now', 'themebeez-toolkit' ),
					'link_url'   => 'https://themebeez.com/docs/fascinate-theme-documentation/',
					'link_class' => 'button tt-button button-secondary',
				),
				'theme_url'         => array(
					'title'      => esc_html__( 'Support', 'themebeez-toolkit' ),
					'desc'       => esc_html__( 'Get in touch with our support team. You can always submit a support ticket for help.', 'themebeez-toolkit' ),
					'icon'       => 'dashicons-megaphone',
					'link_title' => esc_html__( 'Create Post', 'themebeez-toolkit' ),
					'link_url'   => 'https://themebeez.com/support-forum/',
					'link_class' => 'button tt-button button-secondary',
				),
				'demo_url'          => array(
					'title'      => esc_html__( 'Feature Request', 'themebeez-toolkit' ),
					'desc'       => esc_html__( 'Please take a moment to suggest any features that could enhance our product.', 'themebeez-toolkit' ),
					'icon'       => 'dashicons-marker',
					'link_title' => esc_html__( 'Make a request', 'themebeez-toolkit' ),
					'link_url'   => 'https://github.com/themebeez/fascinate/issues',
					'link_class' => 'button tt-button button-secondary',
				),
				'documentation_url' => array(
					'title'      => esc_html__( 'Leave us a review', 'themebeez-toolkit' ),
					'desc'       => esc_html__( 'What do you think of our theme? Was it a good experience and did it match your expectations? Let us know so we can improve!', 'themebeez-toolkit' ),
					'icon'       => 'dashicons-star-empty',
					'link_title' => esc_html__( 'Submit a review', 'themebeez-toolkit' ),
					'link_url'   => 'https://wordpress.org/support/theme/fascinate/reviews/#new-post',
					'link_class' => 'button tt-button button-secondary',
				),
			),
			// Getting started.
			'getting_started' => array(
				'free' => array(
					array(
						'title'               => esc_html__( 'Site Identity', 'themebeez-toolkit' ),
						'text'                => '',
						'button_label'        => esc_html__( 'Customize', 'themebeez-toolkit' ),
						'button_link'         => esc_url( admin_url( 'themes.php?page=themebeez-demo-importer' ) ),
						'is_button'           => false,
						'recommended_actions' => false,
						'is_new_tab'          => false,
					),
					array(
						'title'               => esc_html__( 'Header Options', 'themebeez-toolkit' ),
						'text'                => '',
						'button_label'        => esc_html__( 'Customize', 'themebeez-toolkit' ),
						'button_link'         => esc_url( admin_url( 'themes.php?page=themebeez-demo-importer' ) ),
						'is_button'           => false,
						'recommended_actions' => false,
						'is_new_tab'          => false,
					),
					array(
						'title'               => esc_html__( 'Footer Options', 'themebeez-toolkit' ),
						'text'                => '',
						'button_label'        => esc_html__( 'Customize', 'themebeez-toolkit' ),
						'button_link'         => esc_url( admin_url( 'themes.php?page=themebeez-demo-importer' ) ),
						'is_button'           => false,
						'recommended_actions' => false,
						'is_new_tab'          => false,
					),
					array(
						'title'               => esc_html__( 'Carousel Options', 'themebeez-toolkit' ),
						'text'                => '',
						'button_label'        => esc_html__( 'Customize', 'themebeez-toolkit' ),
						'button_link'         => esc_url( admin_url( 'themes.php?page=themebeez-demo-importer' ) ),
						'is_button'           => false,
						'recommended_actions' => false,
						'is_new_tab'          => false,
					),
				),
				'pro'  => array(
					array(
						'title'               => esc_html__( 'Site Identity', 'themebeez-toolkit' ),
						'text'                => '',
						'button_label'        => esc_html__( 'Customize', 'themebeez-toolkit' ),
						'button_link'         => esc_url( admin_url( 'themes.php?page=themebeez-demo-importer' ) ),
						'is_button'           => false,
						'recommended_actions' => false,
						'is_new_tab'          => false,
					),
					array(
						'title'               => esc_html__( 'Header Options', 'themebeez-toolkit' ),
						'text'                => '',
						'button_label'        => esc_html__( 'Customize', 'themebeez-toolkit' ),
						'button_link'         => esc_url( admin_url( 'themes.php?page=themebeez-demo-importer' ) ),
						'is_button'           => false,
						'recommended_actions' => false,
						'is_new_tab'          => false,
					),
					array(
						'title'               => esc_html__( 'Footer Options', 'themebeez-toolkit' ),
						'text'                => '',
						'button_label'        => esc_html__( 'Customize', 'themebeez-toolkit' ),
						'button_link'         => esc_url( admin_url( 'themes.php?page=themebeez-demo-importer' ) ),
						'is_button'           => false,
						'recommended_actions' => false,
						'is_new_tab'          => false,
					),
					array(
						'title'               => esc_html__( 'Carousel Options', 'themebeez-toolkit' ),
						'text'                => '',
						'button_label'        => esc_html__( 'Customize', 'themebeez-toolkit' ),
						'button_link'         => esc_url( admin_url( 'themes.php?page=themebeez-demo-importer' ) ),
						'is_button'           => false,
						'recommended_actions' => false,
						'is_new_tab'          => false,
					),
				),
			),
		);

		Themebeez_Toolkit_Theme_Info::init( $config );
	}
}

add_action( 'after_setup_theme', 'themebeez_toolkit_fascinate_config' );
