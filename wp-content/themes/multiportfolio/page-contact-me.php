<?php get_header(); ?>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		
		<div class="contact-us-content">
			<div class="simple-page-container group">
				<div class="contact-form">
					<?php the_content(); ?>
				</div>
				<div class="contact-us-message">
					<h2><?php the_title(); ?></h2>
					<p><?php the_field('contact_me_information'); ?></p>
					<?php if(of_get_option('display_social') == '1') { ?>
					<h2><?php the_field('lets_connect'); ?></h2>
						<div class="social-media">
							<?php if (of_get_option('display_facebook') == '1') { ?>
									<a class="link-facebook" href="<?php echo of_get_option('facebook_link'); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/static-images/social-media/Facebook.png"></a>
							<?php } ?>
							<?php if (of_get_option('display_twitter') == '1') { ?>
									<a href="<?php echo of_get_option('twitter_link'); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/static-images/social-media/Twitter.png"></a>
							<?php } ?>
							<?php if (of_get_option('display_linkedin') == '1') { ?>
									<a href="<?php echo of_get_option('linkedin_link'); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/static-images/social-media/Linkedin.png"></a>
							<?php } ?>
							<?php if (of_get_option('display_reddit') == '1') { ?>
								<a href="<?php echo of_get_option('reddit_link'); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/static-images/social-media/Reddit.png"></a>
							<?php } ?>
							<?php if (of_get_option('display_rss') == '1') { ?>
								<a href="<?php echo of_get_option('rss_link'); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/static-images/social-media/RSS.png"></a>
							<?php } ?>
							<?php if (of_get_option('display_tumblr') == '1') { ?>
								<a href="<?php echo of_get_option('tumblr_link'); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/static-images/social-media/Tumblr.png"></a>
							<?php } ?>
							<?php if (of_get_option('display_plus') == '1') { ?>
								<a href="<?php echo of_get_option('plus_link'); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/static-images/social-media/Google-Plus.png"></a>
							<?php } ?>
							<?php if (of_get_option('display_youtube') == '1') { ?>
								<a href="<?php echo of_get_option('youtube_link'); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/static-images/social-media/Youtube.png"></a>
							<?php } ?>
							<?php if (of_get_option('display_email') == '1') { ?>
								<a href="<?php echo of_get_option('email_link'); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/static-images/social-media/Email.png"></a>
							<?php } ?>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>			
	<?php endwhile; else: ?>

		<h3>there are no posts of pages to display</h3>

	<?php endif; ?>	

<?php get_footer(); ?>