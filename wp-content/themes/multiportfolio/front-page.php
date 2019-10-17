<?php get_header(); ?>
<div class="signup-cta">

	<?php get_template_part('content', 'signup') ?>

</div> <!--end signup-cta -->
<div class="about-home-block">
	<div class="shorter-container group">

	<?php 

		$args = array(
			'pagename' => 'about'
		);

		$the_query = new WP_Query( $args );
	
	?>

	<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

		<img class="featured-img" src="<?php the_field('featured_image'); ?>">
		<h2><?php the_title(); ?></h2>
		<?php the_field('custom_excerpt_for_the_home_page'); ?>
		<a class="btn brown-on-brown shadowed" href="<?php the_permalink(); ?>">Read More</a>
		

	<?php endwhile; else: ?>

		<h3>there is not about information</h3>

	<?php endif; ?>
	</div>
</div>

<a name="whatIDo"></a>
<div class="what-i-do col-3">
	<ul class="shorter-container">
		<li class="left-block">

			<?php

				$args = array(
					'pagename' => 'psychotherapy'
				);

				$the_query = new WP_Query( $args );

			?>

			<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

			<a href="<?php the_permalink(); ?>">
				<img class="psyco-photo" src="<?php the_field('featured_image'); ?>">
				<h2><?php the_title(); ?></h2>
			</a>

			<?php endwhile; else: ?>

			<h3>there is not about information</h3>

			<?php endif; ?>

		</li>
		<li class="center-block mindfulness">

			<?php

				$args = array(
					'pagename' => 'mindfulness'
				);

				$the_query = new WP_Query( $args );

			?>

			<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

			<a href="<?php the_permalink(); ?>">
				<img class="mindfullness-photo" src="<?php the_field('featured_image'); ?>">
				<h2><?php the_title(); ?></h2>
			</a>

			<?php endwhile; else: ?>

			<h3>there is not about information</h3>

			<?php endif; ?>

		</li>
		<li class="right-block mindfulness">

			<?php

				$args = array(
					'pagename' => 'photography'
				);

				$the_query = new WP_Query( $args );

			?>

			<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

			<a href="<?php the_permalink(); ?>">
				<img class="photo-photo" src="<?php the_field('featured_image'); ?>">
				<h2><?php the_title(); ?></h2>
			</a>

			<?php endwhile; else: ?>

			<h3>there is not about information</h3>

			<?php endif; ?>
		</li>
	</ul>
</div>
<?php get_footer(); ?>