<?php get_header(); ?>

<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
		<div class="nav-previous"><?php previous_post_link() ?></div>
		<div class="nav-next"><?php next_post_link() ?></div>
		<article class="post">
			<h2><?php the_title(); ?></h2>
			<?php the_date(); ?>
			<?php the_content('続きを読む'); ?>
		</article>
		<div>カテゴリ:<?php the_category(); ?></div>
		<div><?php the_tags(); ?></div>
		<h3 id="comments-title"><?php comments_number(); ?></h3>
		<?php comment_form(array('comment_notes_after' => '')); ?>
	<?php endwhile; ?>
<?php else : ?>
	<h2>Not Found</h2>
	<p>記事はありません</p>
<?php endif; ?>

<?php get_footer(); ?>
<?php get_sidebar(); ?>

