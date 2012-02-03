<?php get_header(); ?>

<div id="container">
	<div id="content" role="main">

		<?php if (have_posts()) : ?>	<!-- WP Loop -->
			<?php while (have_posts()) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a>
					<?php the_date_xml(); ?>
					<?php the_content('続きを読む'); ?>
				</article>	<!-- #post-{id} -->
			<?php endwhile; ?>
		<?php else : ?>
			<h2>Not Found</h2>
			<p>記事はありません</p>
		<?php endif; ?>	<!-- WP Loop End -->

	</div>	<!-- #content -->
	<?php get_sidebar(); ?>
</div>	<!-- #container -->

<?php get_footer(); ?>
