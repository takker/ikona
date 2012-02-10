<?php
/**
 * フロントページ用のサイドバー(カレンダーとtotoのロゴマークを表示
 *
 * @package WordPress
 * @subpackage IKONA
 */
?>

<aside id="sidebar" class="sidebar">
	<!-- Googleカレンダー -->
	<?php if (is_home()) : ?>
		<iframe src="https://www.google.com/calendar/embed?showTz=0&amp;height=300&amp;wkst=1&amp;bgcolor=%23ffffff&amp;src=5qo3kpsp1l1ni5csrbk342kvuo%40group.calendar.google.com&amp;color=%23853104&amp;ctz=Asia%2FTokyo" style=" border-width:0 " width="390" height="300" frameborder="0" scrolling="no"></iframe>
	<?php else : ?>
		<iframe src="https://www.google.com/calendar/embed?showNav=0&amp;showTabs=0&amp;showTz=0&amp;mode=AGENDA&amp;height=300&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=5qo3kpsp1l1ni5csrbk342kvuo%40group.calendar.google.com&amp;color=%23853104&amp;ctz=Asia%2FTokyo" style=" border-width:0 " width="190" height="300" frameborder="0" scrolling="no"></iframe>
	<?php endif; ?>
	<div id="toto-logo">
		<img src="<?php bloginfo('stylesheet_directory'); ?>/images/toto_logo.png" alt="toto" />
		<p>この事業はスポーツ振興くじの助成を受けて実施しています。</p>
	</div>
</aside>
