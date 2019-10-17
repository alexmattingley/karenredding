<?php get_header(); ?>

<div class="what-i-do-desc-base">
	<div class="container-tri-box">
		<h2><?php the_title(); ?></h2>
		<p><?php the_field('what_i_do_base_description'); ?></p>
		<a href="<?php the_field('what_i_do_first_link'); ?>">
			<div class="individual-box col-3 left-box">
				<img class="featured-img" src="<?php the_field('what_i_do_first_image'); ?>">
				<h3><?php the_field('what_i_do_first_title'); ?></h3>
				<p><?php the_field('what_i_do_first_description') ?></p>
			</div>
		</a>
		<a href="<?php the_field('what_i_do_second_link'); ?>">
			<div class="individual-box col-3 middle-box">
				<img class="featured-img" src="<?php the_field('what_i_do_second_image'); ?>">
				<h3><?php the_field('what_i_do_second_title'); ?></h3>
				<p><?php the_field('what_i_do_second_description') ?></p>
			</div>
		</a>
		<a href="<?php the_field('what_i_do_third_link'); ?>">
			<div class="individual-box col-3">
				<img class="featured-img" src="<?php the_field('what_i_do_third_image'); ?>">
				<h3><?php the_field('what_i_do_third_title'); ?></h3>
				<p><?php the_field('what_i_do_third_description') ?></p>
			</div>
		</a>
	</div>
</div>

<?php get_footer(); ?>