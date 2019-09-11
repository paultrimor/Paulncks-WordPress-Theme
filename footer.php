		</div><!-- #content --> 
		<footer class="site-footer">

			<?php 
				wp_nav_menu(array(
					'theme_location' 	=> 'menu-main'
				));
			?>	

			<?php get_template_part('template-parts/site-branding'); ?>
		
		</footer>
	</div><!-- #page -->
	<?php wp_footer(); ?>
</body>
</html>