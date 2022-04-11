<?php 
/* Template Name: Home Page

 */ ?>
<?php get_header(); ?>
<!-- Visible Box on Slider Image at Home page -->
<div class="home-registration-form desktop">
            <div class="register-form-content1">
                <h2 class="headline">Finance Calculators and Tools</h2>
                <p>These user friendly finance calculators will give you an idea of where you financially stand and asist in getting the right loan for you.</p>
                <p style="text-align: center;"><b><a href="http://loanconnect.com.au/tools" style="color: white;background: #ff8300;padding: 5px 35px;">Loan Calculators</a></b></p>               
                    
            </div>
    </div>
<!-- Slider on Home page-->
<?php echo do_shortcode('[smartslider3 slider=2]'); ?>
<!-- All sections on Home page-->
<?php
		get_template_part('include/section', 'about_us');
		get_template_part('include/section', 'loan');
        get_template_part('include/section', 'what_wedo');
		get_template_part('include/section', 'parallax');
        get_template_part('include/section', 'form');      
?> 
<?php get_footer(); ?>