	<?php if(is_single()): ?>
		<div class="title">
			<h3><?php the_title(); ?></h3>
		</div>
		<h4 class="blog-info">By <?php the_author(); ?>/ <?php the_time('F j, Y'); ?></h4>
		<div class="blog-content">
			<?php the_content(); ?>
		</div>
		<div class="blog-navigation">
			<div class="previous-post">
				<?php previous_post_link(); ?>
			</div>
			<div class="next-post">
				<?php next_post_link(); ?>
			</div>
		</div>

	<?php else: ?>
		<div class="blog-post">
			<div class="title">
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			</div>
			<img class="blog-featured-img" src="<?php the_field('featured_image') ?>" alt="">
			<?php the_excerpt(); ?>
			<p><a href="<?php the_permalink(); ?>">Continue Reading &rarr;</a></p>
			<hr>
		</div>
	<?php endif; ?>
