<?php get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<h2>Blog Page</h2>

			<?php if (have_posts()): ?>
				<?php the_archive_title(); the_archive_description(); ?> 

				<?php while( have_posts() ) : the_post(); ?>
					<div class="post-preview">
						<div class="post-image">
							<?php if (has_post_thumbnail()): ?>
								<?php the_post_thumbnail(); ?>
							<?php else: ?>
								<h2><?php the_title(); ?></h2>
							<?php endif; ?>	
						</div>
						<div class="post-description">
							<h3><?php the_title(); ?></h3>
								<?php the_excerpt(); ?>
								<a class="read-more" href="<?php echo the_permalink(); ?>">Read More</a>
								
								<?php
									$items = "<ul class='tag-list'>";
									foreach(get_the_tags($postid) as $tag) {
										$items .= "<li class='tagname-".$tag->slug."'>".$tag->name."</li>";
									}
									echo $items."</ul>";
								?>
						</div>
						
					</div>
				<?php endwhile; ?>
			<?php endif ?>

		</main>
	</div>
<?php get_footer(); ?> 
