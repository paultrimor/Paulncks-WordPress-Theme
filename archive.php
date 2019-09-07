<?php get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<h2>Blog Page</h2>

			<?php if (have_posts()): ?>
				<header class="page-header">
					<?php the_archive_title(); the_archive_description(); ?> 

					<?php while( have_posts() ) : the_post(); ?>
						
					<?php endwhile; ?>
				</header>
			<?php endif ?>

		</main>
	</div>
<?php get_footer(); ?> 
