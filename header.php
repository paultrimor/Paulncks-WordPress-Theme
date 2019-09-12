<!DOCTYPE html> 
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?> 
</head>
<body>
	<div id="page" class="site">
		<header id="masthead" class="site-header">
			<div class="header-area">			
				<?php get_template_part('template-parts/site-branding'); ?>
			</div>
			<span class="bloginfo"><?php echo get_bloginfo('description');?> </span> 
		</header>
		<div id="content" class="site-content">
