<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php wp_title(); ?><?php bloginfo('name'); ?></title>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />
	<!-- LESSの読み込み -->
	<link rel="stylesheet/less" href="<?php bloginfo('stylesheet_directory'); ?>/css/styles.less" />
	<script src="http://lesscss.googlecode.com/files/less-1.2.1.min.js"></script>

	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<link rel="Shortcut Icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico" type="image/x-icon" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="wrapper">
	<div id="outline">
		<header>
			<a href="/wordpress/"><h1>山海里スポーツクラブ「いこな」</h1></a>

			<?php wp_nav_menu( array( 'container' => 'nav', 'container_class' => 'menu-header', 'theme_location' => 'Primary', 'depth' => 1 )); ?>
			<?php /* wp_nav_menu( array( 'container_class' => 'submenu-header', 'theme_location' => 'Secondary' )); */ ?>

			<?php if (is_home()) : ?>
				<img src="<?php header_image(); ?>" width="<?php echo HEADER_IMAGE_WIDTH; ?>" height="<?php echo HEADER_IMAGE_HEIGHT; ?>" alt="山海里スポーツクラブ「いこな」は、「健康づくり」、「仲間づくり」、「地域づくり」、「生きがいづくり」のスポーツクラブです。" />
			<?php endif; ?>
		</header>

		<div id="main">
