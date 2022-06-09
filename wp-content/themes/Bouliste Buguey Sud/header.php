<?php 
	$image = get_field('logo_home');
?>


<html lang="en">
<head>
	<link rel="icon" type="image/png" href="<?php echo(get_template_directory_uri()); ?>/images/favicon.png" />
	<meta charset="utf-8">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Sen&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo(get_template_directory_uri()); ?>/css/style.css" />
	<title><?php bloginfo('name'); ?></title>
	<?php wp_head(); ?>
</head>
<header>
	<fieldset class="Nav">
		<nav class="Nav_navigation">
			<div class="Nav_navigation_logo">
				<a href="<?php echo get_home_url(); ?>"><img src="<?php echo $image;?>"></a>
			</div>
			<?php  wp_nav_menu(); ?>
		</nav>
	</fieldset>
</header>
