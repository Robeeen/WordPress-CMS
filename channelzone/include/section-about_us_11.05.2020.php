<?php global $channels_zone; ?>
<div class="about_us_sec">
	<div class="container">
		<div class="row">
			<div class="col-md-6" data-aos="fade-left">
						<h2 class="heading">
							<span><?php echo $channels_zone['first_block_headline']?>			
							</span>
						</h2>
							<p>
								<?php echo $channels_zone['first_block_description']?>			
							</p>
							<a href="<?php echo esc_url( get_permalink(17) ); ?>" class="btn_style">Know More  <i class="far fa-arrow-alt-circle-right"></i></a> 
				</div>
			<div class="col-md-6" data-aos="fade-right">
				<img src="<?php echo $channels_zone['first_block-gallery']['url']?>" alt="Services"  class="img-responsive">
				</div>
			</div>
		</div>
</div>
