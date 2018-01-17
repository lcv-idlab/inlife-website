<?php
/*
 * Header Top Bar Settings for Normal Output
 * Package Sleeky Pro
 */	
?>
<?php
	if (get_theme_mod('hide_styletop','1')) {
		//do nothing
	} else {
		?>
		<div class="sleeky_top_bar">
			<div class="container">
				<div class="row">

					<div class="col-md-6 top_annoucement">
						<?php  if ( get_theme_mod( 'hide_announcement' ) == '') { 
									echo get_theme_mod('style_announcement','someone@gmail.com.com | 986666666'); ?></p>
								<?php } ?>
					</div>
					<div class ="col-md-6 top_social">
						<?php   if ( get_theme_mod( 'hide_social_icons' ) == '') { 
									get_template_part('partials/social_bar');
								} ?>
					</div>
				</div>
			</div>
		</div>
	<?php }	?>