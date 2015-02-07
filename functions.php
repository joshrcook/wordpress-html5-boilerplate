<?php

function agile5_enqueue_scripts_styles() {
	
	wp_deregister_script('jquery');
	
	wp_enqueue_style('normalize', '//cdnjs.cloudflare.com/ajax/libs/normalize/3.0.2/normalize.min.css');
	wp_enqueue_style('bootstrap', '//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.2/css/bootstrap.min.css', array('normalize'));
	wp_enqueue_style('style', get_stylesheet_uri(), array('bootstrap', 'normalize'));
	
	wp_enqueue_script('modernizr', '//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js');
	wp_enqueue_script('browser-update', get_template_directory_uri() . '/js/browser-update.js');
	
	wp_enqueue_script('google-analytics', get_template_directory_uri() . '/js/google-analytics.js', array(), '1.0', true);
	wp_enqueue_script('plugins', get_template_directory_uri() . '/js/plugins.js', array(), '1.0', true);
	wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array('plugins'), '1.0', true);
	
}

add_action('wp_enqueue_scripts', 'agile5_enqueue_scripts_styles');