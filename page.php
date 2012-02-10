<?php get_header(); ?>

<section id="contents">
	<?php $loop = new WP_Query('page_id='.$post->ID); ?>
	<?php if ($loop->have_posts()) : ?>
		<!-- 親ページ -->
		<?php while ($loop->have_posts()) : $loop->the_post(); ?>
			<h2><?php the_title(); ?></h2>
			<?php the_content(); ?>
		<?php endwhile; ?>

		<!-- 子ページ -->
		<?php query_posts('post_parent='.$post->ID.'&post_type=page'); ?>
		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
				<section>
					<h3><?php the_title(); ?></h3>
					<?php the_content(); ?>
				</section>
			<?php endwhile; ?>
		<?php endif; ?>
	<?php endif; ?>
</section>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
