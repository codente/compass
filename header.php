<?php
/**
 * The Header for our theme.
 *
 * @package     Compass
 * @subpackage  HybridCore
 * @copyright   Copyright (c) 2015, Flagship Software, LLC
 * @license     GPL-2.0+
 * @since       1.0.0
 */
?>
<!DOCTYPE html>
<?php tha_html_before(); ?>
<html <?php language_attributes( 'html' ); ?>>

<head>
<?php tha_head_top(); ?>
<?php wp_head(); ?>
<?php tha_head_bottom(); ?>
</head>

<body <?php hybrid_attr( 'body' ); ?>>

	<?php tha_body_top(); ?>

	<div <?php hybrid_attr( 'site-container' ); ?>>

		<div class="skip-link">
			<a href="#content" class="button screen-reader-text">
				<?php _e( 'Skip to content (Press enter)', 'compass' ); ?>
			</a>
		</div><!-- .skip-link -->

		<?php tha_header_before(); ?>

		<header <?php hybrid_attr( 'header' ); ?>>

			<div <?php hybrid_attr( 'wrap', 'header' ); ?>>

				<?php tha_header_top(); ?>

				<div <?php hybrid_attr( 'branding' ); ?>>
					<?php flagship_the_logo(); ?>
					<?php hybrid_site_title(); ?>
					<?php hybrid_site_description(); ?>
				</div><!-- #branding -->

				<?php hybrid_get_menu( 'primary' ); ?>

				<?php tha_header_bottom(); ?>

			</div>

		</header><!-- #header -->

		<?php tha_header_after(); ?>

		<?php hybrid_get_menu( 'secondary' ); ?>
