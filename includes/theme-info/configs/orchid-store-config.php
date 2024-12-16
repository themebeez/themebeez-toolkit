<?php
/**
 * Theme Info Configurations - Orchid Store.
 *
 * @since 1.0.0
 *
 * @package Themebeez_Toolkit
 */

if ( ! function_exists( 'themebeez_toolkit_orchid_store_config' ) ) {
	/**
	 * Configuration of theme page - Orchid Store.
	 *
	 * @since 1.0.0
	 */
	function themebeez_toolkit_orchid_store_config() {

		$config = array(
			'menu_name'           => esc_html__( 'Orchid Store Info', 'themebeez-toolkit' ),
			'page_name'           => esc_html__( 'Orchid Store Info', 'themebeez-toolkit' ),
			// Quick links.
			'quick_links'         => array(
				'demo_import_url'   => array(
					'text'   => esc_html__( 'Import Demo', 'themebeez-toolkit' ),
					'url'    => esc_url( admin_url( 'themes.php?page=themebeez-demo-importer' ) ),
					'button' => 'primary',
				),
				'theme_url'         => array(
					'text' => esc_html__( 'Theme Details', 'themebeez-toolkit' ),
					'url'  => 'https://themebeez.com/themes/orchid-store/',
				),
				'demo_url'          => array(
					'text' => esc_html__( 'View Demo', 'themebeez-toolkit' ),
					'url'  => 'https://themebeez.com/orchid-store-demos/',
				),
				'documentation_url' => array(
					'text' => esc_html__( 'View Documentation', 'themebeez-toolkit' ),
					'url'  => 'https://themebeez.com/docs/orchid-store-theme-documentation/',
				),
				'pro_url'           => array(
					'text'   => esc_html__( 'Upgrade To Pro Theme', 'themebeez-toolkit' ),
					'url'    => 'https://themebeez.com/themes/orchid-store-pro/',
					'button' => 'primary',
				),
			),
			// Tabs.
			'tabs'                => array(
				'getting_started'     => esc_html__( 'Getting Started', 'themebeez-toolkit' ),
				'recommended_actions' => esc_html__( 'Recommended Actions', 'themebeez-toolkit' ),
			),
			// Getting started.
			'getting_started'     => array(
				array(
					'title'               => esc_html__( 'Import Demo Content', 'themebeez-toolkit' ),
					'text'                => esc_html__( 'Setup theme easily by importing demo contents.', 'themebeez-toolkit' ),
					'button_label'        => esc_html__( 'Import Demo', 'themebeez-toolkit' ),
					'button_link'         => esc_url( admin_url( 'themes.php?page=themebeez-demo-importer' ) ),
					'is_button'           => true,
					'recommended_actions' => false,
					'is_new_tab'          => false,
				),
				array(
					'title'               => esc_html__( 'Theme Documentation', 'themebeez-toolkit' ),
					'text'                => esc_html__( 'Find step by step instructions with video documentation to setup theme easily.', 'themebeez-toolkit' ),
					'button_label'        => esc_html__( 'View documentation', 'themebeez-toolkit' ),
					'button_link'         => 'https://themebeez.com/docs/orchid-store-theme-documentation/',
					'is_button'           => true,
					'recommended_actions' => false,
					'is_new_tab'          => true,
				),
				array(
					'title'               => esc_html__( 'Recommended Actions', 'themebeez-toolkit' ),
					'text'                => esc_html__( 'We recommend few steps to take so that you can get complete site like shown in demo.', 'themebeez-toolkit' ),
					'button_label'        => esc_html__( 'Check recommended actions', 'themebeez-toolkit' ),
					'button_link'         => esc_url( admin_url( 'themes.php?page=themebeez-toolkit-about&tab=recommended_actions' ) ),
					'is_button'           => true,
					'recommended_actions' => false,
					'is_new_tab'          => false,
				),
				array(
					'title'               => esc_html__( 'Customize Everything', 'themebeez-toolkit' ),
					'text'                => esc_html__( 'Start customizing every aspect of the website with customizer.', 'themebeez-toolkit' ),
					'button_label'        => esc_html__( 'Go to Customizer', 'themebeez-toolkit' ),
					'button_link'         => esc_url( wp_customize_url() ),
					'is_button'           => true,
					'recommended_actions' => false,
					'is_new_tab'          => false,
				),

				array(
					'title'               => esc_html__( 'Youtube Video Tutorials', 'themebeez-toolkit' ),
					'text'                => esc_html__( 'Please check our youtube channel for video instructions of themebeez-toolkit setup and customization.', 'themebeez-toolkit' ),
					'button_label'        => esc_html__( 'Video Tutorials', 'themebeez-toolkit' ),
					'button_link'         => 'https://www.youtube.com/channel/UC3oIQqb6U-uQlxs2MDnP6yg',
					'is_button'           => true,
					'recommended_actions' => false,
					'is_new_tab'          => true,
				),

				array(
					'title'               => esc_html__( 'Pro Version', 'themebeez-toolkit' ),
					'text'                => esc_html__( 'Upgrade to pro version for additional features and options.', 'themebeez-toolkit' ),
					'button_label'        => esc_html__( 'View Pro Version', 'themebeez-toolkit' ),
					'button_link'         => 'https://themebeez.com/themes/orchid-store-pro/',
					'is_button'           => true,
					'recommended_actions' => false,
					'is_new_tab'          => true,
				),
				array(
					'title'               => esc_html__( 'Contact Support', 'themebeez-toolkit' ),
					'text'                => esc_html__( 'If you have any problem, feel free to create ticket on our dedicated Support forum.', 'themebeez-toolkit' ),
					'button_label'        => esc_html__( 'Contact Support', 'themebeez-toolkit' ),
					'button_link'         => 'https://themebeez.com/support-forum/',
					'is_button'           => true,
					'recommended_actions' => false,
					'is_new_tab'          => true,
				),
			),
			// Recommended actions.
			'recommended_actions' => array(
				'content' => array(
					'woocommerce'                 => array(
						'title'       => esc_html__( 'WooCommerce', 'themebeez-toolkit' ),
						'description' => esc_html__( 'Installing Woocommerce plugin help you set your online shop or store.', 'themebeez-toolkit' ),
						'check'       => class_exists( 'WooCommerce' ),
						'plugin_slug' => 'woocommerce',
						'id'          => 'woocommerce',
					),
					'yith-woocommerce-wishlist'   => array(
						'title'       => esc_html__( 'YITH WooCommerce Wishlist', 'themebeez-toolkit' ),
						'description' => '',
						'check'       => defined( 'YITH_WCWL' ),
						'plugin_slug' => 'yith-woocommerce-wishlist',
						'id'          => 'yith-woocommerce-wishlist',
					),
					'yith-woocommerce-quick-view' => array(
						'title'       => esc_html__( 'YITH WooCommerce Quick View', 'themebeez-toolkit' ),
						'description' => '',
						'check'       => defined( 'YITH_WCQV' ),
						'plugin_slug' => 'yith-woocommerce-quick-view',
						'id'          => 'yith-woocommerce-quick-view',
					),
					'elementor'                   => array(
						'title'       => esc_html__( 'Elementor Page Builder', 'themebeez-toolkit' ),
						'description' => '',
						'check'       => defined( 'ELEMENTOR_VERSION' ),
						'plugin_slug' => 'elementor',
						'id'          => 'elementor',
					),
				),
			),
		);

		Themebeez_Toolkit_Theme_Info::init( $config );
	}
}

add_action( 'after_setup_theme', 'themebeez_toolkit_orchid_store_config' );
