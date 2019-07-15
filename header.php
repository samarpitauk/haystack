<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900&display=swap" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/fontawesome.css" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>
<?php wp_body_open(); ?> >
<!-- Header section Start -->
<header>
	<div class="blackband">
		<div class="conatainer">
			
				<?php wp_nav_menu( array('menu' => 'topmenusec', 'container' => 'false','menu_class' => 'topmenusec', )); ?>
			<div class="spacer"></div>
		</div>
	</div>
	<div class="logopanel">
		<div class="conatainer">
			<!---Logo Section-->
			<div class="logocont">			
				<img alt src="<?php echo site_url(); ?>/wp-content/uploads/2019/06/logo.png"/>
			</div>			
				<div class="rightmenu">
					<div class="followuscont"><p class="followtext">Follow Us<p> <?php wp_nav_menu( array('menu' => 'followus', 'container' => 'false','menu_class' => 'followus', )); ?>
				<div class="spacer"></div>
				</div>
					<!---Nav Section-->
                <div class="header__nav">
                    <?php wp_nav_menu( array('menu' => 'mainmenu', 'container' => 'false','menu_class' => 'mainmenu', )); ?>
                </div>
		</div>
		</div>
		<div class="spacer"></div>
	</div>
	<div class="spacer"></div>
</header>

	
