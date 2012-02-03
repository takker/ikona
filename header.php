<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php wp_title(); ?><?php bloginfo('name'); ?></title>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<link rel="Shortcut Icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico" type="image/x-icon" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header>
		<a href="/wordpress/"><h1>山海里スポーツクラブ「いこな」</h1></a>
		<div id="site-description"><?php bloginfo('description'); ?></div>

		<?php wp_nav_menu( array( 'container' => 'nav', 'container_class' => 'menu-header', 'theme_location' => 'primary' )); ?>
		<?php wp_nav_menu( array( 'container_class' => 'submenu-header', 'theme_location' => 'secondary' )); ?>
	</header>

	<div id="main">
