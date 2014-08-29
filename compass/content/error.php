<?php
/**
 * A template to display when no contet can be found.
 *
 * @package     Compass
 * @subpackage  HybridCore
 * @copyright   Copyright (c) 2014, Flagship, LLC
 * @license     GPL-2.0+
 * @link        http://flagshipwp.com/
 * @since       1.0.0
 */
?>

<article <?php hybrid_attr( 'post' ); ?>>

	<?php tha_entry_top(); ?>

	<header class="entry-header">
		<h1 class="entry-title"><?php _e( 'Nothing found', 'compass' ); ?></h1>
	</header><!-- .entry-header -->

	<div <?php hybrid_attr( 'entry-content' ); ?>>
		<?php echo wpautop( __( 'Apologies, but no entries were found.', 'compass' ) ); ?>
	</div><!-- .entry-content -->

</article><!-- .entry -->
