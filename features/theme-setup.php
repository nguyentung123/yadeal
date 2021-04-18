<?php
/* ================================
 * Theme Support Feature Setup
 * ================================ */
if (!function_exists('yadea_theme_setup')) :
	function yadea_theme_setup()
	{
		// Make theme available for translation.
		load_theme_textdomain('yadea-theme', get_template_directory() . '/languages');

		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');

		// Enable support for Post Thumbnails on posts and pages.
		add_theme_support('post-thumbnails');

		//Switch default core markup for search form, comment form, and comments
		add_theme_support('html5', array(
			'search-form',
		));

		// Add support for core custom logo.
		add_theme_support('custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		));

		register_nav_menu('headerMenuLocation', 'Header Nav Menu');
		register_nav_menu('footerMenuLocation1', 'Footer Menu Left');
		register_nav_menu('footerMenuLocation2', 'Footer Menu Middle');

		// Automatically add title tag
		add_theme_support('title-tag');
	}
endif;
add_action('after_setup_theme', 'yadea_theme_setup');