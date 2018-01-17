<?php
    add_action('customize_register', 'sleeky_theme_customize');

    function sleeky_theme_customize( $wp_customize ) {

        $wp_customize->add_section('default_content_setting', array(
            'title'     => __('Default Content Setting', 'sleeky'),
             'priority' =>  2,
        ));
        

        $wp_customize->add_setting( 'hide_default_content', array(
            'default' => 0,
             'sanitize_callback' => 'sleeky_sanitize_checkbox',
        ));

        $wp_customize->add_control( 'hide_default_content', array(
            'type' => 'checkbox',
            'label'    => __( 'Hide default content from theme', 'sleeky' ),
            'section' => 'default_content_setting',
            'priority' => 13,
        ) );

        /*
        

        /*
        =================================================
        Social Icons Setup
        =================================================
        */
        $wp_customize->add_panel( 'social_networking_panel', array(// Header Panel
            'priority'       => 6,
            'capability'     => 'edit_theme_options',
            'title'          => __('Social Networking', 'sleeky'),
            'description'    => __('Deals with the social networking of your theme', 'sleeky'),
        ));

        $wp_customize->add_section( 'social_networking', array(
            'title'          => __( 'Social Networking Links', 'sleeky' ),
            'priority'       => 1,
            'panel'          => 'social_networking_panel',
        ));

        

        // Setting group for Twitter
        $wp_customize->add_setting( 'twitter_uid', array(
            'default'        => '',
            'sanitize_callback' => 'sleeky_sanitize_url',
        ) );

        $wp_customize->add_control( 'twitter_uid', array(
            'settings' => 'twitter_uid',
            'label'    => __( 'Twitter', 'sleeky' ),
            'section'  => 'social_networking',
            'type'     => 'text',
            'priority' => 2,
        ));  
  
        // Setting group for Facebook
        $wp_customize->add_setting( 'facebook_uid', array(
            'default'        => '',
            'sanitize_callback' => 'sleeky_sanitize_url'
        ) );

        $wp_customize->add_control( 'facebook_uid', array(
            'settings' => 'facebook_uid',
            'label'    => __( 'Facebook', 'sleeky' ),
            'section'  => 'social_networking',
            'type'     => 'text',
            'priority' => 3,
        ));  
  
        // Setting group for Google+
        $wp_customize->add_setting( 'google_uid', array(
            'default'        => '',
            'sanitize_callback' => 'sleeky_sanitize_url'
        ));

        $wp_customize->add_control( 'google_uid', array(
            'settings' => 'google_uid',
            'label'    => __( 'Google+', 'sleeky' ),
            'section'  => 'social_networking',
            'type'     => 'text',
            'priority' => 4,
        ));  
 

        /*
        =================================================
       Header top setting
        =================================================
        */
        $wp_customize->add_section( 'header_top_settings', array(
            'title'          => __( 'Top Bar Display', 'sleeky' ),
            'description'    => __('Header Top Represents the top position ahead of Menu', 'sleeky'),   
            'priority'       => 5
        ) );

    
        // Hide the Top bar
        
        $wp_customize->add_setting( 'hide_styletop', array(
            'default'        => '1',
            'sanitize_callback' => 'sleeky_sanitize_text',
        ) );
    
        $wp_customize->add_control('hide_styletop', array(
            'label'   => __( 'Hide Top Bar', 'sleeky' ),
            'section' => 'header_top_settings',
            'settings'   => 'hide_styletop',
            'priority' => 2,
            'type'    => 'checkbox',
        ));

        // Hide the Announcement on the Top Menu
        $wp_customize->add_setting( 'hide_announcement', array(
            'default'        => '',
            'sanitize_callback' => 'sleeky_sanitize_text',
        ) );
    
        $wp_customize->add_control('hide_announcement', array(
            'label'   => __( 'Hide Announcement', 'sleeky' ),
            'section' => 'header_top_settings',
            'settings'   => 'hide_announcement',
            'priority' => 2,
            'type'    => 'checkbox',
        ));

        // Hide the Social Icons on the Top Menu
        $wp_customize->add_setting( 'hide_social_icons', array(
            'default'        => '',
            'sanitize_callback' => 'sleeky_sanitize_text',
        ) );
    
        $wp_customize->add_control('hide_social_icons', array(
            'label'   => __( 'Hide Social Icons', 'sleeky' ),
            'section' => 'header_top_settings',
            'settings'   => 'hide_social_icons',
            'priority' => 3,
            'type'    => 'checkbox',
        )); 

        // Setting for showing the Announcement
        $wp_customize->add_setting( 'style_announcement', array(
            'default'        => '',
            'sanitize_callback' => 'sleeky_sanitize_text',
        ) );


        $wp_customize->add_control( 'style_announcement', array(
            'label' => __( 'Short Announcement', 'sleeky' ),
            'type' => 'text',
            'section' => 'header_top_settings',
            'setting' => 'style_announcement',
            'priority' => 4,
        ) );
  
        // Social Icons Colors

        $wp_customize->add_setting( 'styletop_bg', array(
            'default'        => '',
            'sanitize_callback' => 'sleeky_sanitize_hex_color',
        ) );
        
        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'styletop_bg', array(
            'label'   => __( 'Top Bar Background', 'sleeky' ),
            'section' => 'header_top_settings',
            'settings'   => 'styletop_bg',
            'priority' => 5,            
        ) ) );

        // Top Bar Text Color
        $wp_customize->add_setting( 'styletop_text', array(
            'default'        => '',
            'sanitize_callback' => 'sleeky_sanitize_hex_color',
        ) );
        
        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'styletop_text', array(
            'label'   => __( 'Top Bar Text Color', 'sleeky' ),
            'section' => 'header_top_settings',
            'settings'   => 'styletop_text',
            'priority' => 6,            

        ) ) );

        /*
        =================================================
        STICKY MENU
        =================================================
        */

        $wp_customize->add_section( 'choose_sticky_style', array(
            'title'          => __( 'Sticky Menu', 'sleeky' ),
            'description'    => __(' ', 'sleeky'),  
            'priority'       => 55,
            
        ) );
      

        $wp_customize->add_setting( 'nav_position_scrolltop', array(
            'default' => 0,
            'sanitize_callback' => 'sleeky_sanitize_checkbox',
        ) );
        
        $wp_customize->add_control( 'nav_position_scrolltop', array(
            'label'   => __( 'Sticky Menu', 'sleeky' ),
            'section' => 'choose_sticky_style',
            'settings' => 'nav_position_scrolltop',
            'type'    => 'checkbox',
            'choices' => array(
                '1' => __( 'Sticky Menu', 'sleeky' ),
            ),
           'priority'       => 20,  
        ));

        
        

        /*
        =================================================
        Move to top setting
        =================================================
        */
        $wp_customize->add_section( 'move_top_top', array(
            'title'          => __( 'Move To Top', 'sleeky' ),
            'priority'       => 6,
           
        ) );

        $wp_customize->add_setting( 'movetotop', array(
            'default'        => '1',
            'sanitize_callback' => 'sleeky_sanitize_checkbox',
        ) );

        $wp_customize->add_control( 'movetotop', array(
            'settings' => 'movetotop',
            'label'    => __( 'Enable Move To Top', 'sleeky' ),
            'section'  => 'move_top_top',       
            'type'     => 'checkbox',
            'priority' => 14,
        ) );
       
} //end of sleeky_theme_customize();       
 
