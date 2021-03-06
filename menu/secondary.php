<?php
/**
 * The secondary nav menu template.
 *
 * @package     Compass
 * @subpackage  HybridCore
 * @copyright   Copyright (c) 2015, Flagship Software, LLC
 * @license     GPL-2.0+
 * @since       1.0.0
 */
?>
<?php if ( has_nav_menu( 'secondary' ) ) : ?>

	<nav <?php hybrid_attr( 'menu', 'secondary' ); ?>>

		<span id="menu-secondary-title" class="screen-reader-text">
			<?php
			// Translators: %s is the nav menu name. This is the nav menu title shown to screen readers.
			printf( _x( '%s', 'nav menu title', 'compass' ), hybrid_get_menu_location_name( 'secondary' ) );
			?>
		</span>

		<?php
		wp_nav_menu(
			array(
				'theme_location'  => 'secondary',
				'container'       => '',
				'menu_id'         => 'secondary',
				'menu_class'      => 'nav-menu secondary',
				'fallback_cb'     => '',
				'items_wrap'      => '<div ' . hybrid_get_attr( 'wrap', 'secondary-menu' ) . '><ul id="%s" class="%s">%s</ul></div>',
			)
		);
		?>

	</nav><!-- #menu-secondary -->

	<?php

endif;
