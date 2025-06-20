<?php
/**
 * Enqueue scripts and styles for Desklogic LLC theme.
 *
 * @package Desklogic_LLC
 */

function desklogic_llc_enqueue_scripts()
{
	// Main theme stylesheet
	wp_enqueue_style('desklogic-llc-style', get_stylesheet_uri(), array(), _S_VERSION);
	wp_style_add_data('desklogic-llc-style', 'rtl', 'replace');


	// Tailwind CSS from CDN
	wp_enqueue_style('tailwind', 'https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css', [], null);


	// Enqueue app.css from the app folder
	wp_enqueue_style(
		'desklogic-llc-app',
		get_template_directory_uri() . '/app/css/app.css',
		array('desklogic-llc-style', 'tailwind'),
		_S_VERSION
	);

	// Enqueue app.js from the app folder
	wp_enqueue_script(
		'desklogic-llc-app-js',
		get_template_directory_uri() . '/app/js/app.js',
		array(),
		_S_VERSION,
		true
	);

	// Enqueue jQuery from CDN in the footer
	wp_enqueue_script('jquery');

	// Comment reply script
	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'desklogic_llc_enqueue_scripts');