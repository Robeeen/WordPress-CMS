<?php
 
get_header();?>

<div class="blog-header">	
	<img src="<?php echo get_template_directory_uri(); ?>/images/Blog-top.jpg" alt="The Travel Channel Inc"  /><span class="blog-top-text">BLOG</span>

</div>
<?php 
if ( have_posts() ) :
	while ( have_posts() ) : the_post(); ?>

 		<div class="container">
	        <article class="post">
	            <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
	             By <?php the_author_posts_link(); ?> on <?php the_time('F jS, Y'); ?>  in <?php the_category(', '); ?> <?php edit_post_link(__('{Edit}'), ''); ?> 
				<br /><br /><p>
				<?php the_post_thumbnail(); ?></p>

				<?php the_content() ?>

	        </article>
   		 </div>
	
	<?php endwhile;
 
	else : echo '<p>There are no posts!</p>';
	 
	endif;?>
  <div class="container">
  	<div class="blog-pagination"> 
			<?php my_pagination(); ?>
			</div>

			</div>
	<?php		 
			get_footer();
		 
	?>