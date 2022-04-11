<?php global $channels_zone; ?>
<div class="about_us_sec" style="background: #fff">
    <script>
        AOS.init();
    </script>
    <div class="container" style="padding: 20px auto; background: #fff;" >
        <h2 class="headline">CONTACT US</h2>
        <div class="contact_form col-sm-6" data-aos="zoom-in">
            <img src="<?php echo get_template_directory_uri()?>/images/contact.png" width="400px" height="auto">
        </div>
        <div class="service_inc col-sm-6" data-aos="zoom-in">

            <!-- <h2 class="heading"><span><?php echo $channels_zone['fourth_block_headline'];?></span></h2> -->
            
            <p style="padding: 5px;"><?php echo $channels_zone['fourth_block_description'];?></p>
                <div class="register-form-content">
                <?php echo do_shortcode('[contact-form-7 id="10" title="Contact form 1"]');?>
                </div>
        </div>
        <!--Left side contact box-->
        <div class="service_inc col-sm-6">
            
        </div>
    </div>
</div>

