<?php global $channels_zone; ?>
<footer class="site-footer" style="background-color: <?php echo $channels_zone['opt-color'];?>">
	<div class="container">
		<div class="row footer_section">				  	  
			<div class="col-sm-12">
				<div id="footer-sidebar1">
					<ul>
						<li class="footer_list"><!--Footer Header-->
						<h3><?php echo $channels_zone['first_footer_block'];?>				
						</h3></li>
						<br>
						<li class="footer_list"> <!--Footer Header Items-->
						<?php
						$footer_item1 = $channels_zone['first_footer_items'];
						if (!empty($footer_item1)) { ?>
							<a href="<?php echo esc_url( get_permalink(17) ); ?>">
							<?php	
							echo $footer_item1; ?>
							</a>
						</li>
						<li class="footer_list"> <!--Footer Header Items-->
						<?php
							}
						$footer_item2 = $channels_zone['second_footer_items'];	
						if (!empty($footer_item2)) { ?>
							<a href="<?php echo esc_url( get_permalink(19) ); ?>">
							<?php	
							echo $footer_item2; ?>
							</a>
							</li>
						<li class="footer_list"> <!--Footer Header Items-->	
						<?php
							}
						$footer_item3 = $channels_zone['third_footer_items'];
						if (!empty($footer_item3)) { ?>
							<a href="<?php echo esc_url( get_permalink(21) ); ?>">
							<?php	
							echo $footer_item3; ?>
							</a>
						</li>
						<li class="footer_list"> <!--Footer Header Items-->	
						<?php
							}
						$footer_item4 = $channels_zone['fourth_footer_items'];
						if (!empty($footer_item4)) { ?>
							<a href="<?php echo esc_url( get_permalink(23) ); ?>">
							<?php	
							echo $footer_item4; ?>
							</a>
						</li>
						<li class="footer_list"> <!--Footer Header Items-->	
						<?php
							}
						$footer_item5 = $channels_zone['fifth_footer_items'];
						if (!empty($footer_item5)) { ?>
							<a href="<?php echo esc_url( get_permalink(46) ); ?>">
							<?php	
							echo $footer_item5; ?>
							</a>
						</li>
						<li class="footer_list"> <!--Footer Header Items-->	
						<?php
							}
						$footer_item6 = $channels_zone['six_footer_items'];
						if (!empty($footer_item6)) { ?>
							<a href="<?php echo esc_url( get_permalink(100) ); ?>">
							<?php	
							echo $footer_item6; ?>
							</a>
						</li>
						<?php
							}		
						
						?>
						</ul>
				</div>
				<div id="footer-sidebar2">
						<h3><?php echo $channels_zone['Second_footer_block'];?>				
						</h3>
						<?php
						$footer_item5 = $channels_zone['second_block_first_footer_items'];
						if (!empty($footer_item5)) { 							
							 echo $footer_item5;}
							  ?>

				</div>
				<div id="footer-sidebar3">
					<h3>Member Of</h3>
					<img src="<?php echo get_template_directory_uri(); ?>/images/vow.png" class="stripe_logo">
					<img src="<?php echo get_template_directory_uri(); ?>/images/mfaa.png" class="stripe_logo">
						
				</div>
				<!-- <div id="footer-sidebar4">
						
				</div> -->
				</div>
			</div>
</div>


<div class="bottom-footer">
	<div class="container">
			<div class="col-md-6">
				<p style="float: left;">© 2020 - Loan Connect Pty Ltd. All Rights Reserved |   Australian Credit Licence No: 394 598</p>
			</div>
			<div class="col-md-6">
				<p style="float: right;">Developed & maintained by
					<a href="http://itserviceszone.com">IT SERVICES ZONE.
					</a>
				</p>
			</div>
	</div>
</div>
</footer>
 
<?php wp_footer() ?>


</body>
</html>