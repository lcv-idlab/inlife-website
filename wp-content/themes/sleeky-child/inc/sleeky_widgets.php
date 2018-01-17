<?php
/*
=================================================
sleeky Date Theme Widget Positions
This Files will show widgets on the back end of the file
@package sleeky
=================================================
*/
function sleeky_widgets_init() {

    register_sidebar( array(
        'name' => __( 'Blog Sidebar', 'sleeky' ),
        'id' => 'blogright',
        'description' => __( 'This is the right sidebar column that appears on the blog but not the pages.', 'sleeky' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3><span class="dotbox"></span>',
        'after_title' => '</h3><hr/>',
    ) );
    register_sidebar( array(
        'name' => __( 'Page Sidebar', 'sleeky' ),
        'id' => 'pagesidebar',
        'description' => __( 'This is the right sidebar column that appears on the blog but not the pages.', 'sleeky' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s pagesidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h3><span class="dotbox"></span>',
        'after_title' => '</h3>',
    ) );
    register_sidebar( array(
        'name' => __( 'Banner Wide', 'sleeky' ),
        'id' => 'banner-wide',
        'description' => __( 'This is a full width showcase banner for images or media sliders that can display on your pages.', 'sleeky' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s banner-content container">',
        'after_widget' => '</div>',
        'before_title' => '<h1><span class="dotbox"></span>',
        'after_title' => '</h1>'
    ) );
    register_sidebar( array(
        'name' => __( 'Value Proposition Home', 'sleeky' ),
        'id' => 'values',
        'description' => __( 'This is the wide box that appears on the homepage and it will contain the values propositions and objectives.', 'sleeky' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s values_text_div">',
        'after_widget' => '</div>',
        'before_title' => '<h3><span class="dotbox"></span>',
        'after_title' => '</h3><div class="dotlinebox"><span class="dot"></span></div>',
    ) );
    register_sidebar( array(
        'name' => __( 'Video Twitter Home', 'sleeky' ),
        'id' => 'video-twitter',
        'description' => __( 'This is the wide box that appears on the homepage and it will contain the video and the twitter feed.', 'sleeky' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s video_twitter_div">',
        'after_widget' => '</div>',
        'before_title' => '<h3><span class="dotbox"></span>',
        'after_title' => '</h3><div class="dotlinebox"><span class="dot"></span></div>',
    ) );
    register_sidebar( array(
        'name' => __( 'Top 1', 'sleeky' ),
        'id' => 'top1',
        'description' => __( 'This is the 1st top widget position located just below the banner area.', 'sleeky' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3><span class="dotbox"></span>',
        'after_title' => '</h3><div class="dotlinebox"><span class="dot"></span></div>',
    ) );    
    register_sidebar( array(
        'name' => __( 'Top 2', 'sleeky' ),
        'id' => 'top2',
        'description' => __( 'This is the 2nd top widget position located just below the banner area.', 'sleeky' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3><span class="dotbox"></span>',
        'after_title' => '</h3><div class="dotlinebox"><span class="dot"></span></div>',
    ) );    
    register_sidebar( array(
        'name' => __( 'Top 3', 'sleeky' ),
        'id' => 'top3',
        'description' => __( 'This is the 3rd top widget position located just below the banner area.', 'sleeky' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3><span class="dotbox"></span>',
        'after_title' => '</h3><div class="dotlinebox"><span class="dot"></span></div>',
    ) );    
    register_sidebar( array(
        'name' => __( 'Top 4', 'sleeky' ),
        'id' => 'top4',
        'description' => __( 'This is the 4th top widget position located just below the banner area.', 'sleeky' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3><span class="dotbox"></span>',
        'after_title' => '</h3><div class="dotlinebox"><span class="dot"></span></div>',
    ) );

    register_sidebar( array(
        'name' => __( 'Middle 1', 'sleeky' ),
        'id' => 'middle1',
        'description' => __( 'This is the 1st middle widget position located just below the banner area.', 'sleeky' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3><span class="dotbox"></span>',
        'after_title' => '</h3><div class="dotlinebox"><span class="dot"></span></div>',
    ) );    
    register_sidebar( array(
        'name' => __( 'Middle 2', 'sleeky' ),
        'id' => 'middle2',
        'description' => __( 'This is the 2nd middle widget position located just below the banner area.', 'sleeky' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3><span class="dotbox"></span>',
        'after_title' => '</h3><div class="dotlinebox"><span class="dot"></span></div>',
    ) ); 
    
    register_sidebar( array(
        'name' => __( 'Footer 1', 'sleeky' ),
        'id' => 'footer1',
        'description' => __( 'This is the first footer widget position located in a coloured background area just above the footer.', 'sleeky' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3><span class="dotbox"></span>',
        'after_title' => '</h3>',
    ) );    
    register_sidebar( array(
        'name' => __( 'Footer 2', 'sleeky' ),
        'id' => 'footer2',
        'description' => __( 'This is the second footer widget position located in a coloured background area just above the footer.', 'sleeky' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3><span class="dotbox"></span>',
        'after_title' => '</h3>',
    ) );    
    register_sidebar( array(
        'name' => __( 'Footer 3', 'sleeky' ),
        'id' => 'footer3',
        'description' => __( 'This is the third footer widget position located in a coloured background area just above the footer.', 'sleeky' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3><span class="dotbox"></span>',
        'after_title' => '</h3>',
    ) );    
    register_sidebar( array(
        'name' => __( 'Footer 4', 'sleeky' ),
        'id' => 'footer4',
        'description' => __( 'This is the fourth footer widget position located in a coloured background area just above the footer.', 'sleeky' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3><span class="dotbox"></span>',
        'after_title' => '</h3>',
    ) );
    register_sidebar( array(
        'name' => __( 'Call to Action', 'sleeky' ),
        'id' => 'cta',
        'description' => __( 'This is a call to action which is normally used to make a message stand out just above the main content.', 'sleeky' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ) );

}
add_action( 'widgets_init', 'sleeky_widgets_init' );

/**
 * Count the number of widgets to enable resizable widgets
 */

// lets setup the inset top group 
function sleeky_topgroup() {
    $count = 0;
    if ( is_active_sidebar( 'top1' ) )
        $count++;
    if ( is_active_sidebar( 'top2' ) )
        $count++;
    if ( is_active_sidebar( 'top3' ) )
        $count++;       
    if ( is_active_sidebar( 'top4' ) )
        $count++;
    $class = '';
    switch ( $count ) {
        case '1':
            $class = 'col-md-12';
            break;
        case '2':
            $class = 'col-md-6';
            break;
        case '3':
            $class = 'col-md-4';
            break;
        case '4':
            $class = 'col-md-3';
            break;
    }
    if ( $class )
        echo $class;
}

// lets setup the content bottom group 
function sleeky_contentbottomgroup() {
    $count = 0;
    if ( is_active_sidebar( 'contentbottom1' ) )
        $count++;
    if ( is_active_sidebar( 'contentbottom2' ) )
        $count++;
    if ( is_active_sidebar( 'contentbottom3' ) )
        $count++;       
    if ( is_active_sidebar( 'contentbottom4' ) )
        $count++;
    $class = '';
    switch ( $count ) {
        case '1':
            $class = 'dsp-md-12';
            break;
        case '2':
            $class = 'dsp-md-6';
            break;
        case '3':
            $class = 'dsp-md-4';
            break;
        case '4':
            $class = 'dsp-md-3';
            break;
    }
    if ( $class )
        echo 'class="' . $class . '"';
}

// lets setup the inset middle group 
function sleeky_middlegroup() {

    /*
    $count = 0;
    if ( is_active_sidebar( 'middle1' ) )
        $count++;
    if ( is_active_sidebar( 'middle2' ) )
        $count++;
    $class = '';
    switch ( $count ) {
        case '1':
            $class = 'col-md-12';
            break;
        case '2':
            $class = 'col-md-6';
            break;
    }
    if ( $class )
        echo $class;
    */
}

// lets setup the bottom group 
function sleeky_footergroup() {
    $count = 0;
    if ( is_active_sidebar( 'footer1' ) )
        $count++;
    if ( is_active_sidebar( 'footer2' ) )
        $count++;
    if ( is_active_sidebar( 'footer3' ) )
        $count++;       
    if ( is_active_sidebar( 'footer4' ) )
        $count++;
    $class = '';
    switch ( $count ) {
        case '1':
            $class = 'col-md-12';
            break;
        case '2':
            $class = 'col-md-6';
            break;
        case '3':
            $class = 'col-md-4';
            break;
        case '4':
            $class = 'col-md-3';
            break;
    }
    if ( $class )
        echo 'class="footer-element-div ' . $class . '"';
}