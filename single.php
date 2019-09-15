<?php get_header(); ?>
	<div id="primary" class="content-area">
		<?php while (have_posts()): the_post(); ?>
			<h2><?php echo the_title(); ?></h2>
			<?php echo the_content(); ?> 
		<?php endwhile; ?> 
	</div>
<?php get_footer(); ?>