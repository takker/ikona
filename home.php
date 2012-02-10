<?php get_header(); ?>

<img src="<?php header_image(); ?>" width="<?php echo HEADER_IMAGE_WIDTH; ?>" height="<?php echo HEADER_IMAGE_HEIGHT; ?>" alt="山海里スポーツクラブ「いこな」は、「健康づくり」、「仲間づくり」、「地域づくり」、「生きがいづくり」のスポーツクラブです。" />
<h2>仮のトップページ</h2>
<p>これは仮のトップページです。</p>

<h2>お知らせ</h2>
<p><a href="<?php echo esc_url(get_permalink(get_page_by_title('お知らせ'))); ?>">お知らせ一覧</a></p>
<?php
$args = array(
	'post_type' => 'information'
);
?>
<?php query_posts($args); ?>
<?php if (have_posts()) : ?>
	<ul>
	<?php while (have_posts()) : the_post(); ?>
		<li><a href="<?php echo esc_url(the_permalink()); ?>"><?php the_title(); ?></a></li>
	<?php endwhile; ?>
	</ul>
<?php else : ?>
	<p>記事がありません。</p>
<?php endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
