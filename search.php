<?php get_header(); ?>

<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
		<div class="post">
			<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a>
			<?php the_date_xml(); ?>
			<?php the_content('続きを読む'); ?>
		</div>
	<?php endwhile; ?>
<?php else : ?>
	<h2>Not Found</h2>
	<p>記事はありません</p>
<?php endif; ?>

<?php get_footer(); ?>
<?php get_sidebar(); ?>