function sleeky_sanitize_text( $input ) {
    return wp_kses_post( force_balance_tags( $input ) );
}


function sleeky_sanitize_pagewidth( $input ) {
    $valid = array(
            'default' => __( 'Full Width', 'sleeky' ),
            'boxedmedium' => __( 'Boxed Medium', 'sleeky' ),
            'boxedsmall' => __( 'Boxed Small', 'sleeky' ),
    );
 
    if ( array_key_exists( $input, $valid ) ) {
        return $input;
    } else {
        return '';
    }
}
/**
 * adds sanitization callback function for the featured image : radio
 * @package sleeky 
*/
function sleeky( $input ) {
    $valid = array(
        'big' => __( 'Wide Featured Image', 'sleeky' ),
        'small' => __( 'Small Featured Image', 'sleeky' ),
    );
 
    if ( array_key_exists( $input, $valid ) ) {
        return $input;
    } else {
        return '';
    }
}

/**
 * adds sanitization callback function for the excerpt : radio
 * @package sleeky 
*/
function sleeky_sanitize_excerpt( $input ) {
    $valid = array(
        'content' => __( 'Content', 'sleeky' ),
        'excerpt' => __( 'Excerpt', 'sleeky' ),
    );
 
    if ( array_key_exists( $input, $valid ) ) {
        return $input;
    } else {
        return '';
    }
}


    function sleeky_sanitize_url( $url ) {

        return esc_url_raw( $url );
    }



