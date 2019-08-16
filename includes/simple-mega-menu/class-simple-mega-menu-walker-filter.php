<?php

if ( ! class_exists( 'Simple_Mega_Menu_Walker_Filter' ) ) :
	/**
	* Menu Item Custom Fields Loader
	*/
	class Simple_Mega_Menu_Walker_Filter {

		/**
		* Add filter
		*
		* @wp_hook action wp_loaded
		*/
		public static function load() {

			add_filter( 'wp_edit_nav_menu_walker', array( __CLASS__, '_filter_walker' ), 99 );
		}


		/**
		* Replace default menu editor walker with ours
		*
		* We don't actually replace the default walker. We're still using it and
		* only injecting some HTMLs.
		*
		* @since   0.1.0
		* @access  private
		* @wp_hook filter wp_edit_nav_menu_walker
		* @param   string $walker Walker class name
		* @return  string Walker class name
		*/
		public static function _filter_walker( $walker ) {

			$walker = 'Simple_Mega_Menu_Nav_Walker_Edit';

			if ( ! class_exists( $walker ) ) {
				require_once plugin_dir_path( __FILE__ ) . 'class-simple-mega-menu-nav-walker-edit.php';
			}

			return $walker;
		}
	}
	add_action( 'wp_loaded', array( 'Simple_Mega_Menu_Walker_Filter', 'load' ), 9 );
endif; // class_exists( 'Menu_Item_Custom_Fields' )

// Uncomment the following line to test this plugin
require_once plugin_dir_path( __FILE__ ) . 'class-simple-mega-menu-fields.php';