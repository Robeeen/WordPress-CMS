<?php global $channels_zone; ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php bloginfo( 'name' ); ?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" type="text/css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css2?family=Michroma&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>


<?php wp_head() ?>
</head>
<body <?php body_class(); ?>>
   



 <!--Header Top Section --> 
   <div class="headers">
    <div class="top" style="background-color: <?php echo $channels_zone['top-color'];?>">
      <div class="container">
        <div class="top-left">
          <ul>
            <li>              
              <a href="facebook.com">  
              <?php echo '<img src="'.get_template_directory_uri().'/images/fb_top.png">' ?>       
              </a>
            </li>
            <li>              
              <a href="facebook.com">  
              <?php echo '<img src="'.get_template_directory_uri().'/images/twitter.png">' ?>       
              </a>
            </li>
            <li>              
              <a href="facebook.com">  
              <?php echo '<img src="'.get_template_directory_uri().'/images/linkedin.png">' ?>       
              </a>
            </li>
          </ul>
        </div>
      <div class="top-rights">
        <ul>
          <li>
            <?php echo '<img src="'.get_template_directory_uri().'/images/phone.png">' ?>
            <a href="1 300 855 155 ">
              <?php
                echo $channels_zone['phone_number'];
               ?>
            </a> </li>
            <li>
            <?php echo '<img src="'.get_template_directory_uri().'/images/email.png">' ?>
            <a href="mailto:info@loanconnect.com.au">
              <?php
                echo $channels_zone['email_id'];
               ?>
            </a> </li>
            <li>     
            <?php
              $fax = $channels_zone['skype_id'];
              if(!empty($fax)){
                echo '<img src="'.get_template_directory_uri().'/images/fax_icon.png">'; 
                echo $fax;
              }
               ?>
            </a>
          </li> 
       </ul>
    </div>
  </div>
  </div>
   	<div class="container">
    	<div class="logo">
          <a href="<?php echo esc_url(home_url('/'));?>">
            <img src="<?php echo $channels_zone['main_logo']['url'];?>" alt="<?php echo bloginfo('name');?>">
          </a>
    	</div>

      
<!--Header Menu Section -->  
<div class="custom-menu-class"> 
  <?php
		  wp_nav_menu( array( 
	    'theme_location' => 'primary', 
	    'container_class' => 'custom-menu-class' ) ); 
		?>
  </div>

<!--Header Shrink js -->
    <script>
        $(window).on('scroll', function() {
        if($(window).scrollTop()) {
          $('.headers').addClass('shrink');
          $('.top').addClass('shrink');
          $('.custom-menu-class').addClass('shrink');
          $('.logo img').addClass('shrink');
        }
        else {
        $('.headers').removeClass('shrink');
        $('.top').removeClass('shrink');
        $('.custom-menu-class').removeClass('shrink');
        $('.logo img').removeClass('shrink');
        }
        });
    </script>
	</div>
</div>


  
