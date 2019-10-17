<?php

//Loads Theme CSS
function theme_styles() {

	wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css');
	wp_enqueue_style('main', get_template_directory_uri() . '/style.css');
	wp_enqueue_style('googlefonts-hind', 'http://fonts.googleapis.com/css?family=Hind:500,400,700,600');
	wp_enqueue_style('googlefonts-droid-serif', 'http://fonts.googleapis.com/css?family=Droid+Serif:400,700');
	wp_enqueue_style('googlefonts-english', 'http://fonts.googleapis.com/css?family=IM+Fell+English');
}

// this triggers the above function, which calls the styles sheets
add_action( 'wp_enqueue_scripts', 'theme_styles' );

function theme_scripts() {
	wp_enqueue_script('mainjs',
	get_template_directory_uri() . '/js/main.js',
	array('jquery'),
	true
	);
}


// this triggers the above function, which calls the styles sheets
add_action( 'wp_enqueue_scripts', 'theme_scripts' );


//adds custom menus
add_theme_support( 'menus' );


// img unautop
function img_unautop($pee) {
    $pee = preg_replace('/<p>\\s*?(<a .*?><img.*?><\\/a>|<img.*?>)?\\s*<\\/p>/s', '<div class="figure">$1</div>', $pee);
    return $pee;
}
add_filter( 'the_content', 'img_unautop', 30 );

/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'Pop up box',
		'id'            => 'pop_up',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );


add_action('init', 'init_theme_method');
 
function init_theme_method() {
   add_thickbox();
}

?>