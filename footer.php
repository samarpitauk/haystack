<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>
<footer>
	<div class="topfooterpanel">
		<div class="conatainer">
			<div class="quickcont">
				<h2>Quick Link</h2>
				<?php wp_nav_menu( array('menu' => 'Quick Links', 'container' => 'false','menu_class' => '', )); ?>
				<div class="spacer"></div>
			</div>
			<div class="serfotcont">
				<h2>Services</h2>
				<?php wp_nav_menu( array('menu' => 'Service Link', 'container' => 'false','menu_class' => '', )); ?>
				<div class="spacer"></div>
			</div>
			<div class="locfotcont">
				<h2>Location</h2>
				<?php wp_nav_menu( array('menu' => 'Location Link', 'container' => 'false','menu_class' => '', )); ?>
				<div class="spacer"></div>
			</div>
		<div class="spacer"></div>
		</div>
		<div class="spacer"></div>
	</div>
	<div class="bottomfooterpanel">
		<div class="conatainer">
		
		<?php if ( is_active_sidebar( 'sidebar-1' ) ) { ?>
    <ul id="sidebar">
        <?php dynamic_sidebar('sidebar-1'); ?>
    </ul>
<?php } ?>
			

		</div>
	</div>
</footer>
	<link href="<?php echo get_template_directory_uri(); ?>/responsive.css" rel="stylesheet">
<?php wp_footer(); ?>

</body>
</html>
fooo
change2
