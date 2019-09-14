<?php get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<h2>Blog Page</h2>

			<?php if (have_posts()): ?>
				<?php the_archive_title(); the_archive_description(); ?> 

				<?php while( have_posts() ) : the_post(); ?>
					<div class="post-preview">
						<h3><?php the_title(); ?></h3>

						<?php the_excerpt(); ?>

						<a class="read-more" href="<?php echo the_permalink(); ?>">Read More</a>
					</div>
				<?php endwhile; ?>
			<?php endif ?>

		</main>
	</div>
<?php get_footer(); ?> 
