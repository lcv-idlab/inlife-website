<?php
/*
=================================================
Main Index Page For sleeky Date
=================================================
*/
get_header('custom'); ?>
<div class="sleeky_content_frame">
    <div class="container single-post-page">   
        <div class="content-wrapper col-md-8">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class( 'group' ); ?> role="article">
                        <header>
                            <h1><?php the_title(); ?></h1>
                            <?php sleeky_post_meta(); ?>
                            <hr/>
                        </header>

                        <div class="post-image">
                        <?php the_post_thumbnail('sleeky-image21'); ?>
                        </div>

                        <div class="post-content group">
                            <?php the_content(); ?>
                        </div>
                        
                        <hr/>


                    </article>
                <?php endwhile; endif; ?>

            <!-- the pagination to scroll trough the pages -->
            <div class="post-single-navigation">
                <div class="post-single-prev"><?php previous_post_link(); ?></div>
                <div class="post-single-next"><?php next_post_link(); ?></div>
            </div>

        </div>
    </div>
</div>
<?php get_footer('custom'); ?>
