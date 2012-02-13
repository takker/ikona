<?php get_header(); ?>

	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
<article class="post">
			<h3><?php the_title(); ?></h3>
			<p class="post-date"><?php the_date("Y年m月j日"); ?></p>
			<?php the_content(); ?>
</article>	<!-- .post -->
		<?php endwhile; ?>
	<?php else : ?>
		<h2>Not Found</h2>
		<p>記事はありません</p>
	<?php endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
