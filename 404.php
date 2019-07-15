<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header();
?>

<?php 

$image = get_field('banner_blog',11);
$size = 'full'; // (thumbnail, medium, large, full or custom size)

if( $image ) { ?>
<section id="inner-banner" class="blog-banner" style="background: url(<?php echo $image['url']; ?>) center center/cover no-repeat;">
<div class="blog-container">
<h1 class="kc_title">404</h1>
</div>
</section>
<?php } ?>

<article class="sector-single">
 <div class="blog-container">
   <section class="blog-lft-cont">
    <div class="mainbodycont-inner">
	 <h2 class="not-found">No page found </h2>

	</div>
   </section>
   
   
   <aside class="blog-sidebar">
   <div class="news-sec">
   <?php if ( is_active_sidebar( 'blog-sidebar' ) ) { ?>
        <?php dynamic_sidebar('blog-sidebar'); ?>  
   <?php } ?>
   </div>
   </aside>

 </div>
</article>


<?php
get_footer();
