<?php
/*
=================================================
ENQUEUE STYLES ON HEAD FOR FRONT END.
=================================================
*/
add_action( 'wp_enqueue_scripts', 'sleeky_styles');

if (!function_exists('sleeky_styles')){
	function sleeky_styles() {
    	wp_enqueue_style( 'sleeky_fontawesome', get_template_directory_uri().'/css/font-awesome/css/font-awesome.min.css', array(), '1.0', 'all' );
    	wp_enqueue_style( 'sleeky_raleway', '//fonts.googleapis.com/css?family=Raleway', array(), '1.2', 'all' );
    	wp_enqueue_style( 'sleeky_roboto', '//fonts.googleapis.com/css?family=Roboto', array(), '1.2', 'all' );
    	wp_enqueue_style( 'sleeky__wow', get_template_directory_uri() . '/css/animate.css', array( ), '1.0', 'all' );
		wp_enqueue_script('sleeky_wow_js', get_template_directory_uri() . '/js/wow.js', array('jquery'), '1.0', true);
    	wp_enqueue_style( 'sleeky_bootstrap', get_template_directory_uri(). '/css/bootstrap.css', array(), '1.0', 'all');
		wp_enqueue_style( 'sleeky_responsive', get_template_directory_uri(). '/css/responsive.css', array(), '1.0', 'all');
		wp_enqueue_style( 'sleeky_main', get_template_directory_uri(). '/css/sleeky.css', array(), '1.0', 'all');
		wp_enqueue_style( 'sleeky_style', get_stylesheet_uri());
	}
}
/*
=================================================
ENQUEUE SCRIPTS AT THE END FOR FRONT END.
=================================================
*/
add_action( 'wp_enqueue_scripts', 'sleeky_enqueue_scripts' );
if (!function_exists('sleeky_enqueue_scripts')){
	function sleeky_enqueue_scripts() {
		if (!is_admin()) {
			if (is_singular() AND comments_open() AND (get_option('thread_comments') === 1)) {
				wp_enqueue_script('comment-reply');
			}
			wp_enqueue_script( 'jquery' );
			wp_enqueue_script( 'sleeky_scripts', get_template_directory_uri().'/js/scripts.js', array( 'jquery' ), '1.0', false );	
			
		}
	}
}

