<?php get_header(); ?>
	<div class="blog-feed">
		<div class="simple-page-container">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'post' ); ?>

			<?php endwhile; else: ?>

				<p>There are no posts or pages here</p>

			<?php endif; ?>
		</div>
	</div>
<?php get_footer(); ?>