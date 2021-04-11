		</div><!-- #content --> 
		<footer class="site-footer">
			<div class="footer-area">

				<?php 
					wp_nav_menu(array(
						'theme_location' 	=> 'menu-main', 
						'container_id' 	=> 'menu-main-container'
					));
				?>	

				<?php get_template_part('template-parts/site-branding'); ?>
			</div>
		</footer>
	</div><!-- #page -->
	<?php wp_footer(); ?>
</body>
</html>