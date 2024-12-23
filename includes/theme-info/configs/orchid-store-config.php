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

		$pro_url = 'https://themebeez.com/themes/royale-news-pro/';

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
				'getting_started'   => esc_html__( 'Getting Started', 'themebeez-toolkit' ),
				'starter_templates' => esc_html__( 'Starter Templates', 'themebeez-toolkit' ),
				'plugins'           => esc_html__( 'Plugins', 'themebeez-toolkit' ),
				'changelog'         => esc_html__( 'Changelog', 'themebeez-toolkit' ),
			),
			// Getting started.
			'getting_started' => array(
				'free' => array(
					array(
						'title'               => esc_html__( 'Site Identity', 'themebeez-toolkit' ),
						'text'                => '',
						'button_label'        => esc_html__( 'Customize', 'themebeez-toolkit' ),
						'button_link'         => esc_url( admin_url( 'customize.php?autofocus[section]=orchid_store_section_site_logo' ) ),
						'is_button'           => false,
						'recommended_actions' => false,
						'is_new_tab'          => false,
					),
					array(
						'title'               => esc_html__( 'Homepage Options', 'themebeez-toolkit' ),
						'text'                => '',
						'button_label'        => esc_html__( 'Customize', 'themebeez-toolkit' ),
						'button_link'         => esc_url( admin_url( 'customize.php?autofocus[section]=static_front_page' ) ),
						'is_button'           => false,
						'recommended_actions' => false,
						'is_new_tab'          => false,
					),
					array(
						'title'               => esc_html__( 'General Options', 'themebeez-toolkit' ),
						'text'                => '',
						'button_label'        => esc_html__( 'Customize', 'themebeez-toolkit' ),
						'button_link'         => esc_url( admin_url( 'customize.php?autofocus[section]=orchid_store_section_site_general' ) ),
						'is_button'           => false,
						'recommended_actions' => false,
						'is_new_tab'          => false,
					),
					array(
						'title'               => esc_html__( 'Site Layout Options', 'themebeez-toolkit' ),
						'text'                => '',
						'button_label'        => esc_html__( 'Customize', 'themebeez-toolkit' ),
						'button_link'         => esc_url( admin_url( 'customize.php?autofocus[section]=orchid_store_section_site_layout' ) ),
						'is_button'           => false,
						'recommended_actions' => false,
						'is_new_tab'          => false,
					),
					array(
						'title'               => esc_html__( 'Header Options', 'themebeez-toolkit' ),
						'text'                => '',
						'button_label'        => esc_html__( 'Customize', 'themebeez-toolkit' ),
						'button_link'         => esc_url( admin_url( 'customize.php?autofocus[panel]=orchid_store_panel_site_header' ) ),
						'is_button'           => false,
						'recommended_actions' => false,
						'is_new_tab'          => false,
					),
					array(
						'title'               => esc_html__( 'Pages Options', 'themebeez-toolkit' ),
						'text'                => '',
						'button_label'        => esc_html__( 'Customize', 'themebeez-toolkit' ),
						'button_link'         => esc_url( admin_url( 'customize.php?autofocus[panel]=orchid_store_panel_site_pages' ) ),
						'is_button'           => false,
						'recommended_actions' => false,
						'is_new_tab'          => false,
					),
					array(
						'title'               => esc_html__( 'Color Options', 'themebeez-toolkit' ),
						'text'                => '',
						'button_label'        => esc_html__( 'Customize', 'themebeez-toolkit' ),
						'button_link'         => esc_url( admin_url( 'customize.php?autofocus[panel]=orchid_store_panel_site_colors' ) ),
						'is_button'           => false,
						'recommended_actions' => false,
						'is_new_tab'          => false,
					),
					array(
						'title'               => esc_html__( 'Sidebar Options', 'themebeez-toolkit' ),
						'text'                => '',
						'button_label'        => esc_html__( 'Customize', 'themebeez-toolkit' ),
						'button_link'         => esc_url( admin_url( 'customize.php?autofocus[section]=orchid_store_section_site_sidebar' ) ),
						'is_button'           => false,
						'recommended_actions' => false,
						'is_new_tab'          => false,
					),
					array(
						'title'               => esc_html__( 'Footer Options', 'themebeez-toolkit' ),
						'text'                => '',
						'button_label'        => esc_html__( 'Customize', 'themebeez-toolkit' ),
						'button_link'         => esc_url( admin_url( 'customize.php?autofocus[section]=orchid_store_section_site_footer' ) ),
						'is_button'           => false,
						'recommended_actions' => false,
						'is_new_tab'          => false,
					),
					array(
						'title'               => esc_html__( 'Excerpt Options', 'themebeez-toolkit' ),
						'text'                => '',
						'button_label'        => esc_html__( 'Customize', 'themebeez-toolkit' ),
						'button_link'         => esc_url( admin_url( 'customize.php?autofocus[section]=orchid_store_section_post_excerpt' ) ),
						'is_button'           => false,
						'recommended_actions' => false,
						'is_new_tab'          => false,
					),
					array(
						'title'               => esc_html__( 'Accessibility Options', 'themebeez-toolkit' ),
						'text'                => '',
						'button_label'        => esc_html__( 'Customize', 'themebeez-toolkit' ),
						'button_link'         => esc_url( admin_url( 'customize.php?autofocus[section]=orchid_store_section_theme_accessibility' ) ),
						'is_button'           => false,
						'recommended_actions' => false,
						'is_new_tab'          => false,
					),
					array(
						'title'               => esc_html__( 'Background Options', 'themebeez-toolkit' ),
						'text'                => '',
						'button_label'        => esc_html__( 'Customize', 'themebeez-toolkit' ),
						'button_link'         => esc_url( admin_url( 'customize.php?autofocus[section]=background_image' ) ),
						'is_button'           => false,
						'recommended_actions' => false,
						'is_new_tab'          => false,
					),
					array(
						'title'               => esc_html__( 'Menu Options', 'themebeez-toolkit' ),
						'text'                => '',
						'button_label'        => esc_html__( 'Customize', 'themebeez-toolkit' ),
						'button_link'         => esc_url( admin_url( 'customize.php?autofocus[panel]=nav_menus' ) ),
						'is_button'           => false,
						'recommended_actions' => false,
						'is_new_tab'          => false,
					),
					array(
						'title'               => esc_html__( 'Widgets Options', 'themebeez-toolkit' ),
						'text'                => '',
						'button_label'        => esc_html__( 'Customize', 'themebeez-toolkit' ),
						'button_link'         => esc_url( admin_url( 'customize.php?autofocus[panel]=widgets' ) ),
						'is_button'           => false,
						'recommended_actions' => false,
						'is_new_tab'          => false,
					),
					array(
						'title'               => esc_html__( 'Woocommerce Options', 'themebeez-toolkit' ),
						'text'                => '',
						'button_label'        => esc_html__( 'Customize', 'themebeez-toolkit' ),
						'button_link'         => esc_url( admin_url( 'customize.php?autofocus[panel]=woocommerce' ) ),
						'is_button'           => false,
						'recommended_actions' => false,
						'is_new_tab'          => false,
					),
					array(
						'title'               => esc_html__( 'Additional CSS Options', 'themebeez-toolkit' ),
						'text'                => '',
						'button_label'        => esc_html__( 'Customize', 'themebeez-toolkit' ),
						'button_link'         => esc_url( admin_url( 'customize.php?autofocus[section]=custom_css' ) ),
						'is_button'           => false,
						'recommended_actions' => false,
						'is_new_tab'          => false,
					),
				),
				'pro'  => array(
					array(
						'title'               => esc_html__( 'Advance Color Options', 'themebeez-toolkit' ),
						'text'                => '',
						'button_label'        => esc_html__( 'Learn More', 'themebeez-toolkit' ),
						'button_link'         => $pro_url,
						'is_button'           => false,
						'recommended_actions' => false,
						'is_new_tab'          => false,
					),
					array(
						'title'               => esc_html__( 'Advance Typography Options', 'themebeez-toolkit' ),
						'text'                => '',
						'button_label'        => esc_html__( 'Learn More', 'themebeez-toolkit' ),
						'button_link'         => $pro_url,
						'is_button'           => false,
						'recommended_actions' => false,
						'is_new_tab'          => false,
					),
					array(
						'title'               => esc_html__( 'Multiple Header layout Options', 'themebeez-toolkit' ),
						'text'                => '',
						'button_label'        => esc_html__( 'Learn More', 'themebeez-toolkit' ),
						'button_link'         => $pro_url,
						'is_button'           => false,
						'recommended_actions' => false,
						'is_new_tab'          => false,
					),
					array(
						'title'               => esc_html__( 'Multiple Banner layout Options', 'themebeez-toolkit' ),
						'text'                => '',
						'button_label'        => esc_html__( 'Learn More', 'themebeez-toolkit' ),
						'button_link'         => $pro_url,
						'is_button'           => false,
						'recommended_actions' => false,
						'is_new_tab'          => false,
					),
					array(
						'title'               => esc_html__( 'Three Columns Product Widget', 'themebeez-toolkit' ),
						'text'                => '',
						'button_label'        => esc_html__( 'Learn More', 'themebeez-toolkit' ),
						'button_link'         => $pro_url,
						'is_button'           => false,
						'recommended_actions' => false,
						'is_new_tab'          => false,
					),
					array(
						'title'               => esc_html__( 'Product Deal Widget', 'themebeez-toolkit' ),
						'text'                => '',
						'button_label'        => esc_html__( 'Learn More', 'themebeez-toolkit' ),
						'button_link'         => $pro_url,
						'is_button'           => false,
						'recommended_actions' => false,
						'is_new_tab'          => false,
					),
					array(
						'title'               => esc_html__( 'Testimonial Widget', 'themebeez-toolkit' ),
						'text'                => '',
						'button_label'        => esc_html__( 'Learn More', 'themebeez-toolkit' ),
						'button_link'         => $pro_url,
						'is_button'           => false,
						'recommended_actions' => false,
						'is_new_tab'          => false,
					),
					array(
						'title'               => esc_html__( 'Featured Brands Widget', 'themebeez-toolkit' ),
						'text'                => '',
						'button_label'        => esc_html__( 'Learn More', 'themebeez-toolkit' ),
						'button_link'         => $pro_url,
						'is_button'           => false,
						'recommended_actions' => false,
						'is_new_tab'          => false,
					),
					array(
						'title'               => esc_html__( 'CTA Widget', 'themebeez-toolkit' ),
						'text'                => '',
						'button_label'        => esc_html__( 'Learn More', 'themebeez-toolkit' ),
						'button_link'         => $pro_url,
						'is_button'           => false,
						'recommended_actions' => false,
						'is_new_tab'          => false,
					),
					array(
						'title'               => esc_html__( 'Regular Update', 'themebeez-toolkit' ),
						'text'                => '',
						'button_label'        => esc_html__( 'Learn More', 'themebeez-toolkit' ),
						'button_link'         => $pro_url,
						'is_button'           => false,
						'recommended_actions' => false,
						'is_new_tab'          => false,
					),
					array(
						'title'               => esc_html__( 'Premium Support', 'themebeez-toolkit' ),
						'text'                => '',
						'button_label'        => esc_html__( 'Learn More', 'themebeez-toolkit' ),
						'button_link'         => $pro_url,
						'is_button'           => false,
						'recommended_actions' => false,
						'is_new_tab'          => false,
					),
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
			),
		);

		Themebeez_Toolkit_Theme_Info::init( $config );
	}
}

add_action( 'after_setup_theme', 'themebeez_toolkit_orchid_store_config' );
