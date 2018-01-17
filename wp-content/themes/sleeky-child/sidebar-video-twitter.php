<?php
/**
 * The Video Twitter Sidebar
 * @package sleeky
 * @since 1.0.0
 */
$default_content = get_theme_mod('hide_default_content', '0');
if (   !is_active_sidebar('video-twitter') && (!$default_content) ): ?>
            <div class="sleeky_widget_values">
                <div class="container">
                    <div class="row">              
                        <div id="values" class="col-md-12" role="complementary">
                            <h3><?php echo __('Video Twitter Home', 'sleeky'); ?></h3>
                            <p><?php echo __('Add the footer Content here Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'sleeky');?></p>
                        </div><!-- #values prop home -->

                    </div>
                </div>
            </div>

    <?php else: ?>

        <div class="sleeky_widget_video_twitter">
            <div class="container">
                    <div class="video_twitter_container">
                        <div id="values" class="" role="complementary">
                            <div class="video_youtube">
                                <?php dynamic_sidebar( 'video-twitter' ); ?>
                            </div>
                            <div class="twitter"><a class="twitter-timeline" data-height="400" href="https://twitter.com/inLife_Project"></a></div>
                        </div><!-- #video twitter -->
                     
                    </div>
            </div>
        </div>        

<?php    
endif;
?>