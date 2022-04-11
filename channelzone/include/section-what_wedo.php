<?php global $channels_zone; ?>
<div class="about_us_sec" >
	<div class="container" >
		<div class="row">
			<div class="col-md-8" data-aos="fade-left">
						<h2 class="heading">
							<span>
								<?php echo $channels_zone['third_block_headline']?>				
								</span>
							</h2>
							<p>
							 <?php echo $channels_zone['third_block_description']?>	
							</p>
							
							<a href="<?php echo esc_url( get_permalink() ); ?>" class="btn_style">Know More <i class="far fa-arrow-alt-circle-right"></i></a> 
				</div>
			<div class="col-md-4" data-aos="fade-right">
				<img src="<?php echo $channels_zone['third_block-gallery']['url']?>" alt="Services"  class="img-responsive">
				</div>
			</div>
		</div>
</div>
