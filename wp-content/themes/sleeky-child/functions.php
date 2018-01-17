<?php

//update_option( 'siteurl', 'http://www.inlife_h2020.eu' );
//update_option( 'home', 'http://www.inlife_h2020.eu' );

// get the parent style sheet

add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}

/*
=================================================
INCLUDE THE WIDGETS FOR THE THEME
=================================================
*/

include_once('inc/sleeky_widgets.php');

/*
=================================================
ENQUEUE ALL THE SCRIPTS
=================================================
*/

include_once('inc/sleeky_scripts.php');

/* Extract short excerpt */
function get_excerpt($post, $length, $link){

	$excerpt = get_the_content($post);
	$excerpt = preg_replace(" ([.*?])",'',$excerpt);
	$excerpt = strip_shortcodes($excerpt);
	$excerpt = strip_tags($excerpt);
	$excerpt = substr($excerpt, 0, $length);
	$excerpt = substr($excerpt, 0, strripos($excerpt, " "));
	$excerpt = trim(preg_replace( '/s+/', 's', $excerpt));
	//$excerpt = $excerpt.'... <a href="'.$link.'">more</a>';
	$excerpt = $excerpt.' [...]';
	return $excerpt;
}

?>