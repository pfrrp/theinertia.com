<?php
/**
 * The Footer widget areas.
 *
 * @package WordPress
 * @subpackage inertia
 * @since The Inertia 1.0
 */
?>

<?php
	/* The footer widget area is triggered if any of the areas
	 * have widgets. So let's check that first.
	 *
	 * If none of the sidebars have widgets, then let's bail early.
	 */
	if (   ! is_active_sidebar( 'super-wide-ad'  )
		&& ! is_active_sidebar( 'trifecta-footer-widgets' )
		&& ! is_active_sidebar( 'directory' )
	)
		return;
	// If we get this far, we have widgets. Let do this.
?>

<div id="footer-widget-area" role="complementary">

<?php if ( is_active_sidebar( 'super-wide-ad' ) ) : ?>
	<?php dynamic_sidebar( 'super-wide-ad' ); ?>
<?php endif; ?>

<?php if ( is_active_sidebar( 'trifecta-footer-widgets' ) ) : ?>
		<?php dynamic_sidebar( 'trifecta-footer-widgets' ); ?>
<?php endif; ?>

<?php if ( is_active_sidebar( 'directory' ) ) : ?>
		<?php dynamic_sidebar( 'directory' ); ?>
<?php endif; ?>

</div>