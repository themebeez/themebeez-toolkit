<?php
/**
 * Theme related functions.
 * Fires theme notice and setup theme configuration for theme page.
 *
 * @since 1.0.0
 *
 * @package Themebeez_Toolkit
 */

if ( ! function_exists( 'themebeez_toolkit_theme' ) ) {
	/**
	 * Returns currently activated theme.
	 *
	 * @since 1.0.0
	 */
	function themebeez_toolkit_theme() {

		$theme = wp_get_theme();

		return $theme;
	}
}


/**
 * Function that gets text-domain of currently activated theme.
 */
if ( ! function_exists( 'themebeez_toolkit_theme_text_domain' ) ) {
	/**
	 * Gets the text domain of currently activated theme.
	 *
	 * @since 1.0.0
	 */
	function themebeez_toolkit_theme_text_domain() {

		$theme = themebeez_toolkit_theme();

		$theme_text_domain = $theme->get( 'TextDomain' );

		return $theme_text_domain;
	}
}


if ( ! function_exists( 'themebeez_toolkit_template_name' ) ) {
	/**
	 * Gets the name of currently activated theme.
	 *
	 * @since 1.0.0
	 */
	function themebeez_toolkit_template_name() {

		$theme = themebeez_toolkit_theme();

		$template = $theme->get( 'Template' );

		return $template;
	}
}

/**
 * Function that gets all the themes by themebeez.
 */
if ( ! function_exists( 'themebeez_toolkit_theme_array' ) ) {
	/**
	 * Definition of supported themes by toolkit.
	 *
	 * @since 1.0.0
	 */
	function themebeez_toolkit_theme_array() {

		return array( 'royale-news', 'cream-blog', 'styleblog', 'style-blog-fame', 'royale-news-pro', 'cream-blog-pro', 'styleblog-plus', 'cream-magazine', 'cream-magazine-pro', 'royale-news-lite', 'cream-blog-lite', 'fascinate', 'fascinate-pro', 'orchid-store' );
	}
}


if ( ! function_exists( 'themebeez_toolkit_admin_notice' ) ) {
	/**
	 * Displays theme notice on dashboard and set up theme page.
	 *
	 * @since 1.0.0
	 */
	function themebeez_toolkit_admin_notice() {

		global $current_user, $pagenow;

		if ( 'index.php' !== $pagenow ) {
			return;
		}

		$user_id   = $current_user->ID;
		$theme     = themebeez_toolkit_theme();
		$admin_url = 'themes.php?page=' . esc_html( $theme->get( 'TextDomain' ) ) . '-about';

		if ( ! get_user_meta( $user_id, esc_html( $theme->get( 'TextDomain' ) ) . '_notice_ignore' ) ) {
			?>
			<div class="notice themebeez-toolkit-notice">

				<h1>
					<?php
					printf(
						/* translators: %1$s: theme name, %2$s theme version */
						esc_html__( 'Welcome to %1$s - Version %2$s', 'themebeez-toolkit' ),
						$theme->Name, // phpcs:ignore
						$theme->Version // phpcs:ignore
					);
					?>
				</h1>

				<p>
					<?php
					printf(
						/* translators: %1$s: theme name, %2$s link */
						__( 'Welcome! Thank you for choosing %1$s! To fully take advantage of the best our theme can offer please make sure you visit our <a href="%2$s">Welcome page</a>', 'themebeez-toolkit' ), // phpcs:ignore
						esc_html( $theme->Name ), // phpcs:ignore
						esc_url( admin_url( $admin_url ) )
					);
					printf( '<a href="%1$s" class="notice-dismiss dashicons dashicons-dismiss dashicons-dismiss-icon"></a>', '?' . esc_html( $theme->get( 'TextDomain' ) ) . '_notice_ignore=0' );
					?>
				</p>
				<p>
					<a href="<?php echo esc_url( admin_url( $admin_url ) ); ?>" class="button button-primary button-hero" style="text-decoration: none;">
						<?php
						printf(
							/* translators: %s theme name */
							esc_html__( 'Get started with %s', 'themebeez-toolkit' ),
							esc_html( $theme->Name ) // phpcs:ignore
						);
						?>
					</a>
				</p>
			</div>
			<?php
		}
	}
}


if ( ! function_exists( 'themebeez_toolkit_notice_ignore' ) ) {
	/**
	 * Set ignore notice.
	 *
	 * @since 1.0.0
	 */
	function themebeez_toolkit_notice_ignore() {

		global $current_user;

		$theme   = themebeez_toolkit_theme();
		$user_id = $current_user->ID;

		/* If user clicks to ignore the notice, add that to their user meta */
		if (
			isset( $_GET[ esc_html( $theme->get( 'TextDomain' ) ) . '_notice_ignore' ] ) && // phpcs:ignore
			'0' == $_GET[ esc_html( $theme->get( 'TextDomain' ) ) . '_notice_ignore' ] // phpcs:ignore
		) {
			add_user_meta( $user_id, esc_html( $theme->get( 'TextDomain' ) ) . '_notice_ignore', 'true', true );
		}
	}
}

/**
 * Function to load theme info
 */
if ( ! function_exists( 'themebeez_toolkit_theme_info_demo_loader' ) ) {
	/**
	 * Displays admin notice and loads configuration for theme page.
	 *
	 * @since 1.0.0
	 */
	function themebeez_toolkit_theme_info_demo_loader() {

		$theme_text_domain = themebeez_toolkit_theme_text_domain();

		if ( ! in_array( $theme_text_domain, themebeez_toolkit_theme_array(), true ) ) {
			return;
		}

		require_once plugin_dir_path( __FILE__ ) . 'theme-info/configs/' . $theme_text_domain . '-config.php';

		add_action( 'admin_notices', 'themebeez_toolkit_admin_notice' );
		add_action( 'admin_init', 'themebeez_toolkit_notice_ignore' );

		if (
			'orchid-store' === $theme_text_domain ||
			themebeez_toolkit_template_name() === 'orchid-store'
		) {

			require_once plugin_dir_path( __FILE__ ) . 'simple-mega-menu/class-simple-mega-menu-walker-filter.php';

			require_once plugin_dir_path( __FILE__ ) . 'simple-mega-menu/class-simple-mega-menu-nav-walker.php';

			add_filter(
				'wp_nav_menu_args',
				function ( $args ) {

					return array_merge(
						$args,
						array(
							'walker' => new Simple_Mega_Menu_Nav_Walker(),
						)
					);
				}
			);
		}
	}
}

add_action( 'themebeez_toolkit_load_theme_info_demo', 'themebeez_toolkit_theme_info_demo_loader' );