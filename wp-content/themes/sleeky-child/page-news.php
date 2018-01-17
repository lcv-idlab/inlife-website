<?php
/**
 * Template Name: News Template
 *
 * @package WordPress
 * @subpackage sleeky
 * @since sleeky 1.0
 */

/*
=================================================
News Page Templates
=================================================
*/
get_header('custom'); ?>

<div class="sleeky_content_frame">
    <div class="container">    
        <div class="row">
            <div class="content-wrapper col-lg-8 col-md-8 col-sm-12 col-xs-12 news_posts_page">
            
                <h1 class="sleeky_page_title"><?php the_title(); ?></h1>

                    <?php
                        // set the "paged" parameter (use 'page' if the query is on a static front page)
                        $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

                        // the query
                        $the_query = new WP_Query( 'cat=1&paged=' . $paged ); 
                    ?>

                    <?php if ( $the_query->have_posts() ) : ?>

                        <?php
                            // the loop
                            while ( $the_query->have_posts() ) : $the_query->the_post(); 
                            ?>
                                <div class="post-container-list">
                                    <h2 class="post_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

                                    <!--
                                    <p class="post_data"><?php echo $post->post_date; ?></p>
                                    -->
                                    <div class="post_data"><?php sleeky_post_meta(); ?></div>
                                    <div class="post_content"><p><?php echo get_the_excerpt($post); ?></p></div>
                                </div>
                            <?php endwhile; ?>

                            <!-- the pagination to scroll trough the pages -->
                            <div class="posts_link_pagination">

                                <?php 
                                    $old_link = get_next_posts_link('&laquo; Older Entries' ,$the_query->max_num_pages);
                                    $new_link = get_previous_posts_link('Newer Entries &raquo;');

                                    if ($new_link || $old_link) {
                                        if($old_link && !$new_link) {
                                            echo '<div>'.$old_link.'</div>';
                                        }
                                        else if ($old_link && $new_link) {
                                            echo '<div>'.$old_link.'</div><div class="posts-nav-division">&#8212;</div><div>'.$new_link.'</div>';
                                        }
                                        else if ($new_link && !$old_link) {
                                            echo '<div>'.$new_link.'</div>';
                                        }
                                    }
                                ?>

                                <!--
                                 <div class="older_posts_link"><?php next_posts_link( '&laquo; Older Entries' ,$the_query->max_num_pages ); ?></div>
                                <div class="newer_posts_link"><?php previous_posts_link('Newer Entries &raquo;');?></div>
                                -->

                            </div>
                            

                        <?php 
                            // clean up after the query and pagination
                            wp_reset_postdata(); 
                        ?>

                    <?php else:  ?>
                        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                    <?php endif; ?>


            </div>
        </div>
    </div>
</div>

<?php get_footer('custom'); ?>