/**
 * adds sanitization callback function for the layout : radio
 * @package sleeky 
*/
function sleeky_sanitize_blogstyle( $input ) {
    $valid = array(
        'blogright' => __( 'Blog with Right Sidebar', 'sleeky' ),
        'blogleft' => __( 'Blog with Left Sidebar', 'sleeky' ),
        'blogleftright' => __( 'Blog with Left &amp; Right Sidebar', 'sleeky' ),
        'blogwide' => __( 'Blog with Full Width &amp; no Sidebars', 'sleeky' ),
    );
 
    if ( array_key_exists( $input, $valid ) ) {
        return $input;
    } else {
        return '';
    }
}

/**
 * adds sanitization callback function for the logo style : radio
 * @package sleeky 
*/
function sleeky_sanitize_logo_style( $input ) {
    $valid = array(
            'default' => __( 'Default Logo', 'sleeky' ),
            'custom' => __( 'Your Logo', 'sleeky' ),
            'logotext' => __( 'Logo with Title and Tagline', 'sleeky' ),
            'text' => __( 'Text Title', 'sleeky' ),
    );
 
    if ( array_key_exists( $input, $valid ) ) {
        return $input;
    } else {
        return '';
    }
}

function sleeky_sanitize_checkbox( $input ) {
    if ( $input == 1 ) {
        return 1;
    } else {
        return '';
    }
}   

/**
 * adds sanitization callback function for numeric data : number
 * @package sleeky 
*/

function sleeky_sanitize_number( $value ) {
    $value = (int) $value; // Force the value into integer type.
    return ( 0 < $value ) ? $value : null;
}

/**
 * adds sanitization callback function for sanitizing hex color
 * @package sleeky 
*/
function sleeky_sanitize_hex_color(  $hex_color, $setting  ) {

    // Sanitize $input as a hex value without the hash prefix.
    $hex_color = sanitize_hex_color( $hex_color );
    
    // If $input is a valid hex value, return it; otherwise, return the default.
    return ( ! null( $hex_color ) ? $hex_color : $setting->default );
}

/**
 * adds sanitization callback function for uploading : uploader
 * @package sleeky * Special thanks to: https://github.com/chrisakelley
 */

add_filter( 'sleeky_sanitize_image', 'sleeky_sanitize_upload' );

add_filter( 'sleeky_sanitize_file', 'sleeky_sanitize_upload' );

function sleeky_sanitize_upload( $input ) {

        $output = '';

        $filetype = wp_check_filetype($input);

        if ( $filetype["ext"] ) {

                $output = $input;
        }
        return $output;
}

/**
*adds css in load of page
*@package Sleeky
*@Description: It hooks the following css on page load
*/
add_action( 'customize_controls_print_styles', 'sleeky_customize_css');   
    function sleeky_customize_css()   {    ?>
        <style type="text/css">

            .footer-social-icon ul li a i { color:<?php echo get_theme_mod('social_uid_color'); ?>; background-color:<?php echo get_theme_mod('social_uid_bg_color'); ?>;}

            .footer-social-icon ul li a i:hover { color:<?php echo get_theme_mod('social_uid_hover_color'); ?>; background-color:<?php echo get_theme_mod('social_uid_bg_hover_color'); ?>;} 
            input[data-customize-setting-link="nav_position_scrolltop_val"] {
                 font-weight: bold;
            }
            li#customize-control-nav_position_scrolltop_val label span.customize-control-title {
                font-weight: bold;
            }
            li#customize-control-nav_position_scrolltop {
                margin-bottom: 20px !important;
            }
            li#customize-control-nav_position_scrolltop_val {
                margin-top: -22px !important;
            }
            input[data-customize-setting-link="nav_position_scrolltop_val"] {
                background: none !important;
                   
            }
        </style>
            
        <?php
    }

/**
*adds sticky menu on header
*@package Sleeky
*@Description: It hooks the following js to head section
*/
add_action('wp_head', 'sleeky_add_customizer_js');
function sleeky_add_customizer_js () { ?>
    <script type="text/javascript">
    (function ( $ ) {
        $(document).ready(function() {
            var active = <?php  echo get_theme_mod('nav_position_scrolltop', 0); ?>;
            if (active == 1 ) {
                $(window).scroll(function() {
                    if ($(window).scrollTop() > 180) {
                        $( "header#sleeky_header" ).css ({
                            "background-color":"rgb(138,197,141)",
    						"position":"fixed",	
    						"z-index":"9999",
    						"width":"100%",
    						"top":"0"
                        });

                    } else {
                        $( "header#sleeky_header" ).css ({
                            "position":"relative",  
                            "width":"100%"
                        });
                    }

                });
            }
        });
    })(jQuery);;        

    </script> 
<?php }