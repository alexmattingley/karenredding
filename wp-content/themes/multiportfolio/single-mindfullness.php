<?php get_header(); ?>

<div class="simple-page group">
	<div class="simple-page-container group">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<h2><?php the_title(); ?></h2>
			<img class="featured-img" src="<?php the_field('featured_image'); ?>">
			<?php the_content(); ?>

		<?php endwhile; else: ?>

			<h3>there are no posts of pages to display</h3>

		<?php endif; ?>
	</div>
</div>

<?php get_footer(); ?>
