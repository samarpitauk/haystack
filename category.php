<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
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
<section id="inner-banner" data-kc-fullwidth="row" class="kc-elm kc_row blog-banner" style="background: url(<?php echo $image['url']; ?>) center center/cover no-repeat;">
<div class="blog-container">
<h1 class="kc_title"><?php single_cat_title(); ?></h1>
</div>
</section>
<?php } ?>

<section class="blog-listing">
<article class="sector-single">
 <div class="blog-container">
   <section class="blog-lft-cont">
    <div class="mainbodycont-inner">
	
	<?php if (have_posts()) : ?>

	<?php /* If this is a category archive */ if (is_category()) { ?>
		<p>Archive for the &#8216;<?php echo single_cat_title(); ?>&#8217; Category.</p>

 		<?php /* If this is a tag archive */ } elseif ( function_exists ('is_tag') && (is_tag()) ) { ?>
		<p>Posts tagged &#8216;<?php echo single_tag_title(); ?>&#8217;</p>

	 <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
		<p>Archive for <?php the_time('jS F Y'); ?></p>

	 <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
		<p>Archive for <?php the_time('F Y'); ?></p>

		<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
		<p>Archive for <?php the_time('Y'); ?></p>

	  <?php /* If this is an author archive */ } elseif (is_author()) { ?>
		<p>Author Archive</p>

		<?php } ?>
		
		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Previous Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Next Entries &raquo;') ?></div>
		</div>

		<?php while (have_posts()) : the_post(); ?>
				
			<div class="post-info" id="post-<?php the_ID(); ?>">
				<h2 class="posttitle"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
				<div class="postentry">
					<?php
echo wp_trim_words( get_the_content(), 40, '...' );
?>
				</div>
		
				<div class="news-info"><p class="cat-name"><?php _e('Category:') ?> <?php the_category(', ') ?></p><p class="date"><?php the_time(get_option('date_format').', '.get_option('time_format')) ?></p><p class="author-name"> <?php _e('by') ?> <?php the_author() ?></p></div>
			</div>
	
		<?php endwhile; ?>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link(__('&laquo; Previous Entries')) ?></div>
			<div class="alignright"><?php previous_posts_link(__('Next Entries &raquo;')) ?></div>
		</div>
		
	<?php else : ?>
		<div class="post">
			<h2 class="posttitle"><?php _e('Not Found') ?></h2>
			<div class="postentry"><p><?php _e('Sorry, no posts matched your criteria.'); ?></p></div>
		</div>

	<?php endif; ?>
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
  </section>

<?php
get_footer();
