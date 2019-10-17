<?php get_header(); ?>

<div class="photo-page group">
	<div class="desc-container group">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<h2><?php the_title(); ?></h2>
			<?php the_content(); ?>

		<?php endwhile; else: ?>

			<h3>there are no posts of pages to display</h3>

		<?php endif; ?>	
	</div>
</div>	

<?php get_footer(); ?>