<?php
/**
 * Template Name: Homepage
 */

get_header();
?>
<?php echo do_shortcode('[metaslider id="33"]'); ?>
<div class="mainbodycont">
	<div class="conatainer">

			<?php

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}

			endwhile; // End of the loop.
			?>
			<div class="spacer"></div>
	</div>
	<div class="spacer"></div>
</div>

		

<?php
get_footer();
