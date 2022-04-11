<?php
/*
*
Template Name: Contact
*/

get_header(); ?>

<?php
if ( has_post_thumbnail() ) {
    the_post_thumbnail();
}
?>
<span class="span_headline"><?php single_post_title(); ?></span>

<div class="container">

		<div class="col-sm-12"; style="margin-top: 20px">
		<div class="col-sm-6">

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
	<div class="col-sm-6">
		<p>
			We care about your success! Please complete information below and send over to us. Or, feel free to contact us.
		</p>
			<?php
			echo do_shortcode('[contact-form-7 id="10" title="Contact form 1"]');
			?>
		</div>
	</div><!-- .wrap -->
</div><!-- .container -->
<div class="contact-footer">	
	<img src="<?php echo get_template_directory_uri(); ?>/images/footer_banner1.jpg" alt="" />
</div>
<?php get_footer(); ?>
