<?php
/*
*
Template Name: About-Us
*/

get_header(); ?>
<!-- <div class="page-header">
	<h1><?php single_post_title(); ?></h1>
</div>  -->


<div class="container">
<style type="text/css">
	.page-content img{
		width: 100% !important;
	}
</style>
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
</div>
<?php
 	get_template_part('include/section', 'services');


?>
<?php get_footer(); ?>
