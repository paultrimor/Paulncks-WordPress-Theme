<!DOCTYPE html> 
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?> 

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-149668476-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
  		function gtag(){dataLayer.push(arguments);}
  		gtag('js', new Date());

  		gtag('config', 'UA-149668476-1');
	</script>
	
</head>
<body>
	<div id="page" class="site">
		<header id="masthead" class="site-header">
			<div class="header-area">			
				<?php get_template_part('template-parts/site-branding'); ?>
			</div>
			<span class="bloginfo"><?php echo get_bloginfo('description');?></span>
		</header>
		<div id="content" class="site-content">
