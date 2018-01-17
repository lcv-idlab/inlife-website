<?php
/**
 * The Footer Sidebar
 * @package sleeky
 * @since 1.0.0
 */
$default_content = get_theme_mod('hide_default_content', '0');
if (   ! is_active_sidebar( 'footer1'  )
    && ! is_active_sidebar( 'footer2' )
    && ! is_active_sidebar( 'footer3'  )
    && ! is_active_sidebar( 'footer4'  )        
    && (!$default_content)  
    ): ?>
            <div class="sleeky_widget_bottom">
                <div class="container">
                    <div class="row">              
                        <div id="footer1" class="col-md-3" role="complementary">
                            <h3><?php echo __('Footer 1', 'sleeky'); ?></h3>
                            <p><?php echo __('Add the footer Content here Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'sleeky');?></p>
                        </div><!-- #footer1 -->

                        <div id="footer2" class="col-md-3" role="complementary">
                            <h3><?php echo __('Footer 2', 'sleeky'); ?></h3>
                            <p><?php echo __('Add the footer Content here Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'sleeky');?></p>
                        </div><!-- #footer2 -->          

                        <div id="footer3" class="col-md-3" role="complementary">
                            <h3><?php echo __('Footer 3', 'sleeky'); ?></h3>
                            <p><?php echo __('Add the footer Content here Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'sleeky');?></p>
                        </div><!-- #footer3 -->

                        <div id="footer4" class="col-md-3" role="complementary">
                            <h3><?php echo __('Footer 4', 'sleeky'); ?></h3>
                            <p><?php echo __('Add the footer Content here Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'sleeky');?></p>
                        </div><!-- #footer4 -->

                    </div>
                </div>
            </div>
        <?php elseif(is_active_sidebar( 'footer1' )  ||  is_active_sidebar( 'footer2' ) || is_active_sidebar( 'footer3' ) ||  is_active_sidebar( 'footer4' )):

    // If we get this far, we have widgets. Let do this.
?>
<div class="sleeky_widget_bottom">
    <div class="container">
        <div class="row col-lg-12">              
            <div id="footer1" class="footer-element-div col-md-3" <?php sleeky_footergroup(); ?> role="complementary">
                <!-- <?php dynamic_sidebar( 'footer1' ); ?> -->
                <img src="<?php echo get_site_url() ?>/wp-content/uploads/system/eu_acknowledgement.png">
                <p>Co-funded by the Horizon 2020 Framework<br>
                    Programme of the European Union<br>
                    inLife - Grant Agreement 732184
                </p>

            </div><!-- #footer1 -->

            <div id="footer2" class="footer-element-div col-md-3" <?php //sleeky_footergroup(); ?> role="complementary">
                <?php dynamic_sidebar( 'footer2' ); ?>

            </div><!-- #footer2 -->          

            <div id="footer3" class="footer-element-div col-md-3" <?php //sleeky_footergroup(); ?> role="complementary">
                <?php dynamic_sidebar( 'footer3' ); ?>

                 <!-- Begin MailChimp Signup Form -->
                <link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
                <!--
                <style type="text/css">
                    #mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
                    /* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
                       We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
                </style>
                -->
                <div id="mc_embed_signup">
                <form action="//inlife-h2020.us14.list-manage.com/subscribe/post?u=078944a41bef388cabfce4593&amp;id=fd7b8297be" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                    <div id="mc_embed_signup_scroll">
                <div class="mc-field-group">
                    <!-- <label for="mce-EMAIL">Email Address </label> -->
                    <input type="email" placeholder="Email Address" name="EMAIL" class="required email" id="mce-EMAIL">
                </div>
                <div class="mc-field-group">
                    <!-- <label for="mce-FNAME">First Name </label> -->
                    <input type="text" placeholder="First Name" name="FNAME" class="" id="mce-FNAME">
                </div>
                <div class="mc-field-group">
                    <!-- <label for="mce-LNAME">Last Name </label> -->
                    <input type="text" placeholder="Last Name" name="LNAME" class="" id="mce-LNAME">
                </div>
                    <div id="mce-responses" class="clear">
                        <div class="response" id="mce-error-response" style="display:none"></div>
                        <div class="response" id="mce-success-response" style="display:none"></div>
                    </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_078944a41bef388cabfce4593_fd7b8297be" tabindex="-1" value=""></div>
                    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
                    </div>
                </form>
                </div>

                <!--End mc_embed_signup-->

            </div><!-- #footer3 -->

            <div id="footer4" class="footer-element-div col-md-3" <?php //sleeky_footergroup(); ?> role="complementary">
                <div class="socials_icons">
                    <a href="https://www.linkedin.com/groups/8585908" target="_blank"><img src="<?php echo get_site_url() ?>/wp-content/uploads/system/linkedin.png"></a>
                    <a href="https://twitter.com/inLife_Project" target="_blank"><img src="<?php echo get_site_url() ?>/wp-content/uploads/system/twitter.png"></a>
                    <a href="http://www.slideshare.net/inlifeproject" target="_blank"><img src="<?php echo get_site_url() ?>/wp-content/uploads/system/slideshare.png"></a>
                    <a href="https://www.youtube.com/channel/UCcDPN_2_91NUP6SWNCm8Jiw" target="_blank"><img src="<?php echo get_site_url() ?>/wp-content/uploads/system/youtube.png"></a>
                </div>
                <!-- <?php dynamic_sidebar( 'footer4' ); ?> -->
                <div id="reserved_area_div">
                   <a href="http://research.cn.ntua.gr/twiki/do/view/Main/WebHome" target="_blank"><p id="reserved_area_p">Reserved Area</p></a>
                </div>
            </div><!-- #footer4 -->

        </div>
    </div>
</div>
<?php else:
    return;
endif;
 ?>