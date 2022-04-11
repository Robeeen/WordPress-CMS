<?php
/*
*
Template Name: Full-Width
*/

get_header(); ?>
<?php
if ( has_post_thumbnail() ) {
    the_post_thumbnail();
}
?>
<span class="span_headline"><?php single_post_title(); ?></span>

<div class="container">	
<div class="full_width">	

			<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', 'page' );

			endwhile; // End of the loop.
			?>	
</div>
</div><!-- .container -->
<?php get_footer(); ?>
