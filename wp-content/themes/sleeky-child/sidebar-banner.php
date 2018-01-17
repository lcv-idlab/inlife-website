<?php
/**
 * The Banner Sidebar
 * @package Sleeky
 *
 * @since 1.0.0
 */
if ( (get_header_image() && is_front_page() ) || is_active_sidebar('banner-wide')) { ?>
	<div class="sleeky_banner" style="<?php if ( get_header_image() ) : ?>background-image: url(<?php header_image(); ?>);<?php endif; ?><?php if( get_post_meta($post->ID, 'header_background', true) ) { ?> background-image: url(<?php echo esc_url (the_field('header_background')); ?>); <?php } ?>">

		<?php dynamic_sidebar( 'banner-wide' ); ?>

		<section id="socials-sharing-wide" class="socials-sharing-wide">
			<div class="container">
				<div class="row">
					
					<div class="fb-share-button share-button" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse">Share</a></div>

					<div class="share-button">
						<a href="https://twitter.com/share" class="twitter-share-button" data-show-count="false">Tweet</a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
					</div>
				</div>
			</div>
		</section>
		
	</div> <?php
}