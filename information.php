<?php
/* Template Name: Information */
get_header(); ?>

<!-- サブループ -->
<?php $loop = new WP_Query('page_id='.$post->ID); ?>
<?php while ($loop->have_posts()) : $loop->the_post(); ?>
	<section>
		<h2><?php the_title(); ?></h2>
		<p><?php the_content(); ?></p>
	</section>
<?php endwhile; ?>

<!-- メインループ:お知らせ一覧 -->
<?php
$args = array(
	'post_type' => 'information',
	'paged' => $paged
);
?>
<?php query_posts($args); ?>
<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
		<article>
			<p><?php the_time('Y年m月j日'); ?></p>
			<h3><?php the_title(); ?></h3>
			<?php the_content(); ?>
		</article>
	<?php endwhile; ?>
<?php else : ?>
	<article>
		<p3>記事がありません</p3>
		<p>表示する記事はありませんでした。</p>
	</article>
<?php endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
