<?php 
	
function load_stylesheets() {
      
        wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
		wp_enqueue_style('bootstrap');
        wp_register_style('carousel', get_template_directory_uri() . '/css/owl.carousel.min.css', array(), false, 'all');
		wp_enqueue_style('carousel');
        wp_register_style('icons', get_template_directory_uri() . '/css/themify-icons.css', array(), false, 'all');
		wp_enqueue_style('icons');
        wp_register_style('fonts', get_template_directory_uri() . '/css/font-awesome.min.css', array(), false, 'all');
		wp_enqueue_style('fonts');
        wp_register_style('flaticons', get_template_directory_uri() . '/css/flaticon.css', array(), false, 'all');
		wp_enqueue_style('flaticons');
	wp_register_style('stylesheet', get_template_directory_uri() . '/style.css', array(), false, 'all');
		wp_enqueue_style('stylesheet');
}
add_action('wp_enqueue_scripts', 'load_stylesheets');

function loadjs() {
        wp_register_script('customjs', get_template_directory_uri() . '/js/main.js', '', false, true);
        	wp_enqueue_script('customjs');
        wp_register_script('bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', '', false, true);
        	wp_enqueue_script('bootstrapjs');
	wp_register_script('jquery', get_template_directory_uri() . 'js/jquery.js', '', false, true);
        	wp_enqueue_script('jquery');
}
add_action('wp_enqueue_scripts', 'loadjs');

