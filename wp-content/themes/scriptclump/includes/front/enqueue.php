<?php
function scb_enqueue(){
	// Registering the stylesheet
	wp_register_style('scb_bootstrap', get_template_directory_uri(). '/assets/vendor/bootstrap/css/bootstrap.min.css');
	wp_register_style('scb_main', get_template_directory_uri(). '/assets/css/main.css');
	// Loading the stylesheet
	wp_enqueue_style('scb_bootstrap');
	wp_enqueue_style('scb_main');

	
	// Registering the scripts
	wp_register_script('scb_bootstrap', get_template_directory_uri(). '/assets/bootstrap/js/bootstrap.bundle.min.js', false, array(), true);
	// Loading the scripts
	wp_enqueue_script('jquery');
	wp_enqueue_script('scb_bootstrap');

}