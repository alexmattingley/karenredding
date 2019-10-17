<div class="left-col individual-desc-block group">
	<a href="<?php the_permalink(); ?>">
		<h3><?php the_title(); ?></h3>
		<img class="featured-img" src="<?php the_field('featured_image'); ?>">
	</a>
	<?php the_excerpt(); ?>
	<a href="<?php the_permalink(); ?>" class="btn brown-on-brown shadowed">Find Out More</a>
</div>