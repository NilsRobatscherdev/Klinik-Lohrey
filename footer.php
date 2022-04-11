<footer class="footer" role="contentinfo">
	<div class="footer-wrapper container">
		<div class="footer-nav-wrapper">
			<div class="kontakt col-12 col-xl-5 col-lg-6">
				<h2><?php the_field('kontakt_headline'); ?></h2>
				<?php the_field('kontakt_text'); ?>
			</div>
			<div class="socialmedia col-12 col-xl-4 col-lg-6">
				<h2><?php the_field('social_media_headline'); ?></h2>
				<?php the_field('social_media_text'); ?>
			</div>
			<div class="links col-12 col-xl-3 col-lg-6" >
				<h2><?php the_field('links_headline'); ?></h2>
				<?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'menu_id' => 'footer-menue') ); ?>
			</div>
			
		</div>
	</div>
	<?php wp_footer(); ?>
</footer>
<div class="subfooter">
	<div class="container">
		<div class="text ">
			<h3 class="highlight-font-color"><?php the_field('copyright') ?></h3>
		</div>
	</div>
</div>