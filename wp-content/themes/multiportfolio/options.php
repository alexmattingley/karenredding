<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 * By default it uses the theme name, in lowercase and without spaces, but this can be changed if needed.
 * If the identifier changes, it'll appear as if the options have been reset.
 *
 */

function optionsframework_option_name() {

	// This gets the theme name from the stylesheet (lowercase and without spaces)
	$themename = get_option( 'stylesheet' );
	$themename = preg_replace("/\W/", "_", strtolower($themename) );

	$optionsframework_settings = get_option('optionsframework');
	$optionsframework_settings['id'] = $themename;
	update_option('optionsframework', $optionsframework_settings);

	// echo $themename;
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the 'id' fields, make sure to use all lowercase and no spaces.
 *
 */

function optionsframework_options() {

	// Test data
	$test_array = array(
		'one' => __('One', 'portfoliotheme'),
		'two' => __('Two', 'portfoliotheme'),
		'three' => __('Three', 'portfoliotheme'),
		'four' => __('Four', 'portfoliotheme'),
		'five' => __('Five', 'portfoliotheme')
	);

	// Multicheck Array
	$multicheck_array = array(
		'one' => __('French Toast', 'portfoliotheme'),
		'two' => __('Pancake', 'portfoliotheme'),
		'three' => __('Omelette', 'portfoliotheme'),
		'four' => __('Crepe', 'portfoliotheme'),
		'five' => __('Waffle', 'portfoliotheme')
	);

	// Multicheck Defaults
	$multicheck_defaults = array(
		'one' => '1',
		'five' => '1'
	);

	// Background Defaults
	$background_defaults = array(
		'color' => '',
		'image' => '',
		'repeat' => 'repeat',
		'position' => 'top center',
		'attachment'=>'scroll' );

	// Typography Defaults
	$typography_defaults = array(
		'size' => '15px',
		'face' => 'georgia',
		'style' => 'bold',
		'color' => '#bada55' );

	// Typography Options
	$typography_options = array(
		'sizes' => array( '6','12','14','16','20' ),
		'faces' => array( 'Helvetica Neue' => 'Helvetica Neue','Arial' => 'Arial' ),
		'styles' => array( 'normal' => 'Normal','bold' => 'Bold' ),
		'color' => false
	);

	// Pull all the categories into an array
	$options_categories = array();
	$options_categories_obj = get_categories();
	foreach ($options_categories_obj as $category) {
		$options_categories[$category->cat_ID] = $category->cat_name;
	}

	// Pull all tags into an array
	$options_tags = array();
	$options_tags_obj = get_tags();
	foreach ( $options_tags_obj as $tag ) {
		$options_tags[$tag->term_id] = $tag->name;
	}

	// Pull all the pages into an array
	$options_pages = array();
	$options_pages_obj = get_pages('sort_column=post_parent,menu_order');
	$options_pages[''] = 'Select a page:';
	foreach ($options_pages_obj as $page) {
		$options_pages[$page->ID] = $page->post_title;
	}

	// If using image radio buttons, define a directory path
	$imagepath =  get_template_directory_uri() . '/images/';

	$options = array();

	

/**Social Media customization arraysf**/

$options[] = array( "name" => __("Social", 'portfoliotheme'),
					"type" => "heading");
							
		$options[] = array( "name" => __("Contact Page Social Icons", 'portfoliotheme'),
							"desc" => __("Select whether or not you would like to display the social links on the Contact Page.", 'portfoliotheme'),
							"id" => "display_social",
							"std" => "1",
							"type" => "checkbox");
							
		$options[] = array( "name" => __("Facebook Icon?", 'portfoliotheme'),
							"desc" => __("This option displays the Facebook icon in the Contact Page.", 'portfoliotheme'),
							"id" => "display_facebook",
							"std" => "1",
							"type" => "checkbox");
							
		$options[] = array( "name" => __("Twitter Icon?", 'portfoliotheme'),
							"desc" => __("This option displays the Twitter icon in the Contact Page.", 'portfoliotheme'),
							"id" => "display_twitter",
							"std" => "1",
							"type" => "checkbox");

		$options[] = array( "name" => __("Linkedin Icon?", 'portfoliotheme'),
							"desc" => __("This option displays the Linkedin Icon in the Contact Page.", 'portfoliotheme'),
							"id" => "display_linkedin",
							"std" => "1",
							"type" => "checkbox");

		$options[] = array( "name" => __("Google Plus Icon?", 'portfoliotheme'),
							"desc" => __("This option displays the Google Plus icon in the Contact Page.", 'portfoliotheme'),
							"id" => "display_plus",
							"std" => "1",
							"type" => "checkbox");
							
		$options[] = array( "name" => __("RSS Icon?", 'portfoliotheme'),
							"desc" => __("This option displays the RSS icon and link in the Contact Page.", 'portfoliotheme'),
							"id" => "display_rss",
							"std" => "1",
							"type" => "checkbox");

		$options[] = array( "name" => __("Reddit Icon?", 'portfoliotheme'),
							"desc" => __("This option displays the Reddit Icon and link in the Contact Page.", 'portfoliotheme'),
							"id" => "display_reddit",
							"std" => "1",
							"type" => "checkbox");

		$options[] = array( "name" => __("Email Icon?", 'portfoliotheme'),
							"desc" => __("This option displays the Email Icon and link in the Contact Page.", 'portfoliotheme'),
							"id" => "display_email",
							"std" => "1",
							"type" => "checkbox");

		$options[] = array( "name" => __("Youtube Icon?", 'portfoliotheme'),
							"desc" => __("This option displays the Youtube Icon and link in the Contact Page.", 'portfoliotheme'),
							"id" => "display_youtube",
							"std" => "1",
							"type" => "checkbox");

		$options[] = array( "name" => __("Tumblr Icon?", 'portfoliotheme'),
							"desc" => __("This option displays the Tumblr Icon and link in the Contact Page.", 'portfoliotheme'),
							"id" => "display_tumblr",
							"std" => "1",
							"type" => "checkbox");

		$options[] = array( "name" => __("Facebook Page Link", 'portfoliotheme'),
							"desc" => __("Enter a link to your Facebook page or profile.", 'portfoliotheme'),
							"id" => "facebook_link",
							"std" => __("http://facebook.com", 'portfoliotheme'),
							"type" => "text");

		$options[] = array( "name" => __("Google Plus Page", 'portfoliotheme'),
							"desc" => __("Please enter your Google Plus page.", 'portfoliotheme'),
							"id" => "plus_link",
							"std" => __("http://google.com", 'portfoliotheme'),
							"type" => "text");

		$options[] = array( "name" => __("LinkedIn Page Link", 'portfoliotheme'),
							"desc" => __("Enter a link to your LinkedIn page or profile.", 'portfoliotheme'),
							"id" => "linkedin_link",
							"std" => __("http://linkedin.com", 'portfoliotheme'),
							"type" => "text");

		$options[] = array( "name" => __("Twitter Account Link", 'portfoliotheme'),
							"desc" => __("Enter a link to your Twitter account.", 'portfoliotheme'),
							"id" => "twitter_link",
							"std" => __("http://twitter.com", 'portfoliotheme'),
							"type" => "text");
							
		$options[] = array( "name" => __("RSS Profile Link", 'portfoliotheme'),
							"desc" => __("Enter a link to your RSS page.", 'portfoliotheme'),
							"id" => "rss_link",
							"std" => __("https://RSS.com/", 'portfoliotheme'),
							"type" => "text");
							
		$options[] = array( "name" => __("Reddit Profile Link", 'portfoliotheme'),
							"desc" => __("Enter a link to your Reddit page.", 'portfoliotheme'),
							"id" => "reddit_link",
							"std" => __("http://reddit.com", 'portfoliotheme'),
							"type" => "text");

		$options[] = array( "name" => __("Email Link", 'portfoliotheme'),
							"desc" => __("Enter your email address.", 'portfoliotheme'),
							"id" => "email_link",
							"std" => __("Your Email Address!", 'portfoliotheme'),
							"type" => "text");

		$options[] = array( "name" => __("Youtube Profile page", 'portfoliotheme'),
							"desc" => __("Enter a link to your Youtube Profile page.", 'portfoliotheme'),
							"id" => "youtube_link",
							"std" => __("http://youtube.com", 'portfoliotheme'),
							"type" => "text");

		$options[] = array( "name" => __("Tumblr Profile page", 'portfoliotheme'),
							"desc" => __("Enter a link to your Tumblr Profile page.", 'portfoliotheme'),
							"id" => "tumblr_link",
							"std" => __("http://tumblr.com", 'portfoliotheme'),
							"type" => "text");												
	/**
	 * For $settings options see:
	 * http://codex.wordpress.org/Function_Reference/wp_editor
	 *
	 * 'media_buttons' are not supported as there is no post to attach items to
	 * 'textarea_name' is set by the 'id' you choose
	 */


	return $options;
}