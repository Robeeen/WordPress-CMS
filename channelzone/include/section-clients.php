<div style="background-color: #fff/* #ded8c2*/; padding: 28px 0px 28px 0px;">
	<script>
  		AOS.init();
	</script>
	<div class="container">
		<h1 class="heading">
			<?php
                    if(is_active_sidebar('home-headlines')){
                    dynamic_sidebar('home-headlines');}
                ?> 
                <!-- GROW REVENUES & PROFIT WITH VIRTUAL SKU's -->
        </h1>
		<div class="col-md-3 center">
			<div data-aos="zoom-in">
			<div class="circle">
				<a href="<?php echo home_url(); ?>">
					<img src="<?php echo get_template_directory_uri(); ?>/images/sun.png">
				</a>
			</div>
			<div class="headline">
				<!-- OUR NATURAL PRODUCTS -->
			</div>
			<div class="details">
				<?php
                    if(is_active_sidebar('home-natural')){
                    dynamic_sidebar('home-natural');}
                ?> 
				</div>
		</div>
		</div>	

		<div class="col-md-3 center">
			<div data-aos="zoom-in">
			<div class="circle">
				<a href="<?php echo home_url(); ?>">
					<img src="<?php echo get_template_directory_uri(); ?>/images/bar-chart.png">
				</a>
			</div>
			<div class="headline">
				<!-- INCREASE REVENUE -->
			</div>
			<div class="details">
				<?php
                    if(is_active_sidebar('home-revenue')){
                    dynamic_sidebar('home-revenue');}
                ?>
			</div>
		</div>
		</div>	

		<div class="col-md-3 center">
			<div data-aos="zoom-in">
			<div class="circle">
				<a href="<?php echo home_url(); ?>">
					<img src="<?php echo get_template_directory_uri(); ?>/images/cloud.png">
				</a>
			</div>
			<div class="headline">
				<!-- IN THE CLOUD -->
			</div>
			<div class="details">
				<?php
                    if(is_active_sidebar('home-cloud')){
                    dynamic_sidebar('home-cloud');}
                ?>
			</div>
		</div>
		</div>	

		<div class="col-md-3 center">
			<div data-aos="zoom-in">
			<div class="circle">
				<a href="<?php echo home_url(); ?>">
					<img src="<?php echo get_template_directory_uri(); ?>/images/processing.png">
				</a>
			</div>
			<div class="headline">
				<!-- JUST IN TIME -->
			</div>
			<div class="details">
				<?php
                    if(is_active_sidebar('home-intime')){
                    dynamic_sidebar('home-intime');}
                ?>
				<!-- No need for expensive storage 
				 space and inventory 
				 costs. --> 
			</div>
		</div>
		</div>	
	</div>
</div>