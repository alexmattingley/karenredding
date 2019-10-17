<!DOCTYPE html>
<html>
	<head>
		<title>
		<?php 
		$page_title = wp_title(true);
		echo $page_title;
		?>
		</title>
		<?php wp_head(); ?>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
	</head>
	<body>
		<header class="group">
			<a href="<?php echo get_site_url(); ?>">
				<h1>Karen K Redding Ph.D.</h1>
			</a>
			<nav>
				<ul class="navigation">
					<?php

						$args = array(
							'menu' => 'main-menu'
						);

						wp_nav_menu( $args );

					?>
				</ul>
			</nav>
		</header>