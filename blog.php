<?php
/*
 * Template Name: Blog
 */
get_header();
?>

<?php
$args = array(
	'post_type' => 'post', /* 投稿タイプ */
	'post_status' => 'publish',
	'posts_per_page' => 3,
	'paged' => $paged
); ?>
<?php query_posts( $args ); ?>
<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>

	<article class="post">
		<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
		<p class="date"><?php the_time("Y年m月j日") ?></p>
		<?php if (has_post_thumbnail()) : ?>
			<?php the_post_thumbnail(); /* アイキャッチ */ ?>
		<?php endif; ?>
		<?php the_content(); ?>
<!--
		<?php the_excerpt(); ?>
		<a class="more-link" href="<?php the_permalink() ?>">続きを読む »</a>
-->
	</article>

	<?php endwhile; ?>
<?php else : ?>
		<div class="post">
			<h3>記事がありません</h3>
			<p>表示する記事はありませんでした</p>
		</div>
<?php endif; ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
