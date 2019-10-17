<?php 

/*
	Template Name: what I do template (mindfullness)

*/

get_header(); ?>

<?php

	$args = array(
		'post_type' => 'mindfullness'
	);

	$the_query = new WP_Query( $args );

?>
<div class="col-2 what-i-do-desc group">
	<div class="desc-container">
	<h2><?php the_title(); ?></h2>
		<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

			<?php get_template_part('content', 'mpp') ?>

		<?php endwhile; ?>

		<?php endif; ?>
	</div>
</div>

<?php get_footer(); ?>