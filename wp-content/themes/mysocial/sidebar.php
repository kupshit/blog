<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mysocial
 */


?>

<aside id="secondary" class="widget-area sidebar">

<?php if ( is_active_sidebar( 'sidebar-1' ) ) { ?>

	<?php dynamic_sidebar( 'sidebar-1' ); ?>

<?php } else { ?>

	<div class="widget">
		<p><?php echo __('Please put widgets to the <strong>Sidebar</strong>', 'mysocial'); ?></p>
		<p><a href="<?php echo home_url(); ?>/wp-admin/widgets.php"><?php echo __('Okay, I\'m doing now &raquo;', 'mysocial'); ?></a></p>
	</div>

<?php } ?>

</aside><!-- #secondary -->

