<?php
/**
 * Theme Info Configurations - Fascinate Pro.
 *
 * @since 1.0.0
 *
 * @package Themebeez_Toolkit
 */

if ( ! function_exists( 'themebeez_toolkit_fascinate_pro_config' ) ) {
	/**
	 * Configuration of theme page - Fascinate Pro.
	 *
	 * @since 1.0.0
	 */
	function themebeez_toolkit_fascinate_pro_config() {

		$config = array(
			'menu_name'           => esc_html__( 'Fascinate Pro Info', 'themebeez-toolkit' ),
			'page_name'           => esc_html__( 'Fascinate Pro Info', 'themebeez-toolkit' ),
			// Quick links.
			'quick_links'         => array(
				'demo_import_url'   => array(
					'text'   => esc_html__( 'Import Demo', 'themebeez-toolkit' ),
					'url'    => esc_url( admin_url( 'themes.php?page=themebeez-demo-importer' ) ),
					'button' => 'primary',
				),
				'theme_url'         => array(
					'text' => esc_html__( 'Theme Details', 'themebeez-toolkit' ),
					'url'  => 'https://themebeez.com/themes/fascinate-pro/',
				),
				'demo_url'          => array(
					'text' => esc_html__( 'View Demo', 'themebeez-toolkit' ),
					'url'  => 'https://themebeez.com/demos/?theme=fascinate-pro',
				),
				'documentation_url' => array(
					'text' => esc_html__( 'View Documentation', 'themebeez-toolkit' ),
					'url'  => 'https://themebeez.com/docs/fascinate-pro-theme-documentation/',
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
			'getting_started'     => array(
				'free' => array(
					array(
						'title'               => esc_html__( 'Site Identity', 'themebeez-toolkit' ),
						'text'                => '',
						'button_label'        => esc_html__( 'Customize', 'themebeez-toolkit' ),
						'button_link'         => esc_url( admin_url( 'customize.php?autofocus[section]=fascinate_pro_section_site_logo' ) ),
						'is_button'           => false,
						'recommended_actions' => false,
						'is_new_tab'          => false,
					),
					array(
						'title'               => esc_html__( 'Site Layout', 'themebeez-toolkit' ),
						'text'                => '',
						'button_label'        => esc_html__( 'Customize', 'themebeez-toolkit' ),
						'button_link'         => esc_url( admin_url( 'customize.php?autofocus[section]=fascinate_pro_section_site_layout' ) ),
						'is_button'           => false,
						'recommended_actions' => false,
						'is_new_tab'          => false,
					),
					array(
						'title'               => esc_html__( 'Header Options', 'themebeez-toolkit' ),
						'text'                => '',
						'button_label'        => esc_html__( 'Customize', 'themebeez-toolkit' ),
						'button_link'         => esc_url( admin_url( 'customize.php?autofocus[panel]=fascinate_pro_panel_site_header' ) ),
						'is_button'           => false,
						'recommended_actions' => false,
						'is_new_tab'          => false,
					),
					array(
						'title'               => esc_html__( 'Pages Options', 'themebeez-toolkit' ),
						'text'                => '',
						'button_label'        => esc_html__( 'Customize', 'themebeez-toolkit' ),
						'button_link'         => esc_url( admin_url( 'customize.php?autofocus[panel]=fascinate_pro_panel_site_pages' ) ),
						'is_button'           => false,
						'recommended_actions' => false,
						'is_new_tab'          => false,
					),
					array(
						'title'               => esc_html__( 'Preloader Options', 'themebeez-toolkit' ),
						'text'                => '',
						'button_label'        => esc_html__( 'Customize', 'themebeez-toolkit' ),
						'button_link'         => esc_url( admin_url( 'customize.php?autofocus[section]=fascinate_pro_section_site_preloader' ) ),
						'is_button'           => false,
						'recommended_actions' => false,
						'is_new_tab'          => false,
					),
					array(
						'title'               => esc_html__( 'Carousel Options', 'themebeez-toolkit' ),
						'text'                => '',
						'button_label'        => esc_html__( 'Customize', 'themebeez-toolkit' ),
						'button_link'         => esc_url( admin_url( 'customize.php?autofocus[section]=fascinate_pro_section_site_carousel' ) ),
						'is_button'           => false,
						'recommended_actions' => false,
						'is_new_tab'          => false,
					),
					array(
						'title'               => esc_html__( 'Featured Categories Options', 'themebeez-toolkit' ),
						'text'                => '',
						'button_label'        => esc_html__( 'Customize', 'themebeez-toolkit' ),
						'button_link'         => esc_url( admin_url( 'customize.php?autofocus[section]=fascinate_pro_section_categories_section' ) ),
						'is_button'           => false,
						'recommended_actions' => false,
						'is_new_tab'          => false,
					),
					array(
						'title'               => esc_html__( 'Breaddcrumb Options', 'themebeez-toolkit' ),
						'text'                => '',
						'button_label'        => esc_html__( 'Customize', 'themebeez-toolkit' ),
						'button_link'         => esc_url( admin_url( 'customize.php?autofocus[section]=fascinate_pro_section_site_breadcrumb' ) ),
						'is_button'           => false,
						'recommended_actions' => false,
						'is_new_tab'          => false,
					),
					array(
						'title'               => esc_html__( 'Pagination Options', 'themebeez-toolkit' ),
						'text'                => '',
						'button_label'        => esc_html__( 'Customize', 'themebeez-toolkit' ),
						'button_link'         => esc_url( admin_url( 'customize.php?autofocus[section]=fascinate_pro_section_site_pagination' ) ),
						'is_button'           => false,
						'recommended_actions' => false,
						'is_new_tab'          => false,
					),
					array(
						'title'               => esc_html__( 'Image Options', 'themebeez-toolkit' ),
						'text'                => '',
						'button_label'        => esc_html__( 'Customize', 'themebeez-toolkit' ),
						'button_link'         => esc_url( admin_url( 'customize.php?autofocus[section]=fascinate_pro_section_site_image' ) ),
						'is_button'           => false,
						'recommended_actions' => false,
						'is_new_tab'          => false,
					),
					array(
						'title'               => esc_html__( 'Sidebar Options', 'themebeez-toolkit' ),
						'text'                => '',
						'button_label'        => esc_html__( 'Customize', 'themebeez-toolkit' ),
						'button_link'         => esc_url( admin_url( 'customize.php?autofocus[section]=fascinate_pro_section_site_sidebar' ) ),
						'is_button'           => false,
						'recommended_actions' => false,
						'is_new_tab'          => false,
					),
					array(
						'title'               => esc_html__( 'Footer Options', 'themebeez-toolkit' ),
						'text'                => '',
						'button_label'        => esc_html__( 'Customize', 'themebeez-toolkit' ),
						'button_link'         => esc_url( admin_url( 'customize.php?autofocus[section]=fascinate_pro_section_site_footer' ) ),
						'is_button'           => false,
						'recommended_actions' => false,
						'is_new_tab'          => false,
					),
					array(
						'title'               => esc_html__( 'Excerpt Options', 'themebeez-toolkit' ),
						'text'                => '',
						'button_label'        => esc_html__( 'Customize', 'themebeez-toolkit' ),
						'button_link'         => esc_url( admin_url( 'customize.php?autofocus[section]=fascinate_pro_section_post_excerpt' ) ),
						'is_button'           => false,
						'recommended_actions' => false,
						'is_new_tab'          => false,
					),
					array(
						'title'               => esc_html__( 'Social Share Options', 'themebeez-toolkit' ),
						'text'                => '',
						'button_label'        => esc_html__( 'Customize', 'themebeez-toolkit' ),
						'button_link'         => esc_url( admin_url( 'customize.php?autofocus[section]=fascinate_pro_section_social_share' ) ),
						'is_button'           => false,
						'recommended_actions' => false,
						'is_new_tab'          => false,
					),
					array(
						'title'               => esc_html__( 'Color Options', 'themebeez-toolkit' ),
						'text'                => '',
						'button_label'        => esc_html__( 'Customize', 'themebeez-toolkit' ),
						'button_link'         => esc_url( admin_url( 'customize.php?autofocus[panel]=fascinate_pro_panel_site_color' ) ),
						'is_button'           => false,
						'recommended_actions' => false,
						'is_new_tab'          => false,
					),
					array(
						'title'               => esc_html__( 'Typography Options', 'themebeez-toolkit' ),
						'text'                => '',
						'button_label'        => esc_html__( 'Customize', 'themebeez-toolkit' ),
						'button_link'         => esc_url( admin_url( 'customize.php?autofocus[panel]=fascinate_pro_panel_site_typo' ) ),
						'is_button'           => false,
						'recommended_actions' => false,
						'is_new_tab'          => false,
					),
					array(
						'title'               => esc_html__( 'Background Image Options', 'themebeez-toolkit' ),
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
						'title'               => esc_html__( 'Widget Options', 'themebeez-toolkit' ),
						'text'                => '',
						'button_label'        => esc_html__( 'Customize', 'themebeez-toolkit' ),
						'button_link'         => esc_url( admin_url( 'customize.php?autofocus[panel]=widgets' ) ),
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
						'title'               => esc_html__( 'Custom CSS Options', 'themebeez-toolkit' ),
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
						'title'               => esc_html__( 'Theme Documentation', 'themebeez-toolkit' ),
						'text'                => esc_html__( 'Find step by step instructions with video documentation to setup theme easily.', 'themebeez-toolkit' ),
						'button_label'        => esc_html__( 'View documentation', 'themebeez-toolkit' ),
						'button_link'         => 'https://themebeez.com/docs/fscinate-pro-theme-documentation/',
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

add_action( 'after_setup_theme', 'themebeez_toolkit_fascinate_pro_config' );
