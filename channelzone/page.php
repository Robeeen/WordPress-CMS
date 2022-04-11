<?php
/*
*
Template Name: Side-bar
*/

get_header(); ?>

<div class="container">
	<div class="wrap">
	<div class="col-sm-8"; style="float: left; margin-top: 20px; margin-bottom: 30px">
		

			<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

	
	</div><!-- .wrap -->
	<div class="col-sm-4"; style="float: right; margin-top: 40px">
	<?php get_sidebar(); ?>
	<?php my_pagination(); ?>
	</div>
</div>
</div><!-- .container -->
<?php get_footer(); ?>
