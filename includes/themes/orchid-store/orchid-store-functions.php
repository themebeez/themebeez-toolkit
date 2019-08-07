<?php

if( ! class_exists( 'Themebeez_Toolkit_Orchid_Store_Setup' ) ) {

	class Themebeez_Toolkit_Orchid_Store_Setup {

		public function __construct() {

			add_action( 'after_setup_theme', array( $this, 'remove_action' ) );

			$this->add_action();
		}

		public function remove_action() {

			remove_action( 'orchid_store_primary_navigation', 'orchid_store_primary_navigation_action', 10 );

			remove_action( 'orchid_store_product_categories_list', 'orchid_store_product_categories_list_action', 10 );
		}

		public function add_action() {

			add_action( 'orchid_store_primary_navigation', array( $this, 'primary_navigation' ), 10 );

			add_action( 'orchid_store_product_categories_list', array( $this, 'product_navigation' ), 10 );
		}

		public function primary_navigation() {
			?>
			<nav id="site-navigation" class="site-navigation">
				<?php
				$menu_args = array(
		 			'theme_location' => 'menu-1',
		 			'container' => '',
		 			'menu_class' => 'primary-menu',
					'menu_id' => 'primary-menu',
					'fallback_cb' => 'orchid_store_navigation_fallback',
					'walker' => new Simple_Mega_Menu_Nav_Walker(),
		 		);
				wp_nav_menu( $menu_args );
				?>
			</nav><!-- .site-navigation.site-navigation -->
			<?php
		}

		public function product_navigation() {

			if( ! has_nav_menu( 'menu-3' ) ) {
		        return;
		    }
		    ?>
		    <div class="category-nav">
		        <div class="cat-nav-entry overflow-hidden">
		            <?php
		            wp_nav_menu( array( 
		                'theme_location' => 'menu-3',
		                'container' => '', 
		                'menu_class' => 'overflow-hidden',
		                'menu_id' => '',
		                'depth' => 1,
		                'walker' => new Simple_Mega_Menu_Nav_Walker(),
		            ) );
		            ?>
		        </div><!-- .cat-nav-entry -->
		    </div><!-- .category-nav -->
			<?php
		}
	}
}

$osInit = new Themebeez_Toolkit_Orchid_Store_Setup();