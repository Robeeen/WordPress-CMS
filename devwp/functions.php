<?php

//internationalization
function devwp_theme_textdomain() {
    load_theme_textdomain( 'devwp', get_template_directory() . '/assets/languages' );
}
add_action( 'after_setup_theme', 'devwp_theme_textdomain' );


//Enque scss for theme Devwp.
function stylesheet_devwp(){
    wp_enqueue_style('style-name', get_template_directory_uri() . '/dist/css/style.min.css' );
}
add_action('wp_enqueue_scripts', 'stylesheet_devwp');