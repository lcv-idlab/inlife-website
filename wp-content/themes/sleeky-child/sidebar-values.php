<?php
/**
 * The Values Sidebar
 * @package sleeky
 * @since 1.0.0
 */
$default_content = get_theme_mod('hide_default_content', '0');
if (   !is_active_sidebar('values') && (!$default_content) ): ?>
            <div class="sleeky_widget_values">
                <div class="container">
                    <div class="row">              
                        <div id="values" class="col-md-12" role="complementary">
                            <h3><?php echo __('Value Proposition Home', 'sleeky'); ?></h3>
                            <p><?php echo __('Add the footer Content here Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'sleeky');?></p>
                        </div><!-- #values prop home -->

                    </div>
                </div>
            </div>

    <?php else: ?>

        <div class="sleeky_widget_values">
            <div class="container">
                    <div class="values_container">
                        <div id="values" class="" role="complementary">
                            <?php dynamic_sidebar( 'values' ); ?>
                        </div><!-- #values and objectives -->
                     
                    </div>
            </div>
        </div>        

<?php    
endif;
?>