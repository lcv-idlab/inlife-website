<?php
/**
 * The Top Sidebar
 * @package sleeky
 * @since 1.0.0
 */
$default_content = get_theme_mod('hide_default_content', '0');
if (   ! is_active_sidebar( 'middle1'  )
	&& ! is_active_sidebar( 'middle2' )	
	&& (!$default_content)):	
	?>
        <div class="sleeky_widget_middle">
            <div class="container">
                <div class="row">              
                    <div id="middle1" class="col-md-3" role="complementary">
                        <i class="sleeky_icons fa fa-bars"></i>
                        <h3><?php echo __('Middle Widget 1', 'sleeky'); ?></h3>
                        <p><?php echo __('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'sleeky'); ?></p>
                    </div><!-- #middle1 -->

                    <div id="middle2" class="col-md-3" role="complementary">
                        <i class="sleeky_icons fa fa-facebook"></i>
                        <h3><?php echo __('Middle Widget 2', 'sleeky'); ?></h3>
                        <p><?php echo __('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'sleeky'); ?></p>
                    </div><!-- #middle2 -->          

                </div>
            </div>
        </div>
<?php
else : ?>
<div class="sleeky_widget_middle">
    <div class="container">
            <div class="row col-lg-12">
                <div class="col-lg-12">
                    <div id="middle2" class="<?php sleeky_middlegroup(); ?> partecipate_container" role="complementary">
                        <?php dynamic_sidebar( 'middle2' ); ?>



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

                            <div id="mce-responses" class="clear">
                                <div class="response" id="mce-error-response" style="display:none"></div>
                                <div class="response" id="mce-success-response" style="display:none"></div>
                            </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                            <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_078944a41bef388cabfce4593_fd7b8297be" tabindex="-1" value=""></div>
                            <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
                            </div>
                        </form>
                        </div>

                        <!--End mc_embed_signup-->


                    </div><!-- #middle2 -->
                </div>

                <div id="middle1" class="<?php sleeky_middlegroup(); ?>" role="complementary">
                    <div class="col-lg-12">
                        <?php dynamic_sidebar( 'middle1' ); ?>
                    </div>

                    <?php
                    $allposts = get_posts( array(
                        'posts_per_page' => 2
                    ) );
                     
                    if ( $allposts ) {
                        foreach ( $allposts as $post ) :
                            setup_postdata( $post ); ?>
                            <div class="post-container-list col-md-6">
                                <h4 class="post_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>

                                <!--
                                <p class="post_data"><?php echo $post->post_date; ?></p>
                                -->
                                <div class="post_data"><?php sleeky_post_meta(); ?></div>
                                <!-- funtions.php get_excerpt() -->
                                <div class="post_content"><p><?php echo get_excerpt($post, 160, get_permalink($post)); ?></p></div>
                        </div>
                        <?php
                        endforeach;
                        wp_reset_postdata();
                    }
                    ?>

                </div><!-- #middle1 -->
          
            </div>
    </div>
</div>
<?php
endif;
?>