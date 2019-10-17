<footer>
		<ul class="footer-nav">
			<?php

				$args = array(
					'menu' => 'footer-menu'
				);

				wp_nav_menu( $args );

			?>
		</ul>
	</footer>
	<?php wp_footer(); ?>
</body>
</html>